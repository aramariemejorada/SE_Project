<?php 
    echo '<form action ="php/search.inc.php" method="POST">
        <div class="input-group" style="padding-left: 15px; padding-top: 20px; max-width: 370px; float:left;">
            <input type="text" class="form-control" name="toSearch" placeholder="Driver ID/License Plate/Vehicle Type">
            <span class="input-group-btn"> 
            	<button class="btn btn-default" name="submit" type="submit">Search</button>
            </span>
        </div>
    </form>'
?>