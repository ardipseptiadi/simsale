<?php

  require_once(realpath(dirname(__FILE__) . "/../public_resource/config.php"));
  require_once(LIBRARY_PATH . "/templateFunctions.php");

  $setInIndexDotPhp = ".";
  $variables = array(
      'setInIndexDotPhp' => $setInIndexDotPhp
  );
   session_start();

   if($_SERVER["REQUEST_METHOD"] == "POST") {

      $db = mysql_connect($config['db']['host'],$config['db']['username'],$config['db']['password']) or die('server down') ;
      mysql_select_db($config['db']['dbname'],$db);
      $username = $_POST['username'];
      $password = md5($_POST['password']);
      $sql = "select * from pengguna where username='$username' and password='$password'";

      $login = mysql_query($sql);
      $cek = mysql_num_rows($login);

      if($cek > 0){
       $_SESSION['login_user'] = $username;
       $_SESSION['status'] = "login";
       header("location:index.php");
      }else{
       header("location:cek.php");
      }
   }

   renderViewFile("login.php", $variables);
?>
