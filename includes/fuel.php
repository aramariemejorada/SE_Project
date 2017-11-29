<?php
	session_start();
	include_once 'dbh.inc.php';

	$id = $_SESSION['u_id'];
	$tt_date = $_POST['tt_date'];
	$balance = $_POST['balance'];
	$purchased = $_POST['purchased'];
	$distance = $_POST['distance'];
	$issuedStock = $_POST['issuedStock'];
	$gearOil = $_POST['gearOil'];
	$lubeOil = $_POST['lubeOil'];
	$grease = $_POST['grease'];
	$gasUsed = $_POST['gasUsed'];
	$fin_bal = $_POST['fin_bal'];

	$trip_info = "UPDATE trip_ticket set balance_in_tank='$balance', issued_from_stock='$issuedStock', purchase_outside='$purchased', 
	 	gas_used='$gasUsed', final_balance='$fin_bal', total_kms_travelled='$distance', gear_oil_used='$gearOil', 
		lubricant_oil_used='$lubeOil', grease_used='$grease' where trip_ticket_date='$tt_date' and emp_id='$id'"; 

	if (mysqli_query($conn, $trip_info)) {
	    echo 1;
	} else {
	    echo -1;;
	}
	

?>