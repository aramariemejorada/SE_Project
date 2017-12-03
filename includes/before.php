<?php
	session_start();
	include_once 'dbh.inc.php';

	$id = $_SESSION['u_id'];
	// $beforeDate1 = $_POST['beforeDate1'];
	// $beforeDate2 = $_POST['beforeDate2'];
	$beforePlateNo = $_POST['beforePlateNo'];
	$beforePass = $_POST['beforePass'];
	$beforeDest = $_POST['beforeDest'];
	$beforePurp = $_POST['beforePurp'];
	$beginDate = $_POST['beginDate'];
	$endDate = $_POST['endDate'];
	$date = $_POST['date'];

	$beforeData = "INSERT INTO trip_ticket(emp_id,license_plate,trip_ticket_date,begin_date,end_date,passenger,destination, purpose) 
		VALUES ('$id','$beforePlateNo','$date','$beginDate','$endDate','$beforePass','$beforeDest','$beforePurp')";

	if(mysqli_query($conn, $beforeData)){
		echo 1;
	}else{
		echo -1;
	}

?>