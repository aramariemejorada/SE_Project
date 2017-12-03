<?php
    include_once 'dbh.inc.php';
    $show_travel= 'SELECT * FROM `trip_ticket` inner join vehicle on trip_ticket.license_plate=vehicle.license_plate where end_balance  is not null
        and (month(begin_date) >= "'.$_POST['month_1'].'" and month(end_date) <="'.$_POST['month_2'].'") and (year(begin_date)= "'.$_POST['search_year'].'" and year(end_date)  = "'.$_POST['search_year'].'")';
    $show_travel_query = mysqli_query($conn,$show_travel);
    $html ='
    <table id="vehicleTable" class="table table-hover">
        <thead>
            <tr>
            <th>Date</th>
            <th>Distance Travelled (kms)</th>
            <th>Fuel Consumed (ltrs)</th>
            <th>Oil Used (ltrs)</th>
            <th>Grease/B-Fluid/ATF used<th>
            <th>Remarks</th>
            </tr>
         </thead>';
    while($row = mysqli_fetch_assoc($show_travel_query))
    {   
        $a = (float) $row['gear_oil_used'];
        $b = (float) $row['lubricant_oil_used'];
        $c = $a+$b;
        $html.="
        <td>".$row['trip_ticket_date']."</td>
        <td>".$row["total_kms_travelled"]."</td>
        <td>".$row["gas_used"]."</td>
        <td>".$c."</td>
        <td>".$row["grease_used"]."</td>
        <td>".$row["remarks"]."</td>
        </tr>";
    }
    $html.="</table>";
    echo $html;
?>
