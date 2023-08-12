<?php
function logout()
{
        session_start();
        session_unset();
        session_destroy();
        session_start();
        echo '<script>document.getElementById("error").style.visibility = "visible";</script>';
        echo '
      <script>
     
      localStorage.log = "off"
      document.getElementById("init-element").style.visibility = "visible"
      document.getElementById("user-panel").style.visibility = "hidden"
      
      document.getElementById("fav").style.visibility = "hidden"
      document.getElementById("cart").style.visibility = "hidden"
      setTimeout(function () {
  
        document.getElementById("error").style.visibility = "hidden"
        
      }, 5000)

    </script>';
        echo '<div class="fixed-top alert alert-success alert-dismissible fade show" role="alert";>
      <strong>Logout successful!</strong>
      
      </div>';
}


logout();
