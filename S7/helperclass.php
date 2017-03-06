<?php
function createEmailBody($ownername,$owneremail,$ownernumber,$schoolname,$schoolweblink,$programoffered,$facebooklink,$otherfblink,$schoolmanager,
		$manageremail,$managernumber,$techmanager,$techmanageremail,$techmanagernumber,$leademail,$leadnumber,$acct_num) {
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
					<td class=\"label\">Account Number</td>
					<td class=\"labelvalue\">".$acct_num."</td>
				</tr>
				<tr>
				<td class=\"label\">Owner Name</td>
				<td class=\"labelvalue\">".$ownername."</td>

				</tr>
				<tr>
				<td class=\"label\">Owner Email</td>
				<td class=\"labelvalue\">".$owneremail."</td>
				
				</tr>
				<tr>
				<td class=\"label\">Owner Number</td>
				<td class=\"labelvalue\">".$ownernumber."</td>
				
				</tr>
				<tr>
				<td class=\"label\">School Name</td>
				<td class=\"labelvalue\">".$schoolname."</td>
				
				</tr>
				<tr>
				<td class=\"label\">School Website Link</td>
				<td class=\"labelvalue\">".$schoolweblink."</td>

				</tr>
				<tr>
				<td class=\"label\">Programs Offered In School</td>
				<td class=\"labelvalue\">".$programoffered."</td>
				
				</tr>
				<tr>
				<td class=\"label\">Facebook Link</td>
				<td class=\"labelvalue\">".$facebooklink."</td>
				
				</tr>
				<tr>
				<td class=\"label\">Other Facebook Link</td>
				<td class=\"labelvalue\">".$otherfblink."</td>
				
				</tr>
				<tr>
				<td class=\"label\">School Manager</td>
				<td class=\"labelvalue\">".$schoolmanager."</td>
				
				</tr>
				<tr>
				<td class=\"label\">Manager Email</td>
				<td class=\"labelvalue\">".$manageremail."</td>

				<tr>
				<td class=\"label\">Manager Contact Number</td>
				<td class=\"labelvalue\">".$managernumber."</td>
				
				</tr>
				<tr>
				<td class=\"label\">Technical Manager</td>
				<td class=\"labelvalue\">".$techmanager."</td>
				
				</tr>
				<tr>
				<td class=\"label\">Technical Manager Email</td>
				<td class=\"labelvalue\">".$techmanageremail."</td>
				
				</tr>
				<tr>
				<td class=\"label\">Technical Manager Number</td>
				<td class=\"labelvalue\">".$techmanagernumber."</td>
				
				</tr>
				<tr>
				<td class=\"label\">Lead Email</td>
				<td class=\"labelvalue\">".$leademail."</td>
				
				
				</tr>
				<tr>
				<td class=\"label\">Lead Number</td>
				<td class=\"labelvalue\">".$leadnumber."</td>

				</tr>
				
				</table>
				</body>
				</html>";
			return $body;
		}
		
		function insertUserDetails($ownername,$owneremail,$ownernumber,$schoolname,$schoolweblink,$programoffered,$facebooklink,$otherfblink,$schoolmanager,
		$manageremail,$managernumber,$techmanager,$techmanageremail,$techmanagernumber,$leademail,$leadnumber) {
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "dojo_db";
			$acct_id=0;
			
			$sqlInsert = "INSERT INTO user_dtls(OWNER_NAME,OWNER_MAIL,OWNER_NUM,SCHOOL_NM,SCHOOL_WEB_LINK,PROGRAM_OFFRD,
			FB_LINK,OTHER_FB_LINK,SCHOOL_MNGR,MANAGER_EMAIL,MANAGER_NUM,TECH_MANAGER,
			TECH_MANAGER_EMAIL,TECH_MANAGER_NUM,LEAD_EMAIL,LEAD_NUM) VALUES ('$ownername', '$owneremail', '$ownernumber', '$schoolname', '$schoolweblink', '$programoffered','$facebooklink','$otherfblink','$schoolmanager','$manageremail','$managernumber','$techmanager','$techmanageremail','$techmanagernumber','$leademail','$leadnumber')";
			$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			// set the PDO error mode to exception
			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			// use exec() because no results are returned
			$conn->exec($sqlInsert);
			$last_id = $conn->lastInsertId();
			$acct_id_from_last_id=$last_id;			
			
			$acct_id=calculateSevenDigitAccountIdFromLastId($acct_id_from_last_id);
			
			$sqlUpdate="update user_dtls set IS_EMAIL_SENT='Y',ACCT_NUM='".$acct_id."' where USER_DTLS_ID=".$last_id;
			$conn->exec($sqlUpdate);
			$conn = null;
			return $acct_id;
		}
		
		function calculateSevenDigitAccountIdFromLastId($acct_id_from_last_id) {
			$acct_id="DN";
			$acctIdLengthPreferred=7;
			$acctIdfromLastIdLength=strlen($acct_id_from_last_id);
			$prefixZerosToAppend=$acctIdLengthPreferred-$acctIdfromLastIdLength;
			for ($i=1;$i<=$prefixZerosToAppend;$i++) {
				$acct_id=$acct_id."0";
			}
			$acct_id=$acct_id.$acct_id_from_last_id;
			return $acct_id;
		}
?>