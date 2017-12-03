<div class="container">
    <div class="container table-responsive" style="padding-left: 0">
                <?php
            include_once 'dbh.inc.php';
            $show_users= 'SELECT * from employee';
            $show_users_query = mysqli_query($conn,$show_users);
            echo '
            <table id="table" class="table table-hover">
                <thead>
                    <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Role</th>
                    </tr>
                 </thead>';
            while($row = mysqli_fetch_assoc($show_users_query))
            {
                $id = $row["emp_id"];
                echo"
                <td>".$row["emp_id"]."</td>
                <td>".ucwords($row["firstname"])." ".ucwords($row["middlename"])." ".ucwords($row["lastname"])."</td>
                <td>".$row["role"]."</td>
                <td><button class='removeUser' value=$id>Delete</button></td>
                </tr>";
            }
            echo "</table>";
            ?>
    </div>
</div>