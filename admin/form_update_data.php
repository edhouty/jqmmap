<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>Update Alamat</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<?php
    include("config.php");
    $id=$_GET['id'];
    $query=mysql_query("select * from data_tourism where id='$id' LIMIT 1");
    $row=mysql_fetch_object($query);
?>
<form action="update_data.php" method="post" enctype="multipart/form-data" name="FUpdate">
  <table width="600" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#669900">
    <tr>
      <td height="50" align="center" bgcolor="#669900"><strong><font color="#FFFFFF">UPDATE DATA</font></strong></td>
    </tr>
    <tr>
      <td><table width="100%" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#FFFFFF">
          <tr>
            <td width="99">ID</td>
            <td width="9">:</td>
            <td width="287"><input name="id" type="text" id="id" size="10" maxlength="10" value="<?php echo $row->id?>" readonly></td>
            <td width="163" rowspan="7" align="center" valign="top"><?php include "config.php";
			$result = mysql_query("SELECT * FROM data_tourism where id='$id' LIMIT 1");
			while($row = mysql_fetch_assoc($result)) {
			echo "<img src='gambar/".$row['gambar']."' width='120px' height='150px' border='1' />";
			}
			?></td>
          </tr>
		  <tr>
		  <td>Kategori Alamat</td>
            <td>:</td>
			<td><select name="id_kategori" id="id_kategori">
			<option>--Pilih Kategori--</option>
			<?php
			include "config.php";
			$kategori = mysql_query("SELECT * FROM kategori ORDER BY category");
			while($row=mysql_fetch_array($kategori)){
			echo "<option value=\"$row[id_kategori]\">$row[category]</option>\n";
			}
			?>
			</select></td>
			</tr>
          		  
          <tr>
            <td>Nama Tempat</td>
            <td>:</td>
            <td><input name="nama_tempat" type="text" id="nama_tempat" size="30" maxlength="30" value="<?php echo $row->nama_tempat?>"></td>
          </tr>
          <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td><input name="tempat_lahir" type="text" id="tempat_lahir" size="30" maxlength="30" value="<?php echo $row->tempat_lahir?>"></td>
          </tr>
          <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><select name="tgl" size="1" id="tgl">
                <?php
             for ($i=1;$i<=31;$i++)
             {
                if($tanggal==$i) {
                    echo "<option value=".$i." selected>".$i."</option>";
                } else {
                    echo "<option value=".$i.">".$i."</option>";
                }
             }
          ?>
              </select>
              <select name="bln" size="1" id="bln">
                <?php
             $namabulan=array("","Januari","Pebruari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
             for ($i=1;$i<=12;$i++)
             {
                if($bulan==$i) {
                    echo "<option value=".$i." selected>".$namabulan[$i]."</option>";
                } else {
                    echo "<option value=".$i.">".$namabulan[$i]."</option>";
                }
             }
          ?>
              </select>
              <select name="thn" size="1" id="thn">
                <?php
              echo "<option value=".$tahun.">".$tahun."</option>";
             for ($i=1985;$i<=2000;$i++)
             {
                if($tahun==$i) {
                    echo "<option value=".$i." selected>".$i."</option>";
                } else {
                    echo "<option value=".$i.">".$i."</option>";
                }
             }
          ?>
              </select></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" cols="30" rows="5" id="alamat"><?php echo $row->alamat?></textarea></td>
          </tr>
          <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><input name="jenis_kelamin" id="jenis_kelamin" type="radio" value="L" <?php if($row->jenis_kelamin=='L') echo "checked";?>>
              Laki-laki
              <input name="jenis_kelamin" id="jenis_kelamin" type="radio" value="P" <?php if($row->jenis_kelamin=='P') echo "checked";?>>
              Perempuan </td>
          </tr>
          <tr>
            <td>Photo</td>
            <td>:</td>
            <td><input type="file" name="photo" id="photo"></td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>Pilih photo jika ingin diganti</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td height="50" colspan="4" align="center"><input name="fok" type="submit" id="fok" value="OK">
              <input name="fulang" type="reset" id="fulang" value="Ulangi"><input name="fulang" type="button" id="fulang" value="Batal" onClick="javascript:history.back()"></td>
          </tr>
      </table></td>
    </tr>
  </table>
</form>
  <div align="center"><a href="index.php">Menu Utama</a></div>
</body>
</html>