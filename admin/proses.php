<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Bootstrap Login Form</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<?php
error_reporting(E_ALL ^ E_DEPRECATED);

	$konek=mysql_connect('localhost','root','') or die('server down') ;
	mysql_select_db('db_inventaris',$konek) ;
	
 	$email = $_POST['email'];
 	$password = $_POST['password'];
	$akses=$_POST['akses'];

 	

 	if ($akses == "admin"){
		$sql = "SELECT * FROM admin WHERE email='$email' AND password='$password'";
 		$query = mysql_query($sql,$konek);
 		$row = mysql_num_rows($query);
		if ($row == 1){
  			header("Location: ./admin/home.php");
		}else{
			echo"<div align='center'><h1>Login Gagal</h1><h3>harap cek kembali!</h3></div>";
		}
		}
	elseif ($akses == "manajer"){
		$sql = "SELECT * FROM manajer WHERE email='$email' AND password='$password'";
 		$query = mysql_query($sql,$konek);
 		$row = mysql_num_rows($query);
  		if ($row == 1){
  			header("Location: home.php");
		}else{
			echo"<div align='center'><h1>Login Gagal</h1><h3>harap cek kembali!</h3></div>";
		}
		}

?>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
	</body>
</html>