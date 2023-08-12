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
                                        <li class="breadcrumb-item "><a href="admin.php">Admin Panel</a></li>

                                        <li class="breadcrumb-item active text-dark" aria-current="page">Reply</li>
                                </ol>
                        </nav>
                </div>
        </div>





        <div class="p-4 rounded" style="padding:10px;position: absolute;top:20%;left:30%;background-color: gray; color:white;height:450px;width:500px">
                <p id="e">Message from: </p>
                <div class="my-3 x" style="height:300px">
                        <div class="v1">

                                <h5 id="pa" style="max-width:450px;word-wrap:break-word;"></h5>

                        </div>
                </div>





                <div class="d-flex flex-row">
                        <input class="form-control" style="width:83%;" id="reply" type="text"></input>
                        <button id="rpb" class="btn btn-secondary">Reply</button>
                </div>
        </div>


        <!--Error-->
        <div style="" id="error"></div>




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script>
                setTimeout(function() {
                        document.getElementById('error').style.display = 'none';
                }, 5000);
                document.getElementById("pa").innerHTML += localStorage.text;
                document.getElementById("e").innerHTML += localStorage.email;

                $(document).ready(function() {


                        $('#rpb').click(function(e) {
                                alert($("#pa").val());
                                $.ajax({
                                        type: "POST",
                                        url: "reply_msg_module.php",
                                        data: {
                                                reply: $("#reply").val(),
                                                msg: document.getElementById("pa").textContent
                                                
                                        },
                                        success: function(result, status, xhr) {
                                                $("#error").html(result);
                                        }
                                });
                        });

                });
        </script>

</body>

</html>