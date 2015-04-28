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
<title>Menu</title>
 
<div data-role="page" id="<?php echo $pageid?>">
    <div data-role="header">
        <h1>Menu</h1>
        <a href='#' data-icon='arrow-l' onClick="history.back(); return false">Back</a>
        <a href="index.html" data-icon="home">Home</a>  
    </div>    

 
<ul data-role="listview" data-inset="true" \>
<li><a href="hal_admin_login.php">Admin Login</a></li>
<li><a href="park">Google MAP</a></li>
</ul>

<div data-role="footer" data-inset="true" data-position="fixed" align="center">
<p><em>Copyright &copy; 2015 | Risky Nanda Putri | Rozana</em></p>



</div>

</body>

</html>
