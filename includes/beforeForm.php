<?php 
    include_once 'dbh.inc.php';

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
            <br><br>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Vehicle Used
                </small>
                <select class="form-control" id="beforePlateNo" required="required">
                <option value = "0">None</option>';
                    $car = 'SELECT * FROM vehicle';
                    $car_query = mysqli_query($conn,$car);
                    $option = '';
                    if(mysqli_num_rows($car_query)==0){
                        $option = "none";
                    }else{
                        while($row = mysqli_fetch_assoc($car_query))
                        {
                            $option .= '<option value = "'.$row['license_plate'].'">'.$row['license_plate'].'</option>';
                            
                        }
                    }
                    echo $option;
                    echo '
                </select>
            </div>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Destination/s
                </small>
                <input type="text" class="form-control input-id" id="beforeDest" placeholder="Place">
            </div>
            <div class="form-group">
                <small class="form-text text-muted" style="display: block">
                    Authorized Passenger
                </small>
                <input type="text" class="form-control input-id" id="beforePass" placeholder="Passenger"> 
            </div><br><br>  
            <div class="form-group">
            <small class="form-text text-muted" style="display: block">
                Purpose
            </small>
            <textarea cols="60" class="form-control input-id" id="beforePurp" placeholder="Enter text here."></textarea>
        </div> 
        </span> 
    </form> 
    <center>
        <div class="form-group">
            <button type="button" id="show_before_modal" class="btn btn-primary" name="submit" data-toggle="modal" data-target="#trip" style="min-width:150px; margin-top: 10px;">Submit</button> 
        </div>
    </center>'

?>