<!DOCTYPE html>
<html>
    <head>
        <title>Trip Ticket | Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <?php include 'header.php' ?>
        <div class="container">
            <ul class="nav nav-tabs" style="margin-left: 10px">
                <li class="active"><a data-toggle="tab" href="#search">Search</a></li>
                <li><a data-toggle="tab" href="#input">Input</a></li>
            </ul>
        <div class="tab-content">
            <div id="search" class="tab-pane fade in active">
                <div id="tabs" class="tab-content container" style="border-radius: 5px">
                    <div id="view" class="tab-pane fade in active">
                        <?php include 'searchbar.php' ?> 
                        <span class="logout">
                            <?php include 'printButtons.php' ?>
                        </span> 
                        <div class="container">
                            <div class="btn-group btn-group-justified" style="display: inline-block">
                                <a href="#" class="btn btn-default">Weekly</button></a>
                                <a href="#" class="btn btn-default">Monthly</button></a>
                                <a href="#" class="btn btn-default">Yearly</button></a>
                            </div>
                            <hr>
                            <h2>Yearly Report</h2>
                            <h4>Nissan GTX 1050 | License Plate No: GSR-541
                            <span class="logout">
                                <?php include 'monthPicker.php' ?>
                            </span></h4>
                            <hr>
                            <table id="table" class="table table-hover">
                                <?php include 'vehicleTable.php' ?>
                            </table> 
                        </div>
                    </div>
                </div>
            </div>
            <div id="input" class="tab-pane fade">
                <?php include 'form.php' ?>
            </div>
        </div>        
        <?php include 'help.php' ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css\style.css" type="text/css" rel="stylesheet">
    </body>
</html>