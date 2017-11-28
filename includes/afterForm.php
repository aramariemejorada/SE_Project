<?php
    echo '<div id="tabs" class="tab-content container">
        <div id="input" class="tab-pane fade in active">
            <form class="form-inline" action="php/form.inc.php" method="POST" style="padding:15px;">
                <p style="font-weight: bold">Note: All fields are required.</p>
                <h3 style="margin-top: 0">Basic Information</h3>                    
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Departure Date of Travel
                    </small>
                    <input type="date" class="form-control input-id" name="dateDepart">
                </div>
                <span>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Arrival Date of Travel
                        </small>
                        <input type="date" class="form-control input-id" name="dateArrive"> 
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Departure Time
                        </small>
                        <input type="time" class="form-control input-id" name="timeOfDepart">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Arrival Time
                        </small>
                        <input type="time" class="form-control input-id" name="timeOfArrival">
                    </div>               
                </span>
                <hr>
                <h3>Destination</h3>
                <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Departure Place                                
                </small>
                <input type="text" class="form-control input-id" name="departure" placeholder="Enter Place">
                </div>
                <span>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Arrival Place                                
                        </small>
                        <input type="text" class="form-control input-id" name="arrival" placeholder="Enter Place">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Travelled Distance                                
                        </small>
                        <input type="number" class="form-control input-id" name="distanceTravelled" placeholder="km">
                        <button type="button" class="btn btn-sm">Add Fields</button>
                    </div>
                </span>
                <br>
                <center>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submitAndPrint" style="min-width:150px; margin-top: 10px;">Submit</button> 
                </div>
                </center>
            </form> 
        </div>                
    </div>'
?>