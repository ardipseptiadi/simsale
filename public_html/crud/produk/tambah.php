<?php
  require_once('../../session.php');

  require_once(LIBRARY_PATH . "/queryFunction.php");

  if(isset($_POST['id-produk-tambah']) && isset($_POST['nama-produk-tambah'])){
    $idproduk = strlen($_POST['id-produk-tambah']) >= 3 ? $_POST['id-produk-tambah'] : false;
    $namaproduk = strlen($_POST['nama-produk-tambah']) > 1 ? $_POST['nama-produk-tambah'] : false;
    if(!$idproduk || !$namaproduk){
      header('Content-type: application/json');
      echo json_encode(['status'=>400,'message'=>'Kesalahan Validasi']);
      exit;
    }
    $result = saveProduk($idproduk,$namaproduk);
    if($result === TRUE){
      header('Content-type: application/json');
      echo json_encode(['status'=>200,'message'=>'Berhasil']);
      exit;
    }
  }

  header('Content-type: application/json');
  echo json_encode(['status'=>500,'message'=>'Gagal Simpan']);
 ?>
