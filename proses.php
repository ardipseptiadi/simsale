<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Login CV. Radja Sale</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

	$konek=mysql_connect('host.docker.internal:3308','root','abc123') or die('server down') ;
	mysql_select_db('radjasale',$konek) ;

 	$username = $_POST['username'];
 	$password = $_POST['password'];
	$akses=$_POST['akses'];



 	if ($akses == "admin"){
		$sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
 		$query = mysql_query($sql,$konek);
 		$row = mysql_num_rows($query);
		if ($row == 1){
  			header("Location: ./admin/home.php");
		}else{
			echo"<div align='center'><h1>Login Gagal</h1><h3>harap cek kembali!</h3></div>";
		}
		}
	elseif ($akses == "gudang"){
		$sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password'";
 		$query = mysql_query($sql,$konek);
 		$row = mysql_num_rows($query);
  		if ($row == 1){
  			header("Location: ./gudang/home.php");
		}else{
			echo"<div align='center'><h1>Login Gagal</h1><h3>harap cek kembali!</h3></div>";
		}
		}

?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>
