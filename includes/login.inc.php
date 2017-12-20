<?php
session_start();
// if (isset($_POST['submit'])){
include 'dbh.inc.php';    
$user = $_POST['id'];
$p = $_POST['pass'];
$a = 'Admin';
$d = 'Driver';
$sa= 'SuperAdmin';
$username = mysqli_real_escape_string($conn, $user);
$pass = mysqli_real_escape_string($conn, $p);
//Error Handlers
//Check if input are empty 
    if (empty($username) ||empty($pass)){
        echo -1;
        // header("Location: ../index.php?login=Empty Fields");
        // exit();   
    }else{
       $sql = "SELECT * FROM employee WHERE emp_id ='$username' AND role = '$d' AND status ='VERIFIED'";
       $result = mysqli_query($conn, $sql); 
       $resultCheck = mysqli_num_rows($result);

            if ($resultCheck  < 1)  { 
                
                 $sql = "SELECT * FROM employee WHERE emp_id ='$username' AND role ='$a' AND status ='VERIFIED'";
                 $result = mysqli_query($conn, $sql); 
                 $resultCheck = mysqli_num_rows($result);

                   if($resultCheck < 1){
                            $sql = "SELECT * FROM employee WHERE emp_id ='$username' AND role ='$sa' AND status ='VERIFIED'";
                            $result = mysqli_query($conn, $sql); 
                            $resultCheck = mysqli_num_rows($result);

                            if($row = mysqli_fetch_assoc($result)) {
                              //Dehashing the password
                              $hashCheck = password_verify($pass, $row["password"]);
                              if($hashCheck == false){
                                echo "passError";
                                exit();
                                  // header("Location: ../index.php?login=Incorrect Password");
                                  // exit(); 
            
                              } elseif ($hashCheck == true){
                                // header("Location: ../admin.php");
                                $_SESSION['u_id'] = $username;
                                echo 3;
                                exit();
                              }
                          }
                 }else if($row = mysqli_fetch_assoc($result)) {
                    //Dehashing the password
                    $hashCheck = password_verify($pass, $row["password"]);
                    if($hashCheck == false){
                      echo "passError";
                      exit();
                        // header("Location: ../index.php?login=Incorrect Password");
                        // exit(); 
   
                    } elseif ($hashCheck == true){
                      // header("Location: ../admin.php");
                      $_SESSION['u_id'] = $username;
                      echo 1;
                      exit();
                    }
                }
            }else{
              if($row = mysqli_fetch_assoc($result)) {
                  //Dehashing the password
                $hashCheck = password_verify($pass, $row["password"]);
                if($hashCheck == false){
                   echo "passError";
                   exit();
                    //  header("Location: ../index.php?login=Incorrect Password");
                    // exit();  
                }elseif ($hashCheck == true){
                  $_SESSION['u_id'] = $username;
                  // header("Location: ../index2.php?"); //guest.php previously 
                  echo 2;
                  exit();
                }
              }
            }
          } 
?>