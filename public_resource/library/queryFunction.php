<?php
require_once('connection.php');

function getAllProduk()
{
  $data = [];
  $conn = openConnection();
  if($conn !== FALSE){
    $exec_query = mysql_query("SELECT * FROM produk");
    if($exec_query !== FALSE && mysql_num_rows($exec_query) > 0){
      while($res_fetch = mysql_fetch_assoc($exec_query)){
        $data[] = $res_fetch;
      }
    }
    mysql_free_result($exec_query);
  }
  closeConnection($conn);
  return $data;
}

function getAllBahanBaku()
{
  $data = [];
  $conn = openConnection();
  if($conn !== FALSE){
    $exec_query = mysql_query("SELECT * FROM bahanbaku");
    if($exec_query !== FALSE && mysql_num_rows($exec_query) > 0){
      while($res_fetch = mysql_fetch_assoc($exec_query)){
        $data[] = $res_fetch;
      }
    }
    mysql_free_result($exec_query);
  }
  closeConnection($conn);
  return $data;
}

function getAllSupplier()
{
  $data = [];
  $conn = openConnection();
  if($conn !== FALSE){
    $exec_query = mysql_query("SELECT * FROM supplier");
    if($exec_query !== FALSE && mysql_num_rows($exec_query) > 0){
      while($res_fetch = mysql_fetch_assoc($exec_query)){
        $data[] = $res_fetch;
      }
    }
    mysql_free_result($exec_query);
  }
  closeConnection($conn);
  return $data;
}

function getLastIdProduk()
{
  $prefix = "SP";
  $newID = "01";
  $conn = openConnection();
  if($conn !== FALSE){
    $exec_query = mysql_query("SELECT max(id_produk) as maxId FROM produk");
    if($exec_query !== FALSE && mysql_num_rows($exec_query) > 0){
      $data  = mysql_fetch_array($exec_query);
      if(isset($data['maxId']) && strlen($data['maxId']) >= 4){
        $noUrut = (int) substr($data['maxId'], 2, 2);
        $noUrut++;
        $newID = sprintf("%02s", $noUrut);
      }
    }
    mysql_free_result($exec_query);
  }
  closeConnection($conn);
  return $prefix.$newID;
}

function saveProduk($id,$nama)
{
  $conn = openConnection();
  if($conn !== FALSE){
    $exec_query = mysql_query("INSERT INTO produk(id_produk,nama_produk) VALUES('$id','$nama')");
    if($exec_query == FALSE){
      return mysql_error();
    }
    mysql_free_result($exec_query);
  }
  closeConnection($conn);
  return TRUE;
}

function updateProduk($id,$nama)
{
  $conn = openConnection();
  if($conn !== FALSE){
    $exec_query = mysql_query("UPDATE produk SET nama_produk = '{$nama}' WHERE id_produk = '{$id}' ");
    if($exec_query == FALSE){
      return mysql_error();
    }
    mysql_free_result($exec_query);
  }
  closeConnection($conn);
  return TRUE;
}

function deleteProduk($id)
{
  $conn = openConnection();
  if($conn !== FALSE){
    $exec_query = mysql_query("DELETE FROM produk WHERE id_produk = '{$id}' ");
    if($exec_query == FALSE){
      return mysql_error();
    }
    mysql_free_result($exec_query);
  }
  closeConnection($conn);
  return TRUE;
}
