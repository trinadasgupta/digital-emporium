<?php

  date_default_timezone_set("Asia/Kolkata");

include "lib/config.php";
include "lib/login_check.php";

include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-12">
    <div class="card">
        <div class="header">
            <h4 class="title">Admin Home</h4>
        </div>
        <div class="content">
              <div class="alert alert-success"><span>Welcome, Dear Admin.</span></div>
              Last login details:

               <table class="table table-hover table-striped">
                                    <thead>
                                        <th>IP</th>
                                        <th>Username</th>
                                        <th>Time</th>
                                        <th>System</th>
                                    </thead>
                                    <tbody>
                                       
              <?php
			  error_reporting(E_ALL & ~E_NOTICE);
                $sql = "SELECT * FROM `admin_log` ORDER BY id DESC LIMIT 0,10";
                $res = $db->query($sql);
                while($row = $res->fetch_array())
                {
                    print " <tr>
                            <td>$row[ip]</td>
                            <td>$row[username]</td>
                            <td>".date("d-M-Y,H:i:s",$row['timestamp'])."</td>
                            <td>$row[system]</td>
                        </tr>";
                }

                ?>
            </tbody>
            </table>
        </div>
    </div>
</div>
<!-- End a Form -->     
<?php
include "lib/footer.php";
?>