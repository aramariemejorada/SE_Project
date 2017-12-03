<div class="container">
    <form>
        <span class="logout">
            <button type="button" class="btn btn-primary" name="addVehicle" data-toggle="modal" data-target="#addVehicle">Add Vehicle</button>
        </span>
    </form>
    <div class="container table-responsive" style="padding-left: 0">
        <?php
            include_once 'dbh.inc.php';
            $show_vehicles= 'SELECT * from vehicle';
            $show_vehicles_query = mysqli_query($conn,$show_vehicles);
            $html ='
            <table id="table" class="table table-hover">
                <thead>
                    <tr>
                    <th>License Plate</th>
                    <th>Vehicle Type</th>
                    <th>No. of Cylinder</th>
                    <th>Balance in Tank</th>
                    <th>Normal Travel in km/ltr.</th>
                    </tr>
                 </thead>';
            while($row = mysqli_fetch_assoc($show_vehicles_query))
            {
                $id = $row["license_plate"];
                $html.="<tr>
                <td>".$id."</td>
                <td>".$row["vehicle_type"]."</td>
                <td>".$row["no_of_cylinder"]."</td>
                <td>".$row["balance_in_tank"]."</td>
                <td>".$row["normal_travel"]."</td>
                <td><button class='modifyVehicle' data-toggle='modal' data-target='#editVehicle' value=$id>Edit</button></td>
                <td><button class='removeVehicle' value=$id>Remove</button></td>
                </tr>";
            }
            $html.="</table>";
            echo $html;
            ?>
    </div>
</div>
<!-- modal for adding vehicle -->
<div id="addVehicle" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 500px">
        <div class="modal-content" style="padding: 30px">
            <div class="container-fluid">
                <p>Note: All fields are required.</p>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Vehicle Name
                    </small>
                    <input type="text" class="form-control input-id" id="vehicleName">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        License Plate
                    </small>
                    <input type="text" class="form-control input-id" id="licensePlate">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Number of Cylinder
                    </small>
                    <input type="number" class="form-control input-id" id="cylinder">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Normal travel (kms/ltr)
                    </small>
                    <input type="number" class="form-control input-id" id="normalTravel">
                </div>
            </div>
            <div class="form-group">
                <center>
                    <div class="col-lg-12">
                        <button type="button" id="newVehicle" class="btn btn-primary">Add</button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>
<!-- end of add vehicle modal -->

<!-- modal for editing vehicle -->
<div id="editVehicle" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 500px">
        <div class="modal-content" style="padding: 30px">
            <div class="container-fluid">
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Balance in Tank
                    </small>
                    <input type="number" class="form-control input-id" id="newBalance">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Normal Travel (km/ltr)
                    </small>
                    <input type="number" class="form-control input-id" id="newTravel">
                </div>
            </div>
            <div class="form-group">
                <center>
                    <div class="col-lg-12">
                        <button type="button" id="edit" class="btn btn-primary">Edit</button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>