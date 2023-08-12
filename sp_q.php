<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Registration Form</title>
        <link rel="stylesheet" href="assets/css/main.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link rel="stylesheet" href="assets/css/adlog.css">
</head>

<body>
        <div class="row bg-transparent">
                <div class="col ">
                        <nav aria-label="breadcrumb" class="bg-transparent rounded-3 p-3 mb-4">
                                <ol class="breadcrumb mb-0">
                                        <li class="breadcrumb-item "><a href="myreport.php">My feed</a></li>

                                        <li class="breadcrumb-item active text-dark" aria-current="page">Brief</li>
                                </ol>
                        </nav>
                </div>
        </div>





        
        <div class="my-3 mx-3" style="">
                

                        <h2 id="pa" style="max-width:600px;word-wrap:break-word;"></h2>

                
        </div>
        <div class="mx-3" style="">
                

                <span><b>Replied:</b><br> </span><h5 id="e"> </h5>

                
        </div>







        <script>
                setTimeout(function() {
                        document.getElementById('error').style.display = 'none';
                }, 5000);
                document.getElementById("pa").innerHTML += localStorage.text;
                document.getElementById("e").innerHTML += localStorage.reply;
        </script>






</body>

</html>