<?php
include 'dbh.inc.php';
$show= 'SELECT * FROM `trip_ticket` inner join vehicle on trip_ticket.license_plate=vehicle.license_plate where end_balance is not null 
    and year(begin_date) = "'.$_POST['search_year'].'" and year(end_date) = "'.$_POST['search_year'].'"';
$show_query = mysqli_query($conn,$show);
$html ='
<table id="table" class="table table-hover">
    <thead>
        <tr>
        <th>Type of Vehicle</th>
        <th>Plate No.</th>
        <th>No. Cylinder</th>
        <th>Beginning (ltrs.)</th>
        <th>Ending (ltrs.)</th>
        <th>Total Distance Travelled (A)</th>
        <th>Total Fuel Use (B)</th>
        <th>Distance travelled per ltr.<br> (C=A/B)</th>
        <th>Normal Travel in km/ltr</th>
        <th>Total ltrs. consumed plus 10%</th>
        <th>Excess</th>
        <th>Remarks</th>
        </tr>
     </thead>';
while($row = mysqli_fetch_assoc($show_query))
{
    $html.="
    <td>".$row["vehicle_type"]."</td>
    <td>".$row["license_plate"]."</td>
    <td>".$row["no_of_cylinder"]."</td>
    <td>".$row["begin_balance"]."</td>
    <td>".$row["end_balance"]."</td>
    <td>".$row["total_kms_travelled"]."</td>
    <td>".$row["gas_used"]."</td>
    <td>".$row["distance_travelled_per_ltr"]."</td>
    <td>".$row["normal_travel"]."</td>
    <td>".$row["total_liters_consumed"]."</td>
    <td>".$row["excess"]."</td>
    <td>".$row["remarks"]."</td>
    </tr>";
}
$html.="</table>";
echo $html;
?>