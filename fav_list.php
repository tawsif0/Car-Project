<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous" />
    <title>Login</title>
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
    include 'product_data_1.php';


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
                    <h5 class="font-weight-bold">Favourites</h5>
                    Total <span class="badge badge-primary badge-pill"><?php echo $noOfDatav; ?></span>
                </div>

            </section>
        </div>

        <section id="products">
            <div class="container py-3 x" style="height:500px;">
                <div id='list' class="row v1">

                    <?php
                    $j = 0;

                    while ($j < $i) {


                        echo '
                            <div class="col-lg-6">
                                <div class="card border-0 shadow-sm">
                                    <div class="card-body text-center">
                                        <img src="'.$products[$j]->path.'" alt="">
                                        <h2 id="pn" class="product_name">
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
                                            <a onclick="return addf(\'' . $products[$j]->code . '\',)" class="add-to-favorite text-success">
                                                <i class="bi bi-heart-fill "></i>
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
        function addf(pname) {
            
            code = pname            
            
           
            alert(localStorage.userEmail);

            if (localStorage.log == 'on') {
                
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
    </script>


</body>

</html>