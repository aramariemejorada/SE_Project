<?php
session_start();
?>
<html>
    <head>
        <title>Trip Ticket | Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css\style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php include 'includes\header.php' ?>
        <div class="container" style="background-color: white; padding: 20px; border-radius: 5px">
        <input type="checkbox" id="select-all" style="margin-left: 7px"> Select All | <a href=#>Approve</a> | <a href=#>Delete</a>
            <div class="table-responsive">
            	<?php
            	include_once 'includes\dbh.inc.php';
           		$show_users= 'SELECT * from employee where status = "UNVERIFIED"';
            	$show_users_query = mysqli_query($conn,$show_users);

            	echo '
                <table id="myTable" class="table table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th>Name</th>
                                <th>Employee I.D.</th>
                                <th>Role</th>
                                <th>Status</th>
                            </tr>
                        </thead>';
                       	 while($row = mysqli_fetch_assoc($show_users_query))
          						  {
           				     $id = $row["emp_id"];
                  				echo"
                  				<tr>
                                <td><input type='checkbox' style='margin: 0'></td>
                                <td>".ucwords($row["firstname"])." ".ucwords($row["middlename"])." ".ucwords($row["lastname"])."</td>
                                <td>".$row["emp_id"]."</td>
                                <td>".$row["role"]."</td>
                                <td>Pending</td>
                            </tr>";
                        }
                   echo "</table>";
                   ?>
            </div>
        </div> 
    </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="scripts/jquery.min.js"></script>
         <script src="scripts/bootstrap.min.js"></script>
        <script src="scripts/script.js"></script>
    </body>
</html>
