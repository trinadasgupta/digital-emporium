<?php
include "lib/config.php";
include "lib/login_check.php";

if($_GET['del_id'])
{
    $sql = "DELETE FROM `dsfdssdfdsf` WHERE `cid` = '$_GET[del_id]'";
    $db->query($sql);
    $msg =  '<div class="alert alert-success"><span>Delete Successful.</span></div>';
}

include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">View New Customers</h4>
        </div>
        <div class="content">
            <?=$msg?>

             <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Cust Id</th>
                                        <th>Customer Name</th>
                                        <th>Total</th>
                                        <th>Address</th>
                                        <th>View Details</th>
                                    </thead>
                                    <tbody>
            <?php
            $sql = "SELECT * FROM `customers` ORDER BY `cust_id` DESC";
            $res = $db->query($sql);
            while($row = $res->fetch_array())
            {

                $sql2 = "SELECT * FROM `orders` WHERE `cust_id` = '$row[cust_id]'";
                $res2 = $db->query($sql2);
                $row2 = $res2->fetch_array();

                $sql3 = "SELECT * FROM `cartitems` WHERE `order_id` = '$row2[order_id]'";
                $res3 = $db->query($sql3);
                while($row3 = $res3->fetch_array())
                {
                    $total += $row3['product_price'] * $row3['quantity'];
                }



              print "<tr>
                        <td>$row[cust_id]</td>
                        <td>$row[cust_name]</td>
                        <td>$total</td>
                        <td>$row[cust_address]</td>
                        <td><A HREF = customer_details.php?cust_id=$row[cust_id]>Details</A></td>
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