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
<title>DISKOMINFO - Monitor</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('../images/demo/backgrounds/back.jpg');">
  <div class="overlay"> 
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
      <div id="topbar" class="clear"> 
        <!-- ################################################################################################ -->
        <!--<div class="fl_left">
          <ul class="nospace inline pushright">
            <li><i class="fa fa-phone"></i> +00 (123) 456 7890</li>
            <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
          </ul>
        </div>-->
        <div class="fl_right">
          <ul class="nospace inline pushright"><!--faico clear-->
			<li><a href="logout.php"><b>Logout</b></a></li>
            <!--<li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
            <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>-->
          </ul>
        </div>
        <!-- ################################################################################################ -->
      </div>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row1">
      <header id="header" class="clear"><img src="images/header.png">
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">  
        </div>
       <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li><a href="home.php">Beranda</a></li>
            <li><a class="drop" href="#">Laporan</a>
              <ul>
                <li><a href="laporan_monitor.php">Laporan Monitor</a></li>
                <li><a href="laporan_cpu.php">Laporan CPU</a></li>
                <li><a href="laporan_mouse.php">Laporan Mouse</a></li>
                <li><a href="laporan_keyboard.php">Laporan Keyboard</a></li>
                <li><a href="laporan_kerusakan.php">Laporan Kerusakan</a></li>
              </ul>
            </li>
            <li class="active"><a class="drop" href="#">Data Master</a>
              <ul>
                <li><a class="drop" href="full-width.php">Data Aset</a>
                  <ul>
                    <li><a href="monitor.php">Aset Monitor</a></li>
                    <li><a href="cpu.php">Aset CPU</a></li>
                    <li><a href="mouse.php">Aset Mouse</a></li>
					<li><a href="keyboard.php">Aset Keyboard</a></li>
                  </ul>
                </li>
                <li><a href="kerusakan.php">Data Kerusakan</a></li>
                <li><a href="kategori.php">Data Kategori</a></li>
				<li><a href="merk.php">Data Merk</a></li>
				<li><a href="divisi.php">Data Divisi</a></li>
				<li><a href="ruangan.php">Data Ruangan</a></li>
              </ul>
            </li>
            <li><a href="tentang.php">Tentang</a></li>
            <!--<li><a href="#">Tentang</a></li>-->
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <div id="breadcrumb" class="clear"> 
    <!-- ################################################################################################ -->
    <ul>
      <li><a href="home.php">Beranda</a></li>
	  <li><a>Data Master</a></li>
	  <li><a>Data Aset</a></li>
      <li><a href="monitor.php">Aset Monitor</a></li>
	  
      
    </ul>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!--<div id="crud" align="center"><p><a href="index.php">Beranda</a></div>
<div id="crud" align="center"><a href="monitor_tambah.php">Tambah Data</a></p></div>
<div id="crud" align="center"><a href="monitor_edit.php">Edit Data</a></p></div>
<div id="crud" align="center"><a href="monitor_tambah.php">Tambah Data</a></p></div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    
      <!-- ################################################################################################ -->
      

    
<?php
	include("koneksi.php");
	error_reporting(0);
?>  
<?php
echo '<h1>Data Aset Monitor</h1>'
?>
<div id="aksi" class="fl_right">
<div id="pageintro"><a class="btn" href="monitor_tambah.php">Tambah Data</a></div>
<center>
<legend><h1>Cari Data Negara</h1></legend>
 <div style="margin-bottom:15px;" align="center">
 <!-- <form action="" method="post">
   <input type="text" name="nama_aset" placeholder="Cari Berdasar Nama Negara" class="css-input" style="width:250px;" />
   <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  </form>-->
  <!--<form action="./cari.php">
  <input name="q" class="search" type="text" placeholder="Cari..." required>	
  <input name="cari" class="button" type="button" value="Cari">		
</form>-->
<form name="formcari" method="post" action="search_exe.php" >
<input type="text" name="name" placeholder="cari data..">
<input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" >
</form>
  
 </div>


</div>
<div class="scrollable" align="center">
<?php
include "koneksi.php";
$nama_aset= $_POST['nama_aset']; //get the nama value from form
$q = "SELECT * from asetmon where nama_aset like '%$nama_aset%' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h2> Hasil Searching </h2>";
echo "<table border='1' cellpadding='5' cellspacing='8'>";
echo "
<tr bgcolor='orange'>
<td>ID Aset</td>
<td>ID Kategori</td>
<td>ID Merk</td>
<td>Nama Aset</td>
<td>ID Divisi</td>
<td>ID Ruangan</td>
<td>Tahun</td>
<td>Jumlah</td>
<td>Harga</td>
<td>Keterangan</td>
</tr>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
<tr>
<td>".$data['id_asetmon']."</td>
<td>".$data['id_kategori']."</td>
<td>".$data['id_merk']."</td>
<td>".$data['nama_aset']."</td>
<td>".$data['id_divisi']."</td>
<td>".$data['id_ruangan']."</td>
<td>".$data['tahun']."</td>
<td>".$data['jumlah']."</td>
<td>".$data['harga']."</td>
<td>".$data['keterangan']."</td>
</tr>";
}
echo "</table>";
?>

 
 <?php

?>
</table>
      </div>
      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
 
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left">Dinas Komunikasi Dan Informatika Jawa Barat</a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>