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
        <div class="container">
            <h2>Monthly Report</h2>
            <!-- <h4>Nissan GTX 1050 | Driver(s): xxxxx,xxxxx option: will be shown after search -->
            <span class="logout">
                <?php include 'includes\monthPicker.php' ?>
            </span></h4>
            <hr>
            <div class="container table-responsive" style="padding-left: 0">
                <table id="table" class="table table-hover">
                    <?php include 'includes\vehicleTable.php' ?>
                </table> 
            </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>