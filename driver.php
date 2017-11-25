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
            </ul>
            <div class="tab-content">
                <div id="before" class="tab-pane fade in active">
                    <div id="tabs" class="tab-content container" style="border-radius: 5px">
                        <div id="view" class="tab-pane fade in active">
                            <?php include 'includes\before.php' ?>
                            <center>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#trip" style="min-width:150px; margin-top: 10px;">Submit</button> 
                                </div>
                            </center>
                        </div>
                    </div>
                </div>
                <div id="after" class="tab-pane fade">
                    <?php include 'includes\form.php' ?>     
                </div>
            </div> 
        </div>
        <?php include 'includes\help.php' ?>      
        <div id="trip" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 500px">
                <div class="modal-content" style="padding: 30px">
                    <div class="container-fluid" >
                        <p style="font-weight: bold">DATE:</p>
                        <p style="font-weight: bold">DRIVER:</p> 
                        <p style="font-weight: bold">Authorized Passenger:</p> 
                        <p style="font-weight: bold">Vehicle Used:</p> 
                        <p style="font-weight: bold">Destinations:</p> 
                        <p style="font-weight: bold">PURPOSE:</p> 
                        
                    </div>
                    <div class="form-group">
                        <center>
                            <div class="col-lg-12">
                                <button type="submit" name ="print" class="btn btn-primary" id="printTrip">Print</button>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="driver.js"></script>
    </body>
</html>