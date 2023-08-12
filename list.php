<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <title>list</title>
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/card.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/adlog.css">

</head>

<body>

    <?php
    include 'header.php';
    include 'product_data.php';


    ?>



    <div class="wrapper">
        <div>
            <br>
            <br>
            <br>

        </div>

        <div class="content py-md-0 py-3">
            <section id="sidebar">
                <div class="py-3">
                    <h5 class="font-weight-bold">Categories</h5>
                    <ul class="list-group">
                        <li id="choice1" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category " value="0"> LAMBORGINI <span class="badge badge-primary badge-pill"></span> </li>
                        <li id="choice2" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category " value="1"> BMW <span class="badge badge-primary badge-pill"></span> </li>
                        <li id="choice3" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category " value="2"> TOYOTA <span class="badge badge-primary badge-pill"></span> </li>
                        <li id="choice4" class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category " value="3">Others <span class="badge badge-primary badge-pill"></span> </li>
                        <a href="list.php" > <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center category"> All <span class="badge badge-primary badge-pill"></span> </li> </a> 
                    </ul>
                </div>

            </section>
        </div>

        <section id="products">
            <div class="container py-3 x" style="height:650px;">
                <div id='list' class="row v1">

                    <?php
                    $j = 0;

                    while ($j < $i) {


                        echo '
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <img src="'.$products[$j]->path.'" class="product_name">
                                            <p>' . $products[$j]->name . '</p>
                                        </h2>
                                        <div class="rating">
                                            ' . $products[$j]->qty . '
                                        </div>
                                        <h2 class="price">৳ ' . $products[$j]->price . '</h2>
                                        <div class="btn d-flex justify-content-between align-items-center">
                                            <a onclick="return add(\'' . $products[$j]->code . '\',' . $products[$j]->price . ')"  class="add-to-cart-btn">
                                                <i class="bi bi-cart4"></i> Add to Cart
                                            </a>
                                            <a onclick="return adda(\'' . $products[$j]->code . '\')"  class="add-to-favorite text-success">
                                                <i class="bi bi-heart "></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';


                        $j++;
                    }

                    ?>



                </div>
            </div>
        </section>





    </div>
    <?php
    include 'logic.php';


    ?>

    <script>
        var code = ''
        var price = ''
        var qty = ''

        function adda(pname) {
            
            code = pname            
            

            if (localStorage.log == 'on') {
                var a = document.getElementById('cart-icon').textContent;
                var b = parseInt(a);
                b++
                document.getElementById('cart-icon').innerHTML = b;
                $.ajax({
                    type: "POST",
                    url: "addToFav_product_module.php",
                    data: {

                        product_code: code,
                        product_user: localStorage.userEmail,
                        
                    },
                    success: function(result, status, xhr) {

                        $("#error").html(result);
                    }
                });
            } else {
                $('#staticBackdrop').modal('show');

            }

        }
        function add(pname,  pprice) {
            
            code = pname            
            
           
             
            price = pprice

            if (localStorage.log == 'on') {
                var a = document.getElementById('cart-icon').textContent;
                var b = parseInt(a);
                b++
                document.getElementById('cart-icon').innerHTML = b;
                $.ajax({
                    type: "POST",
                    url: "addToCart_product_module.php",
                    data: {

                        product_code: code,
                        product_user: localStorage.userEmail,
                        
                        product_price: price
                    },
                    success: function(result, status, xhr) {

                        $("#error").html(result);
                    }
                });
            } else {
                $('#staticBackdrop').modal('show');

            }

        }
        $(document).ready(function() {
            
          

            $('#choice1').click(function(e) {

                $.ajax({
                    type: "POST",
                    url: "filterChoice_product_module.php",
                    data: {
                        choice: $("#choice1").val()
                    },
                    success: function(result, status, xhr) {

                        $("#list").html(result);
                    }
                });
            });
            $('#choice2').click(function(e) {

                $.ajax({
                    type: "POST",
                    url: "filterChoice_product_module.php",
                    data: {
                        choice: $("#choice2").val()
                    },
                    success: function(result, status, xhr) {

                        $("#list").html(result);
                    }
                });
            });
            $('#choice3').click(function(e) {

                $.ajax({
                    type: "POST",
                    url: "filterChoice_product_module.php",
                    data: {
                        choice: $("#choice3").val()
                    },
                    success: function(result, status, xhr) {

                        $("#list").html(result);
                    }
                });
            });
            $('#choice4').click(function(e) {

                $.ajax({
                    type: "POST",
                    url: "filterChoice_product_module.php",
                    data: {
                        choice: $("#choice4").val()
                    },
                    success: function(result, status, xhr) {

                        $("#list").html(result);
                    }
                });
            });
        });
        
    </script>


</body>

</html>
