<?php
include "lib/config.php";
include "lib/header.php";
?>
<!-- @@@@@@@@@@@@@@@@@@@@@ -->
<!-- @@@@@@@@@@@@@@@@@@@@@ -->
 <div class="products">
 	<h5 class="latest-product">LATEST PRODUCTS</h5>	
 	  <a class="view-all" href="index.php">VIEW ALL<span> </span></a> 		     
 </div>
 <div class="product-left">


 <!--------- start product --------  grid-top-chain -->
 <?php
 $sql = "SELECT * FROM `products` ORDER BY `id` DESC";
 $res = $db->query($sql);
 while($row = $res->fetch_array())
 {
 	$c++;
 	if($c%3==0){
		
 		$extra = ' grid-top-chain ';
		echo "<br>";

	}
 	else
 		$extra = '';

 	print '
 	<div class="col-md-4 chain-grid '.$extra.'">
 		<a href="details.php?id='.$row['id'].'"><img class="img-responsive chain" src="'.$row['image'].'" alt=" " /></a>
 		<span class="star"> </span>
 		<div class="grid-chain-bottom">
 			<h6><a href="details.php?id='.$row['id'].'">'.$row['name'].'</a></h6>
 			<div class="star-price">
 				<div class="dolor-grid"> 
     				<span class="actual">Rs.'.$row['price'].'</span>
     				 
     				   
 				</div>
 				<a class="now-get get-cart" href="details.php?id='.$row['id'].'">Details</a> 
 				<div class="clearfix"> </div>
		</div>
 		</div>
 	</div>';
	
 }

 	?>
<!--------- end product -------->
  
  
 	 <div class="clearfix"> </div>
 </div>
<!-- @@@@@@@@@@@@@@@@@@@@@ -->
<?php
include "lib/footer.php";
?>