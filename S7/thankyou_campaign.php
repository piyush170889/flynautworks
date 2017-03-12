	<!DOCTYPE html>
	<html lang="en">
	<head>

	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Campaign Order Form</title>
		 <!-- Bootstrap Core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style_s7.css" rel="stylesheet">
		<link href="css/checkbox.css" rel="stylesheet">
		<link href="css/responsive_s7.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
		
	</head>
	<body style="overflow-x:hidden;height:100%;width:100%;/*background:url(img/thankyou_campaignbg.jpg);*/background-position:top center;background-size:cover;background-repeat:no-repeat;">
	<div class="container hidden-xs hidden-sm" style="margin:8% 10px 0 10px;">
	<div class="row">
	<div class="col-md-4">
	<img src="img/campaignbg.png" style="
    width: 345px;">
	</div>
	<div class="co-md-8 hidden-xs hidden-sm" style="
    margin-top: 10%;">
	<h1 class="text-center" style="color:#333;font-weight:bold;">Welcome Aboard</h1>
	<h3 class="text-center" style="color:#333;">Thanks for filling out the on-boarding information.</h3>
	<center><a href="#" style="font-size:20px;color:#333">You can set-up a kick off all with Randy via this link</a></center>
	<h4 class="text-center" style="color:#333;">Your Order Id: <?php echo $_GET['orderid']; ?></h4>
	</div>
	</div>
	</div>
	<div class="container hidden-lg hidden-md" style="margin:8% 10px 0 10px;">
	<div class="row">
	<div class="col-md-4" style="padding-left:0;">
	<img src="img/campaignbg.png" style="
    width: 345px;">
	</div>
	<div class="co-md-8" style="
    margin-top: 10%; padding:15px;">
	<h1 class="text-center" style="color:#333;font-weight:bold;">Welcome Aboard</h1>
	<h3 class="text-center" style="color:#333;">Thanks for filling out the on-boarding information.</h3>
	<center><a href="#" style="font-size:20px;color:#333">You can set-up a kick off all with Randy via this link</a></center>
	<h4 class="text-center" style="color:#333;">Your Order Id : <br>
<b>Notice</b>:  Undefined index: orderid in <b>C:\xampp\htdocs\S7\thankyou_campaign.php</b> on line <b>30</b><br>
</h4>
	</div>
	</div>
	</div>
	
	</body>
	</html>