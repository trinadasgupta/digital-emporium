<?php
include "lib/config.php";
include "lib/login_check.php";


include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">View New Orders</h4>
        </div>
        <div class="content">
            <?=$msg?>

             <table class="table table-hover table-striped">
                                    <thead>
                                        <th>OID</th>
                                        <th>Customer Name</th>
                                        <th>Total</th>
                                        <th>Delivery To</th>
                                        <th>View Details</th>
                                    </thead>
                                    <tbody>
            <?php
            $sql = "SELECT * FROM `orders` WHERE `status` = 'new' ORDER BY `order_id` DESC";
            $res = $db->query($sql);
            while($row = $res->fetch_array())
            {

                $sql2 = "SELECT * FROM `customers` WHERE `cust_id` = '$row[cust_id]'";
                $res2 = $db->query($sql2);
                $row2 = $res2->fetch_array();

                $sql3 = "SELECT * FROM `cartitems` WHERE `order_id` = '$row[order_id]'";
                $res3 = $db->query($sql3);
                while($row3 = $res3->fetch_array())
                {
                    $total += $row3['product_price'] * $row3['quantity'];
                }



              print "<tr>
                        <td>$row[order_id]</td>
                        <td>$row2[cust_name]</td>
                        <td>$total</td>
                        <td>$row[delivery_address]</td>
                        <td><A HREF = order_details.php?order_id=$row[order_id]>Details</A></td>
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