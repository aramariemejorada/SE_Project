<?php

if (isset($_POST['submit'])) {
	
	include_once 'dbh.inc.php';

	$lastName = mysqli_real_escape_string($conn, $_POST['lastName']);
	$firstName = mysqli_real_escape_string($conn, $_POST['firstName']);
	$empid = mysqli_real_escape_string($conn, $_POST['empid']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$passwordcon = mysqli_real_escape_string($conn, $_POST['passwordcon']);

	if($password === $passwordcon){
		$pass = $password;
	}else{
		header("Location: ../index.php?signup=notMatch");
		exit();
	}

	//Error Handlers
	//Check for Empty Fields

	if (empty($lastName) || empty($firstName) || empty($empid) || empty($password) || empty($passwordcon)) {
		
		header("Location: ../index.php?signup=empty");
		exit();

	} else {
		//Check if input character are valid
		if(!preg_match("/^[a-zA-Z\s]*$/", $firstName) || !preg_match("/^[a-zA-Z\s]*$/", $lastName)) {
			header("Location: ../index.php?signup=invalid");
			exit();
		} else {
				$sql = "SELECT * FROM driver WHERE driver_id='$empid'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0){
					header("Location: ../index.php?signup=usertaken");
					exit();
				}else{
					$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
					//Insert the user to db
					$sql = "INSERT INTO driver (firstname, lastname, driver_id, PASSWORD) VALUES ('$firstName', '$lastName', '$empid', '$hashedPwd');";
					mysqli_query($conn, $sql);
					header("Location: ../index.php?signup=success");
					exit();
					}
				}
			}

} else {
	header("Location: ../index.php");
	exit();
}