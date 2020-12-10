<?php
include "lib/config.php";
include "lib/login_check.php";
error_reporting(E_ALL & ~E_NOTICE);
if($_GET['del_id'])
{
    $sql = "DELETE FROM `products` WHERE `id` = '$_GET[del_id]'";
    $db->query($sql);
    $msg =  '<div class="alert alert-success"><span>Delete Successful.</span></div>';
}

include "lib/header.php";
?>
<!-- Start a Form --> 
<div class="col-md-8">
    <div class="card">
        <div class="header">
            <h4 class="title">Manage Products</h4>
        </div>
        <div class="content">
            <?=$msg?>

             <table class="table table-hover table-striped">
                                    <thead>
                                        <th>ID</th>
                                        <th>Pic</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Category </th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </thead>
                                    <tbody>
            <?php
            $sql = "SELECT * FROM `products` WHERE 1";
            $res = $db->query($sql);
            while($row = $res->fetch_array())
            {

                $sql2 = "SELECT * FROM `category` WHERE `cid` = '$row[cid]'";
                $res2 = $db->query($sql2);
                $row2 = $res2->fetch_array();

              print "<tr>
                        <td>$row[id]</td>
                        <td><IMG SRC = \"../$row[image]\" WIDTH = 50></td>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td>$row2[cname]</td>
                        <td><A HREF = edit_product.php?edit_id=$row[id]>Edit</A></td>
                        <td><A HREF = \"manage_products.php?del_id=$row[id]\" ONCLICK = \"return confirm('Are you sure?');\">Delete</A></td>
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