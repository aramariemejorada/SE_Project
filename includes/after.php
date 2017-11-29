<?php
	session_start();
	include_once 'dbh.inc.php';

	$id = $_SESSION['u_id'];
	$tt_date = $_POST['tt_date'];
	$dateDepart = $_POST['dateDepart'];
	$odomReading = $_POST['odomReading'];
	$timeOfDepart = $_POST['timeOfDepart'];
	$timeOfArrival = $_POST['timeOfArrival'];
	$departure = $_POST['departure'];
	$arrival = $_POST['arrival'];

	$trip_info = "INSERT INTO trip_info(trip_ticket_date,trip_date,depart_place,depart_time,arrive_time, arrive_place, odometer_reading) 
		VALUES ('$tt_date','$dateDepart','$departure','$timeOfDepart','$timeOfArrival','$arrival','$odomReading')"; 
	if(mysqli_query($conn, $trip_info)){
		echo 1;
	}else{
		echo -1;
	}
	
	exit();

?>