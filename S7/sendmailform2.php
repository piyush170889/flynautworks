<?php
   	function sendEmail($subject, $body, $orderId) {
		require 'phpmailer/PHPMailerAutoload.php';
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl"; // does tls works with port 25
		$mail->Host = 'smtp.gmail.com'; // is this the correct 
		$mail->Port = 465;
		$mail->Username = "piyushpradhan007@gmail.com";
		$mail->Password = "deadfishalive@1990";
		$mail->SetFrom("piyushpradhan007@gmail.com");
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->IsHTML(true);
		$mail->AddAddress('piyushpradhan@hotmail.com');
		/*$mail->AddAddress('dojodigest@gmail.com');*/
		
		if(!$mail->Send()) {
			echo $mail->ErrorInfo;
			echo "<script>alert('Error Occured sending the enquiry. Please try again')</script>";			
			echo "<script>document.location='placeorder.html'</script>";
		} else {
			echo "<script>document.location='thankyou_campaign.php?orderid=$orderId'</script>";			
		}
	}	
?>
	
	
	
	
	