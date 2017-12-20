<?php
include_once 'dbh.inc.php';

if(!empty(isset($_POST['check']))){

	if (isset($_POST['approve'])) {

	foreach($_POST['check'] as $id) {
    $sql = "UPDATE employee SET status='VERIFIED' WHERE emp_id='$id'";
    mysqli_query($conn, $sql);
    header("Location: ../super-admin.php?Success");
	exit();
   	 } 
	}else if(isset($_POST['delete'])){
	
	foreach($_POST['check'] as $id) {
    $sql = "DELETE from employee WHERE emp_id='$id'";
    mysqli_query($conn, $sql);
    header("Location: ../super-admin.php?Success");
	exit();
   	 } 
	}
}else if(!empty(isset($_POST['radio']))){
	if (isset($_POST['approve'])) {
	$sql = "UPDATE employee SET status='VERIFIED' WHERE status='UNVERIFIED'";
    mysqli_query($conn, $sql);
    header("Location: ../super-admin.php?Success");
	exit(); 
	}else if(isset($_POST['delete'])){
	$sql = "DELETE from employee WHERE status = 'UNVERIFIED'";
    mysqli_query($conn, $sql);
    header("Location: ../super-admin.php?Success");
	exit();
	}
}else{
	header("Location: ../super-admin.php?NoUserSelected");
	exit();
}

?>
