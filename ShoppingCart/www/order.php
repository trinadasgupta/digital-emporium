<?php
$send_to_paypal = true;

include "lib/config.php";
include "lib/header.php";

if($_SESSION['cust_login_id']>0)
{
	$cust_id  = $_SESSION['cust_login_id'];
}
else
{
	$pass = rand(111111,999999);
	$sql = "INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_address`, `password`) VALUES ('', '$_POST[cust_name]', '$_POST[cust_email]', '$_POST[cust_phone]', '$_POST[cust_address]', '$pass');";
	$db->query($sql);

	//Get cust id
	$cust_id = $db->insert_id; //This function returns the last auto generated id
}
//Insert into Orders
$sql = "INSERT INTO `orders` (`order_id`, `cust_id`, `date`, `payment_info`, `delivery_name`, `delivery_phone`, `delivery_address`, `status`) VALUES (NULL, '$cust_id', '".time()."', '$_POST[payment_info]', '$_POST[delivery_name]', '$_POST[delivery_phone]', '$_POST[delivery_address]', 'new');";
$db->query($sql);

//Get order id
$order_id = $db->insert_id; //This function returns the last auto generated id

//Insert cartitems
  foreach ($_SESSION['cart'] as $pid => $quantity) {
  
  $sql = "SELECT * FROM `products` WHERE `id` = '$pid'";
  $res = $db->query($sql);
  $row = $res->fetch_array();

  $sql = "INSERT INTO `cartitems` (`id`, `order_id`, `pid`, `quantity`, `product_name`, `product_price`) VALUES (NULL, '$order_id', '$pid', '$quantity', '$row[name]', '$row[price]');";
  $db->query($sql);
}

//delete cart contents
//unset($_SESSION['cart']);
if($_POST['payment_info'] == "cod")
{
 print '<H1>Thank you for your order. We will deliver the products in 3-4 working Days</H1>';
}
else
{
	?>

<BR><BR>
<CENTER>
<form id="payform" name = "payform" action="https://www.paypal.com/cgi-bin/webscr" method="post">
	<input type="hidden" name="cmd" value="_cart" />
	<input type="hidden" name="upload" value="1">  
	<input type="hidden" name="business" value="info@monginis.com" />
		<?php
	 foreach ($_SESSION['cart'] as $pid => $quantity) {
  
		  $sql = "SELECT * FROM `products` WHERE `id` = '$pid'";
		  $res = $db->query($sql);
		  $row = $res->fetch_array();

		  $num++;
		  print '<!-- @@@@@ -->
		<input type="hidden" name="item_name_'.$num.'" value="'.$row['name'].'" />
		<input type="hidden" name="amount_'.$num.'"    value="'.$row['price'].'" />
		<input type="hidden" name="quantity_'.$num.'"  value="'.$quantity.'" />
		<!-- @@@@@ -->';
		}
	?>	
	<!--
	<INPUT TYPE="image" NAME="submit" BORDER="0" SRC="http://www.paypal.com/en_US/i/btn/btn_buynow_LG.gif">
 	-->
  </form>

  <BR><BR>
  <IMG SRC = "images/ajax-loader.gif">
  <BR><BR>
  Please wait for 5 seconds while we contact PayPal or click <A HREF = # ONCLICK = "document.payform.submit(); return false;">here</A>.
 </CENTER>

	<?php
}
?>
<?php
include "lib/footer.php";
?>