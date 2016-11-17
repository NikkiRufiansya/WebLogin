<?php

// Database Connection Setting

$dbhost = "127.0.0.1"; // Host name 
$dbport = "3308"; // Host port
$dbusername = "user"; // Mysql username 
$dbpassword = "pass"; // Mysql password 
$db_name = "crack"; // Database name 

$mysqlCon = mysqli_connect($dbhost, $dbusername, $dbpassword, "", $dbport) or die("Error: " . mysqli_error($mysqlCon));
mysqli_select_db($mysqlCon, $db_name) or die("Error: " . mysqli_error($mysqlCon));
?>
