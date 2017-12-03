<?php
	session_start();
	include_once 'dbh.inc.php';
	$id = $_POST['id'];
	$trip_info = 'DELETE from employee where emp_id="'.$id.'"';
	if (mysqli_query($conn, $trip_info)) {
	    echo 1;
	} else {
	    echo -1;
	}

?>