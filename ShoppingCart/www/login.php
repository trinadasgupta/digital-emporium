<?php
include "lib/config.php";
include "lib/header.php";

?>
<!-- ~~~~~~~~~~ CHECK OUT FORM DESIGN ~~~~~~~~~~  -->
   <div class="products">
	   		<h5 class="latest-product">Login</h5>	
   </div>	 
 <div class="clearfix"> </div>			 

 <?php
 error_reporting(E_ALL & ~E_NOTICE);
 if($_GET['msg'] == "1")
 	print "Incorrect Email/Password!";

 if($_GET['msg'] == "2")
 	print "Logout Successful!";

 ?>

  <form name = orderForm method = post ACTION  = verify.php> 
	 <div class="  register-top-grid">
		 
		<div class="mation">
		 
			 <span>Email <label>*</label></span>
			 <input type="email" required  name = "username" STYLE = "border: 1px solid #EEE; outline-color: #FF5B36;  width: 55%;  font-size: 1em; padding: 0.5em;  margin: 0.5em 0;"> 
			
			<span>Password<label>*</label></span>
			<input type="password" required name = "password" STYLE = "border: 1px solid #EEE; outline-color: #FF5B36;  width: 55%;  font-size: 1em; padding: 0.5em;  margin: 0.5em 0;"> 
		</div></div>
	<input type="submit" class = nikPinkButton value=" Login ">

	</form>
	<div class="clearfix"> </div>
 

 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
<?php
include "lib/footer.php";
?>