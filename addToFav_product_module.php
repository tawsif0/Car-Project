<?php
function add_to_cart()
{

        include 'connection.php';
        session_start();
        $code = $_POST['product_code'];
       
        $email = $_POST['product_user'];
        
        $sqlInsert = 'INSERT INTO `favourites` VALUES (NULL, "'.$email.'", "'.$code.'")';
        $resultInsert = mysqli_query($link, $sqlInsert);

        if(mysqli_error($link)){
                echo '<script>document.getElementById("error").style.display = "block";</script>';
                echo '<div class="fixed-top alert alert-danger alert-dismissible fade show" role="alert";>
                <strong>Something went wrong!</strong> Try again.
                
              </div>';
        }else{
                echo '<script>document.getElementById("error").style.display = "block";</script>';
                echo '<div class="fixed-top alert alert-success alert-dismissible fade show" role="alert";>
                <strong>Added to favourites.</strong>
                
              </div>';
        }
        
}
add_to_cart();
?>