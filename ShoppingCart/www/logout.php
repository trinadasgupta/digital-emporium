<?php
session_start();

unset($_SESSION['cust_login_id']);
unset($_SESSION['cust_name']);

Header("Location: login.php?msg=2");
?>