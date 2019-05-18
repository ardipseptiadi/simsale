<center>
<?php



error_reporting(E_ALL ^ E_DEPRECATED);
	include ("db.php");	

	$msg = "";
	if(isset($_POST["submit"]))
	{
		$nama = $_POST["nama"];
		$email = $_POST["email"];
		$password = $_POST["password"];

		$nama = mysqli_real_escape_string($db, $nama);
		$email = mysqli_real_escape_string($db, $email);
		$password = mysqli_real_escape_string($db, $password);
		$password = ($password);
		
		
		$sql="SELECT email FROM admin WHERE email='$email'";
		$result=mysqli_query($db,$sql);
		$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
		if(mysqli_num_rows($result) == 1)
		{
			$msg = "<center>Maaf...Email ini sudah ada...</center>";
		}
		else
		{
			$query = mysqli_query($db, "INSERT INTO admin (nama, email, password) VALUES ('$nama', '$email', '$password')");
			if($query)
			{
				$msg = "<center>Terima kasih! Anda telah terdaftar.</center>";
			}
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Form Pendaftaran Admin</title>
<!-- style CSS utama -->
<link href="../style.css" rel="stylesheet" type="text/css" />
<style>

label
{
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:20px;
	font-weight:bold;
	
}
.input
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
	
}
input[type=submit]
{
	padding:5px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:18px;
	font-weight:bold;
	background:#greygrey;
	border:2px solid black;
	color:#black;
}
fieldset
{
	background:#c6d9ec;
	width: 50%;
}
fieldset legend
{
	padding:2px;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:14px;
	font-weight:bold;
	background:#8587a7;
	border:2px solid black;
	color:#FFF;
}
.error
{
	color:red;
	font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace;
	font-size:16px;
}
</style>
</head>

<body>
    <H2>Pendaftaran Admin Bagian Inventaris</H2>
<div id="content">
<form method="post" action="">
<fieldset>
<legend>Form Pendaftaran</legend>
<table width="400" border="0" cellpadding="10" cellspacing="10">
<tr>
<td colspan="2" align="center" class="error"><?php echo $msg;?></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="nama">Nama</label></div></td>
<td><input name="nama" type="text" class="input" size="25" required /></td>
</tr>
<tr>
<td style="font-weight: bold"><div align="right"><label for="email">Email</label></div></td>
<td><input name="email" type="email" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23" style="font-weight: bold"><div align="right"><label for="password">Password</label></div></td>
<td><input name="password" type="password" class="input" size="25" required /></td>
</tr>
<tr>
<td height="23"></td>
<td><div align="right">
  <input type="submit" name="submit" value="Daftar!" />
</div></td>
</tr>
</table>
</fieldset>
</form>
<a href="index.php"><b>Kembali ke Menu Login</a>
</div>
</body>
</html>