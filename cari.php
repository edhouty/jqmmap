<html>
<head>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
    <script src="js/jquery.mobile-1.3.2.min.js"></script>
<title>.:: Menampilkan Data ::.</title>
 
<div data-role="page" id="<?php echo $pageid?>">
    <div data-role="header">
        <h1>Info</h1>
        <a href='#' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
        <a href="index.html" data-icon="home">Home</a>  
    </div>    
    <div data-role="content">
<?php
// ----- ambil isi dari file koneksi.php
require("config.php");
// ----- hubungkan ke database
$name= $_POST['nama_tempat'];
$koneksi=buka_koneksi();
// ----- menentukan nama tabel
$tablename="data_tourism";
// ----- perintah SQL dimasukkan ke dalam variable string
$sql = "SELECT * from $tablename where nama_tempat like '%$name%' ";
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