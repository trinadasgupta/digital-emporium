<?php
include "lib/config.php";

$_POST['username'] = addslashes($_POST['username']);
$_POST['password'] = addslashes($_POST['password']);

$sql = "SELECT * FROM `admin` WHERE `username` = '$_POST[username]' AND `password` = '$_POST[password]'";
$res = $db->query($sql);
$row = $res->fetch_array();

if($row)
{
	$_SESSION['admin_login'] = true;
	$_SESSION['admin_username'] = $row['username'];
	$t = time();
	$sql = "INSERT INTO `admin_log` VALUES (null, '$_POST[username]', '$_SERVER[REMOTE_ADDR]','$t','$_SERVER[HTTP_USER_AGENT]' )";
	$db->query($sql);


	header("location: home.php");
	die("header error!");
}
else
{
	header("location: index.php?err=1");
	die("header error!");
}

?>