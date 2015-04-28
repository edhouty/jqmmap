<html>
<head>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/jquery.mobile-1.3.2.min.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery.mobile-1.3.2.min.js"></script>
	 <script src="js/libs/modernizr-custom.js"></script>
	 <script>window.jQuery || document.write("<script src='js/libs/jquery-1.6.2.min.js'>\x3C/script>")</script>
<title>.:: Menampilkan Data ::.</title>
 
<div data-role="page" id="<?php echo $pageid?>">
    <div data-role="header">
        <h1>Daftar Pencarian Hotel</h1>
        <a href='#' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
        <a href="index.html" data-icon="home">Home</a>  
    </div>    
    <div data-role="content">
<?php
// ----- ambil isi dari file koneksi.php
require("config.php");
// ----- menentukan nama tabel
$tablename="data_tourism";
// ----- perintah SQL dimasukkan ke dalam variable string
$sql="select * from $tablename where id_kategori=2 ";
// ------ jalankan perintah SQL
$result = mysql_query ($sql) or die ("Terdapat kesalahan pada perintah SQL!");
// ------ putus hubungan dengan database mysql_close($koneksi);
 
 echo <<<EOB
     <div class="choice_list">
        <ul data-role="listview" data-inset="true" >
EOB;
 while($row = mysql_fetch_assoc($result)) {
 
        echo "<li> <a href=\"data.php?id={$row['id']}\"  data-transition=\"slidedown\"> <h3>{$row["nama_tempat"]} </h3></a></li>";
 
     }   
 echo <<<EOB
        </ul>
     </div>
EOB;
echo "

</ul>";

?>                                                                       

</div>

<div data-role="footer" data-inset="true" data-position="fixed" align="center">
<p><em>Copyright &copy; 2015 | PKL | Risky Nanda Putri | Rozana</em></p>
</div>


</div>

</body>

</html>
