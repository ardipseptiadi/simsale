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
<title>RADJA SALE - Bahan Baku</title>
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
echo '<h1>Data Bahan Baku</h1>'
?>
<div id="aksi" class="fl_right">
<div id="pageintro"><a class="btn" href="bahanbaku.php"><< Kembali</a></div>
<center>
<!--<legend><h1>Cari Data Negara</h1></legend>-->
<!-- <div style="margin-bottom:15px;" align="center">-->
 <!-- <form action="" method="post">
   <input type="text" name="nama_aset" placeholder="Cari Berdasar Nama Negara" class="css-input" style="width:250px;" />
   <input type="submit" name="cari" value="Cari" class="btn" style="padding:3px;" margin="6px;" width="50px;"  />
  </form>-->
  <!--<form action="./cari.php">
  <input name="q" class="search" type="text" placeholder="Cari..." required>	
  <input name="cari" class="button" type="button" value="Cari">		
</form>-->
<!--<form name="formcari" method="post" action="proses_cari.php" >
<input type="text" name="name" placeholder="cari data..">
<input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="search" >
</form>-->
  
 <!--</div>-->


<!-- form advanced search -->
<!--<form name="form1" method="get" action="">
Nama : <input type="text" name="nama" id="nama"/> <br/>
Ayah : <input type="text" name="ayah" id="ayah"/> <br/>
Ibu : <input type="text" name="ibu" id="ibu"/> <br/>
Alamat : <input type="text" name="alamat" id="alamat"/> 
<br/><input type="submit" value="Search" name="search"/>
</form>-->

<!-- form quick search -->
<form name="form1" method="post" action="bahanbaku_cari.php">
<input type="text" name="q" size=20 id="q" placeholder="Cari data..." /> <input type="submit" value="Search"/>
</form>
</div>

<!-- menampilkan hasil pencarian --> <!-- Quick Search -->
<?php
if(isset($_POST['q']) && $_POST['q']){
	$conn = mysql_connect("localhost", "root", "");
	mysql_select_db("radjasale");
	$q = $_POST['q'];
	$sql = "select * from bahanbaku where id_bahanbaku like '%$q%' or nama_bahanbaku like '%$q%' or stok_bahanbaku like '%$q%' or satuan_bahanbaku like '%$q%'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) > 0){
		?>
<!-- Advance Search -->
		<!--if(isset($_GET['search'])){
	$conn = mysql_connect("localhost", "root", "");
	mysql_select_db("db_inventaris");
	$id_kategori = $_GET['id_kategori'];
	$id_kategori = $_GET['id_kategori'];
	$id_merk = $_GET['id_merk'];
	$nama_aset = $_GET['nama_aset'];
	$id_divisi = $_GET['id_divisi'];
	$id_ruangan = $_GET['id_ruangan'];
	$tahun = $_GET['tahun'];
	$jumlah = $_GET['jumlah'];
	$harga = $_GET['harga'];
	$keterangan = $_GET['keterangan'];
	$sql = "select * from kategori where nama_aset like '%$nama_aset%' and 
	tahun like '%$tahun%' and jumlah like '%$jumlah%' and harga like '%$harga%'";
	$result = mysql_query($sql);
	if(mysql_num_rows($result) > 0){
		?>-->

		<div class="scrollable" align="center">
        <table>
            <tr>
			
              <th>ID Bahan Baku</th>
              <th>Nama Bahan Baku</th>
			  <th>Stok</th>
			  <th>Satuan</th>
			  <th colspan=2>Pilihan</th>
			 
            </tr>
			<?php
			while($bahanbaku = mysql_fetch_array($result)){?>
			<tr align="center">
 <td><?php echo $bahanbaku['id_bahanbaku']; ?></td>
 <td><?php echo $bahanbaku['nama_bahanbaku']; ?></td>
 <td><?php echo $bahanbaku['stok_bahanbaku']; ?></td>
 <td><?php echo $bahanbaku['satuan_bahanbaku']; ?></td>
 <td><a href="bahanbaku_edit.php?id_bahanbaku=<?php echo $bahanbaku['id_bahanbaku']; ?>">Edit</a><td><a href="bahanbaku_hapus_proses.php?id_bahanbaku=<?php echo $ruangan['id_bahanbaku']; ?>" onclick="javascript: return confirm('Anda yakin hapus ?')">Hapus</a></td>
 </tr>
			<?php }?>
		</table>
		<?php
	}else{
		echo '&nbsp;<center><h2>Data tidak ditemukan!</h2></center>'; 
	}
}
?>
      
 
 <?php
;
//mysql_close($tampil);
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