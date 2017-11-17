<?php
    echo '<div id="tabs" class="tab-content container">
        <div id="input" class="tab-pane fade in active">
            <form class="form-inline" action="php/form.inc.php" method="POST" style="padding:15px;">
                <p style="font-weight: bold">Note: All fields are required.</p>
                <h3 style="margin-top: 0">Basic Information</h3>                    
                <div class="form-group">
                    <input type="date" class="form-control input-id" name="dateDepart">  
                    <small class="form-text text-muted" style="display: block">
                        Departure Date of Travel
                    </small>
                </div>
                <span>
                    <div class="form-group">
                        <input type="date" class="form-control input-id" name="dateArrive">  
                        <small class="form-text text-muted" style="display: block">
                            Arrival Date of Travel
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-id" name="plateNo" placeholder="Plate No.">
                        <small class="form-text text-muted" style="display: block">
                            Vehicle Used
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="time" class="form-control input-id" name="timeOfDepart">
                        <small class="form-text text-muted" style="display: block">
                            Departure Time
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="time" class="form-control input-id" name="timeOfArrival">
                        <small class="form-text text-muted" style="display: block">
                            Arrival Time
                        </small>
                    </div>                        
                </span>
                <hr>
                <h3>Fuel Consumption</h3>
                <div class="form-group">
                    <input type="number" class="form-control input-id" name="balance" placeholder="ltrs.">
                    <small class="form-text text-muted" style="display: block">
                        Fuel Balance
                    </small>                     
                </div>
                <span>
                    <div class="form-group">
                        <input type="number" class="form-control input-id" name="purchased" placeholder="ltrs.">
                        <small class="form-text text-muted" style="display: block">
                            Purchased Fuel Outside                                
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control input-id" name="fuelUsed" placeholder="ltrs.">
                        <small class="form-text text-muted" style="display: block">
                            Fuel Used                                
                        </small>
                    </div>
                </span>
                <hr>
                <h3>Destination</h3>
                <div class="form-group">
                    <input type="text" class="form-control input-id" name="departure" placeholder="Enter Place">
                    <small class="form-text text-muted" style="display: block">
                        Departure Place                                
                    </small>
                </div>
                <span>
                    <div class="form-group">
                        <input type="text" class="form-control input-id" name="arrival" placeholder="Enter Place">
                        <small class="form-text text-muted" style="display: block">
                            Arrival Place                                
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control input-id" name="distanceTravelled" placeholder="km">
                        <small class="form-text text-muted" style="display: block">
                            Travelled Distance                                
                        </small>
                    </div>
                </span>
                <br>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submit" style="min-width:150px; margin-top: 10px;">Submit</button> 
                </div>
            </form> 
        </div>                
    </div>'
?>