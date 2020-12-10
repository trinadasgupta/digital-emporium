<?php
include "lib/config.php";
include "lib/login_check.php";

if($_GET['move_to_old'])
{
    $sql = "UPDATE `orders` SET `status` = 'old' WHERE `order_id` = '$_GET[move_to_old]'";
    $db->query($sql);
    Header("Location: new_orders.php");
}

if($_GET['move_to_new'])
{
    $sql = "UPDATE `orders` SET `status` = 'new' WHERE `order_id` = '$_GET[move_to_new]'";
    $db->query($sql);
    Header("Location: old_orders.php");
}

include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">Order Details</h4>
        </div>
        <div class="content">
            <?=$msg?>
          <table class="table table-hover table-striped">
              
            <?php
            $sql = "SELECT * FROM `orders` WHERE `order_id` = '$_GET[order_id]'";
            $res = $db->query($sql);
            $row = $res->fetch_array();
            
            $sql2 = "SELECT * FROM `customers` WHERE `cust_id` = '$row[cust_id]'";
            $res2 = $db->query($sql2);
            $row2 = $res2->fetch_array();

            print " 
                   <tr>
                        <td> &nbsp;  &nbsp; Date:</td>
                        <td>".date("D-d-M-Y",$row[date])."</td>                       
                    </tr>
                     <tr>
                        <td><strong>Billing Info</strong></td>
                        <td></td>                       
                    </tr>
                    <tr>
                        <td> &nbsp;  &nbsp; Billing Name:</td>
                        <td>$row2[cust_name]</td>                       
                    </tr>
                    <tr>
                        <td> &nbsp;  &nbsp; Billing Email:</td>
                        <td>$row2[cust_email]</td>                       
                    </tr>
                    <tr>
                        <td> &nbsp;  &nbsp; Billing Phone:</td>
                        <td>$row2[cust_phone]</td>                       
                    </tr>
                    <tr>
                        <td> &nbsp;  &nbsp; Billing Address:</td>
                        <td>$row2[cust_address]</td>                       
                    </tr>
                    <tr>
                        <td><strong>Shipping Info</strong></td>
                        <td></td>                       
                    </tr>

                    <tr>
                        <td> &nbsp;  &nbsp; Shipping Name:</td>
                        <td>$row[delivery_name]</td>                       
                    </tr>
                     <tr>
                        <td> &nbsp;  &nbsp; Shipping Phone:</td>
                        <td>$row[delivery_phone]</td>                       
                    </tr>
                    <tr>
                        <td> &nbsp;  &nbsp; Shipping Address:</td>
                        <td>$row[delivery_address]</td>                       
                    </tr>
                     <tr>
                        <td><strong>Order Details</strong></td>
                        <td></td>                       
                    </tr>
            </table>

            <table CLASS = nikCart WIDTH = 100% STYLE = \"border: 2px solid BLACK;padding: 10px;\">
          <tr>
            <th>No.</th>
            <th colspan = 2> Product </th>
            <th>Price</th>
            <th>Quantity</th>
            <th>SubTotal</th>
          </tr>
                    ";

            $sql3 = "SELECT * FROM `cartitems` WHERE `order_id` = '$row[order_id]'";
            $res3 = $db->query($sql3);
            while ($row3 = $res3->fetch_array())
            {
                $sql4 = "SELECT * FROM `products` WHERE `id` = '$row3[pid]'";
                $res4 = $db->query($sql4);
                $row4 = $res4->fetch_array();

                $c++;
                $sub = $row3['product_price'] * $row3[quantity];
                print "<tr>
            <td>$c</td>
            <td> <IMG SRC = \"../$row4[image]\" WIDTH = 50> </td>
            <td> $row3[product_name] </td>
            <td> $row3[product_price] </td>
            <td> $row3[quantity] </td>
            <td> $sub </td>
          </tr>";

            }
            ?>
                       
                                 
                                    </tbody>
                                </table>
        <HR>
        <center>


        <A HREF = "print_order.php?order_id=<?=$_GET['order_id']?>">Print Order</A>
        &nbsp; |  &nbsp; 
        <?php
        if ($row['status'] == "new") 
            print '<A HREF = "order_details.php?move_to_old='.$_GET['order_id'].'" onclick = "return confirm(\'Are you sure?\');">Move to Old Orders</A>';
        else
           print '<A HREF = "order_details.php?move_to_new='.$_GET['order_id'].'" onclick = "return confirm(\'Are you sure?\');">Move to New Orders</A>';

        ?>
        </center>
        </div>
    </div>
</div>
<!-- End a Form -->     
<?php
include "lib/footer.php";
?>