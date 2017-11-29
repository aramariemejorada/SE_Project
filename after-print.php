<?php
	session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		hr,p{
			margin: 0;
			border-color: transparent;
		}
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
			border-color: transparent;
		}
		th{
			padding: 5px;
		}
	</style>
</head>
<body>
	<div style="width: 8.5in; height: 11in; font-family: sans-serif;">
		<div style="color: transparent;">
			<center>
				Republic of the Philippines<br>
				<b>Department of Information and Communications Technology</b><br>
				F. Torres St., Davao City<br><br>
				<u><b>VEHICLE TRIP TICKET</b></u>
			</center>
			<span>
				<ul style="padding: 0">
					<span>Instruction:</span><li style="list-style: none;display: inline;margin-left: 1in;">&nbsp&nbsp&nbsp&nbsp1: Fill in Duplicate.</li>
					<li style="list-style: none;margin: 0 2in;">2: Original to driver to be returned upon completion.</li>
					<li style="list-style: none;margin: 0 2in;">3: Duplicate to Administration Division for metre control.</li>
				</ul>
			</span>
			<?php
			include_once 'includes/dbh.inc.php';

			$sql = 'SELECT trip_ticket.trip_ticket_date,employee.firstname,employee.lastname,trip_ticket.passenger,trip_ticket.license_plate,trip_ticket.destination,trip_ticket.purpose FROM `trip_ticket` join employee on employee.emp_id=trip_ticket.emp_id where employee.emp_id="'.$_SESSION['u_id'].'"limit 1';
			$name;
			$counter;
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
			    // output data of each row
			    while($row = mysqli_fetch_assoc($result) && $counter!=13) {
			    	$name = $row['firstname']." ".$row['lastname'];
			       	echo '<span style="margin-right:1.65in;"><b>DATE:</b></span><span id="date">'.$row['trip_ticket_date'].'</span><hr>';
			       	echo '<span style="margin-right:1.5in;"><b>DRIVER:</b></span><span id="driver_name">'.$row['firstname']." ".$row['lastname'].'</span><hr>';
			       	echo '<span style="margin-right:0.35in;"><b>Authorized Passenger:</b></span><span id="auth_pass">'.$row['passenger'].'</span><hr>';
			       	echo '<span style="margin-right:0.88in;"><b>VEHICLE USED:</b></span><span id="vehicle">'.$row['license_plate'].'</span><hr>';
			       	echo '<span style="margin-right:1.1in;"><b>Destinations:</b></span><span id="dest">'.$row['destination'].'</span><hr>';
			       	echo '<span style="margin-right:1.4in;"><b>Purpose:	</b></span><span id="purp" style="font-size:12px;">'.$row['purpose'].'</span><hr>';
			       	$counter++;
			    }
			} else {
			    echo "0 results";
			}
			?>
			<div style="margin: 0.3in 0.3in">
				<div style="width: 50%;float: left;">
					<p>Approved by:</p><br>
					<div style="margin: 0 0.4in;text-align: center;">
						<p><u><b>ALIMBZAR P. ASUM, CESO V</b></u></p>
						<p>Cluster Director</p>
						<p>FOO-MC III</p>
					</div>
				</div>
				<div style="width: 50%;float: left;">
					<p>Noted by:</p><br>
					<div style="margin: 0 0.4in;text-align: center;">
						<p><u><b>JANET ARLENE B. SOLIMAN</b></u></p>
						<p>Actg. Chief, Admin. Division</p>
					</div>
				</div>
			</div>
		</div>

		<div style="margin: 0.3in 0;float: left;width: 100%;">
			<table style="width:100%;">
			  <tr style="color: transparent;">
			    <th>Date</th>
			    <th>Time</th> 
			    <th>Place of Departure</th>
			    <th>Time</th> 
			    <th>Place of Arrival</th>
			    <th>Odometer Reading</th>
			  </tr>
			  <?php
			  	$show_info = 'SELECT trip_info.trip_date,trip_info.depart_time,trip_info.depart_place,trip_info.arrive_time,trip_info.arrive_place,trip_info.odometer_reading from trip_info join trip_ticket on trip_info.trip_ticket_date=trip_ticket.trip_ticket_date where trip_ticket.emp_id='.$_SESSION['u_id'];
			  	$show_reservation_query = mysqli_query($conn,$show_info);
			  	$counter = 13;
			  	while($row = mysqli_fetch_assoc($show_reservation_query))
			  	{
			  	    echo '<tr><center>
			  	        <td>'.$row['trip_date'].'</td>
			  	        <td>'.$row['depart_time'].'</td>
			  	        <td>'.$row['depart_place'].'</td>		  	        
			  	        <td>'.$row['arrive_time'].'</td>
			  	        <td>'.$row['arrive_place'].'</td>
			  	        <td>'.$row['odometer_reading'].'</td>
			  	    	</center></tr>';
			  	    	$counter--;
			  	}
			  	for($x=0;$x<$counter;$x++){
			  		echo "
			  		<tr style='color: transparent;'>
					    <td>0000/00/00</td>
					    <td>00:00:00</td> 
					    <td>00-00-00-00-00-00-00-00</td>
					    <td>00-00-00</td> 
					    <td>00-00-00-00-00-00-00-00</td>
					    <td>00000</td>
					</tr>";
			  	}
			  	$counter = 13;
			  ?>

			</table>
		</div>
		<div style="margin: 0.3in 0">
			<div style="width: 50%;float: left;">
				<span>Balance in Tank:&nbsp&nbsp<span id="d_balance"></span></span><br>
				<span>Issued from Stock:&nbsp&nbsp<span id="d_issuedStock"></span></span><br>
				<span>Purchase Outside:&nbsp&nbsp<span id="d_purchased"></span></span><br>
				<span>Gasoline Used:&nbsp&nbsp<span id="d_gasUsed"></span></span><br>
				<span>Final Balance:&nbsp&nbsp<span id="d_finBal"></span></span><br>
			</div>
			<div style="width: 50%;float: left;">
				<span>Total kms travelled:&nbsp&nbsp<span id="d_distance"></span></span><br>
				<span>Gear oil used:&nbsp&nbsp<span id="d_gearOil"></span></span><br>
				<span>Lubricant oil used:&nbsp&nbsp<span id="d_lubeOil"></span></span><br>
				<span>Grease used/issued:&nbsp&nbsp<span id="d_grease"></span></span><br>
				<span>CERTIFIED CORRECT<span></span></span><br>
			</div>
		</div>
		<div style="width: 100%; float: left; margin-top: 0.3in;color:transparent;">
			<div style="width: 50%;float: right;">
				<div>
					<p><u><b><?php echo $name; ?></b></u></p>
					<p style="margin-left:20px">Driver</p>
				</div>
			</div>
		</div>
		<div style="width: 100%; float: left; margin-top: 0.3in;color:transparent;">
			<p>
				<center>
					I hereby certify that the vehicle was used for Official Business as stated above.
				</center>
			</p>
		</div>

		<div style="width: 100%; float: left; margin-top: 0.4in;color:transparent;">
			<p>
				<center>
					<hr>
					<span style="margin-right: 1in;">Passengers</span>
					<span style="margin-right: 1in;">Passengers</span>
					<span style="margin-right: 1in;">Passengers</span>
				</center>
			</p>
		</div>
		
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="scripts/script.js"></script>
</body>
</html>