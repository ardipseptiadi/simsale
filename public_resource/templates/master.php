<!DOCTYPE html>

<html>
<head>
<title>RADJA SALE - Produk</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->

<script src="layout/scripts/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="plugins/DataTables/datatables.min.css"/>

</head>
<body id="top">
  <div class="bgded" style="background-image:url('images/demo/backgrounds/back.jpg');">
    <div class="overlay">
      <div class="wrapper row0">
        <div id="topbar" class="clear">
          <div class="fl_right">
            <ul class="nospace inline pushright">
  			<li><a href="logout.php"><b>Logout</b></a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="wrapper row1">
        <header id="header" class="clear">
          <div id="logo" class="fl_left">
          </div>
         <nav id="mainav" class="fl_right">
            <ul class="clear">
              <li><a href="home.php">Beranda</a></li>
              <li class="active"><a class="drop" href="#">Data Master</a>
                <ul>
                  <li><a href="produk.php">Data Produk</a></li>
  				<li><a href="bahanbaku.php">Data Bahan Baku</a></li>
  				<li><a href="supplier.php">Data Supplier</a></li>
                </ul>
              </li>
              <li><a href="tentang.php">Tentang</a></li>
            </ul>
          </nav>
        </header>
      </div>
    </div>
  </div>
  <div class="wrapper row2">
    <div id="breadcrumb" class="clear">
      <ul>
        <li><a href="home.php">Beranda</a></li>
  	  <li><a>Data Master</a></li>
  	  <li><a href="produk.php">Data Produk</a></li>


      </ul>
    </div>
  </div>
  <div class="wrapper row3">
    <?php require_once("master_body.php"); ?>
  </div>

  <div class="wrapper row5">
    <div id="copyright" class="clear">
      <p class="fl_left">CV. Radja Sale Tasikmalaya</a></p>
    </div>
  </div>
  <a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
  <script src="layout/scripts/jquery.backtotop.js"></script>
  <script src="layout/scripts/jquery.mobilemenu.js"></script>
  <script type="text/javascript" src="plugins/DataTables/datatables.min.js"></script>
</body>
</html>
