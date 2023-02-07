<?php
 $host = "localhost";
 $user = "root";
 $pass = "";
 $db = "ezvillasbali_db";
 $connect = mysqli_connect($host,$user,$pass,$db);

 if(!$connect) {
  die("Failed to connect database: ".mysql_connect_error());
 }
?>