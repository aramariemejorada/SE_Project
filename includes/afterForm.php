<?php
    include_once 'dbh.inc.php';
    echo '
    <div id="tabs" class="tab-content container">
        <div id="input" class="tab-pane fade in active">
            <form id="after-form" class="form-inline" style="padding:15px;">
                <p style="font-weight: bold">Note: All fields are required.</p>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Initial Odometer Reading
                    </small>
                    <input type="text" class="form-control input-id" id="s_odomReading">
                    <small class="form-text text-muted" style="display: block">
                        Final Odometer Reading
                    </small>
                    <input type="text" class="form-control input-id" id="f_odomReading"><br><br>
                    <input type="checkbox" id="odomCheck" checked>Manual Input (Check if odometer is out of order.)
                </div> 
                <div id="after_info">
                    <hr>
                    <br>
                    <h3 style="margin-top: 0">Basic Information</h3>
                    <small class="form-text text-muted" style="display: block">
                        Insert data to  trip ticket dated:
                    </small>
                    <select class="form-control" style="width: 30%;" id="select-type1" required="required">
                    <option value = "0">None</option>';
                        $date = 'SELECT * FROM trip_ticket where final_balance is NULL and emp_id='.$_SESSION['u_id'];
                        $date_query = mysqli_query($conn,$date);
                        $option = '';
                        if(mysqli_num_rows($date_query)==0){
                            $option = "none";
                        }else{
                            while($row = mysqli_fetch_assoc($date_query))
                            {
                                $option .= '<option value = "'.$row['trip_ticket_date'].'">'.$row['trip_ticket_date'].'</option>';
                                
                            }
                        }
                        echo $option;
                        echo '
                    </select><br><br>                  
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Date
                        </small>
                        <input type="date" class="form-control input-id" id="dateDepart">
                    </div>
                    <span>
                        <div class="form-group">
                            <small class="form-text text-muted" style="display: block">
                                Departure Time
                            </small>
                            <input type="time" class="form-control input-id" id="timeOfDepart">
                        </div>
                        <div class="form-group">
                            <small class="form-text text-muted" style="display: block">
                                Arrival Time
                            </small>
                            <input type="time" class="form-control input-id" id="timeOfArrival">
                        </div>               
                    </span>
                    <hr>
                    <h3>Destination</h3>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Departure Place                                
                        </small>
                        <input type="text" class="form-control input-id" id="departure" placeholder="Enter Place">
                    </div>
                    <span>
                        <div class="form-group">
                            <small class="form-text text-muted" style="display: block">
                                Arrival Place                                
                            </small>
                            <input type="text" class="form-control input-id" id="arrival" placeholder="Enter Place">
                        </div>
                    </span>     
                    <br>
                    <center>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" id="submit_after_button" style="min-width:150px; margin-top: 10px;">Submit</button> 
                    </div>
                    </center>
                </div>
            </form> 
        </div>                
    </div>'
?>