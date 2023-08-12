<?php

session_start();



$link = mysqli_connect('localhost', 'root', '');

mysqli_select_db($link, 'lift');

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $email = $_POST["email"];
$address = $_POST["address"];



// Get form data

$sql = "INSERT into orders ( email, address) VALUES ('$email', '$address' )";
// Execute statement
if (mysqli_query($link, $sql)) {
    echo "Order placed successfully!";
    header('Location:mtcart.php');
} 
else {
    0;

}
}

?>