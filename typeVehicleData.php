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
            <h4>Nissan GTX 1050 | License Plate No: GSR-541
            <span class="logout">
            <div class="form-group" style="display: inline-block">
                <select class="form-control" id="year">
                    <option default>---Select Year---</option>
                    <option value="1">2018</option>
                    <option value="2">2019</option>
                    <option value="3">2020</option>
                    <option value="4">2021</option>
                    <option value="5">2022</option>
                    <option value="6">2023</option>
                    <option value="7">2024</option>
                    <option value="8">2025</option>
                    <option value="9">2026</option>
                    <option value="10">2027</option>
                    <option value="11">2028</option>
                    <option value="12">2029</option>
                </select>
            </div>
            </span></h4>
            <hr>
            <div clas="container table-responsive" style="padding-left: 0">
                <table id="table" class="table table-hover">
                    <?php include 'includes\typeVehicleTable.php' ?>
                </table>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>