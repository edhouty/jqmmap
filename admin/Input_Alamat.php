<form action="simpan.php" method="post" enctype="multipart/form-data" name="data_alamat">
  <table width="452" border="0" align="left" cellpadding="0" cellspacing="1" bgcolor="#669900">
    <tr>
      <td height="40" align="center" bgcolor="#669900"><strong><font color="#FFFFFF">ENTRY DATA ALAMAT</font></strong></td>
    </tr>
    <tr>
      <td bgcolor="#FFFFFF"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
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
            <td>Nama Tempat</td>
            <td>:</td>
            <td><input name="nama_tempat" type="text" id="nama_tempat" size="30" maxlength="30"></td>
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea name="alamat" cols="30" rows="5" id="alamat"></textarea></td>
          </tr>
                       			
			<tr>
            <td>Contact</td>
            <td>:</td>
            <td><input name="contact" type="text" id="contact" size="30" maxlength="30"></td>
          </tr>
		  <tr>
            <td>Deskripsi</td>
            <td>:</td>
            <td><textarea name="deskripsi" cols="30" rows="5" id="deskripsi"></textarea></td>
          </tr>
		  <td>Latitude</td>
            <td>:</td>
            <td><input name="lat" type="text" id="lat" size="30" maxlength="30"></td>
          </tr>
		  
		  <td>Longitude</td>
            <td>:</td>
            <td><input name="lon" type="text" id="lon" size="30" maxlength="30"></td>
          </tr>
		  
            <td>gambar</td>
            <td>:</td>
            <td><input type="file" name="gambar" id="gambar"></td>
          </tr>
          <tr>
            <td colspan="3" align="center"><input name="simpan" type="submit" id="simpan" value="simpan">
              <input name="fulang" type="reset" id="fulang" value="Ulangi">
              <input name="fulang2" type="button" id="fulang2" value="Batal" onClick="javascript:history.back()"></td>
          </tr>
        </table></td>
    </tr>
  </table>
</form>