<?php
function add_to_cart()
{

        include 'connection.php';
        session_start();
        $code = $_POST['product_code'];
       
        $email = $_POST['product_user'];
        
        $price =       $_POST['product_price'];
        $sqlInsert = 'INSERT INTO `carts` VALUES (NULL, "'.$code.'", "'.$email.'",'.$price.')';
        $resultInsert = mysqli_query($link, $sqlInsert);

        if(mysqli_error($link)){
                echo '<script>document.getElementById("error").style.display = "block";</script>';
                echo '<div class="fixed-top alert alert-danger alert-dismissible fade show" role="alert";>
                <strong>Something went wrong!</strong> Try again.
                
              </div>';
        }else{
        
        }
        
}
add_to_cart();
?>