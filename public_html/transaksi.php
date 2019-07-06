<?php

  require_once(realpath(dirname(__FILE__) . "/../public_resource/config.php"));
  require_once(LIBRARY_PATH . "/templateFunctions.php");

  require_once('session.php');
  $view = 'not_found';
  $breadcrumb = [];
  if(isset($_GET) && $_GET['list']){
    switch ($_GET['list']) {
      case 'persediaan':
        $view = 'list_persediaan';
        $breadcrumb = ['title'=>'Persediaan','link'=>'transaksi.php?list=persediaan'];
        break;
      case 'pengadaan':
        $view = 'list_pengadaan';
        $breadcrumb = ['title'=>'Pengadaan','link'=>'transaksi.php?list=pengadaan'];
        break;
      case 'permintaan':
        $view = 'list_permintaan';
        $breadcrumb = ['title'=>'Permintaan','link'=>'transaksi.php?list=permintaan'];
        break;
      case 'pengiriman':
        $view = 'list_pengiriman';
        $breadcrumb = ['title'=>'Pengiriman','link'=>'transaksi.php?list=pengiriman'];
        break;
      case 'peramalan':
        $view = 'list_peramalan';
        $breadcrumb = ['title'=>'Peramalan','link'=>'transaksi.php?list=peramalan'];
        break;

      default:
         header("Location: index.php");
        break;
    }
    $variables = array(
        'breadcrumb' => $breadcrumb
    );
    renderMasterFile($view.".php", $variables,'transaksi');
  }
