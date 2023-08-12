


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lift</title>
   
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/header.css">
</head>

<body>
    <!--Header section-->
    <?php include 'header.php' ?>
   <?php include 'search.php'?>
    <!--Slider Section-->
    <section class="slider">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <div class="carousel-inner">
                <div class="container">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-lg-6 slider-text">
                                <h2 class="text-success">
                                    Don't panic<br><span class="lighten">Just</span> <br>
                                    <span class="lighten">Buy Cars</span>
                                </h2><br><br><br>
                               <a href="list.php" class="btn-order-now">Order Now</a>
                            </div>
                            <div class="col-lg-6 slider-image">
                                <img src="assets/images/product/f1.jpg" class="d-block w-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
    </section>

    <!--Category product-->
    <section class="category-product">
        <div class="container">
            <div class="section-title text-center">
                <h2>Category Cars</h2>
                <p class="text-muted">Buy cars from various catagories.</p>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <img src="assets/images/product/OIP.jpg" alt="">
                            <h4>BMW</h4>
                            <a href="list.php" class="view-all-btn">View All <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <img src="assets/images/product/OIP1.jpg" alt="">
                            <h4>Lamborgini</h4>
                            <a href="list.php" class="view-all-btn">View All <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <img src="assets/images/product/OIP2.jpg" alt="">
                            <h4>Toyota</h4>
                            <a href="list.php" class="view-all-btn">View All <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body">
                            <img src="assets/images/product/OIP3.jpg" alt="">
                            <h4>Others</h4>
                            <a href="list.php" class="view-all-btn">View All <i class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 
    <!--Latest Product-->
    <section class="latest-product">
        <div class="container">
            <h2>Latest Products</h2>
            <hr>
            <div class="row">
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <img src="assets/images/product/OIP5.png" alt="">
                            <h2 class="product_name">
                                <a href="">BMW m4(2018)</a>
                            </h2>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <h2 class="price">৳ 5000000</h2>
                            <div class="btn d-flex justify-content-between align-items-center">
                                <a href="list.php" class="add-to-cart-btn">
                                    <i class="bi bi-cart4"></i>Start shopping
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <img src="assets/images/product/OIP6.jpg" alt="">
                            <h2 class="product_name">
                                <a href="">Lamborghini Gallardo LP</a>
                            </h2>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <h2 class="price">৳ 20000000</h2>
                            <div class="btn d-flex justify-content-between align-items-center">
                                <a href="list.php" class="add-to-cart-btn">
                                    <i class="bi bi-cart4"></i>Start shopping
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card border-0 shadow-sm">
                        <div class="card-body text-center">
                            <img src="assets/images/product/OIP7.jpg" alt="">
                            <h2 class="product_name">
                                <a href="">Mazda MX5</a>
                            </h2>
                            <div class="rating">
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                                <i class="bi bi-star-fill text-warning"></i>
                            </div>
                            <h2 class="price">৳ 2300000</h2>
                            <div class="btn d-flex justify-content-between align-items-center">
                                <a href="list.php" class="add-to-cart-btn">
                                    <i class="bi bi-cart4"></i>Start shopping
                                </a>
                               
                            </div>
                        </div>
                    </div>
                </div>
                
    </section>
    
    <!--Footer section-->
    <footer class="border-top py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <img src="assets/images/R.png" height="210px" alt="">

                </div>
                <div class="col-lg-3">
                    <h4>Information</h4>
                    <ul class="footer-list">
                        
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>User Area</h4>
                    <ul class="footer-list">
                        <li><a onclick="showFoo()" id="to-admin-panel">Admin login</a></li>
                     
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Contact Info</h4>
                    <p>01234567891</p>
                    <p>509 724 580 - issued in Dhaka (DHA)</p>
                    <p>support@lift.com</p>
                </div>
            </div>
            <hr>
            <div class="copyright-text mt-3 text-center">
                <a href="">Copyright © 2022 <span class="text-dark fw-bold">Lift</span>
                    <span class="text-danger fw-bold">Inc.</span></a>
            </div>
        </div>
    </footer>
   

    <?php include 'logic.php';?>
    
<script src="assets/js/footer.js"></script>
</body>

</html>