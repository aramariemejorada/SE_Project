<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$dateDepart = mysqli_real_escape_string($conn, $_POST['dateDepart']);
	$dateArrive = mysqli_real_escape_string($conn, $_POST['dateArrive']);
	$plateNo = mysqli_real_escape_string($conn, $_POST['plateNo']);
	$timeOfDepart = mysqli_real_escape_string($conn, $_POST['timeOfDepart']);
	$timeOfArrival = mysqli_real_escape_string($conn, $_POST['timeOfArrival']);
	$balance = mysqli_real_escape_string($conn, $_POST['balance']);
	$purchased = mysqli_real_escape_string($conn, $_POST['purchased']);
	$fuelUsed = mysqli_real_escape_string($conn, $_POST['fuelUsed']);
	$departure = mysqli_real_escape_string($conn, $_POST['departure']);
	$arrival = mysqli_real_escape_string($conn, $_POST['arrival']);
	$distanceTravelled = mysqli_real_escape_string($conn, $_POST['distanceTravelled']);

	if (empty($dateDepart) || empty($dateArrive) || empty($plateNo) || empty($timeOfDepart) || empty($timeOfArrival) || empty($balance) || empty($purchased) || empty($fuelUsed) || empty($departure) || empty($arrival) || empty($distanceTravelled)) {
		
		header("Location: ../index.php?signup=empty");
		exit();

	} else {

		$plateNo = "INSERT INTO vehicle (license_plate) VALUES ('$plateNo');";
		mysqli_query($conn, $plateNo);
		$tripData = "INSERT INTO trip (start_date, end_date, time_of_departure, time_of_arrival, origin, destination) VALUES ('$dateDepart', '$dateArrive', '$timeOfDepart', '$timeOfArrival', '$departure', '$arrival');";
		mysqli_query($conn, $tripData);
		$vehData = "INSERT INTO fuel_consumption_report (beginning_balance, ending_balance, total_fuel_use, total_distance_travelled) VALUES ('$balance', '$fuelUsed', '$purchased', '$distanceTravelled');";
		mysqli_query($conn, $vehData);
		header("Location: ../driver.php?success");
		exit();

	}



} else {
	header("Location: ../index.php");
	exit();
}