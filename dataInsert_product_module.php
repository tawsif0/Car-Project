<?php
function insert_product()
{

        include 'connection.php';

        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
        $name = $_POST['product_name'];
        $code = $_POST['product_code'];
        $price = $_POST['product_price'];
        $type = $_POST['product_type'];
        $path = $_POST['product_path'];
        $qty = $_POST['product_qty'];
        $sqlInsert = 'insert into product values("","'.$name.'","'.$price.'","'.$qty.'","'.$type.'","'.$path.'","'.$code.'")';
        $resultInsert = mysqli_query($link, $sqlInsert);

        if(mysqli_error($link)){
                echo '<script>document.getElementById("error").style.display = "block";</script>';
                echo '<div class="fixed-top alert alert-danger alert-dismissible fade show" role="alert";>
                <strong>Something went wrong!</strong> Try again.
                
              </div>';
        }else{
                echo '<script>document.getElementById("error").style.display = "block";</script>';
                
                echo '<div class="fixed-top alert alert-success alert-dismissible fade show" role="alert";>
                <strong>Product added successful!</strong>
                
              </div>';
        }
        
}
insert_product();
?>