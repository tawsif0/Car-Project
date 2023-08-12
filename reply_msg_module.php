<?php
function reply_customer()
{

        include 'connection.php';

        $reply = $_POST['reply'];
        $msg = $_POST['msg'];

        $sqlInsert = 'update feedback set reply = "' . $reply . " " . '" where text = "' . $msg . '"';
        $resultInsert = mysqli_query($link, $sqlInsert);
        if (mysqli_error($link)) {
                echo '<script>document.getElementById("error").style.display = "block";</script>';
                echo '<div class="fixed-top alert alert-danger alert-dismissible fade show" role="alert";>
                <strong>Something went wrong!</strong> Try again.
                
              </div>';
        } else {


                echo '<script>document.getElementById("error").style.display = "block";</script>';

                echo '<div class="fixed-top alert alert-success alert-dismissible fade show" role="alert";>
                <strong>Replied successfully!</strong>
                
              </div>';
        }
}
reply_customer();
