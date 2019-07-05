<?php
$dbhost = 'localhost:3308';
$dbuser = 'root';
$dbpass = 'abc123'; 
$dbname = 'radjasale';
$konek = mysql_connect($dbhost, $dbuser, $dbpass) or die ('Koneksi Gagal!');
mysql_select_db($dbname);
?>
