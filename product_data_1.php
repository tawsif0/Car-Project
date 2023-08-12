<?php

require_once 'class.php';
include 'connection.php';

$products = array();

session_start();




//variables


$email = "";

//sql

$sqlfav = "SELECT * FROM `favourites` inner join product on favourites.product = product.code where favourites.user = '".$_SESSION['userEmail']."'";



$resultfav = mysqli_query($link, $sqlfav);


//noofdata
$noOfDatav = mysqli_num_rows($resultfav);




$i = 0;





while ($row = mysqli_fetch_array($resultfav)) {
        $products[$i] = new pt();
        $products[$i]->code = $row['code'];
        $products[$i]->name = $row['Name'];
        $products[$i]->price = $row['Price'];
        $products[$i]->qty = $row['qty'];
        $products[$i]->path = 'assets/images/product/'.$row['path'];
       
        $products[$i]->type = $row['type'];
       

        $i++;
}
