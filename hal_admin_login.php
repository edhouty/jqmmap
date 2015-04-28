<?php
session_start();
if(!empty($_SESSION[admin])){
echo "<meta http-equiv='refresh' content='0; url=admin/index.php'>";
}
else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tugas PKL</title>
</head>

<body>
<?php
include('config.php');
?>
<form method="post" action="admin_login.php">
<table align="center">
<tr><td width="100">Username Admin</td><td width="20">:</td><td><input type="text" class="input" size="50" name="user" /> </td></tr>
<tr><td width="100">Password Admin</td><td width="20">:</td><td><input type="password" class="input" size="50" name="pass" /> </td></tr>
<tr><td width="100"></td><td width="20"></td><td><input type="submit" class="submitButton" value="Masuk"/> <input type="reset" class="submitButton" value="Hapus"/></td></tr>
</table>
</form>
    </td>
    </tr>
    </table>
</body>
</html>
<?php
}
?>