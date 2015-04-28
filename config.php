<?php
error_reporting(E_ALL ^ E_DEPRECATED);
$hostname	= "localhost";
$username	= "root";
$password	= "";
$nama_database	= "web_test";

//Koneksi ke server Database
$konek	= mysql_connect("$hostname", "$username", "$password");

//Memilih Database pada Server Database
$nmDB	= mysql_select_db($nama_database, $konek);
if(! $konek)
die("Database Not Connected");
?>
 
