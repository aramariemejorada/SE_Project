<?php
    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Trip Ticket | Driver</title>
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
                <li class="active"><a data-toggle="tab" href="#before">Before Travel</a></li>
                <li><a data-toggle="tab" href="#after">After Travel</a></li>
                <li><a data-toggle="tab" href="#fuelConsumption">Fuel Consumption</a></li>
            </ul>
            <div class="tab-content">
                <div id="before" class="tab-pane fade in active">
                    <div id="tabs" class="tab-content container" style="border-radius: 5px">
                        <div id="view" class="tab-pane fade in active">
                            <?php include 'includes\beforeForm.php' ?>
                            <center>
                                <div class="form-group">
                                    <button type="button" id="show_before_modal" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#trip" style="min-width:150px; margin-top: 10px;">Submit</button> 
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div id="after" class="tab-pane fade">
                    <?php include 'includes\afterForm.php' ?>     
                </div>
                <div id="fuelConsumption" class="tab-pane fade">
                    <?php include 'includes\fuelConsumption.php' ?>     
                </div>
            </div> 
        </div>
        <?php include 'includes\help.php' ?>      
        <div id="trip" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 500px">
                <div class="modal-content" style="padding: 30px">
                    <div class="container-fluid">
                        <span>Date:&nbsp&nbsp<span id="mod_date" style="font-weight: bold;"></span></span><br>
                        <span>Driver:&nbsp&nbsp<span id="mod_driver" style="font-weight: bold;"></span></span> <br>
                        <span>Authorized Passenger:&nbsp&nbsp<span id="mod_pass" style="font-weight: bold;"></span></span> <br>
                        <span>Vehicle Used:&nbsp&nbsp<span id="mod_vehicle" style="font-weight: bold;"></span></span> <br>
                        <span>Destinations:&nbsp&nbsp<span id="mod_dest" style="font-weight: bold;"></span> </span><br>
                        <span>Purpose:&nbsp&nbsp<span id="mod_purp"  style="font-weight: bold;"></span></span> 
                    </div>
                    <div class="form-group">
                        <center>
                            <div class="col-lg-12">
                                <button type="button" id="printTrip" class="btn btn-primary">Print</a></button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="scripts/script.js"></script>
    </body>
</html>