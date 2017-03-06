<?php
	require 'config.php';
	require 'sendmail.php';
	require 'helperclass.php';
	$subject = "S7 Client Intake Form";
	$ownername = $_GET['ownername'];
	$owneremail = $_GET['owneremail'];
	$ownernumber=$_GET['ownernumber'];
	$schoolname=$_GET['schoolname'];
	$schoolweblink=$_GET['schoolweblink'];
	$programofferedasarray=$_GET['programoffered'];
	$facebooklink=$_GET['facebooklink'];
	$otherfblinkasarray=$_GET['otherfblink'];
	$schoolmanager=$_GET['schoolmanager'];
	$manageremail=$_GET['manageremail'];
	$managernumber=$_GET['managernumber'];
	$techmanager=$_GET['techmanager'];
	$techmanageremail=$_GET['techmanageremail'];
	$techmanagernumber=$_GET['techmanagernumber'];
	$refererUrl=$_SERVER['HTTP_REFERER'];
	$programoffered="";
	$otherfblink="";
	$sizeOfProgramsOfferedasarray=sizeof($programofferedasarray)-1;
	$sizeOfotherfblinkasarray=sizeof($otherfblinkasarray)-1;
	$leademail="";
	$leadnumber="";

	/*SET Lead Mails*/
	if (isset($_GET['leademailowner'])) {
		$leademail = $owneremail;
	} 
		
	if (isset($_GET['leadmailmanager'])) {
		if (!empty($leademail)) {
			$leademail=$leademail.",";
		}
		$leademail=$leademail.$manageremail;
	}

	if (isset($_GET['leadmailother']) && !empty($_GET['s7otheremailid'])) {
		if (!empty($leademail)) {
			$leademail=$leademail.",";
		}
		$leademail=$leademail.$_GET['s7otheremailid'];
	}
	
		
	//Set Lead Numbers
	if (isset($_GET['leadnumberowner'])) {
		$leadnumber = $ownernumber;
	} 
		
	if (isset($_GET['leadnumbermanager'])) {
		if (!empty($leadnumber)) {
			$leadnumber=$leadnumber.",";
		}
		$leadnumber=$leadnumber.$managernumber;
	}

	if (isset($_GET['leadnumberother']) && !empty($_GET['phonecallothertxt'])) {
		if (!empty($leadnumber)) {
			$leadnumber=$leadnumber.",";
		}
		$leadnumber=$leadnumber.$_GET['phonecallothertxt'];
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
	
	try {		
		$acct_num=insertUserDetails($ownername,$owneremail,$ownernumber,$schoolname,$schoolweblink,$programoffered,$facebooklink,$otherfblink,$schoolmanager,
					$manageremail,$managernumber,$techmanager,$techmanageremail,$techmanagernumber,$leademail,$leadnumber);					//Insert User details in db
		
		$body=createEmailBody($ownername,$owneremail,$ownernumber,$schoolname,$schoolweblink,$programoffered,$facebooklink,$otherfblink,$schoolmanager,
					$manageremail,$managernumber,$techmanager,$techmanageremail,$techmanagernumber,$leademail,$leadnumber,$acct_num);		// Create Email body to send
	
		sendEmail($subject, $body, $owneremail,$refererUrl,$acct_num);		//send email
	} catch(PDOException $e) {
		echo "<br/>".$e;
		echo "<script type='text/javascript'>alert('Record could not be saved at the moment');</script>";
		echo "<script type='text/javascript'>window.location='$refererUrl';</script>";
	}
?> 