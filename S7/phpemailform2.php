<?php
	require 'helperclass.php';
	require 'sendmailform2.php';
	$subject = "Campaign Order Form";
	$clientname = $_GET['clientname'];
	$accountnumber=$_GET['accoutnno'];
	$contactpreference=$_GET['contactpreference'];
	$schoolprogramname=$_GET['schoolprogramname'];
	$namecampaign=$_GET['namecampaign'];
	$whatoffer=$_GET['whatoffer'];
	$regularprice=$_GET['regularprice'];
	$campaignavatar=$_GET['campaignavatar'];
	$newstudenttype=$_GET['newstudenttype'];
	$marketradius=$_GET['marketradius'];
	$campaigntemplate=$_GET['campaigntemplate'];
	$campaigntemplateother=$_GET['campaigntemplateother'];
	$buyingtemplate=$_GET['buyingtemplate'];
	$campaignstartdate=$_GET['campaignstartdate'];
	$campaignenddate=$_GET['campaignenddate'];
	$paymentprocessor=$_GET['paymentprocessor'];
	$campaignbudget=$_GET['campaignbudget'];
	$domainname=$_GET['domainname'];
	$trackingphonenumber=$_GET['trackingphonenumber'];
	$callrecordings=$_GET['callrecordings'];
	$othercampaignnotes=$_GET['othercampaignnotes'];
	$refererUrl=$_SERVER['HTTP_REFERER'];
	
	//Set alert of purchases
	$alertofpurchase='';
	if (isset($_GET['purchasealertowner'])) {
		$ownerEmailSql="select OWNER_MAIL from user_dtls where ACCT_NUM='$accountnumber'";
		$owneremailrow=getSingleRow($ownerEmailSql, $refererUrl);
		$owneremail=$owneremailrow['OWNER_MAIL'];
		$alertofpurchase = $owneremail;
	} 
		
	if (isset($_GET['purchasealertmanager'])) {
		$manageremailSql="select MANAGER_EMAIL from user_dtls where ACCT_NUM='$accountnumber'";
		$manageremailRow=getSingleRow($manageremailSql, $refererUrl);
		$manageremail=$manageremailRow['MANAGER_EMAIL'];
		if (!empty($alertofpurchase)) {
			$alertofpurchase=$alertofpurchase.",";
		}
		$alertofpurchase=$alertofpurchase.$manageremail;
	}

	if (isset($_GET['purchasealertother']) && !empty($_GET['otheremailid'])) {
		if (!empty($alertofpurchase)) {
			$alertofpurchase=$alertofpurchase.",";
		}
		$alertofpurchase=$alertofpurchase.$_GET['otheremailid'];
	}
	
	$orderid=generateOrderId($clientname);	//Generate Order Id
	
	insertOrderDetails($accountnumber, $orderid, $alertofpurchase);	//Insert Alert Of Purchase Emails and order id for Account no
	
	$body = "<html>
	<head>
	<style>
	.tablecss .label
	{background-color:#b5b6be;text-align:right;margin:0;padding:0.5em 0.9em;font-weight:bold;} 
	.tablecss .labelvalue{margin:0;padding:0.5em;}
	.tablecss {border:5px solid grey;margin:0;padding:0;border-collapse: collapse;font-size:14px;font-family:Calibri;}
	</style>
	</head>
	<body>
	<table border=1 class=\"tablecss\">
	<tr>
	<td class=\"label\">Order Name</td>
	<td class=\"labelvalue\">".$orderid."</td>
	</tr>
	
	<tr>
	<td class=\"label\">Client Name</td>
	<td class=\"labelvalue\">".$clientname."</td>
	</tr>
	
	<tr>
	<td class=\"label\">Account Number</td>
	<td class=\"labelvalue\">".$accountnumber."</td>
	</tr>
	
	<tr>
	<td class=\"label\">Client Contact Preference (email, text, phone)</td>
	<td class=\"labelvalue\">".$contactpreference."</td>
	</tr>
	<tr>
	<td class=\"label\">School and Program Name</td>
	<td class=\"labelvalue\">".$schoolprogramname."</td>
	</tr>
	<tr>
	<td class=\"label\">Name of Campaign</td>
	<td class=\"labelvalue\">".$namecampaign."</td>
	</tr>
	<tr>
	<td class=\"label\">What's The Offer (Example $9.99 for 5 lessons + Free Uniform)</td>
	<td class=\"labelvalue\">".$whatoffer."</td>
	</tr>
	<tr>
	<td class=\"label\">Regular Price of The Offer</td>
	<td class=\"labelvalue\">".$regularprice."</td>
	</tr>
	<tr>
	<td class=\"label\">Campaign Avatar (Example - Moms of Pre-Teens or Women Fitness)</td>
	<td class=\"labelvalue\">".$campaignavatar."</td>
	</tr>
	<tr>
	<td class=\"label\">New Student Type (Kids 5 to 7 or Ladies Fitness 22 to 45)</td>
	<td class=\"labelvalue\">".$newstudenttype."</td>
	</tr>
	<tr>
	<td class=\"label\">Campaign Market Radius (How far out do you target?)</td>
	<td class=\"labelvalue\">".$marketradius."</td>
	</tr>
	<tr>
	<td class=\"label\">Campaign Template</td>
	<td class=\"labelvalue\">".$campaigntemplate."</td>
	</tr>
	<tr>
	<td class=\"label\">Campaign Template Other</td>
	<td class=\"labelvalue\">".$campaigntemplateother."</td>
	</tr>
	<tr>
	<td class=\"label\">Are People Buying This Campaign Online?</td>
	<td class=\"labelvalue\">".$buyingtemplate."</td>
	</tr>
	<tr>
	<td class=\"label\">Campaign Start Date</td>
	<td class=\"labelvalue\">".$campaignstartdate."</td>
	</tr>
	<tr>
	<td class=\"label\">Campaign End Date</td>
	<td class=\"labelvalue\">".$campaignenddate."</td>
	</tr>
	<tr>
	<td class=\"label\">Which Payment Processor?</td>
	<td class=\"labelvalue\">".$paymentprocessor."</td>
	</tr>
	<tr>
	<td class=\"label\">Campaign Budget</td>
	<td class=\"labelvalue\">".$campaignbudget."</td>
	</tr>
	<tr>
	<td class=\"label\">Domain Name</td>
	<td class=\"labelvalue\">".$domainname."</td>
	</tr>
	<tr>
	<td class=\"label\">Tracking Phone Number</td>
	<td class=\"labelvalue\">".$trackingphonenumber."</td>
	</tr>
	<tr>
	<td class=\"label\">Who will be alerted of Purchases/Leads? Add all emails</td>
	<td class=\"labelvalue\">".$alertofpurchase."</td>
	</tr>
	<tr>
	<td class=\"label\">Email of persons to receive phone recordings</td>
	<td class=\"labelvalue\">".$callrecordings."</td>
	</tr>
	<tr>
	<td class=\"label\">Other Campaign Notes</td>
	<td class=\"labelvalue\">".$othercampaignnotes."</td>
	</tr>
	</table>
	</body>
	</html>";
	
	sendEmail($subject, $body, $orderid);
	
?> 