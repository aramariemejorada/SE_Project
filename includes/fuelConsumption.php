<?php
    echo '<div id="tabs" class="tab-content container">
        <div id="input" class="tab-pane fade in active">
            <form class="form-inline" action="php/form.inc.php" method="POST" style="padding:15px;">
                <p style="font-weight: bold">Note: All fields are required.</p>
                <h3>Fuel Consumption</h3>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Balance in Tank
                    </small>  
                    <input type="number" class="form-control input-id" name="balance" placeholder="ltrs.">        
                </div>
                <span>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Purchased Fuel Outside                                
                        </small>
                        <input type="number" class="form-control input-id" name="purchased" placeholder="ltrs.">
                    </div>
                    <div class="form-group">
                        <small class="form-text text-muted" style="display: block">
                            Consumed Fuel                                
                        </small>
                        <input type="number" class="form-control input-id" name="fuelUsed" placeholder="ltrs.">
                    </div>
                </span>
                <hr>
                <h3 style="margin-bottom: 0">Additional Information</h3>
                <p style="font-weight: bold">Note: Optional.</p>
                <div class="form-group">
                    <small class="form-text text-muted" style="display: block">
                        Oil Consumed                                
                    </small>
                    <input type="number" class="form-control input-id" name="oil" placeholder="ltrs.">
                </div>
                <span>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Gear Oil Used                                
                        </small>
                        <input type="number" class="form-control input-id" name="gearOil" placeholder="ltrs.">
                    </div>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Lubricant Oil Used                                
                        </small>
                        <input type="number" class="form-control input-id" name="lubricantOil" placeholder="ltrs.">
                    </div>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Grease Used/Issued                                
                        </small>
                        <input type="number" class="form-control input-id" name="grease" placeholder="ltrs.">
                    </div>
                    <div class="form-group"> 
                        <small class="form-text text-muted" style="display: block">
                            Remarks                                
                        </small>
                    <input type="text" class="form-control input-id" name="remarks" placeholder="ltrs.">
                </div>
                </span>       
                <br>
                <center>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary" name="submitAndPrint" style="min-width:150px; margin-top: 10px;">Submit & Print</button> 
                </div>
                </center>
            </form> 
        </div>                
    </div>'

?>