<?php session_start() ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
	<title></title>
	<style type="text/css">
		hr,p{
			margin: 0;
		}
		table, th, td{
			border: 1px solid black;
			border-collapse: collapse;
		}
		th{
			padding: 5px;
		}
	</style>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="scripts/jquery.min.js"></script>
	<script src="scripts/bootstrap.min.js"></script>
	<script src="scripts/script.js"></script>
</head>
<body>
	<div id style="width: 8.5in; height: 11in; font-family: sans-serif;">
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
		<div id="abc">
			<span style="margin-right:1.45in;"><b>DRIVER:</b></span><span class="d_driver_name"><?php echo $_SESSION['dis_name'];  ?></span><hr>
			<span style="margin-right:1.65in;"><b>DATE:</b></span><span id="d_date"><?php echo $_SESSION['dis_date']; ?></span><hr>
			<span style="margin-right:0.35in;"><b>Authorized Passenger:</b></span><span id="d_auth_pass"><?php echo $_SESSION['dis_pass']; ?></span><hr>
			<span style="margin-right:0.88in;"><b>VEHICLE USED:</b></span><span id="d_vehicle"><?php echo $_SESSION['dis_plate']; ?></span><hr>
			<span style="margin-right:1.1in;"><b>Destinations:</b></span><span id="d_dest"><?php echo $_SESSION['dis_des']; ?></span><hr>
			<span style="margin-right:1.4in;"><b>Purpose:	</b></span><span id="d_purp" style="font-size:12px;"><?php echo $_SESSION['dis_purp']; ?></span><hr>
		</div>
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

		<div style="margin: 0.3in 0;float: left;width: 100%;">
			<table style="width:100%;">
			  <tr>
			    <th>Date</th>
			    <th>Time</th> 
			    <th>Place of Departure</th>
			    <th>Time</th> 
			    <th>Place of Arrival</th>
			    <th>Odometer Reading</th>
			  </tr>
			  <?php
			  	for($x=0;$x<13;$x++){
			  		echo "
			  		<tr style='color:transparent;'>
					    <td>0000/00/00</td>
					    <td>00:00:00</td> 
					    <td>00-00-00-00-00-00-00-00</td>
					    <td>00-00-00</td> 
					    <td>00-00-00-00-00-00-00-00</td>
					    <td>00000</td>
					</tr>";
			  	}
			  ?>
			</table>
		</div>
		<div style="margin: 0.3in 0">
			<div style="width: 50%;float: left;">
				<span>Balance in Tank:<span id="d_balance">&nbsp&nbsp<b><?php echo $_SESSION['dis_balance']; ?></b><span style="margin-left: 1in">ltrs.</span></span></span><br>
				<span>Issued from Stock:<span><span style="margin-left: 1.44in">ltrs.</span></span></span><br>
				<span>Purchase Outside:<span><span style="margin-left: 1.44in">ltrs.</span></span></span><br>
				<span>Gasoline Used:<span><span style="margin-left: 1.67in">ltrs.</span></span></span><br>
				<span>Final Balance:<span><span style="margin-left: 1.75in">ltrs.</span></span></span><br>
			</div>
			<div style="width: 50%;float: left;">
				<span>Total kms travelled:<span><span style="margin-left: 2in">ltrs.</span></span></span><br>
				<span>Gear oil used:<span></span><span style="margin-left: 2.39in">ltrs.</span></span><br>
				<span>Lubrican oil used:<span><span style="margin-left: 2.12in">ltrs.</span></span></span><br>
				<span>Grease used/issued:<span><span style="margin-left: 1.90in">ltrs.</span></span></span><br>
				<span>CERTIFIED CORRECT<span></span></span><br>
			</div>
		</div>
		<div style="width: 100%; float: left; margin-top: 0.3in;">
			<div style="width: 50%;float: right;">
				<div>
					<p><u><b><span class="d_driver_name"><?php echo $_SESSION['dis_name']; ?></b></u></p>
					<p style="margin-left:20px">Driver</p>
				</div>
			</div>
		</div>
		<div style="width: 100%; float: left; margin-top: 0.3in;">
			<p>
				<center>
					I hereby certify that the vehicle was used for Official Business as stated above.
				</center>
			</p>
		</div>

		<div style="width: 100%; float: left; margin-top: 0.4in;">
			<p>
				<center>
					<hr>
					<span style="margin-right: 1in;">Passengers</span>
					<span style="margin-right: 1in;">Passengers</span>
					<span style="margin-right: 1in;">Passengers</span>
				</center>
			</p>
		</div>
</body>
</html>

