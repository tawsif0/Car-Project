<?php

session_start();
require_once 'class.php';
include 'connection.php';

$cart = array();





//variables


$email = $_SESSION['userEmail'];

//sql

$sqlx = "SELECT * FROM carts inner join product on carts.product = product.code  where carts.user = '".$email."'";
$sqla = "SELECT SUM(price) as total,count(price) as num FROM carts where user = '".$email."'";

//rsult fetch
$resultx = mysqli_query($link, $sqlx);

$resulta = mysqli_query($link, $sqla);
;

$noOfDatax = mysqli_num_rows($resultx);








$i = 0;



$total = 0;
$num = 0;
while ($row = mysqli_fetch_array($resulta)) {
        $total += $row[0];
        $num += $row['num'];
}

while ($row = mysqli_fetch_array($resultx)) {
        
        $cart[$i] = new cart();
        $cart[$i]->pname = $row['Name'];
         $cart[$i]->price = $row['price'];
         
        $i++;
}
