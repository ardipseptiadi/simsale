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
<center>
<?php
		include "koneksi.php"
	?>
	<title>Tambah Data Bahan Baku</title>
</head>

<?php
// membaca kode barang terbesar
$query = "SELECT max(id_bahanbaku) as maxId FROM bahanbaku";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
$idRuang = $data['maxId'];


// mengambil angka atau bilangan dalam kode anggota terbesar,
// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
// misal 'BRG001', akan diambil '001'
// setelah substring bilangan diambil lantas dicasting menjadi integer
$noUrut = (int) substr($idRuang, 2, 2);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya

//<td>".$no."</td>

 
 $noUrut++;	//menambah jumlah nomor urut setiap row

// membentuk kode anggota baru
// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
// misal sprintf("%03s", 12); maka akan dihasilkan '012'
// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
$char = "BB";
$newID = $char . sprintf("%02s", $noUrut);

//Memasukkan data textbox ke database
//if($submit){
// $kode = $_POST['kode_barang'];
 //$nama = $_POST['nama_barang'];

// $query2 = "INSERT INTO tbl_barang VALUES ('$kode', '$nama')";
 //$hasil2 = mysql_query($query2);

 //if ($hasil2) {  
  //header("Location: test.php");
  //echo "Berhasil";
  //exit();
 //}else{
 // echo "gagal";
 //}
//}

?>
	
	<h3>Tambah Data Bahan Baku</h3>
	<p><a href="bahanbaku.php"><< Kembali</a> / <a href="home.php">Beranda</a></p>

	
	<form action="bahanbaku_tambah_proses.php" method="post">
		<table cellpadding="3" cellspacing="0">

			<tr>
				<td>ID Bahan Baku</td>
				<td>:</td>
				<td bgcolor="lightgrey"><input type="text" size="8" readonly name="id_bahanbaku" value="<?php echo $newID; ?>"></td>
			</tr>
	
			<tr>
				<td>Nama Bahan Baku</td>
				<td>:</td>
				<td bgcolor="lightgrey"><input type="text" name="nama_bahanbaku" placeholder="masukan nama bahan baku.." required></td>
			</tr>
			<tr>
				<td>Stok</td>
				<td>:</td>
				<td bgcolor="lightgrey"><input type="text" name="stok_bahanbaku" placeholder="masukan stok bahan baku.." required></td>
			</tr>
			<tr>
				<td>Satuan</td>
				<td>:</td>
				<td bgcolor="lightgrey"><!--<input type="text" name="satuan_bahanbaku" placeholder="masukan satuan bahan baku.." required>-->
				<select name="satuan_bahanbaku" required>
						<option value="">Pilih Satuan</option>
						<option value="KG">KG</option>
						<option value="L">L</option>
						<option value="PCS">PCS</option>
						
						
						
					</select>
				</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td bgcolor="lightgrey"></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td align="center" bgcolor="grey"><input type="submit" name="tambah" value="Tambah">
				</td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td></td>
				<td align="center"  bgcolor="grey"><input type="reset" name="batal" value="Batal"></td>
			</tr>
		</table>
		</form>
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
    <p class="fl_center">CV. Radja Sale Tasikmalaya</a></p>
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



