<?php
include 'cart_data.php';

?>
<header>

        <nav class="fixed-top navbar navbar-expand-lg navbar-light">
                <div class="container">
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                                <a class="nav-link" aria-current="page" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="list.php">Shop</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="contact.php">Contact us</a>
                                        </li>
                                      
                                </ul>
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 action-menu">

                                        

                                        <li id="init-element" class="nav-item">

                                                <button type="button" id="to-login" class="btn btn-secondary text-warning" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                                        Log in
                                                </button>
                                                
                                                <button onclick="location.replace('register.php')"type="button" id="to-regi" class="btn btn-warning">
                                                        Sign up
                                                </button>
                                        </li>
                                        <li class="nav-item" id="fav">
                                                <a class="nav-link" href="fav_list.php">
                                                        <i class="bi bi-heart"></i>
                                                </a>
                                        </li>
                                        <li id="cart" class="nav-item">
                                                <a class="nav-link" href="cart.php" >
                                                        <i class="bi bi-cart4 position-relative">
                                                                <span style="font-size: 12px" id="cart-icon" class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger"><?php echo $num; ?>
                                                                </span>
                                                        </i>
                                                </a>
                                        </li>
                                        <li id="user-panel" class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="profile.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="bi bi-person"></i>
                                                </a>
                                                <ul class="dropdown-menu border-0 shadow-lg" aria-labelledby="navbarDropdown">


                                                        <li><a id="mp" class="dropdown-item" href="profile.php">Profile</a></li>
                                                        <li><a id="mp" class="dropdown-item" href="myreport.php">Reports</a></li>
                                                        <button type="button" id="log-out" class="dropdown-item">
                                                                <i class="bi bi-box-arrow-left"></i>
                                                                Log out</button>
                                                </ul>
                                        </li>
                                </ul>
                        </div>
                </div>
        </nav>
</header>
