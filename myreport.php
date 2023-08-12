<?php
include 'x.php';

?>


<html>

<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Lift</title>
        <link rel="icon" href="assets/images/favicon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/main.css">

        <link rel="stylesheet" href="assets/css/adlog.css">
</head>

<body id="ad_main" style=" position: relative;">

        <div class="container-fluid  ">
                 
        <div class="row bg-transparent">
            <div class="col ">
                <nav aria-label="breadcrumb" class="bg-transparent rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item "><a href="index.php">Home</a></li>

                        <li class="breadcrumb-item active text-dark" aria-current="page">Reports</li>
                    </ol>
                </nav>
            </div>
        </div>
                <!-- Panel -->
                <div class="col-12 shadow-lg p-3 bg-light  rounded " style="color: white;height:550px;">


                        <div class="row p-2">

                                <?php include 'us_msg.php' ?>

                        </div>


                </div>


        </div>
        </div>
        <!--Error-->
        <div style="" id="error"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
                function see(text, reply) {
                        localStorage.text = text
                        localStorage.reply = reply
                        location.replace('sp_q.php')





                }
        </script>

</body>



</html>