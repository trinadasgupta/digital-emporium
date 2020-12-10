<?php
include "lib/config.php";
include "lib/header.php";


$sql = "SELECT * FROM `customers` WHERE `cust_id` = '$_SESSION[cust_login_id]'";
$res = $db->query($sql);
$row = $res->fetch_array();

?>
<!-- ~~~~~~~~~~ CHECK OUT FORM DESIGN ~~~~~~~~~~  -->
   <div class="products">
	   		<h5 class="latest-product">Checkout Form</h5>	
   </div>	 
 <div class="clearfix"> </div>			 

  <form name = orderForm method = post ACTION  = order.php> 
	 <div class="  register-top-grid">
		<h3>BILLING INFORMATION</h3>
		<div class="mation">
			<span>Full Name<label>*</label></span>
			<input type="text" required name = "cust_name" value = "<?=$row['cust_name']?>"> 
		
			 <span>Email Address<label>*</label></span>
			 <input type="email" required  name = "cust_email" STYLE = "border: 1px solid #EEE; outline-color: #FF5B36;  width: 85%;  font-size: 1em; padding: 0.5em;  margin: 0.5em 0;" value = "<?=$row['cust_email']?>"> 
			
			<span>Phone<label>*</label></span>
			<input type="text" required name = "cust_phone" value = "<?=$row['cust_phone']?>"> 
			
			<span>Address<label>*</label></span>
			<textarea name = "cust_address" STYLE = "border: 1px solid #EEE; outline-color: #FF5B36;  width: 85%;  font-size: 1em; padding: 0.5em;  margin: 0.5em 0;"><?=$row['cust_address']?></textarea>
		</div>

 		<div class="clearfix"> </div>
		   <a class="news-letter" href="#">
			 <label class="checkbox"><input type="checkbox" name="checkbox" ONCLICK = "samify()"><i> </i>Same as above</label>
		   </a>
		

		<h3>SHIPPING INFORMATION</h3>
		<div class="mation">
			<span>Full Name<label>*</label></span>
			<input type="text" required name = "delivery_name"> 
				
			<span>Phone<label>*</label></span>
			<input type="text" required name = "delivery_phone"> 
			
			<span>Address<label>*</label></span>
			<textarea name = "delivery_address" STYLE = "border: 1px solid #EEE; outline-color: #FF5B36;  width: 85%;  font-size: 1em; padding: 0.5em;  margin: 0.5em 0;"></textarea>
		</div>
		 </div>
		 <div class="  register-bottom-grid">
				<h3>Payment Information</h3>
				<div class="mation">
					<span><INPUT TYPE = RADIO NAME = payment_info VALUE = cod checked> Cash on Delivery</span>
					
					<span><INPUT TYPE = RADIO NAME = payment_info VALUE = card> Online Payment (Credit/Debit Card)</span>
					
				</div>
		 </div>

	<br>
	<input type="submit" class = nikPinkButton value="submit  order">

	</form>
	<div class="clearfix"> </div>

<SCRIPT LANGUAGE = "Javascript">
function samify()
{
	document.orderForm.delivery_name.value = document.orderForm.cust_name.value;
	document.orderForm.delivery_phone.value = document.orderForm.cust_phone.value;
	document.orderForm.delivery_address.value = document.orderForm.cust_address.value;
}
</SCRIPT>

 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
<?php
include "lib/footer.php";
?>