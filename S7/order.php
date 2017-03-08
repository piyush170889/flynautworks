	<!DOCTYPE html>
	<html lang="en">
	<head>

	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">

		<title>Campaign Order Form - Done With Client</title>
		 <!-- Bootstrap Core CSS -->
		 <link rel="stylesheet" href="css/jqueryui.css">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style_campaign.css" rel="stylesheet">
		<link href="css/responsive_campaign.css" rel="stylesheet">
		<link href="css/checkbox.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
		
		<style>
	input[type="number"]::-webkit-outer-spin-button,
	input[type="number"]::-webkit-inner-spin-button {
		-webkit-appearance: none;
		margin: 0;
	}
	input[type="number"] {
		-moz-appearance: textfield;
	} 	
	</style>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<!--formValidation.min.js-->
	<script src="https://cdn.jsdelivr.net/jquery.formvalidation/0.6.1/js/formValidation.min.js"></script>
	<script src="https://cdn.jsdelivr.net/g/jquery.formvalidation@0.6.1(js/formValidation.min.js+js/framework/bootstrap.min.js)"></script>
	<!--/formValidation.min.js-->
	<script>
  $( function() {
    $( "#datepicker" ).datepicker();
	$( "#datepicker1" ).datepicker();
  } );
  </script>
  
  <script>
$(document).ready(function() {
    $('#myForm')
	.formValidation({
        framework: 'bootstrap',
		resetForm: 'true',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-info',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            accoutnno: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Account Number is required.'
                    }
                    
            }
			},
            clientname: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Client Name is requied.'
                    }
                }
            },
            contactpreference: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Client Contact Preference is required.'
                    }
                }
            },
            schoolprogramname: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'School and Program Name is required.'
                    }
                }
            },
            namecampaign: {
				row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Campaign Name is required.'
                    }
                    
                }
            },
            whatoffer: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Offer is a required.'
                    }
                   
                }
            },
           
			regularprice: {
				row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Price is required.'
                    }
                    
                }
            },

			campaignavatar: {
                row:'.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Campaign Avatar is required.'
                    }
                }
            },
        
			newstudenttype: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'New Student Type is required.'
                    }
                }
            },
			marketradius: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Campaign Market Radius is required.'
                    }
                }
            },
			
			buyingtemplate: {
                row: '.col-md-12',
                validators: {
                    notEmpty: {
                        message: 'Please Select One Option.'
                    }
                }
            },

			campaignstartdate: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Campaign Start Date is required.'
                    }
                }
            },
			campaignenddate: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Campaign End Date is required.'
                    }
                }
            },
			
			paymentprocessor: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Payment Processor is required.'
                    }
                }
            },
			
			campaignbudget: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Campaign Budget is required.'
                    }
                }
            },
			
			domainname: {
                row: '.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Domain Name is required.'
                    }
                }
            },
			

			trackingphonenumber: {
                row:'.col-md-6',
                validators: {
                    notEmpty: {
                        message: 'Tracking Phone Number is required.'
                    }
                }
            },

			//purchasealertowner: {
              //  row:'.col-md-2',
                //validators: {
                  //  notEmpty: {
                    //    message: 'Please Select 1 Option'
                    //}
                //}
            //},
			callrecordings: {
                row:'.col-md-12',
                validators: {
                    notEmpty: {
                        message: 'Email of persons to receive phone recordings is required.'
                    }
                }
            },
			othercampaignnotes: {
                row:'.col-md-12',
                validators: {
                    notEmpty: {
                        message: 'Other Campaign Notes is required.'
                    }
                }
            },
    }
	})
	.on('err.field.fv', function(e, data) {
            // $(e.target)  --> The field element
            // data.fv      --> The FormValidation instance
            // data.field   --> The field name
            // data.element --> The field element

            data.fv.disableSubmitButtons(false);
        })
        .on('success.field.fv', function(e, data) {
            // e, data parameters are the same as in err.field.fv event handler
            // Despite that the field is valid, by default, the submit button will be disabled if all the following conditions meet
            // - The submit button is clicked
            // - The form is invalid
            data.fv.disableSubmitButtons(false);
        });
});
</script>
  
	</head>
	<body style="background:url(img/bg.jpg);overflow-x:hidden;">
	<div class="container-fluid">
	<div class="row">
	<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
	<img src="img/logo.png" class="img-responsive">
	</div>
	<div class="col-md-6 col-xs-6 col-lg-6 col-sm-6">
	<img src="img/logo2.png" class="img-responsive" style="width:360px;float:right;">
	</div>
	</div>
	<div class="row">
	<div class="col-md-12">
	<h2 class="heading">Campaign Order Form - Done With Client</h2>
	<hr/>
	</div>
	</div>
	<div class="row padding-50">
	<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6">
	<span style="color:red;font-family: 'Muli', sans-serif;">* Required</span>
	</div>
	<div class="col-md-6 col-sm-12 col-xs-12 col-lg-6 text-right">
	<h5 style="margin:0;">( To be completed during the intake call )</h5>
	</div>
	</div>
		<div class=" col-lg-12" id="panel">
			<div class="container">
			<form method="get" id="myForm" action="phpemailform2.php" style="padding:0 15px;">
				
				<br/>
				<br/>
				<div class="row" style="padding:0 5px;">
				<div class="group col-md-6 col-lg-6 col-sm-12 col-xs-12 resp-height2">
					<input type="text" name="accoutnno" required value="<?php echo $_GET['acct_num'] ?>">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="left">Account Number <span style="color:red;">*</span></label>
				</div>
				
				<div class="group col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<input type="text" name="clientname" required value="<?php echo $_GET['clientname'] ?>">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="left">Client Name <span style="color:red;">*</span></label>
				</div>

				<div class="group col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<input type="text" name="contactpreference" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="left resp-text">Client Contact Preference (email, text, phone)<span style="color:red;">*</span></label>
				</div>
				<div class="group col-md-6 col-lg-6 col-sm-12 col-xs-12">
					<input type="text" name="schoolprogramname" required  value="<?php echo $_GET['schoolname'].' - '.$_GET['programname'] ?>">
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="left">School and Program Name<span style="color:red;">*</span></label>
				</div>
				</div>
				<!--<div class="group resp-height">
					<input type="text" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>School Website Link <span style="color:red;">*</span></label>
				</div>
				<div class="group">
					<input type="text" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="resp-label">Enter All Your Programs Offered at the School (example: kids martial arts, adult fitness, kickboxing, afterschool...) <span style="color:red;">*</span></label>
				</div>
				<div class="group resp-height">
					<input type="text" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label>Main Facebook Page Link <span style="color:red;">*</span></label>
				</div>
				<div class="group">
					<input type="text" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="resp-label">Other Facebook Page Links (after-school, summer camp, etc..) One per line <span style="color:red;">*</span></label>
				</div>-->
				
				<div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 resp-height" style="">
				<label style="font-size:20px;">Campaign Full Details (Include Name of Campaign, cost, what's included and details)</label>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="row" style="padding: 0 5px;">
				<div class="group col-md-6 resp-height2">
					<input type="text" name="namecampaign" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" left">Name of Campaign<span style="color:red;">*</span></label>
				</div>
				<div class="group col-md-6 resp-height2">
				
					<input type="text" name="whatoffer" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="resp-text left">What's The Offer (Example $9.99 for 5 lessons + Free Uniform)<span style="color:red;">*</span></label>
				</div>
				
				<div class="group col-md-6 bottom-80">
					<input type="text" name="regularprice" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" left">Regular Price of The Offer<span style="color:red;">*</span></label>
				</div>
				<div class="group col-md-6 bottom-80">
					<input type="text" name="campaignavatar" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="top-50 left">Campaign Avatar (Example - Moms of Pre-Teens or Women Fitness) <span style="color:red;">*</span></label>
				</div>
				<div class="group col-md-6 bottom-80">
					<input type="text" name="newstudenttype" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" top-50 left">New Student Type (Kids 5 to 7 or Ladies Fitness 22 to 45)<span style="color:red;">*</span></label>
				</div>
				<div class="group col-md-6">
					<input type="text" name="marketradius" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="top-50 left">Campaign Market Radius (How far out do you target? | 1 Mile = 15 Minutes)<span style="color:red;">*</span></label>
				</div>
				</div>
				<div class="row padding-15">
				<h4>Campaign Template</h4>
				 <div class="col-md-12 ">
					<label class="control control--radio">Special Offer (Buy-Online)
					  <input type="radio" name="campaigntemplate" checked value="Special Offer (Buy-Online)" />
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Download Coupon
					  <input type="radio" name="campaigntemplate" value="Download Coupon"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Call-In Offer
					  <input type="radio" name="campaigntemplate" value="Call-In Offer"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Kids Challenge
					  <input type="radio" name="campaigntemplate" value="Kids Challenge"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Parents Night Out
					  <input type="radio" name="campaigntemplate" value="Parents Night Out"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Summer Camp
					  <input type="radio" name="campaigntemplate" value="Summer Camp"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Afterschool
					  <input type="radio" name="campaigntemplate" value="Afterschool"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Special Event
					  <input type="radio" name="campaigntemplate" value="Special Event"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Adult Fitness
					  <input type="radio" name="campaigntemplate" value="Adult Fitness"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Adult Challenge
					  <input type="radio" name="campaigntemplate" value="Adult Challenge"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio" >Other
					  <input type="radio" name="campaigntemplate" value="Other"/>
					  <div class="control__indicator"></div>
					</label>
					<br/>
					<div id="otherAnswer" style="display:none;" class="group col-md-12">
					<input  type="text" name="campaigntemplateother" id="campaigntemplateother1" >
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="left">Please specify</label>
				</div>
				<script>
					$("input[name='campaigntemplate']").change(function(){
							
					if($(this).val()=="Other")
					{
						$("#otherAnswer").show();
					}
					else
					{
						$("#campaigntemplateother1").val("");
						$("#otherAnswer").hide(); 
					}
						
					});
				</script>
				</div>
				</div>
				
				<div class="row padding-15 bottom-50">
				<h4>Are People Buying This Campaign Online? <span style="color:red;">*</span></h4>
				<div class="col-md-12 ">
					<label class="control control--radio">Special Offer (Buy-Online)
					  <input type="radio" name="buyingtemplate" value="Special Offer (Buy-Online)"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Download Coupon
					  <input type="radio" name="buyingtemplate" value="Download Coupon"/>
					  <div class="control__indicator"></div>
					</label>
					<label class="control control--radio">Other
					  <input type="radio" name="buyingtemplate" value="Other"/>
					  <div class="control__indicator"></div>
					</label>
					<br/>
					<div id="otherAnswercampaign" style="display:none;" class="group col-md-12">
					<input  type="text" name="arepeoplebuyingcampaign" id="arepeoplebuyingcampaign1" />
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" left">Please specify</label>
				</div>
				<script>
					$("input[name='buyingtemplate']").change(function(){
							
					if($(this).val()=="Other")
					{
						$("#otherAnswercampaign").show();
					}
					else
					{
						$("#arepeoplebuyingcampaign1").val("");
						   $("#otherAnswercampaign").hide(); 
					}
						
					});
				</script>
				</div>
				<br/>
				<div class="row" style="padding:0 15px">
				<div class="group col-md-6 ">
					<input type="text" name="campaignstartdate" id="datepicker" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" left">Campaign Start Date <span style="color:red;">*</span></label>
				</div>
				<div class="group col-md-6">
					<input type="text" name="campaignenddate" id="datepicker1" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" left">Campaign End Date<span style="color:red;">*</span></label>
				</div>
				</div>
				<div class="row" style="padding:0 15px">
				<div class="group col-md-6 ">
					<input type="text" name="paymentprocessor" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" left">Which Payment Processor?</label>
				</div>
				<div class="group col-md-6">
					<input type="text" name="campaignbudget" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" left">Campaign Budget<span style="color:red;">*</span></label>
				</div>
				</div>
				<div class="row">
				<div class="col-md-12 " style="">
				<label style="font-size:24px;">Landing Page Details :</label>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				</div>
				<div class="row">
				<div class="group col-md-6 ">
					<input type="text" name="domainname" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class=" left">Domain Name<span style="color:red;">*</span></label>
				</div>
				<div class="group col-md-6">
					<input type="number" name="trackingphonenumber" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label  class=" left">Tracking Phone Number</label>
				</div>
				</div>
				<div class="col-md-12 resp-height2" style="">
				<label style="font-size:24px;">Leads Reporting :</label>
				</div>
				<br/>
				<br/>
				<br/>
				<br/>
				<div class="row">
				<div class="group col-md-12 bottom-50" style="padding:0;">
					<!--<input type="text" name="alertofpurchase" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label class="resp-text5 left">Who will be alerted of Purchases/Leads? Add all emails <span style="color:red;">*</span></label>-->
					<div class="col-md-4 resp-mag-bottom">
					<h4>Who will be alerted of Purchases/Leads? Add all emails <span style="color:red;">*</span>:</h4>
					</div>
					<div class="col-md-2 pure-checkbox">
					
                            <input id="checkbox1" name="purchasealertowner" type="checkbox" >
                            <label for="checkbox1" class="mag-top-30">Owner</label>
                    </div>
					<div class="col-md-2 pure-checkbox">
							<input id="checkbox2" name="purchasealertmanager" type="checkbox" >
                            <label for="checkbox2" class="mag-top-30">Manager</label>
                    </div>
					<div class="col-md-2 pure-checkbox">
							<input id="othercheckbox3" name="purchasealertother" value="othercheckbox" type="checkbox" >
                            <label for="othercheckbox3" class="mag-top-30">Other</label>
                    </div>
					<script>
					
					$("#othercheckbox3").change(function(){
					
							
					if ($(this).is(':checked')) 
					{
					
						$("#otheremailidcheckbox").show();
					}
					else
					{
					
						   $("#otheremailidcheckbox").hide(); 
					}
						
					});
				</script>
					<div id="otheremailidcheckbox" style="display:none;" class="col-md-12">
					<input  type="text" name="otheremailid" >
					<span class="highlight"></span>
					<span class="bar"></span>
					
					</div>
				</div>
				</div>
				<div class="row">
				<div class="group col-md-12">
					<input type="email" name="callrecordings" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label  class="resp-text2 left">Email of persons to receive phone recordings <span style="color:red;">*</span></label>
				</div>
				<div class="group col-md-12">
					<input type="text" name="othercampaignnotes" required>
					<span class="highlight"></span>
					<span class="bar"></span>
					<label  class="left">Other Campaign Notes</label>
				</div>
				<br/>
				</div>
				
				<button type="submit" class="btn btn-primary btn-lg submit-btn" style="float:right;border-radius:0;padding:10px 25px;width:100%;">Submit</button>
				 <!--<button type="submit" name="submitButton" class="btn btn-primary btn-lg" style="float:right;border-radius:0;padding:10px 25px;width:100%;">Submit</button>
				 <input type="submit" name="submitButton" value="Submit" class="btn btn-primary btn-lg" style="float:right;border-radius:0;padding:10px 25px">-->
				
				<br/>
				<br/>
				<br/>
				<br/>
				
			</form>
			</div>

		</div>
	</div>
	</body>
	</html>