<?php
include "config.php";
$nim=$_POST['nim'];
$nama=$_POST['nama'];
$tempat_lahir=$_POST['tempat_lahir'];
$tanggal_lahir = $_POST['thn']."-".$_POST['bln']."-".$_POST['tgl'];
$alamat=$_POST['alamat'];
$jenis_kelamin=$_POST['jenis_kelamin'];
if (empty($nim))
{   
    die("Isikan NIM!");
}
elseif(empty($nama))
{
    die("Isikan Nama!");
}
else //bisa tambahkan pengecekan yang lain jika perlu
{
    //proses upload photo jika ada
    if (!empty($_FILES["photo"]["tmp_name"]))
    {
        $namafolder="photo/"; //tempat menyimpan file
        $jenis_gambar=$_FILES['photo']['type'];
        if($jenis_gambar=="image/jpeg" || $jenis_gambar=="image/jpg" || $jenis_gambar=="image/gif" || $jenis_gambar=="image/png")
        {          
            $photo = $namafolder . basename($_FILES['photo']['name']);      
            if (!move_uploaded_file($_FILES['photo']['tmp_name'], $photo))
            {
               die("Gambar gagal dikirim");
            }
            //Hapus photo yang lama jika ada
            $res = mysql_query("select photo from tb_mahasiswa where nim='$nim' LIMIT 1");
            $d=mysql_fetch_object($res);
            if (strlen($d->photo)>3)
            {
                if (file_exists($d->photo)) unlink($d->photo);
            }                   
            //update photo dengan yang baru
            mysql_query("UPDATE tb_mahasiswa SET photo='$photo' WHERE nim='$nim' LIMIT 1");
        }
        else { die("Jenis gambar yang anda kirim salah. Harus .jpg .gif .png"); }
    } //end if cek file upload
    $myqry="UPDATE tb_mahasiswa SET nama='$nama',tempat_lahir='$tempat_lahir',".
            "tanggal_lahir='$tanggal_lahir',alamat='$alamat',jenis_kelamin='$jenis_kelamin' WHERE nim='$nim' LIMIT 1";
    mysql_query($myqry) or die(mysql_error());
    header("location:laporan-data-mahasiswa.php");
    exit;
}       
?>