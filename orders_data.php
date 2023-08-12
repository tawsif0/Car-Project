<?php

require_once 'class.php';
include 'connection.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
$email = $_POST["email"];

$address = $_POST["address"];



$sql = "INSERT INTO orders ( email, address) VALUES ( '{$email}', '{$address}')";

if(mysqli_query($link, $sql)){
  echo 1;
}else{
  echo 0;
}
}
?>



