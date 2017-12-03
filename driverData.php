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
            <h2>Trip Ticket</h2>
            <hr>
            <div class="container table-responsive" style="padding-left: 0">
                <table id="table" class="table table-hover"> <!-- for bordered table add table-bordered in class -->
                    <?php include 'includes\driverTable.php' ?>
                </table>
            </div>
        </div>
    </body>
</html>