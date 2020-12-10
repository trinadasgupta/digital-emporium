
 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->
 <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~  -->

				 <div class="clearfix"> </div>
	   		   </div>   


			   <div class="sub-cate">
				<div class=" top-nav rsidebar span_1_of_left">
					<h3 class="cate">CATEGORIES</h3>
		 <ul class="menu">
		<!-- <li class="item1"><a href="#">Curabitur sapien<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
			<ul class="cute">
				<li class="subitem1"><a href="product.html">Cute Kittens </a></li>
				<li class="subitem2"><a href="product.html">Strange Stuff </a></li>
				<li class="subitem3"><a href="product.html">Automatic Fails </a></li>
			</ul>
		</li> -->
			<ul class="kid-menu ">
			<?php
			$sql = "SELECT * FROM `category` WHERE `parent_id` = '0' ";
			$res = $db->query($sql);
			while($row = $res->fetch_array())
			{
				print "<li><a href=\"products.php?cid=$row[cid]\">$row[cname]</a></li>";

				$sql2 = "SELECT * FROM `category` WHERE `parent_id` = '$row[cid]' ";
				$res2 = $db->query($sql2);
				while($row2 = $res2->fetch_array())
				{
					print "<li><a href=\"products.php?cid=$row2[cid]\"> &nbsp; &nbsp;  &nbsp; &nbsp; &raquo; $row2[cname]</a></li>";
				}
			}

			?>
			</ul>
	</ul>
					</div>
				<!--initiate accordion-->
		<script type="text/javascript">
			$(function() {
			    var menu_ul = $('.menu > li > ul'),
			           menu_a  = $('.menu > li > a');
			    menu_ul.hide();
			    menu_a.click(function(e) {
			        e.preventDefault();
			        if(!$(this).hasClass('active')) {
			            menu_a.removeClass('active');
			            menu_ul.filter(':visible').slideUp('normal');
			            $(this).addClass('active').next().stop(true,true).slideDown('normal');
			        } else {
			            $(this).removeClass('active');
			            $(this).next().stop(true,true).slideUp('normal');
			        }
			    });
			
			});
		</script>
					
	   		     	 <a class="view-all all-product" href="index.php">VIEW ALL PRODUCTS<span> </span></a> 	
			</div>
	   		    <div class="clearfix"> </div>        	         
		</div>
	
	<!---->
	<div class="footer">
		<div class="footer-top">
			<div class="container">
				<div class="latter">
					<h6>NEWS-LETTER</h6>
					<div class="sub-left-right">
						<form>
							<input type="text" value="Enter email here"onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter email here';}" />
							<input type="submit" value="SUBSCRIBE" />
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latter-right">
					<p>FOLLOW US</p>
					<ul class="face-in-to">
						<li><a href="#"><span> </span></a></li>
						<li><a href="#"><span class="facebook-in"> </span></a></li>
						<div class="clearfix"> </div>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="container">
				<div class="footer-bottom-cate">
					<h6>CATEGORIES</h6>
					<ul>
					<li><a href="#">Cakes</a></li>
                    <li><a href="#">Pizzas</a></li>
                    <li><a href="#"> Patties</a></li>
                    <li ><a href="#">Ice Creams</a></li>
                    <li ><a href="#">Aloo Fries</a></li>
                    <li><a href="#">Kabab</a></li>
                    <li><a href="#">Clothes</a></li>
                    <li ><a href="#">Accessories</a></li>
                    <li ><a href="#">High Heels</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate bottom-grid-cat">
					<h6>BEST SELLING</h6>
					<ul>
						<li><a href="#">Pizzas</a></li>
						<li><a href="#">Kabab</a></li>
						<li><a href="#">Accessories</a></li>
						<li ><a href="#">Ice Creams</a></li>
						<li ><a href="#">Clothes</a></li>
						<li><a href="#">Cakes</a></li>
					</ul>
				</div>
				<div class="footer-bottom-cate">
					<h6>OUR PARTNERS</h6>
					<ul>
						<li><a href="#">Pay Pal</a></li>
						<li><a href="#">PhonePe</a></li>
                        <li><a href="#">Google Pay</a></li>
                        <li><a href="#">Visa</a></li>    
					</ul>
				</div>
				<div class="footer-bottom-cate cate-bottom">
					<h6>OUR ADDERSS</h6>
					<ul>
						<li>Barasat</li>
						<li>Kolkata</li>
						<li> West Bengal</li>
						<li >Pincode: 700124</li>
						<li class="phone">PH : 9073297725</li>
						<li class="temp"> <p class="footer-class">Design by Trina Dasgupta </p></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</body>
</html>