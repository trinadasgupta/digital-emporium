<?php
include "lib/config.php";
include "lib/header.php";

?>
<!-- ~~~~~~~~~~ CHECK OUT FORM DESIGN ~~~~~~~~~~  -->
   <div class="products">
	   		<h5 class="latest-product">Welcome, <?=$_SESSION['cust_name']?></h5>	
   </div>	 
 <div class="clearfix"> </div>			 
 Account Home &nbsp; | &nbsp; 
 Edit Account Details &nbsp; | &nbsp; 
 View Orders &nbsp; | &nbsp; 
 <A HREF = "logout.php">Logout</A>



 <!--<div class="products">
	   		<h5 class="latest-product">Welcome, <?=$_SESSION['firstname']?></h5>	
   </div>	 
 <div class="clearfix"> </div>			 
 Account Home &nbsp; | &nbsp; 
 Edit Account Details &nbsp; | &nbsp; 
 View Orders &nbsp; | &nbsp; 
 <A HREF = "logout.php">Logout</A>
  

 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
<?php
include "lib/footer.php";
?>