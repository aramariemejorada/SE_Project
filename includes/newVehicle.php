<?php

include_once 'dbh.inc.php';

$vehicleType  = $_POST['vehicleType'];
$normalTravel = $_POST['normalTravel'];
$cylinder = $_POST['cylinder'];
$licensePlate = $_POST['licensePlate'];

$sql = "INSERT INTO vehicle (license_plate, vehicle_type, no_of_cylinder, normal_travel, balance_in_tank) VALUES ('$licensePlate', '$vehicleType','$cylinder','$normalTravel', 0)";	
if(mysqli_query($conn, $sql)){
	echo 1;
}else{
	echo "error";
}
exit();

?>