<?php
    require_once(realpath(dirname(__FILE__) . "/../config.php"));

    function openConnection(){
      global $config;
    	$conn = mysql_connect($config['db']['host'],$config['db']['username'],$config['db']['password']);
      if(!$conn){
        return false;
      }
      mysql_select_db($config['db']['dbname']);

      return $conn;
    }

    function closeConnection($conn){
      mysql_close($conn);
    }
?>
