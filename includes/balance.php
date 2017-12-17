<?php
include_once 'dbh.inc.php';
$date = $_POST['tt_date'];
$sql = 'SELECT vehicle.balance_in_tank, vehicle.normal_travel from vehicle inner join trip_ticket 
		on trip_ticket.license_plate=vehicle.license_plate 
		where trip_ticket.trip_ticket_id="'.$_POST['tt_date'].'"';
$sql_query = mysqli_query($conn,$sql);
$option = '';
if(mysqli_num_rows($sql_query)==0){
	echo -1;
}else{
    while($row = mysqli_fetch_assoc($sql_query)){
    		$row = json_encode($row);
    		echo $row;
    }
}
?>