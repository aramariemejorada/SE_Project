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
                            <div class="container">
                                <center>
                                <form action="php/search.inc.php" method="POST">
                                	<div class="input-group"  style="padding-top: 50px; max-width: 370px;">
                                        <input type="text" class="form-control" name="toSearch" placeholder="Driver ID/License Plate/Vehicle Type">
                                        <span class="input-group-btn">
                                            <button  class="btn btn-default" name="submit" type="submit">Search</button>
                                        </span>
                                    </div>
                                </form>
                                    <div class="btn-group" style="margin-bottom: 50px;">
                                        <?php include 'printButtons.php' ?>
                                    </div>
                                </center> 
                            </div>
                        </div>
                    </div>
                </div>
                <div id="input" class="tab-pane fade">
                    <?php include 'form.php' ?>     
                </div>
            </div> 
        </div>
        <?php include 'help.php' ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css\style.css" type="text/css" rel="stylesheet">
        <script src="admin.js"></script>
    </body>
</html>