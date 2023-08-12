<?php
function insert_user()
{

        include 'connection.php';
        session_start();
        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        
        
        $sqlInsert ="INSERT INTO `feedback` (`id`, `user_email`, `subject`, `text`, `reply`) VALUES (NULL, '".$_SESSION['userEmail']."', '".$name."', '".$pass."', '')";
                $resultInsert = mysqli_query($link, $sqlInsert);

        if(mysqli_error($link)){
                echo '<script>document.getElementById("error").style.display = "block";</script>';
                echo '<div class="fixed-top alert alert-danger alert-dismissible fade show" role="alert";>
                <strong>Something went wrong!</strong> Try with different e-mail.
                
              </div>';
        }else{
                echo '<script>document.getElementById("error").style.display = "block";
                </script>';
                
                echo '<div class="fixed-top alert alert-success alert-dismissible fade show" role="alert";>
                <strong>Feedback sent.</strong>
                
              </div>';
        }
        
}
insert_user();
?>