<?php
require_once 'class.php';
include 'connection.php';
session_start();

$msg1 = array();






//variables


$email = $_SESSION['userEmail'];
//sql
$sqlx1 = "SELECT * FROM feedback where user_email = '".$email."'";



//rsult fetch

$resultx1 = mysqli_query($link, $sqlx1);

//noofdata

$noOfDatax1 = mysqli_num_rows($resultx1);




$k = 0;



while ($row = mysqli_fetch_array($resultx1)) {
        
        $msg1[$k] = new ms();
        $msg1[$k]->id = $row['id'];
        $msg1[$k]->subject = $row['subject'];
        $msg1[$k]->user_email = $row['user_email'];
        $msg1[$k]->text = $row['text'];
        $msg1[$k]->ans = $row['reply'];
       

        $k++;
}
