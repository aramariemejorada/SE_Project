<?php
	if(isset($_POST["export_excel"])){
		include_once 'dbh.inc.php';
		$show_travel= 'SELECT * FROM `trip_ticket` inner join vehicle on trip_ticket.license_plate=vehicle.license_plate';
		$show_travel_query = mysqli_query($conn,$show_travel);
		$html = '';
		$html.='
		<table id="table" class="table table-hover">
		    <thead>
		        <tr>
		        <th>Date</th>
		        <th>Distance Travelled (kms)</th>
		        <th>Fuel Consumed (ltrs)</th>
		        <th>Oil Used (ltrs)</th>
		        <th>Grease/B-Fluid/ATF used<th>
		        <th>Remarks</th>
		        </tr>
		     </thead>
		   	';
		while($row = mysqli_fetch_assoc($show_travel_query))
		{   
		    $a = (float) $row['gear_oil_used'];
		    $b = (float) $row['lubricant_oil_used'];
		    $c = $a+$b;
		    $html .='
		    <td>'.$row["trip_ticket_date"].'</td>
		    <td>'.$row["gas_used"].'</td>
		    <td>'.$row["total_liters_consumed"].'</td>
		    <td>'.$c.'</td>
		    <td>'.$row["grease_used"].'</td>
		    <td>'.$row["remarks"].'</td>
		    </tr>
		    ';
		}
		$html .="</table>";
		header("Content-Type: application/vnd.ms-excel");
		header('Content-Disposition: attachment; filename=download.xls');
		echo $html;
	}
?>