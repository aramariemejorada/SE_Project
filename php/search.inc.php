<?php
session_start();
if (isset($_POST['submit'])){
    
    include 'dbh.inc.php';

$toSearch = mysqli_real_escape_string($conn, $_POST['toSearch']);


  	if (empty($toSearch)){
        header("Location: ../index.php?login=Empty Fields");
        exit();    
    
    }else{

    	$sql = "SELECT * FROM driver WHERE driver_id ='$toSearch'";
      	$result = mysqli_query($conn, $sql); 
     	$resultCheck = mysqli_num_rows($result);

     	if ($resultCheck > 0){
			header("Location: ../driverData.php");
			exit();

  			}else{
  				$sql = "SELECT * FROM vehicle WHERE license_plate ='$toSearch'";
     		 	$result = mysqli_query($conn, $sql); 
     			$resultCheck = mysqli_num_rows($result);

     				if ($resultCheck > 0){
						header("Location: ../typeVehicleData.php");
						exit();
  					}else{
  						$sql = "SELECT * FROM vehicle WHERE vehicle_type ='$toSearch'";
      					$result = mysqli_query($conn, $sql); 
     					$resultCheck = mysqli_num_rows($result);

     					if ($resultCheck > 0){
							header("Location: ../vehicleData.php");
							exit();
  					}else{
  						 header("Location: ../index.php?not found");
      					 exit();    
  					}
  				}
  			}
  		}
  	}
