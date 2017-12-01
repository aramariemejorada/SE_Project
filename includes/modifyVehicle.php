<?php
	session_start();
	include_once 'dbh.inc.php';

	if($_POST['action']==1){
		$id = $_POST['id'];
		$newBalance= $_POST['newBalance'];
		$newTravel = $_POST['newTravel'];

		$trip_info = "UPDATE vehicle set balance_in_tank='$newBalance', normal_travel = '$newTravel' where license_plate='".$id."'";

		if (mysqli_query($conn, $trip_info)) {
		    echo 1;
		    echo $trip_info;
		} else {
		    echo -1;;
		}
		// if($newBalance != "" && $newTravel != ""){
		// 	$trip_info = "UPDATE vehicle set begin_balance='$newBalance', distance_travelled_per_ltr = '$newTravel' where license_plate='".$id."'";

		// 	if (mysqli_query($conn, $trip_info)) {
		// 	    echo 1;
		// 	} else {
		// 	    echo -1;;
		// 	}
		// }else if($newBalance != "" && $newTravel == ""){
		// 	$trip_info = "UPDATE vehicle set begin_balance='$newBalance' where license_plate='".$id."'";

		// 	if (mysqli_query($conn, $trip_info)) {
		// 	    echo 1;
		// 	} else {
		// 	    echo -1;;
		// 	}
		// }else{
		// 	$trip_info = "UPDATE vehicle set distance_travelled_per_ltr = '$newTravel' where license_plate='".$id."'";

		// 	if (mysqli_query($conn, $trip_info)) {
		// 	    echo 1;
		// 	} else {
		// 	    echo -1;;
		// 	}
		// }
		
	}

?>