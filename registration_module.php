<?php
function insert_user()
{

        include 'connection.php';

        $sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('John', 'Doe', 'john@example.com')";
        $name = $_POST['name'];
        $pass = $_POST['pass'];
        $cell = $_POST['cell'];
        $email= $_POST['email'];
        $add = $_POST['add'];
        
        $sqlInsert ='INSERT INTO `user` (`Id`, `Name`, `email`, `pass`, `Address`, `Mobile`, `path`) VALUES (NULL, "'.$name.'","'.$email.'", "'.$pass.'","'.$add.'", "'.$cell.'", "")';
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
                <strong>Registration successful!</strong>
                
              </div>';
        }
        
}
insert_user();

?>