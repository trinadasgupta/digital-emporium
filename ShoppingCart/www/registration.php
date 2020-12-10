<?php
include "lib/config.php";
include "lib/header.php";
?>

<!DOCTYPE html>
<html>
<head>
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
<body> 





<div class="clearfix"> </div>
</div>  

<div class="sub-cate">
    <div class=" top-nav rsidebar span_1_of_left">
        <h3 class="cate">CATEGORIES</h3>
<ul class="menu">
<!--<li class="item1"><a href="#">Curabitur sapien<img class="arrow-img" src="images/arrow1.png" alt=""/> </a>
<ul class="cute">
    <li class="subitem1"><a href="product.html">Cute Kittens </a></li>
    <li class="subitem2"><a href="product.html">Strange Stuff </a></li>
    <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
</ul>
</li>--> 
<ul class="kid-menu ">
    <li><a href="product.html">Cakes</a></li>
        <li><a href="product.html"> &nbsp; &nbsp; &nbsp; &nbsp; &raquo; With Egg</a></li>
        <li><a href="product.html"> &nbsp; &nbsp; &nbsp; &nbsp; &raquo; Egg Free</a></li>
    <li ><a href="product.html">Pizzas</a></li>
    <li><a href="product.html">Others Foods</a></li>
    <li><a href="product.html">Selected GIFTS</a></li>
    <li><a href="product.html"> &nbsp; &nbsp; &nbsp; &nbsp; &raquo; Clothes</a></li>
    <li><a href="product.html"> &nbsp; &nbsp; &nbsp; &nbsp; &raquo; Accessories</a></li>

</ul>
</ul>
        </div>
    <!-initiate accordion-->
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
        
             <a class="view-all all-product" href="products.php">VIEW ALL PRODUCTS<span> </span></a> 	
</div>
       



<div class="container">
    <div class="shoes-grid">
    <a href="single.html">
    <div class="wrap-in">
        
      </div>
           </a>
           
<!-- ~~~~~~~~~~ CHECK OUT FORM DESIGN ~~~~~~~~~~  -->

<div class="products">
    <h5 class="latest-product">Checkout Form</h5>	
</div>	 
<div class="clearfix"> </div>			 

<form name = SignupForm method = post>
<div class="  register-top-grid">
<h3>PERSONAL INFORMATION</h3>
<div class="mation">
 <span>Full Name<label>*</label></span>
 <input type="text" name="cust_name"> 

 <span>Contact Number<label>*</label></span>
 <input type="text" name="cust_phone"> 

  <span>Email Address<label>*</label></span>
  <input type="text" name="cust_email"> 

  <span>Address<label>*</label></span>
  <input type="text" name="cust_address"> 
</div>
<div class="clearfix"> </div>
<a class="news-letter" href="#">
  <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up</label>
</a>
</div>
<div class="  register-bottom-grid">
     <h3>LOGIN INFORMATION</h3>
     <div class="mation">
         <span>Password<label>*</label></span>
         <input type="password" >
         <span>Confirm Password<label>*</label></span>
         <input type="password" name="cust_pass">
     </div>
</div>

<br>
<input type="submit" class = nikPinkButton value="submit" name="Submit">

</form>
</div>
</div>
<?php

if($_POST['Submit'])
    {
       $sql = "INSERT INTO `customers` (`cust_id`, `cust_name`, `cust_email`, `cust_phone`, `cust_address`, `password`) VALUES ('', '$_POST[cust_name]', '$_POST[cust_email]', '$_POST[cust_phone]', '$_POST[cust_address]', '$_POST[cust_pass]');";
		$db->query($sql);
	   header("location:index.php");
    }
 ?>

<div class="clearfix"> </div>




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