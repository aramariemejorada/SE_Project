<?php
	session_start();
	include_once 'dbh.inc.php';
	$id = $_POST['id'];
	if($_POST['action']==1){
		$newBalance= $_POST['newBalance'];
		$newTravel = $_POST['newTravel'];

			// $trip_info = "UPDATE vehicle set balance_in_tank='$newBalance', normal_travel = '$newTravel' where license_plate='".$id."'";

			// if (mysqli_query($conn, $trip_info)) {
			//     echo 1;
			// } else {
			//     echo -1;;
			// }
		if($newBalance != "" && $newTravel != ""){
			$trip_info = 'UPDATE vehicle set balance_in_tank='.$newBalance.', normal_travel = '.$newTravel.' where license_plate="'.$id.'"';

			if (mysqli_query($conn, $trip_info)) {
			    echo 1;
			} else {
			    echo -3;
			}
		}else if($newBalance != "" && $newTravel == ""){
			$trip_info = 'UPDATE vehicle set balance_in_tank='.$newBalance.' where license_plate="'.$id.'"';

			if (mysqli_query($conn, $trip_info)) {
			    echo 1;
			} else {
			    echo -2;
			    echo $trip_info;
			}
		}else{
			$trip_info = 'UPDATE vehicle set normal_travel = '.$newTravel.' where license_plate="'.$id.'"';

			if (mysqli_query($conn, $trip_info)) {
			    echo 1;
			} else {
			    echo -1;
			}
		}
		
	}else{
		$trip_info = 'DELETE from vehicle where license_plate="'.$id.'"';
		if (mysqli_query($conn, $trip_info)) {
		    echo 1;
		} else {
		    echo -1;
		}
	}

?>