<?php
  require_once('../session.php');
  require_once(LIBRARY_PATH . "/queryFunction.php");

  if(isset($_GET) && $_GET['list']){
    switch ($_GET['list']) {
      case 'produk':
        $data = getAllProduk();
        break;
      case 'bahan-baku':
        $data = getAllBahanBaku();
        break;
      case 'supplier':
        $data = getAllSupplier();
        break;

      default:
         header("Location: index.php");
        break;
    }
  }

  echo json_encode($data);
 ?>
