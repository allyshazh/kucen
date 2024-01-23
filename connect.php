<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "kucen"; 

$connect = mysqli_connect($server,$username,$password,$database);
if(!$connect) {
    echo "connection fail";
  }
?>