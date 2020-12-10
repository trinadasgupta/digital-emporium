<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE);
$db = new MySQLi("localhost","root",null,"newshop");

?>