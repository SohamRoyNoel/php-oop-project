<?php
require_once "includes/init.php";
$session->logout();
$_SESSION['logout_msg'] = "you have been logged out";
header("Location: ../index.php");