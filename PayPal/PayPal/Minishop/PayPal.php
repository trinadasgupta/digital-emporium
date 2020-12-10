<?php

//connect to db

//$sql = "INSERT INTO `orders` VALUES ('','$_POST[fullname]','$_POST[email]','$_POST[phone]','$_POST[address]');";

//Insert into DB etc

//$order_id   =  $db->insert_id     (Fetch an order ID etc)

$quantity = $_POST['quantity'];
$order_id = 36;

?>
<FORM ACTION="https://www.paypal.com/cgi-bin/webscr" METHOD="POST">

<INPUT TYPE="hidden" NAME="cmd" VALUE="_xclick">
<INPUT TYPE="hidden" NAME="business" VALUE="JamaiThali@gmail.com">
<INPUT TYPE="hidden" NAME="item_name" VALUE="Thali">
<INPUT TYPE="hidden" NAME="item_number" VALUE="<?=$order_id?>">
<INPUT TYPE="hidden" NAME="quantity" VALUE="<?=$quantity?>">
<INPUT TYPE="hidden" NAME="amount"   VALUE="10">

<INPUT TYPE="hidden" NAME="discount_rate"   VALUE="10">
<INPUT TYPE="hidden" NAME="discount_rate2"   VALUE="50">


<INPUT TYPE="hidden" NAME="shipping"   VALUE="5">
<INPUT TYPE="hidden" NAME="tax_rate" VALUE="15">

<INPUT TYPE="hidden" NAME="currency_code" VALUE="USD">

<INPUT TYPE="SUBMIT" VALUE = "Pay on PayPal">
</FORM>