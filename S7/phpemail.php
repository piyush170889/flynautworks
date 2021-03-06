<?php
	require 'config.php';
	require 'sendmail.php';
	require 'helperclass.php';
	$subject = "S7 Client Intake Form";
	$ownername = $_POST['ownername'];
	$owneremail = $_POST['owneremail'];
	$ownernumber=$_POST['ownernumber'];
	$schoolname=$_POST['schoolname'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zipcode=$_POST['zipcode'];
	$streetaddress=$_POST['streetaddress'];
	$schoolweblink=$_POST['schoolweblink'];
	$programofferedasarray=$_POST['programoffered'];
	$facebooklink=$_POST['facebooklink'];
	$otherfblinkasarray=$_POST['otherfblink'];
	$schoolmanager=$_POST['schoolmanager'];
	$manageremail=$_POST['manageremail'];
	$managernumber=$_POST['managernumber'];
	$techmanager=$_POST['techmanager'];
	$techmanageremail=$_POST['techmanageremail'];
	$techmanagernumber=$_POST['techmanagernumber'];
	$companybio=$_POST['companybio'];
	$specialNotes=$_POST['specialnotes'];
	$imagedata=$_POST['images'];
	$refererUrl=$_SERVER['HTTP_REFERER'];
	$programoffered="";
	$otherfblink="";
	$sizeOfProgramsOfferedasarray=sizeof($programofferedasarray)-1;
	$sizeOfotherfblinkasarray=sizeof($otherfblinkasarray)-1;
	$leademail="";
	$leadnumber="";
	$upload_path="Uploads/";	//TODO: Move this value to configurations
	$client_directory_path=$upload_path.str_replace(" ", "_",$ownername)."_".$ownernumber."/";
		
	/*SET Lead Mails*/
	if (isset($_POST['leademailowner'])) {
		$leademail = $owneremail;
	} 
		
	if (isset($_POST['leadmailmanager'])) {
		if (!empty($leademail)) {
			$leademail=$leademail.",";
		}
		$leademail=$leademail.$manageremail;
	}

	if (isset($_POST['leadmailother']) && !empty($_POST['s7otheremailid'])) {
		if (!empty($leademail)) {
			$leademail=$leademail.",";
		}
		$leademail=$leademail.$_POST['s7otheremailid'];
	}
	
		
	//Set Lead Numbers
	if (isset($_POST['leadnumberowner'])) {
		$leadnumber = $ownernumber;
	} 
		
	if (isset($_POST['leadnumbermanager'])) {
		if (!empty($leadnumber)) {
			$leadnumber=$leadnumber.",";
		}
		$leadnumber=$leadnumber.$managernumber;
	}

	if (isset($_POST['leadnumberother']) && !empty($_POST['phonecallothertxt'])) {
		if (!empty($leadnumber)) {
			$leadnumber=$leadnumber.",";
		}
		$leadnumber=$leadnumber.$_POST['phonecallothertxt'];
	}
	
	foreach ($programofferedasarray as $p => $n) {
		if ($p==$sizeOfProgramsOfferedasarray) {
			$programoffered=$programoffered.$n;
		} else {
			$programoffered=$programoffered.$n.",";
		}
	}
	
	foreach ($otherfblinkasarray as $p => $n) {
		if ($p==$sizeOfotherfblinkasarray) {
			$otherfblink=$otherfblink.$n;
		} else {
			$otherfblink=$otherfblink.$n.",";
		}
	}
	
	
	function upload($client_directory_path, $name) {
		$error=array();
		$extension=array("jpeg","jpg","png","gif");
		$newFileName="";
		$uploaded_files="";
		
		foreach($_FILES[$name]["tmp_name"] as $key=>$tmp_name)
		{
			$file_name=$_FILES[$name]["name"][$key];
			$file_tmp=$_FILES[$name]["tmp_name"][$key];
			
			$ext=pathinfo($file_name,PATHINFO_EXTENSION);
			if(in_array($ext,$extension))
			{
				if (!is_dir($client_directory_path)) {
					mkdir($client_directory_path);
				}
				if(!file_exists($client_directory_path.$file_name))
				{
					$newFileName=$file_name;
					move_uploaded_file($file_tmp=$_FILES[$name]["tmp_name"][$key],$client_directory_path.$newFileName);
				}
				else
				{
					$filename=basename($file_name,$ext);
					$newFileName=$filename."_".time().".".$ext;
					move_uploaded_file($file_tmp=$_FILES[$name]["tmp_name"][$key],$client_directory_path.$newFileName);
				}
				if (empty($uploaded_files)) {
					$uploaded_files=$client_directory_path.$newFileName;
				} else {
					$uploaded_files=$uploaded_files.",".$client_directory_path.$newFileName;
				}
			}
			else
			{
				array_push($error,"$file_name, ");
			}
		}
		
		return $uploaded_files;

	}
	
	function uploadBase64EncodedImages($client_directory_path,$imagedata) {
		$uploaded_files="";
		$extension=array("jpeg","jpg","png","gif");
		$explodeSpecialChar="$";
		$images_array=explode($explodeSpecialChar,$imagedata);
		$no_of_images=count($images_array);
		
		foreach ($images_array as $image_no => $image) {
			list($type, $data) = explode(';', $image);
			list(, $data)      = explode(',', $data);
			$data = base64_decode($data);
			list(,$ext)=explode('/',$type);
			if(in_array($ext,$extension))
			{
				$newFileName=$client_directory_path."image".$image_no.'.'.$ext;
				if (!is_dir($client_directory_path)) {
					mkdir($client_directory_path);
				}
								
				if(!file_exists($newFileName))
				{
					file_put_contents($newFileName, $data);
				}
				else {
					$newFileName=$client_directory_path."image".$image_no."_".time().'.'.$ext;
					file_put_contents($newFileName, $data);
				}				
				
				if (empty($uploaded_files)) {
					$uploaded_files=$newFileName;
				} else {
					$uploaded_files=$uploaded_files.",".$newFileName;
				}
				
			}else
			{
				//array_push($error,"Inavlid File");
			}
		}
		
		return $uploaded_files;
			
	}

	try {
		$logo_url=upload($client_directory_path, "logo");
		
		$uploaded_images_urls=uploadBase64EncodedImages($client_directory_path, $imagedata);
		
		$acct_num=insertUserDetails($ownername,$owneremail,$ownernumber,$schoolname,$schoolweblink,$programoffered,$facebooklink,$otherfblink,$schoolmanager,
					$manageremail,$managernumber,$techmanager,$techmanageremail,$techmanagernumber,$leademail,$leadnumber,$logo_url,$uploaded_images_urls,
					$companybio,$specialNotes,$city,$state,$zipcode,$streetaddress);					//Insert User details in db
		
		$body=createEmailBody($ownername,$owneremail,$ownernumber,$schoolname,$schoolweblink,$programoffered,$facebooklink,$otherfblink,$schoolmanager,
					$manageremail,$managernumber,$techmanager,$techmanageremail,$techmanagernumber,$leademail,$leadnumber,$acct_num,$companybio,$specialNotes,$city,$state,$zipcode,$streetaddress);		// Create Email body to send
	
		sendEmail($subject, $body, $owneremail,$refererUrl,$acct_num);		//send email
		
	} catch(PDOException $e) {
		//echo "<br/>".$e;
		echo "<script type='text/javascript'>alert('Record could not be saved at the moment');</script>";
		echo "<script type='text/javascript'>window.location='$refererUrl';</script>";
	}
?> 