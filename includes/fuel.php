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
	$fin_bal = $_POST['final_bal'];
	$remarks = $_POST['remarks'];
	$temp = ($distance/$gasUsed);
	$total_liters = round($temp);
	$ten_percent = $_POST['ten_percent'];

	$trip_info = "UPDATE trip_ticket set begin_balance='$balance', issued_from_stock='$issuedStock', purchase_outside='$purchased', 
	 	gas_used='$gasUsed', end_balance='$fin_bal', total_kms_travelled='$distance', gear_oil_used='$gearOil', 
		lubricant_oil_used='$lubeOil', grease_used='$grease',  remarks='$remarks', distance_travelled_per_ltr = '$total_liters', total_liters_consumed = '$ten_percent' where trip_ticket_date='$tt_date' and emp_id='$id'"; 

	if (mysqli_query($conn, $trip_info)) {
	    echo 1;
	    $getCar = 'SELECT license_plate FROM trip_ticket where trip_ticket_date ="'.$tt_date.'"';
	    $getCar_query = mysqli_query($conn, $getCar);
	   if(mysqli_num_rows($getCar_query)==0){
	   		echo -1;
	    }else{
	        while($row = mysqli_fetch_assoc($getCar_query))
	        {
	        	$plate = $row['license_plate'];
	            $new = "UPDATE vehicle set balance_in_tank = '$fin_bal' where license_plate='$plate'";
	            
	        }
	    }

	} else {
	    echo -1;;
	}
	

?>