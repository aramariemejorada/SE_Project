<?php include_once 'dbh.inc.php';?>

<div id="tabs" class="tab-content container">
    <div id="input" class="tab-pane fade in active">
        <form id="after-form" class="form-inline" style="padding:15px;">
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Initial Odometer Reading
                </small>
                <input type="number" class="form-control input-id" id="s_odomReading">
                <small class="form-text text-muted" style="display: block">
                    Final Odometer Reading
                </small>
                <input type="number" class="form-control input-id" id="f_odomReading"><br><br>
                <input type="checkbox" id="odomCheck" checked>Manual Input (Check if odometer is out of order.)<br>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" id="submit_after_button" style="min-width:50px; margin-top: 10px;">Submit</button> 
                </div>
            </div> 
            <hr>
            <br>
            <form id="input" class="form-inline" style="padding:15px;">
                <p style="font-weight: bold">Note: All fields are required. Place zero (0) if none.</p>
                <small class="form-text text-muted" style="display: block">
                    Trip Ticket Date                                
                </small>
                <select class="form-control" style="width: 30%;" id="select-type2" required="required">
                <option value = "0">None</option>';
                <?php
                    $date = 'SELECT * FROM trip_ticket where end_balance is NULL and emp_id='.$_SESSION['u_id'];
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
                    ?>
                </select>
                <h3>Fuel Consumption</h3>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Balance in Tank
                    </small>  
                    <input type="number" class="form-control input-id" id="balance" readonly="readonly">        
                </div>
                <span>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Purchased Fuel Outside                                
                        </small>
                        <input type="number" class="form-control input-id" id="purchased">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Issued from stock                             
                        </small>
                        <input type="number" class="form-control input-id" id="issuedStock">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Distance Travelled                               
                        </small>
                        <input type="number" value="" class="form-control input-id" id="distance">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Gasoline Used                              
                        </small>
                        <input type="number" value="" class="form-control input-id" id="gasUsed" readonly="readonly">
                        <div class="form-group">
                            <button type="button" class="btn btn-primary" id="getGas"">Total</button> 
                        </div>
                    </div>
                </span><br>
                <hr>
                <h3 style="margin-bottom: 0">Additional Information</h3>
                <p style="font-weight: bold">Note: Optional.</p>
                <span>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Gear Oil Used                                
                        </small>
                        <input type="number" class="form-control input-id" id="gearOil" placeholder="ltrs.">
                    </div>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Lubricant Oil Used                                
                        </small>
                        <input type="number" class="form-control input-id" id="lubeOil" placeholder="ltrs.">
                    </div>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Grease Used/Issued                                
                        </small>
                        <input type="number" class="form-control input-id" id="grease" placeholder="ltrs.">
                    </div><br>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Remarks                                
                        </small>
                    <textarea cols="60" class="form-control input-id" id="remarks" placeholder="remarks"></textarea>
                    </div>
                    </div>
                    <center>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#fuel_modal" id="submit_fuel_button" style="min-width:150px; margin-top: 10px;">Submit</button> 
                    </div>
                    </center>
                </div>
                </span>       
                <br>

            </form> 
        </form> 
    </div>                
</div>
<div id="fuel_modal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel">
    <div class="modal-dialog modal-lg" role="document" style="max-width: 500px">
        <div class="modal-content" style="padding: 30px">
            <div class="container-fluid">
                <span>Balance in Tank:&nbsp&nbsp<span id="mod_bal" style="font-weight: bold;"></span></span>&nbspltrs.<br>
                <span>Issued from Stock:&nbsp&nbsp<span id="mod_stock" style="font-weight: bold;"></span></span>&nbspltrs.<br>
                <span>Purchase outside:&nbsp&nbsp<span id="mod_purch" style="font-weight: bold;"></span></span>&nbspltrs.<br>
                <span>Gasoline Used:&nbsp&nbsp<span id="mod_gas" style="font-weight: bold;"></span></span>&nbspltrs.<br>
                <span>Total kms. Travelled:&nbsp&nbsp<span id="mod_km" style="font-weight: bold;"></span></span>&nbspkms.<br>
                <span>Gear oil used:&nbsp&nbsp<span id="mod_gear" style="font-weight: bold;"></span></span>&nbspltrs.<br>
                <span>Lubricant Oil used:&nbsp&nbsp<span id="mod_lube" style="font-weight: bold;"></span></span>&nbspltrs.<br>
                <span>Grease used/issued:&nbsp&nbsp<span id="mod_grease" style="font-weight: bold;"></span>&nbspltrs.</span><br>
                <span>Final Balance:&nbsp&nbsp<span id="mod_fin" style="font-weight: bold;"></span>&nbspltrs.</span> <br>
            </div>
            <div class="form-group">
                <center>
                    <div class="col-lg-12">
                        <button type="button" id="printFuel" class="btn btn-primary">Submit</a></button>
                    </div>
                </center>
            </div>
        </div>
    </div>
</div>

                <!-- <div id="after_info">
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
                </div> -->
