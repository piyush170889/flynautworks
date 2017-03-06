<?php
   	function sendEmail($subject, $body, $toAddr, $refererUrl,$acct_num) {
		require 'phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl"; // does tls works with port 25
		$mail->Host = 'smtp.gmail.com'; // is this the correct 
		$mail->Port = 465;
		$mail->Username = "dojoworks.flynaut@gmail.com";
		$mail->Password = "dojomarketing@1";
		$mail->SetFrom("dojoworks.flynaut@gmail.com");
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->IsHTML(true);
		$mail->AddAddress('dojoworks.flynaut@gmail.com');
		//$mail->AddAddress('dojodigest@gmail.com');
		
		if(!$mail->Send()) {
			//$mail->ErrorInfo;
			showErrorAndRedirect($refererUrl);
		} else {                        
			sendThankYouEmail($toAddr, $refererUrl, $acct_num);
			//echo "<script>window.location.href='http://repleteinc.com/'</script>";
		}
	}
	
	function sendThankYouEmail($toAddr, $refererUrl, $acct_num) {
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl"; //tls
		$mail->Host = 'smtp.gmail.com'; // smtp mail SMTP details
		$mail->Port = 465;
		$mail->Username = "dojoworks.flynaut@gmail.com";
		$mail->Password = "dojomarketing@1";
		$mail->SetFrom("dojoworks.flynaut@gmail.com");
		$mail->Subject = 'Thank you for contacting DOJO Marketing';
		$mail->Body    = 'Thank you for getting in touch. Your message has been received and will be processed as soon as possible. Your Account number is: '.$acct_num;
		$mail->IsHTML(true);
		$mail->AddAddress($toAddr);
		
		if(!$mail->Send()) {
			//$mail->ErrorInfo;
			showErrorAndRedirect($refererUrl);
		} else {
            /*echo "<script>alert('Thank You for contacting us. Your application is submitted successfully. We will get back to you. Your account number has been mailed to you');</script>";*/
			//echo "<script type='text/javascript'>window.location='$refererUrl';</script>";
			echo "<script type='text/javascript'>document.location='thankyou.php?acctid=$acct_num'</script>";
        }
	}
	
	function showErrorAndRedirect($refererUrl) {
		echo "<script>alert('Error Occured sending the mail. Please check your mail address and try again')</script>";
		echo "<script type='text/javascript'>window.location='$refererUrl';</script>";
	}
	
?>
	
	
	
	
	