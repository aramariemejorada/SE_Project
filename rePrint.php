<?php
session_start();
include_once 'includes/dbh.inc.php';
$sql= 'SELECT * from trip_ticket join vehicle on vehicle.license_plate=trip_ticket.license_plate 
	join employee on trip_ticket.emp_id=employee.emp_id where trip_ticket_id='.$_POST['data'].'';
$sql_query = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($sql_query)){
	$_SESSION['dis_name'] = ucwords($row['firstname']." ".$row['lastname']);
	$_SESSION['dis_date'] = $row['trip_ticket_date'];
	$_SESSION['dis_plate'] = $row['license_plate'];
	$_SESSION['dis_pass'] = $row['passenger'];
	$_SESSION['dis_purp'] = $row['purpose'];
	$_SESSION['dis_balance'] = $row['balance_in_tank'];
	$_SESSION['dis_des'] = $row['destination'];
}
?>



