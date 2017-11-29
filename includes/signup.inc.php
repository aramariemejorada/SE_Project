<?php


include_once 'dbh.inc.php';

$firstName = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastName = mysqli_real_escape_string($conn, $_POST['lastname']);
$middleName = mysqli_real_escape_string($conn, $_POST['middlename']);
$empid = mysqli_real_escape_string($conn, $_POST['empid']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$passwordcon = mysqli_real_escape_string($conn, $_POST['passwordcon']);
$role = $_POST['role'];

if($password === $passwordcon){
	$pass = $password;
}else{
	// header("Location: ../index.php?signup=notMatch");
	echo -3;
	exit();
}

//Error Handlers
//Check for Empty Fields

if (empty($firstName) || empty($lastName) || empty($middleName) || empty($empid) || empty($password) || empty($passwordcon)|| empty($role)) {
	
	// header("Location: ../index.php?signup=empty");
	echo -2;
	exit();

} else {
	//Check if input character are valid
	if(!preg_match("/^[a-zA-Z\s]*$/", $firstName) || !preg_match("/^[a-zA-Z\s]*$/", $lastName) || !preg_match("/^[a-zA-Z\s]*$/", $middleName)) {
		// header("Location: ../index.php?signup=invalid");
		echo -1;
		exit();
	} else {
			$sql = "SELECT * FROM employee WHERE emp_id ='$empid'";
			$result = mysqli_query($conn, $sql);
			$resultCheck = mysqli_num_rows($result);

			if ($resultCheck > 0){
				// header("Location: ../index.php?signup=usertaken");
				echo -4;
				exit();

			}else{
				$hashedPwd = password_hash($pass, PASSWORD_DEFAULT);
				//Insert the user to db
				$sql = "INSERT INTO employee (emp_id, lastname, firstname, middlename, password, role) VALUES ('$empid','$lastName','$firstName','$middleName','$hashedPwd','$role')";	
				mysqli_query($conn, $sql);
				// header("Location: ../index.php?signup=success");
				echo 1;
				exit();
				}
			}
		}


?>