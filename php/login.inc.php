<?php

if (isset($_POST['submit'])){
    
    include 'dbh.inc.php';

    
$username = mysqli_real_escape_string($conn, $_POST['empid']);
$pass = mysqli_real_escape_string($conn, $_POST['passw']);
session_start();

//Error Handlers
//Check if input are empty 
    if (empty($username) ||empty($pass)){
        header("Location: ../index.php?signup=Empty Fields");
        exit();    
    
    }else{
       $sql = "SELECT * FROM tripticketdb_employee WHERE name ='$username'";
       $result = mysqli_query($conn, $sql); 
       $resultCheck = mysqli_num_rows($result);

            if ($resultCheck < 1){ 
            	
            	 $sql = "SELECT * FROM administrator WHERE admin_id ='$username'";
      			 $result = mysqli_query($conn, $sql); 
     			 $resultCheck = mysqli_num_rows($result);

     			  if($row = mysqli_fetch_assoc($result)) {
                    //Dehashing the password
                    $hashCheck = password_verify($pass, $row["PASSWORD"]);
                    
                    if($hashCheck == false){
                        header("Location: ../index.php?signup=Incorrect Password");
                        exit();    
                    } elseif ($hashCheck == true){

                    		$_SESSION['u_fn'] = $row['username'];
                    		header("Location: ../admin.html");      

                    }
                }else{
					header("Location: ../index.php?signup=Incorrect Username");
               		exit();    
                }
            }else{


                if($row = mysqli_fetch_assoc($result)) {
                    //Dehashing the password
                    $hashCheck = password_verify($pass, $row["PASSWORD"]);
                    
                    if($hashCheck == false){
                        header("Location: ../index.php?signup=Incorrect Password");
                        exit();    
                    } elseif ($hashCheck == true){

                    		$_SESSION['u_id'] = $row['guest_id'];
                    		$_SESSION['u_fn'] = $row['firstname'];
                    		header("Location: ../driver.html");      

                    }
                }
            }
     }
    
    
}else{
    header("Location: ../index.php?signup");
    exit();      
}




?>