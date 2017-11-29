<div class="container">
    <form>
        <span class="logout">
            <button type="button" class="btn btn-primary" name="addVehicle" data-toggle="modal" data-target="#addVehicle">Add Vehicle</button>
        </span>
    </form>
    <div class="container table-responsive" style="padding-left: 0">
        <table id="table" class="table table-hover">
            <thead>
                <tr>
                    <th>Vehicle Name</th>
                    <th>Plate No.</th>
                    <th>No. of Cylinder</th>
                    <th>Balance in Tank</th>
                    <th>Normal Travel in km/ltr.</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NISSAN</td>
                    <td>GSR-541</td>
                    <td>4</td>
                    <td>10.00</td>
                    <td>7</td>
                    <td><button type="submit" name="edit" data-toggle="modal" data-target="#editVehicle">Edit</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- modal for adding vehicle -->
<div id="addVehicle" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 500px">
        <div class="modal-content" style="padding: 30px">
            <div class="container-fluid">
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
                        <button type="button" id="printTrip" class="btn btn-primary">Add</a></button>
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
                    <input type="text" class="form-control input-id" id="balance">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Normal Travel (km/ltr)
                    </small>
                    <input type="text" class="form-control input-id" id="licensePlate">
                </div>
            </div>
            <div class="form-group">
                <center>
                    <div class="col-lg-12">
                        <button type="button" id="printTrip" class="btn btn-primary">Save</a></button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>