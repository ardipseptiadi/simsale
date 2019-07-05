<?php

  require_once(realpath(dirname(__FILE__) . "/../public_resource/config.php"));
  require_once(LIBRARY_PATH . "/templateFunctions.php");

  require_once('session.php');
  $view = 'not_found';
  $breadcrumb = [];
  if(isset($_GET) && $_GET['list']){
    switch ($_GET['list']) {
      case 'produk':
        $view = 'list_produk';
        $breadcrumb = ['title'=>'Data Produk','link'=>'master.php?list=produk'];
        break;
      case 'bahan-baku':
        $view = 'list_bahanbaku';
        $breadcrumb = ['title'=>'Data Bahan Baku','link'=>'master.php?list=bahan-baku'];
        break;
      case 'supplier':
        $view = 'list_supplier';
        $breadcrumb = ['title'=>'Data Supplier','link'=>'master.php?list=supplier'];
        break;

      default:
         header("Location: index.php");
        break;
    }
    $variables = array(
        'breadcrumb' => $breadcrumb
    );
    renderMasterFile($view.".php", $variables,'master');
  }
