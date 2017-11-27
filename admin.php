<!DOCTYPE html>
<html>
    <head>
        <title>Trip Ticket | Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css\style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php include 'includes\header.php' ?>
        <div class="container">
        <ul class="nav nav-tabs" style="margin-left: 10px">
            <li class="active"><a data-toggle="tab" href="#tripTick">Trip Ticket</a></li>
            <li><a data-toggle="tab" href="#travelReport">Official Travel Report</a></li>
            <li><a data-toggle="tab" href="#fuelConsumption">Fuel Consumption Report</a></li>
            <li><a data-toggle="tab" href="#vehicles">Vehicles</a></li>
        </ul>
        <div class="tab-content">
            <div id="tripTick" class="tab-pane fade in active">
                <div id="tabs" class="tab-content container" style="border-radius: 5px">
                    <div id="view" class="tab-pane fade in active">
                        <?php include 'includes\searchbar.php' ?>
                        <?php include 'driverData.php' ?>
                    </div>
                </div>
            </div>
            <div id="travelReport" class="tab-pane fade">
                <div id="tabs" class="tab-content container" style="border-radius: 5px">
                    <div id="view" class="tab-pane fade in active">
                        <?php include 'includes\searchbar.php' ?>
                        <span class="logout">
                            <button type="submit" class="btn btn-primary" name="print">Print</button>
                        </span>
                        <?php include 'vehicleData.php' ?>
                    </div>
                </div>    
            </div>
            <div id="fuelConsumption" class="tab-pane fade">
                <div id="tabs" class="tab-content container" style="border-radius: 5px">
                    <div id="view" class="tab-pane fade in active">
                        <?php include 'includes\searchbar.php' ?>
                        <span class="logout">
                            <button type="submit" class="btn btn-primary" name="print">Print</button>
                        </span>
                        <?php include 'typeVehicleData.php' ?>
                    </div>
                </div>       
            </div>
            <div id="vehicles" class="tab-pane fade">
                <div id="tabs" class="tab-content container" style="border-radius: 5px">
                    <div id="view" class="tab-pane fade in active">
                        <?php include 'includes\vehicles.php' ?>
                    </div>
                </div>       
            </div>
        </div> 
    </div>
        <?php include 'includes\help.php' ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="admin.js"></script>
    </body>
</html>