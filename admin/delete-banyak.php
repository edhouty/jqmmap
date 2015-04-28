<?php
include "config.php";
$jumlah = count($_POST["item"]);
for($i=0; $i < $jumlah; $i++)
{
  $nim=$_POST["item"][$i];
  $res = mysql_query("select gambar from data_tourism where id='$nim' LIMIT 1");
  $d=mysql_fetch_object($res);
  if (strlen($d->gambar)>3)
  {
    if (file_exists($d->gambar)) unlink($d->gambar);
  }
  $myquery =  "delete from data_tourism where id ='$nim' limit 1";
  $hapus = mysql_query($myquery) or die ("gagal menghapus");
}
// query untuk membaca semua data dengan sorting berdasarkan ID secara descending
// sorting descending ini untuk mengantisipasi record yang urutan ID nya tidak urut dalam setiap barisnya
// misal 1, 4, 2, 5, 3
$query = "SELECT * FROM data_tourism ORDER BY id";
$hasil = mysql_query($query);

// nilai awal increment
$no = 1;

while ($data  = mysql_fetch_array($hasil))
{
   // membaca id dari record yang tersisa dalam tabel
   $id = $data['id'];

   // proses updating id dengan nilai $no
   $query2 = "UPDATE data_tourism SET id = $no WHERE id = $id";
   mysql_query($query2);

   // increment $no
   $no++;
}

// mengubah nilai auto increment menjadi $no terakhir ditambah 1
$query = "ALTER TABLE data_tourism  AUTO_INCREMENT = $no";
mysql_query($query); 

header ("location:index.php");
?>