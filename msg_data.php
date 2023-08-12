<?php
require_once 'class.php';
include 'connection.php';

$msg = array();







//sql

$sqlx = "SELECT * FROM feedback where reply = ''";



//rsult fetch
$resultx = mysqli_query($link, $sqlx);

//noofdata

$noOfDatax = mysqli_num_rows($resultx);









$i = 0;



while ($row = mysqli_fetch_array($resultx)) {
        
        $msg[$i] = new ms();
        $msg[$i]->id = $row['id'];
        $msg[$i]->subject = $row['subject'];
        $msg[$i]->user_email = $row['user_email'];
        $msg[$i]->text = $row['text'];
        $msg[$i]->ans = $row['reply'];
       

        $i++;
}
