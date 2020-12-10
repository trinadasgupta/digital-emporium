<?php
session_start();

if($_SESSION['cart'])
	$cart = $_SESSION['cart'];
else
	$cart = array();

if($_POST['pid'] && $_POST['quantity'] > 0)
{
	$pid = $_POST['pid'];
	$cart[$pid] = $cart[$pid]+$_POST['quantity'];
}

//Delete
if($_GET['del_id'])
{
	$del_id = $_GET['del_id'];
	unset($cart[$del_id]);
}

//Update
if($_POST['newCart'])
	$cart = $_POST['newCart'];

//Clean $cart if needed
foreach ($cart as $pid => $quantity) {
	 if ( $quantity<1 )
		 unset( $cart[$pid] );
}

$_SESSION['cart'] = $cart;

Header("Location: viewcart.php");
?>