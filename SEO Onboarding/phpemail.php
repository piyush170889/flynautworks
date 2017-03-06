<?php
	require 'sendmail.php';
	$subject = "SEO - Onboarding";
	$field1= $_GET['field1'];
	$field2= $_GET['field2'];
	$field3= $_GET['field3'];
	$field4= $_GET['field4'];
	$field5= $_GET['field5'];
	$field6= $_GET['field6'];
	$field7= $_GET['field7'];
	$field8= $_GET['field8'];
	$field9= $_GET['field9'];
	$field10= $_GET['field10'];
	$field11= $_GET['field11'];
	$field12= $_GET['field12'];
	$field13= $_GET['field13'];
	$field14= $_GET['field14'];
	$field15= $_GET['field15'];
	$field16= $_GET['field16'];
	$field17= $_GET['field17'];
	$field18= $_GET['field18'];
	$field19= $_GET['field19'];
	$field20= $_GET['field20'];
	$field21= $_GET['field21'];
	$field22= $_GET['field22'];
	$field23= $_GET['field23'];
	$field24= $_GET['field24'];
	$field25= $_GET['field25'];
	$field26= $_GET['field26'];
	$field27= $_GET['field27'];
	$field28= $_GET['field28'];
	$field29= $_GET['field29'];
	$field30= $_GET['field30'];
	$field31= $_GET['field31'];
	$field32= $_GET['field32'];
	$field33= $_GET['field33'];
	$field34= $_GET['field34'];
	$field35= $_GET['field35'];
	$field36= $_GET['field36'];
	$refererUrl=$_SERVER['HTTP_REFERER'];
	
	
	
	
	$body = "<html>
	<head>
	<style>
	.tablecss .label
	{background-color:#b5b6be;text-align:left;margin:0;padding:0.5em 0.9em;font-weight:bold;} 
	.tablecss .labelvalue{margin:0;padding:0.5em;}
	.tablecss {border:5px solid grey;margin:0;padding:0;border-collapse: collapse;font-size:14px;font-family:Calibri;}
	</style>
	</head>
	<body>
	<table border=1 class=\"tablecss\">
	<tr>
	<td class=\"label\">What other marketing channels do you currently use – online and offline?</td>
	<td class=\"labelvalue\">".$field1."</td>

	</tr>
	<tr>
	<td class=\"label\">Are you currently engaged with any other vendors for any other Internet marketing services (email, social, PPC, content marketing, etc.)?</td>
	<td class=\"labelvalue\">".$field2."</td>
	
	</tr>
	<tr>
	<td class=\"label\">Are you currently performing any Internet marketing in-house? Please provide details.</td>
	<td class=\"labelvalue\">".$field3."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What are some of your top competitors?</td>
	<td class=\"labelvalue\">".$field4."</td>
	
	</tr>
	<tr>
	<td class=\"label\">Who are your target audiences or buyer personas?</td>
	<td class=\"labelvalue\">".$field5."</td>

	</tr>
	<tr>
	<td class=\"label\">How does your sales cycle work?</td>
	<td class=\"labelvalue\">".$field6."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What are your overall business goals in the coming year? What are you doing to reach them?</td>
	<td class=\"labelvalue\">".$field7."</td>
	
	</tr>
	<tr>
	<td class=\"label\">How will you be judging the success of the partnership with MWI? What specific metrics will you use to define success?
(e.g.- we’d like to see organic conversions rise X% over the next 6-12 months)(e.g. – we’d like to see X% growth in visits to the website…)</td>
	<td class=\"labelvalue\">".$field8."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What are your expectations for how the MWI partnership will impact the website over the next 3 months, 6 months, 12 months?</td>
	<td class=\"labelvalue\">".$field9."</td>
	
	</tr>
	<tr>
	<td class=\"label\">How do you measure objectives (i.e. KPIs?)</td>
	<td class=\"labelvalue\">".$field10."</td>

	</tr>
	
	<tr>
	<td class=\"label\">Please include micro measurements too (e.g. download whitepaper, subscribe to email list, etc.)</td>
	<td class=\"labelvalue\">".$field11."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What have been your biggest hurdles in marketing?</td>
	<td class=\"labelvalue\">".$field12."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What’s your brand’s unique story?</td>
	<td class=\"labelvalue\">".$field13."</td>
	
	</tr>
	<tr>
	<td class=\"label\">How are you different from your competitors?</td>
	<td class=\"labelvalue\">".$field14."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What keywords would prospects use to find your website? Please attach a list if you have one already.</td>
	<td class=\"labelvalue\">".$field15."</td>
	
	
	</tr>
	<tr>
	<td class=\"label\">What verticals or markets are your customers in?</td>
	<td class=\"labelvalue\">".$field16."</td>

	</tr>
	<tr>
	<td class=\"label\">What are the biggest selling points for your services?</td>
	<td class=\"labelvalue\">".$field17."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What non-geographic markets do you serve? Which do you plan to serve and when?</td>
	<td class=\"labelvalue\">".$field18."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What geographic markets do you serve? Which do you plan to serve and when?</td>
	<td class=\"labelvalue\">".$field19."</td>
	
	</tr>
	<tr>
	<td class=\"label\">How many sales/leads do you get on average per day, week, month?</td>
	<td class=\"labelvalue\">".$field20."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What is your monthly new gross revenue from online sales?</td>
	<td class=\"labelvalue\">".$field21."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What is your current cost per lead? Cost per sale?</td>
	<td class=\"labelvalue\">".$field22."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What is the average size of a sale?</td>
	<td class=\"labelvalue\">".$field23."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What is the sales closing rate with online leads?</td>
	<td class=\"labelvalue\">".$field24."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What is the average lifetime value of a customer?</td>
	<td class=\"labelvalue\">".$field25."</td>
	
	</tr>
	<tr>
	<td class=\"label\">What is your retention rate?</td>
	<td class=\"labelvalue\">".$field26."</td>
	
	</tr>
	<tr>
	<td class=\"label\">Why do people discontinue using your service?</td>
	<td class=\"labelvalue\">".$field27."</td>
	
	</tr>
	<tr>
	<td class=\"label\">Are there any seasonality trends we should know of?</td>
	<td class=\"labelvalue\">".$field28."</td>
	
	</tr>
	
	<tr>
	<td class=\"label\">Are you planning to offer any specials/promotions within the next 12 months?</td>
	<td class=\"labelvalue\">".$field29."</td>
	
	</tr>
	
	<tr>
	<td class=\"label\">Do you have a content team to create content?</td>
	<td class=\"labelvalue\">".$field30."</td>
	
	</tr>
	<tr>
	<td class=\"label\">31.What is your process for approving and publishing content?31.What is your process for approving and publishing content?</td>
	<td class=\"labelvalue\">".$field31."</td>
	
	</tr>
	<tr>
	<td class=\"label\">33.Can you grant full access at the account level in Google Analytics to [MWI email address]?</td>
	<td class=\"labelvalue\">".$field32."</td>
	
	</tr>
	<tr>
	<td class=\"label\">Can you grant full access to your Google Search Console account to [MWI email address]?</td>
	<td class=\"labelvalue\">".$field33."</td>
	
	</tr>
	<tr>
	<td class=\"label\">Can you grant full access to your Google AdWords account to [MWI email address]?</td>
	<td class=\"labelvalue\">".$field34."</td>
	
	</tr>
	<tr>
	<td class=\"label\">Can you grant full access to your Bing Webmaster Tools account to [MWI email address]?</td>
	<td class=\"labelvalue\">".$field35."</td>
	</tr>
	
	</table>
	</body>
	</html>";

	sendEmail($subject, $body,$refererUrl);
?> 