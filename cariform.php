<html>
<head>
<style type="text/css">
.search {
	font-family: Arial, Helvetica, sans-serif;
	font-weight: bold;
	text-align: left;
}
</style>
</head>
<body>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.min.css">
	 <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/jquery.mobile-1.4.5.min.js"></script>
<title>Pencarian Alamat</title>
 
<div data-role="page" id="<?php echo $pageid?>">
    <div data-role="header">
        <h1>Pencarian</h1>
        <a href='#' data-icon='arrow-l' onClick="history.back(); return false">Back</a>
        <a href="index.html" data-icon="home">Home</a>  
    </div>    

  <div data-role="main" class="ui-content">
    <form method="post" action="cari.php">
      <div class="search">
        <input type="search" name="nama_tempat" id="nama_tempat" placeholder="Search for content...">
        <input type="submit" data-inline="true" value="Submit">
      </div>
    </form> 
  </div>
</div>
<div data-role="footer" data-inset="true" data-position="fixed" align="center">
<p><em>Copyright &copy; 2015 | PKL | Risky Nanda Putri | Rozana</em></p>



</div>

</body>

</html>
