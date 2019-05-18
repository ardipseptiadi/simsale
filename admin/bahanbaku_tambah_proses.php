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
<title>RADJA SALE - Tambah Data</title>
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
      <header id="header" class="clear"><!--<img src="images/header.png">
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">  
        </div>
       <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li><a href="home.php">Beranda</a></li>
            <!--<li><a class="drop" href="#">Laporan</a>
              <ul>
                <li><a href="laporan_monitor.php">Laporan Monitor</a></li>
                <li><a href="laporan_cpu.php">Laporan CPU</a></li>
                <li><a href="laporan_mouse.php">Laporan Mouse</a></li>
                <li><a href="laporan_keyboard.php">Laporan Keyboard</a></li>
                <li><a href="laporan_kerusakan.php">Laporan Kerusakan</a></li>
              </ul>
            </li>-->
            <li class="active"><a class="drop" href="#">Data Master</a>
              <ul>
                <li><a href="produk.php">Data Produk</a></li>
				<li><a href="bahanbaku.php">Data Bahan Baku</a></li>
				<li><a href="supplier.php">Data Supplier</a></li>
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
      <li><a href="bahanbaku.php">Data Bahan Baku</a></li>
	  <li><a>Tambah Data</a></li>
	  
      
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
//mulai proses tambah data
 
//cek dahulu, jika tombol tambah di klik
if(isset($_POST['tambah'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	$id_bahanbaku		= $_POST['id_bahanbaku'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$nama_bahanbaku		= $_POST['nama_bahanbaku'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$stok_bahanbaku		= $_POST['stok_bahanbaku'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$satuan_bahanbaku		= $_POST['satuan_bahanbaku'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	$input = mysql_query("INSERT INTO bahanbaku VALUES('$id_bahanbaku', '$nama_bahanbaku', '$stok_bahanbaku', '$satuan_bahanbaku')") or die(mysql_error());
?>	
<center>
<?php

	//jika query input sukses
	if($input){
		
		echo '<h2>Data berhasil di tambahkan! </h2>';		//Pesan jika proses tambah sukses
?>
<div id="aksi2" class="center">
<?php
		echo "<div id='pageintro'><a class='btn' href=\"bahanbaku_tambah.php\">Kembali</a>";	//membuat Link untuk kembali ke halaman tambah
		
	}else{
		
		echo 'Gagal menambahkan data! ';		//Pesan jika proses tambah gagal
?>
<div id="aksi2" class="center">
<?php
		echo "<div id='pageintro'><a class='btn' href=\"bahanbaku_tambah.php\">Kembali</a>";	//membuat Link untuk kembali ke halaman tambah
		
	}
 
}else{	//jika tidak terdeteksi tombol tambah di klik
 
	//redirect atau dikembalikan ke halaman tambah
	echo '<script>window.history.back()</script>';
	
	}
?>
</center>


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
    <p class="fl_left">CV. Radja Sale Tasikmalaya</a></p>
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


