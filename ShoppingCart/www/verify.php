<?php
session_start();
include "lib/config.php";

$sql = "SELECT * FROM `customers` WHERE `cust_email` = '$_POST[username]' AND `password` = '$_POST[password]'";
$res = $db->query($sql);
$row = $res->fetch_array();

if(!$row)
{
	header("Location: login.php?msg=1");
	die("Header Error!");
}
else
{
	$_SESSION['cust_login_id'] = $row['cust_id'];
	$_SESSION['cust_name']     = $row['cust_name'];
	header("Location: account.php");
	die("Header Error!");
}


    
    ?>


