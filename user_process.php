<?php
  $host="localhost";
  $user="root";
  $pass="";
  $dbname="user";
  $conn=new MySQLi($host,$user,$pass,$dbname);
  if($conn->connect_errno){
    echo "ERROR:" .$conn->connect_error;
  }

 ?>
