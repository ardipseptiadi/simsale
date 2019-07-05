<?php
  require_once('../../session.php');

  require_once(LIBRARY_PATH . "/queryFunction.php");
  if(isset($_POST['id'])){
    $idproduk = strlen($_POST['id']) >= 3 ? $_POST['id'] : false;
    if(!$idproduk){
      header('Content-type: application/json');
      echo json_encode(['status'=>400,'message'=>'Kesalahan Validasi']);
      exit;
    }
    $result = deleteProduk($idproduk);
    if($result === TRUE){
      header('Content-type: application/json');
      echo json_encode(['status'=>200,'message'=>'Berhasil']);
      exit;
    }
  }

  header('Content-type: application/json');
  echo json_encode(['status'=>500,'message'=>'Gagal Simpan']);
 ?>
