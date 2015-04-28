<html>
<head>
</head>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	 <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
<title>.:: Menampilkan Data ::.</title>
 
<div data-role="page" id="<?php echo $pageid?>">
<form id="form1" name="form1" method="post" action="maps.php">
    <div data-role="header">
        <h1>Info</h1>
        <a href='#' data-icon='arrow-l' onclick="history.back(); return false">Back</a>
        <a href="index.html" data-icon="home">Home</a>  
    </div>    
    <div data-role="content">
<?php
require("config.php");
$id=$_GET['id'];
// ----- menentukan nama tabel
$tablename="data_tourism";
// ----- perintah SQL dimasukkan ke dalam variable string
$sql="SELECT * FROM $tablename where id='$id' LIMIT 1";
$result = mysql_query ($sql) or die ("Terdapat kesalahan pada perintah SQL!");

    while($row = mysql_fetch_assoc($result)) {
	
		echo "<center><img src='gambar/".$row['gambar']."' width='250px' height='250px'/><br>";
        echo " {$row["nama_tempat"]}<br>"; 
		echo " {$row["alamat"]}<br>"; 
        echo " {$row["contact"]}<br>";
        echo " <p>{$row["deskripsi"]} <br></p></center>";
		
		
     } 

?>
        
     <a rel='external' href='maps.php?id=<?php echo $id; ?>' data-role='button'> Lihat Peta </a>

</div>
</div>

</body>
<div data-role="footer" data-inset="true" data-position="fixed" align="center">
<p><em>Enjoy Your Holiday..</em></p>
</div>
</html>