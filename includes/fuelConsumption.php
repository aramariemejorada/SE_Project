<?php
    include_once 'dbh.inc.php';
    echo '<div id="tabs" class="tab-content container">
        <div id="input" class="tab-pane fade in active">
            <form class="form-inline" style="padding:15px;">
                <p style="font-weight: bold">Note: All fields are required.</p>
                <select class="form-control" style="width: 30%;" id="select-type2" required="required">
                <option value = "0">None</option>';
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
                    echo '
                </select>
                <h3>Fuel Consumption</h3>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Balance in Tank
                    </small>  
                    <input type="number" class="form-control input-id" id="balance" readonly>        
                </div>
                <span>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Purchased Fuel Outside                                
                        </small>
                        <input type="number" class="form-control input-id" id="purchased" placeholder="ltrs.">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Issued from stock                             
                        </small>
                        <input type="number" class="form-control input-id" id="issuedStock" placeholder="ltrs.">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Distance Travelled                               
                        </small>
                        <input type="number" class="form-control input-id" id="distance">
                    </div>
                </span>
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
                    </div>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Gasoline Used                               
                        </small>
                        <input type="number" class="form-control input-id" id="gasUsed" placeholder="ltrs.">
                    </div><br><br>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Remarks                                
                        </small>
                    <textarea cols="60" class="form-control input-id" id="remarks" placeholder="kms"></textarea>
                </div>
                </span>       
                <br>
                <center>
                <div class="form-group">
                    <button type="button" class="btn btn-primary" id="submit_fuel_button" style="min-width:150px; margin-top: 10px;">Submit & Print</button> 
                </div>
                </center>
            </form> 
        </div>                
    </div>'

?>