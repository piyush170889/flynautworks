<?php
   	function sendEmail($subject, $body, $refererUrl) {
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
		
		
		if(!$mail->Send()) {
			$mail->ErrorInfo;
			echo "<script>alert('Error Occured sending the enquiry. Please try again')</script>";			
		}
		else {                        
			//sendThankYouEmail($toAddr);
			echo "<script>alert('Your Enquiry has been received. We will get back to you soon!!')</script>";
			echo "<script type='text/javascript'>window.location='$refererUrl';</script>";
		}
	}
	
	/*function sendThankYouEmail($toAddr) {
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com'; // is this the correct 
		$mail->Port = 465;
		$mail->Username = "dojoworks.flynaut@gmail.com";
		$mail->Password = "dojomarketing@1";
		$mail->SetFrom("dojoworks.flynaut@gmail.com");
		$mail->Subject = 'Thank you for contacting SEO On-boarding';
		$mail->Body    = 'Thanks for getting in touch. Your message has been received and will be processed as soon as possible.';
		$mail->IsHTML(true);
		$mail->AddAddress($toAddr);
		
		if(!$mail->Send()) {
			$mail->ErrorInfo;
			echo "<script>alert('Error Occured sending the enquiry. Please try again')</script>";
			
		} else {
                       echo "<script>alert('Thank You for contacting us. Your application is submitted successfully. We will get back to you.');</script>";
                }
	}*/
	
	?>
	
	
	
	
	