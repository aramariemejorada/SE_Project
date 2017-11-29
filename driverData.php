<!DOCTYPE html>
<html>
    <head>
        <title>Trip Ticket | Admin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">        -->
        <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css\style.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <h2>Weekly Report</h2>
            <!-- <h4>Leo Manansala | ID: 256-ABC-4A option: will be shown after search -->
            <span class="logout">
                <div class="form-group" style="display: inline-block">
                    <select class="form-control" id="month">
                        <option default>---Select Month---</option>
                        <option value="1">January</option>
                        <option value="2">February</option>
                        <option value="3">March</option>
                        <option value="4">April</option>
                        <option value="5">May</option>
                        <option value="6">June</option>
                        <option value="7">July</option>
                        <option value="8">August</option>
                        <option value="9">September</option>
                        <option value="10">October</option>
                        <option value="11">November</option>
                        <option value="12">December</option>
                    </select>
                </div>
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
            <div class="container table-responsive" style="padding-left: 0">
                <table id="table" class="table table-hover"> <!-- for bordered table add table-bordered in class -->
                    <?php include 'includes\driverTable.php' ?>
                </table>
            </div>
        </div>
    </body>
</html>