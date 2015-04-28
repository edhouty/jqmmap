<?php
	include("config.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<h2>Data Alamat</h2>
<form action="" method="get" name="FCari" id="FCari" align="left">
  Cari Alamat 
    <input name="txtcari" type="text" id="txtcari" size="20" maxlength="30" value="<?php echo $_GET['txtcari']?>">
  <input type="submit" name="Submit" value="Cari">
</form>
<form name="FLaporan" method="post" action="delete-banyak.php" onSubmit="return confirm('Hapus data terpilih?')" align="left">
<table width="100%" border="1" align="left" cellpadding="3" cellspacing="0">
  <tr>
    <td align="center">&nbsp;</td>
    <td>Id</td>
    <td>Nama Tempat</td>
    <td>Alamat</td>
    <td align="center">Contact</td>
    <td>Deskripsi</td>
	<td>Latitude</td>
	<td>Longitude</td>
    <td align="center">Gambar</td>
    <td align="center">Update</td>
    <td align="center">Hapus</td>
  </tr>
<?php
	$txtcari=$_GET['txtcari'];
	if(isset($txtcari))
	{
	
		$myquery="select id, nama_tempat, alamat, contact, deskripsi, lat, lon, gambar from data_tourism where id='$txtcari' or nama_tempat LIKE '%$txtcari%'";
	}
	else
	{
		$myquery="select id, nama_tempat, alamat, contact, deskripsi, lat, lon, gambar from data_tourism";
	}	
	$data_alamat=mysql_query($myquery) or die (mysql_error());
	while($row=mysql_fetch_object($data_alamat))
	{
?>
  <tr>
    <td align="center">
     <input type="checkbox" name="item[]" id="item[]" value="<?php echo $row->id?>" /></td>
    <td><?php echo  $row->id?></td>
    <td><?php echo  $row->nama_tempat?></td>
    <td><?php echo  $row->alamat?></td>
    <td ><?php echo  $row->contact?></td>
    <td ><?php echo  $row->deskripsi?></td>
    <td><?php echo  $row->lat?></td>
	<td><?php echo  $row->lon?></td>
    <td align="center"><?php echo  $row->gambar?></td>
    <td align="center"><a href="form_update_data.php?id=<?php echo  $row->id?>">Update</a></td>
    <td align="center"><a href="hapus.php?id=<?php echo  $row->id?>">Hapus</a></td>
  </tr>
<?php
	}
?>
</table>
    <input name="btnHapus" type="submit" value="Delete">
</form>
</body>
</html>