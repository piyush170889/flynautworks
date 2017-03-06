<?php

require 'helperclass.php';

$submitted_acct_id=trim($_POST['accoutnno']);
$refererUrl=$_SERVER['HTTP_REFERER'];
$conn=getConnnObject();

$sql = "SELECT * FROM user_dtls where ACCT_NUM='$submitted_acct_id'";

$stmt = $conn->prepare($sql);
$stmt->execute();

if ($stmt->rowCount() == 1) {
	$row=$stmt->fetch(PDO::FETCH_ASSOC);
	$liknToRedirect='order.php?acct_num='.$row["ACCT_NUM"].'&clientname='.$row["OWNER_NAME"].'&schoolname='.$row["SCHOOL_NM"].'&programname='.$row["PROGRAM_OFFRD"];
	echo "<script type='text/javascript'>document.location='$liknToRedirect'</script>";
} else {
	echo "<script type='text/javascript'>alert('No relevant records found for the Account no. submitted');</script>";
	echo "<script type='text/javascript'>window.location='$refererUrl';</script>";
}

?>