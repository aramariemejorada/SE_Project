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
                    <th>Vehicle Type</th>
                    <th>Plate No.</th>
                    <th>No. of Cylinder</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>NISSAN</td>
                    <td>GSR-541</td>
                    <td>4</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<div id="addVehicle" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 500px">
        <div class="modal-content" style="padding: 30px">
            <div class="container-fluid">
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Vehicle Type
                    </small>
                    <input type="text" class="form-control input-id" id="beforeDate1">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        License Plate
                    </small>
                    <input type="text" class="form-control input-id" id="beforeDate1">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Number of Cylinder
                    </small>
                    <input type="number" class="form-control input-id" id="beforeDate1">
                </div>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Normal travel (kms/ltr)
                    </small>
                    <input type="number" class="form-control input-id" id="beforeDate1">
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