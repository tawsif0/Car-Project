<?php
function login()
{
  session_start();
  include 'connection.php';
  $email = $_POST['email'];

  //Query statement with placeholder
  $query = "SELECT * FROM user WHERE email = '$email'";



  // Execute it
  try {
    $stmt = $link->prepare($query);
    $result = $stmt->execute();
    $stmt->store_result();
  } catch (PDOException $ex) {
    echo $ex->getMessage();
  }

  if ($stmt->num_rows == 0) {

    echo "<script>document.getElementById('warn').innerText = 'User doesn\'t exist'</script>";
  } else {
    include 'class.php';

    $resultu = mysqli_query($link, $query);
    $row = mysqli_fetch_array($resultu);

    if ($row['pass'] == $_POST['pass']) {


      $user = new user();

      $user->email = $email;
      $user->name = $row['Name'];
      $user->id = $row['Id'];
      $user->mobile = $row['Mobile'];
      $user->pass = $row['pass'];
      $user->path = $row['path'];
      $user->address = $row['Address'];
      $_SESSION['userName'] = $user->name;
      $_SESSION['userAddress'] = $user->address;
      $_SESSION['userMobile'] = $user->mobile;
      $_SESSION['userEmail'] = $user->email;
      $_SESSION['userPath'] = $user->path;
      
      $_SESSION['log'] = 'on';
      
      echo '<script>document.getElementById("error").style.visibility = "visible";
      $(".close").click();
     
      localStorage.log = "on"
      
      document.getElementById("init-element").style.visibility = "hidden"
      document.getElementById("user-panel").style.visibility = "visible"
      
      document.getElementById("fav").style.visibility = "visible"
      document.getElementById("cart").style.visibility = "visible"
     

    </script>';
    echo '<div class="fixed-top alert alert-success alert-dismissible fade show" role="alert";>
      <strong>Login successful!</strong> Welcome <b>' . $user->name . '</b>
      
      </div>';
    } else {
      echo "<script>document.getElementById('warn').innerText = 'Incorrect password'</script>";
    }
  }
}

login();
