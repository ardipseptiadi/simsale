<!DOCTYPE html>
<!--
Template Name: Inventory
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>DISKOMINFO - Lupa Password</title>

<form method="post" action="" target="_self"> 
<center><h2>Form Lupa Password..</h2><br />
<b>Masukkan email anda.</b></center>
<table border="0" align="center"> 
<tr><td>Email<td>:<td><input type="text" name="email" placeholder="masukan email..."> 
<tr><td><input type="submit" value="Cek Password">
</table> 
</form> 
<?php
include "koneksi.php";
	error_reporting(0);
?> 
<?php	
 $checkMIEZdataThisismytechnique="select email from admin where email='$_POST[email]'";
$cekdataapakahadaatautidakditakengonscript=mysql_query($checkMIEZdataThisismytechnique) or die(mysql_error());
  if(mysql_num_rows($cekdataapakahadaatautidakditakengonscript)>0)
  { 
$result=mysql_query("select * from admin where email='$_POST[email]'");
$obj=mysql_fetch_object($result);
echo "<table border='0' align='center'>
<tr><td>Email<td>:<td>";
echo $obj->email	; 
echo "<tr><td>Password Anda<td>:<td>".$obj->password; 
echo "<tr><td colspan=5><b>Kembali Ke <a href='index.php'>Login</a></b>"; 
  }
  if(mysql_num_rows($error)>0){
  echo "<center>Email yang anda masukkan belum pernah terdaftar!! silakan Hubungi Admin Untuk Informasi Lebih Lanjut !!</center>";
  }
?> 
<?php	
 $checkMIEZdataThisismytechnique="select email from manajer where email='$_POST[email]'";
$cekdataapakahadaatautidakditakengonscript=mysql_query($checkMIEZdataThisismytechnique) or die(mysql_error());
  if(mysql_num_rows($cekdataapakahadaatautidakditakengonscript)>0)
  { 
$result=mysql_query("select * from manajer where email='$_POST[email]'");
$obj=mysql_fetch_object($result);
echo "<table border='0' align='center'>
<tr><td>Email<td>:<td>";
echo $obj->email	; 
echo "<tr><td>Password Anda<td>:<td>".$obj->password; 
echo "<tr><td colspan=5><b>Kembali Ke <a href='index.php'>Login</a></b>"; 
  }
  if(mysql_num_rows($error)>0){
  echo "<center>Email yang anda masukkan belum pernah terdaftar!! silakan Hubungi Admin Untuk Informasi Lebih Lanjut !!</center>";
  }
?> 

</body>
</html>
