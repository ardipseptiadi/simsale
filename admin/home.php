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
<?php
		include "koneksi.php"
	?>
<title>RADJA SALE - Home</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded" style="background-image:url('images/demo/backgrounds/back.jpg');">
  <div class="overlay"> 
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <div class="wrapper row0">
      <div id="topbar" class="clear"> 
        <!-- ################################################################################################ -->
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
      
        <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active"><a href="index.php">Beranda</a></li>
            <!--<li><a class="drop" href="#">Laporan</a>
              <ul>
                <li><a href="laporan_monitor.php">Laporan Monitor</a></li>
                <li><a href="laporan_cpu.php">Laporan CPU</a></li>
                <li><a href="laporan_mouse.php">Laporan Mouse</a></li>
                <li><a href="laporan_keyboard.php">Laporan Keyboard</a></li>
                <li><a href="laporan_kerusakan.php">Laporan Kerusakan</a></li>
              </ul>
            </li> -->
            <li><a class="drop" href="#">Data Master</a>
              <ul>
                <!--<li><a class="drop" href="#">Data Aset</a>
                  <ul>
                    <li><a href="monitor.php">Aset Monitor</a></li>
                    <li><a href="cpu.php">Aset CPU</a></li>
                    <li><a href="mouse.php">Aset Mouse</a></li>
					<li><a href="keyboard.php">Aset Keyboard</a></li>
                  </ul>
                </li>-->
				<li><a href="produk.php">Data Produk</a></li>
				<li><a href="bahanbaku.php">Data Bahan Baku</a></li>
				<li><a href="supplier.php">Data Supplier</a></li>
              
				
				
				
              </ul>
            </li>
            <li><a href="tentang.php">Tentang</a></li>
          </ul>
        </nav>
        <!-- ################################################################################################ -->
      </header>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
	
      <section id="pageintro" class="clear"> 
        <!-- ################################################################################################ -->
        <p class="font-x2 capitalise">Selamat Datang</p>
        <div id="logo" align="center"><img width="10px" src="images/header_logo.png"></div>
        <h2 class="font-x3 uppercase">CV. RADJA SALE<br>
          TASIKMALAYA</h2>
		  
        <!-- ################################################################################################ -->
      </section>
	  
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
<!--<div class="wrapper coloured">
  <section id="cta" class="clear"> 
    <!-- ################################################################################################ -->
 <!--  <div class="three_quarter first">
      <h2 class="uppercase nospace">Fusce quis feugiat urna dui leo egestas augue</h2>
      <p class="nospace">Aenean semper elementum tellus, ut placerat leo. Quisque vehicula, urna sit amet pulvinar dapibus.</p>
    </div>
    <div class="one_quarter"><a class="btn" href="#">Malesuada risus</a></div>
    <!-- ################################################################################################ -->
 <!--</section>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    <!-- ################################################################################################ -->
   
    <div class="one_quarter">
      <h6 class="title">Detail Perusahaan</h6>
      <address class="btmspace-15">
      CV. Radja Sale<br>
      Jl. R.E. Martadinata No. 47 Kota Tasikmalaya, Jawa Barat<br>
     <!-- Town<br>
      Postcode/Zip-->
      </address>
      <ul class="nospace">
        <li class="btmspace-10"><span class="fa fa-phone"></span> (0265) 334922</li>
        <!--<li><span class="fa fa-envelope-o"></span> info@domain.com</li>-->
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Halaman Website</h6>
      <ul class="nospace linklist">
        <li><a href="#">CV. RADJA SALE</a></li>
        <!--<li><a href="#">Praesent eget purus ut</a></li>
        <li><a href="#">Ut quis augue quis neque</a></li>
        <li><a href="#">Quisque varius erat sed</a></li>
        <li><a href="#">Fusce quis dolor et</a></li>-->
      </ul>
    </div>
 
    <!-- ################################################################################################ -->
 </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
  <!--  / main body -->
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