<?php
include "lib/config.php";
include "lib/login_check.php";
include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">Best Customers</h4>
        </div>
        <div class="content">
       
             <table class="table table-hover table-striped">
                                    <thead>
                                        <th>Cust_Id</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Total</th>
                                        <th>Details</th>
                                    </thead>
                                    <tbody>
            <?php
            $sql = "SELECT * FROM `customers` WHERE 1";
            $res = $db->query($sql);
            while($row = $res->fetch_array())
            {

            $cust_id = $row['cust_id'];

            $sql2 = "SELECT * FROM `orders` WHERE `cust_id` = '$row[cust_id]'";
            $res2 = $db->query($sql2);
            $row2 = $res2->fetch_array();

            $total = 0;
            $sql3 = "SELECT * FROM `cartitems` WHERE `order_id` = '$row2[order_id]'";
            $res3 = $db->query($sql3);
            while( $row3 = $res3->fetch_array() )
            {
                $total += $row3['product_price'] * $row3['quantity'];
            }

            $arr_totals[$cust_id] = $total;
            $arr_rows  [$cust_id]   = "<tr>
                                    <td>$row[cust_id]</td>
                                    <td>$row[cust_name]</td>
                                    <td>$row[cust_email]</td>
                                    <td>$row[cust_phone]</td>
                                    <td>$total</td>
                                    <td><A HREF = \"?????.php?del_id=$row[cid]\">Details</A></td>
                                </tr>";
            }

            //Sort Array

            for ($i=0; $i< count($arr_totals); $i++) {
                for ($j=$i+1; $j< count($arr_rows); $j++) {

                    if ( $arr_totals[$i] < $arr_totals[$j] ) {
                      
                        //Swap Totals
                        $temp           = $arr_totals[$i];
                        $arr_totals[$i] = $arr_totals[$j];
                        $arr_totals[$j] = $temp;

                        //Swap Rows
                        $temp           = $arr_rows[$i];
                        $arr_rows[$i]   = $arr_rows[$j];
                        $arr_rows[$j]   = $temp;
                    }
                }
            }


            //Print Array
            for ($i=0; $i< count($arr_totals); $i++) {
                print $arr_rows[$i];
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