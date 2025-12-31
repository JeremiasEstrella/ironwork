<?php
$host="localhost";
$user="root";
$password="";
$bd="ironwork";
$conectar=mysqli_connect($host,$user,$password,$bd);
if(!$conectar){
    echo "no se pudo conectar a la base de datos";
  }
?>