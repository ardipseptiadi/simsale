<!DOCTYPE html>

<html>
<head>
<title>RADJA SALE - Produk</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<script src="layout/scripts/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
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
        <?php  require_once(TEMPLATES_PATH . "/layout/navbar.php"); ?>
      </div>
    </div>
  </div>
  <div class="wrapper row2">
    <div id="breadcrumb" class="clear">
      <ul>
        <li><a href="index.php">Beranda</a></li>
  	    <li><a>Data Master</a></li>
        <li>
          <a href="<?= $breadcrumb['link'] ?: "index.php"  ?>"><?= $breadcrumb['title'] ?: "-"  ?></a>
        </li>
      </ul>
    </div>
  </div>
  <div class="wrapper row3">
