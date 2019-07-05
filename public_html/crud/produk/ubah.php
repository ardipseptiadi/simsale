<?php
  require_once('../../session.php');

  require_once(LIBRARY_PATH . "/queryFunction.php");

  if(isset($_POST['id-produk-ubah']) && isset($_POST['nama-produk-ubah'])){
    $idproduk = strlen($_POST['id-produk-ubah']) >= 3 ? $_POST['id-produk-ubah'] : false;
    $namaproduk = strlen($_POST['nama-produk-ubah']) > 1 ? $_POST['nama-produk-ubah'] : false;
    if(!$idproduk || !$namaproduk){
      header('Content-type: application/json');
      echo json_encode(['status'=>400,'message'=>'Kesalahan Validasi']);
      exit;
    }
    $result = updateProduk($idproduk,$namaproduk);
    if($result === TRUE){
      header('Content-type: application/json');
      echo json_encode(['status'=>200,'message'=>'Berhasil']);
      exit;
    }
  }

  header('Content-type: application/json');
  echo json_encode(['status'=>500,'message'=>'Gagal Simpan']);
 ?>
