<?php
error_reporting(E_ALL & ~E_NOTICE);
include "lib/config.php";
include "lib/header.php";
?>
<!-- ############################################ -->
  
  

  <!-- %%%%%%%%%%%% VIEWCART DESIGN %%%%%%%%%%%%%%%% -->
   <div class="products">
              <h5 class="latest-product">View Cart</h5> 
   </div>  
   <FORM ACTION = add.php METHOD = POST>
      <table CLASS = nikCart WIDTH = 100% STYLE = "border: 2px solid BLACK;padding: 10px;">
      <tr>
        <th>No.</th>
        <th colspan = 2> Product </th>
        <th>Price</th>
        <th>Quantity</th>
        <th>SubTotal</th>
        <th>Remove</th>
      </tr>
 <?php
 error_reporting(E_ALL & ~E_NOTICE);
  foreach ($_SESSION['cart'] as $pid => $quantity) 
  {
  
  $sql = "SELECT * FROM `products` WHERE `id` = '$pid'";
  $res = $db->query($sql);
  $row = $res->fetch_array();

  $subtotal = $row['price']*$quantity;
  $total += $subtotal;
  $c++;
    print "<tr>
        <td>$c</td>
        <td><IMG SRC = \"$row[image]\" WIDTH = 50></td>
        <td>$row[name]</td>
        <td>Rs.$row[price]</td>
        <td><INPUT TYPE = TEXT NAME = newCart[$pid] VALUE = $quantity SIZE = 3></td>
        <td>$subtotal</td>
        <td><a href=\"add.php?del_id=$pid\" ONCLICK = \"return confirm('Are you sure?');\">X Remove</a></td>
      </tr>";
  }
  
  ?>
      
      <tr>
        <th colspan = 4></th>
        <th>TOTAL</th>
        <th>Rs. <?=$total?></th>
        <th></th>
      </tr>
    </table>
    <CENTER>
      <BR><INPUT TYPE = "SUBMIT"  VALUE = " Update Cart Quantities " STYLE = "
    font-size: 1.1em;color: #fff;padding: 0.6em 0.8em; background: #323A45; text-decoration: none; border: none;">
    </CENTER>
    </FORM>
    <DIV STYLE = "width: 100%; text-align: center;">
    
      <br> <br> 
        <a class="now-get" href="checkout.php">CheckOut</a> &nbsp; 
        <a class="now-get" href="index.php">Continue Shopping</a> 
    </DIV>
  <div class="clearfix"> </div>

 <!-- %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%% -->
  <!-- ############################################ -->
<?php
include "lib/footer.php";
?>