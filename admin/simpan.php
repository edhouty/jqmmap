<?php
include "config.php";
$id_kategori=$_POST['id_kategori'];
$nama_tempat=$_POST['nama_tempat'];
$alamat=$_POST['alamat'];
$contact=$_POST['contact'];
$deskripsi=$_POST['deskripsi'];
$lat=$_POST['lat'];
$lon=$_POST['lon'];
$lokasi_file=$_FILES['gambar']['tmp_name'];
$gambar=$_FILES['gambar']['name'];
move_uploaded_file($lokasi_file,"../gambar/$gambar");
mysql_query("insert into data_tourism (id_kategori, nama_tempat, alamat, contact, deskripsi, lat, lon, gambar) " . " values ('$id_kategori', '$nama_tempat', '$alamat', '$contact', '$deskripsi', '$lat', '$lon', '$gambar')") or die (mysql_error());
?>
<script type="text/javascript">
		alert("Data berhasil di tambah...!!!");
	</script>
<?php
	echo "<meta http-equiv='refresh' content='0; url=index.php'>";
?>