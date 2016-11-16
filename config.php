<?php
$host="localhost";
$user="root";
$pass="";
$db="crack";

$kon=mysql_connect($host,$user,$pass) OR DIE ('Koneksi Gagal');
mysql_select_db($db);
?>