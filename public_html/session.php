<?php
   require_once(realpath(dirname(__FILE__) . "/../public_resource/config.php"));
   session_start();

   if(isset($_SESSION['login_user'])){
     $user_check = $_SESSION['login_user'];
   }else{
      header("location:login.php");
      die();
   }

?>
