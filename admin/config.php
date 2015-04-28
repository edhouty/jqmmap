<?php
ob_start(); //ditambahkan untuk mengabaikan pengiriman header, berlaku juga untuk mengabaikan pesan error header
$dbserver="localhost";
$dbusername="root";
$dbpassword="";
$dbname="web_test";
mysql_connect($dbserver,$dbusername,$dbpassword) or die(mysql_error());
mysql_select_db($dbname) or die (mysql_error());
?>
