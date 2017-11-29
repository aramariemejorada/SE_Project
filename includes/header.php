<?php
session_start();
    echo '<div class="panel panel-default">
        <div class="panel-heading container" style="background-color:white; padding: 20px;">
        <img src="images\logo-solo.png" style="width:170px; margin:auto;">
        <span class="tt">Trip Ticket</span>
        <span class="logout">Hello,<b>'. $_SESSION['u_id'] . '</b>| &nbsp&nbsp<a href="includes/logout.inc.php">Log Out</a></span>
        </div>
    </div>';
?>