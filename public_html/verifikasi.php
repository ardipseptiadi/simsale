<?php

  require_once(realpath(dirname(__FILE__) . "/../public_resource/config.php"));
  require_once(LIBRARY_PATH . "/templateFunctions.php");

  require_once('session.php');
  $view = 'not_found';
  $breadcrumb = [];
  if(isset($_GET) && $_GET['list']){
    switch ($_GET['list']) {
      case 'pengadaan':
        $view = 'list_pengadaan';
        $breadcrumb = ['title'=>'Pengadaan','link'=>'verifikasi.php?list=pengadaan'];
        break;
      case 'pesanan':
        $view = 'list_pesanan';
        $breadcrumb = ['title'=>'Pesanan','link'=>'verifikasi.php?list=pesanan'];
        break;

      default:
         header("Location: index.php");
        break;
    }
    $variables = array(
        'breadcrumb' => $breadcrumb
    );
    renderMasterFile($view.".php", $variables,'verifikasi');
  }
