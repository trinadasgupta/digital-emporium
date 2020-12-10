<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="images/icon.jpg"> <!-- for change icon-->
<title>E-Commerce Website</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<!--//fonts-->
<script src="js/jquery.min.js"></script>
<!--script-->
</head>
<body <?php

error_reporting(E_ALL & ~E_NOTICE);
if ( $send_to_paypal == true ) print ' ONLOAD = "document.payform.submit()" ';?>   > 
	<!--header-->
	<div class="header">
		<div class="top-header">
			<div class="container">
				<div class="top-header-left">
					
				</div>
				<div class="top-header-right">
				 <ul class="support">
						<li><a href="#"><label> </label></a></li>
						<li><a href="#">Call for Support<span class="live"> 1800 208 9898</span></a></li>
					</ul>
					<ul class="support">
						<li class="van"><a href="#"><label> </label></a></li>
						<li><a href="#">Free shipping </a></li>
					</ul>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>		
			</div>
		</div>
		<div class="bottom-header">
			<div class="container">
				<div class="header-bottom-left">
					<div class="logo">
						<a href="index.php"><img src="images/logo2.png"  alt=" " /></a>
					</div>
					<div class="search">
					
					<FORM ACTION = search.php METHOD = GET>
						<input name = "q" type="text" value="" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" >
						<input type="submit"  value="SEARCH">
					</FORM>
					
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="header-bottom-right">					
						
							<ul class="login">
								<li>
								<?php
								error_reporting(E_ALL & ~E_NOTICE);
								if($_SESSION['cust_name'])
									print '<a href="logout.php"><span> </span>LOGOUT</a></li>';
								else
									print '<a href="login.php"><span> </span>LOGIN</a></li>';
								?>

								 |
								<li ><a href="registration.php">SIGNUP</a></li>
							</ul>
						<div class="cart"><a href="viewcart.php"><span> </span>CART</a></div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>	
			</div>
		</div>
	</div>
	<!---->
	<div class="container">
			<div class="shoes-grid">
			<a href="single.html">
			<div class="wrap-in">
				
	          </div>
	           	</a>
	   		      <!---->
	   		     
				 <!-- @@@@@@@@@@@@@@@@@@@@@ -->
				 <!-- @@@@@@@@@@@@@@@@@@@@@ -->