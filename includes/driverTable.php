<?php 
    include_once 'includes/dbh.inc.php';
    $show_travel= 'SELECT trip_ticket.trip_ticket_date,employee.firstname,employee.lastname,trip_ticket.passenger,vehicle.license_plate,trip_ticket.destination,trip_ticket.purpose, vehicle.balance_in_tank FROM `trip_ticket` inner join vehicle on trip_ticket.license_plate=vehicle.license_plate inner join employee on trip_ticket.emp_id=employee.emp_id where employee.emp_id="'.$_SESSION['u_id'].'" and end_balance is NULL order by trip_ticket_id asc';
    $html = "";
    $show_travel_query = mysqli_query($conn,$show_travel);
    $html ='
    <table class="table table-hover">
        <thead>
            <tr>
            <th>Date</th>
            <th>Plate No.</th>
            <th>Passenger</th>
            <th>Destination</th>
            <th>Purpose</th>
            <th>Balance in Tank</th>
            </tr>
         </thead>';
    while($row = mysqli_fetch_assoc($show_travel_query))
    {
        $html.="
        <td>".$row["trip_ticket_date"]."</td>
        <td>".$row["license_plate"]."</td>
        <td>".$row["passenger"]."</td>
        <td>".$row["destination"]."</td>
        <td>".$row["purpose"]."</td>
        <td>".$row["balance_in_tank"]."</td>
        </tr>";
    }
    $html.="</table>";
    echo $html;
?>