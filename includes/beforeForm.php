<?php 
    echo '<form class="form-inline" action="php/form.inc.php" method="POST" style="padding:15px;">
        <p style="font-weight: bold">Note: All fields are required.</p>
        <h3 style="margin-top: 0">For Approval</h3>                   
        <div class="form-group">
            <small class="form-text text-muted" style="display: block">
                Date (From)
            </small>
            <input type="date" class="form-control input-id" name="date"> —
        </div>
        <span>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Date (To)
                </small>
                <input type="date" class="form-control input-id" name="date">
            </div>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Authorized Passenger
                </small>
                <input type="text" class="form-control input-id" name="passenger" placeholder="Passenger"> 
            </div>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Vehicle Used
                </small>
                <input type="text" class="form-control input-id" name="plateNo" placeholder="Plate No.">
            </div>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Destination/s
                </small>
                <input type="text" class="form-control input-id" name="destination" placeholder="Place">
                <button type="button" class="btn btn-sm">Add</button>
            </div>  
            <div class="form-group">
            <small class="form-text text-muted" style="display: block">
                Purpose
            </small>
            <textarea cols="60" class="form-control input-id" name="purpose" placeholder="Enter text here."></textarea>
        </div> 
        </span>
        
    </form> '
?>