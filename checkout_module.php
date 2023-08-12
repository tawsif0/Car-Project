<?php
function checkout()
{
        session_start();
        include 'connection.php';

        
        $sqlInsert ="DELETE FROM carts WHERE user = '".$_SESSION['userEmail']."'";
        $resultInsert = mysqli_query($link, $sqlInsert);

        if(mysqli_error($link)){
               
        }else{
            
        }
        
}
checkout();
?>