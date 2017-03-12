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
		$mail->Username = "piyushpradhan007@gmail.com";
		$mail->Password = "deadfishalive@1990";
		$mail->SetFrom("piyushpradhan007@gmail.com");
		$mail->Subject = $subject;
		$mail->Body = $body;
		$mail->IsHTML(true);
		$mail->AddAddress('piyushpradhan@hotmail.com');
		/*$mail->AddAddress('dojodigest@gmail.com');*/
		
		if(!$mail->Send()) {
			//$mail->ErrorInfo;
			showErrorAndRedirect($refererUrl);
		} else {                        
			sendThankYouEmail($toAddr, $refererUrl, $acct_num);
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
		$mail->Username = "piyushpradhan007@gmail.com";
		$mail->Password = "deadfishalive@1990";
		$mail->SetFrom("piyushpradhan007@gmail.com");
		$mail->Subject = 'Thank you for contacting DOJO Marketing';
		$mail->Body    = '<html lang="en">
<head>
 <style type="text/css">
body {
  margin: 0;
  padding: 0;
  -ms-text-size-adjust: 100%;
  -webkit-text-size-adjust: 100%;
}

table {
  border-spacing: 0;
}

table td {
  border-collapse: collapse;
}

.ExternalClass {
  width: 100%;
}

.ExternalClass,
.ExternalClass p,
.ExternalClass span,
.ExternalClass font,
.ExternalClass td,
.ExternalClass div {
  line-height: 100%;
}

.ReadMsgBody {
  width: 100%;
  background-color: whitemoke;
}

table {
  mso-table-lspace: 0pt;
  mso-table-rspace: 0pt;
}

img {
  -ms-interpolation-mode: bicubic;
}

.yshortcuts a {
  border-bottom: none !important;
}

@media screen and (max-width: 599px) {
  .force-row,
  .container {
    width: 100% !important;
    max-width: 100% !important;
  }
}
@media screen and (max-width: 400px) {
  .container-padding {
    padding-left: 12px !important;
    padding-right: 12px !important;
  }
}
.ios-footer a {
  color: #aaaaaa !important;
  text-decoration: underline;
}
</style>
</head>

<body style="margin:0; padding:0;" bgcolor="whitemoke" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">

<table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="whitesmoke">
  <tr>
    <td align="center" valign="top" bgcolor="whitesmoke" style="background-color: whitesmoke;">

      <br>

      <!-- 600px container (white background) -->
      <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
		<tr>
		<td>
		<center>
		<img src="http://flynautwork.com/logolinkemail/logomarketing.png">
		</center>
		</td>
		</tr>
        <tr>
          <td class="container-padding header" align="center" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;color:#DF4726;padding-left:24px;padding-right:24px">
            Welcome Aboard
          </td>
        </tr>
        <tr>
          <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">
            <br>

<div class="title" align="center" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">Welcome to Dojo Marketing</div>
<br>

<div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">
  Thank you for getting in touch with us. We have received your request. Our team will get back you at the earliest. 
  <br><br>

  This email contains your auto generated <b>Account Number</b>. Please do not share your account number with anyone. This account number will be used further to place an order
  <br><br>
  Your account number is: '.$acct_num.'
</div>

          </td>
        </tr>
       
      </table>
<!--/600px container -->


    </td>
  </tr>
</table>
<!--/100% background wrapper-->

</body>
</html>';
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
	
	
	
	
	