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
            <h2>Yearly Report</h2>
            <!-- <h4>Nissan GTX 1050 | License Plate No: GSR-541 option: will be shown after search -->
            <span class="logout">
            <div class="form-group">
                <select class="form-control" id="year" name="year" required="required">
                <option value = "0">None</option>
                <option value = "2017">2017</option>
                <option value = "2018">2018</option>
                <option value = "2019">2019</option>
                <option value = "2020">2020</option>
                </select>
                <button type="button" id="searchYear" class="btn btn-primary logout" style="margin: 0;min-width: 150px;">Search</button>
                <button type="button" id="exportTVT" class="btn btn-success logout" style="margin: 0;min-width: 50px;">Export</button>
            </div>

            </span></h4>
            <hr>
            <div id="tvt" clas="container table-responsive" style="padding-left: 0">
                <?php include 'includes\typeVehicleTable.php' ?>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>