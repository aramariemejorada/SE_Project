<!DOCTYPE html>
<html>
    <head>
        <title>Trip Ticket</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="css\bootstrap.min.css" type="text/css" rel="stylesheet">
        <link rel="stylesheet" href="css\home.css" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid" id="home">
            <div class="container" id="con">
                <div class="row">
                    <div id="dict" class="col-sm-8">
                        <center>
                            <img class="img-responsive" src="images\logo.png">
                            <h2>TRIP TICKET</h2>
                        </center>
                    </div>
                <form action="includes/login.inc.php" method="POST">
                    <div id="form" class="col-sm-4">
                            <div id="username" class="form-group" id="login">
								<label for="name">Employee ID</label>
						        <input type="text" name="empid" class="form-control" id="name" placeholder="Enter username" required="required" />
								<label for="name" style="margin-top: 10px">Password</label>
						        <input type="password" name="passw" class="form-control" id="name" placeholder="Enter password" required="required" />
						    </div> 
						    <button type="submit submit-id" name ="submit" class="btn btn-primary btn-block">Log In</button>
                        <div class="panel panel-default inquiry">
                            <div class="panel-body help-panel">
                                Doesn't have an account? <a data-toggle="modal" data-target="#signup">Sign-up</a>
                            </div>
                        	</div>
                 	   </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal for sign-up -->
        <div id="signup" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
            <div class="modal-dialog modal-lg" role="document" style="max-width: 680px">
                <div class="modal-content">
                    <div class="container-fluid signup" style="margin: 0; margin-bottom: 20px">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h3 class="modal-title" style="font-weight: bold"><center>Sign up</center></h3>
                        </div>
                        <div class="container-fluid" style="margin-top: 10px">
                            <form class="form-inline" action = "includes/signup.inc.php" method = "POST">
                                <div class="form-group" style="padding: 2px; padding-bottom: 10px;">
                                    <medium class="form-text" style="display: block; font-weight:bold">First Name</medium>
                                    <input type="text" class="form-control" name = "firstName" placeholder="Enter first name" required="required" />
                                </div>
                                <span>
                                    <div class="form-group" style="padding: 2px; padding-bottom: 10px;">
                                        <medium class="form-text" style="display: block; font-weight:bold">Middle Name</medium>
                                        <input  type="text" class="form-control" name = "middleName" placeholder="Enter middle name" required="required" />
                                    </div>
                                    <div class="form-group" style="padding: 2px; padding-bottom: 10px;">
                                        <medium class="form-text" style="display: block; font-weight:bold">Last Name</medium>
                                        <input type="text" class="form-control" name = "lastName" placeholder="Enter last name" required="required" />
                                    </div>
                                </span>
                                <br>
                                <div class="form-group" style="padding: 2px; padding-bottom: 10px;">
                                    <medium class="form-text" style="display: block; font-weight:bold">Employee ID</medium>
                                    <input type="text" class="form-control" name = "empid" placeholder="Enter Employee ID" required="required" />
                                </div>
                                <span>
                                    <div class="form-group" style="padding: 2px; padding-bottom: 10px;">
                                        <medium class="form-text" style="display: block; font-weight:bold">Password</medium>
                                        <input type="password" class="form-control" name = "password" placeholder="Enter password" required="required" />
                                    </div>
                                    <div class="form-group" style="padding: 2px; padding-bottom: 10px;">
                                        <medium class="form-text" style="display: block; font-weight:bold">Re-enter password</medium>
                                        <input type="password" class="form-control" name = "passwordcon" placeholder="Re-enter password" required="required" />
                                    </div>
                                </span>
                                <br>
                                <label class="radio-inline">
                                    <input type="radio" name="admin">Admin
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="driver">Driver
                                </label>
                                <center>
                                    <div class="col-lg-12">
                                        <button type="submit" name ="submit" class="btn btn-primary" id="btnContactUs">Sign Up</button>
                                    </div>
                                </center>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>