<?php 
    echo '<form class="form-inline" style="padding:15px;">
        <p style="font-weight: bold">Note: All fields are required.</p>
        <h3 style="margin-top: 0">For Approval</h3>                   
        <div class="form-group">
            <small class="form-text text-muted" style="display: block">
                Date (From)
            </small>
            <input type="date" class="form-control input-id" id="beforeDate1"> —
        </div>
        <span>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Date (To)
                </small>
                <input type="date" class="form-control input-id" id="beforeDate2">
            </div>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Authorized Passenger
                </small>
                <input type="text" class="form-control input-id" id="beforePass" placeholder="Passenger"> 
            </div>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Vehicle Used
                </small>
                <input type="text" class="form-control input-id" id="beforePlateNo" placeholder="Plate No.">
            </div>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Destination/s
                </small>
                <input type="text" class="form-control input-id" id="beforeDest" placeholder="Place">
                <button type="button" class="btn btn-sm">Add</button>
            </div>  
            <div class="form-group">
            <small class="form-text text-muted" style="display: block">
                Purpose
            </small>
            <textarea cols="60" class="form-control input-id" id="beforePurp" placeholder="Enter text here."></textarea>
        </div> 
        </span> 
    </form> '
?>