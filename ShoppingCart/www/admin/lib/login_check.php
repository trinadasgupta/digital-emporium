<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);

if( $_SESSION['admin_login'] != true )
{
	header("location: index.php?err=2");
}
?>