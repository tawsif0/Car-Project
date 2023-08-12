<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
                <div class="modal-content">
                        <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Sign in</h5>
                                <button type="button" class="btn-close close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                                <input type="text" name="" id="email" class="form-control my-4 py-2" placeholder="Email" />
                                <input type="password" name="" id="pass" class="form-control my-4 py-2" placeholder="Password" />
                                <p id="warn" class="text-danger"></p>

                                <div class="text-center mt-3">
                                        <input type="submit" name="submit" id="login" value="Sign in" class=" btn btn-warning"></input>
                                        <a href="register.php" class="nav-link text-dark text-lg-center">Register account</a>
                                </div>
                        </div>
                </div>
        </div>
</div>

<!--Error-->
<div style="" id="error"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
        
        if (localStorage.log != 'on') {
                document.getElementById("init-element").style.visibility = "visible"
                document.getElementById("user-panel").style.visibility = "hidden"
                document.getElementById("fav").style.visibility = "hidden"
                document.getElementById("cart").style.visibility = "hidden"
        } else {
                document.getElementById("init-element").style.visibility = "hidden"
                document.getElementById("user-panel").style.visibility = "visible"
                document.getElementById("fav").style.visibility = "visible"
                document.getElementById("cart").style.visibility = "visible"
        }
        $(document).ready(function() {
                $('#login').click(function(e) {
                        $.ajax({
                                type: "POST",
                                url: "auth_module.php",
                                data: {
                                        email: $("#email").val(),
                                        pass: $("#pass").val()
                                },
                                success: function(result, status, xhr) {
                                        $("#error").html(result)
                                        localStorage.userEmail = $("#email").val()


                                }
                        });
                });
                $('#log-out').click(function(e) {
                        $.ajax({
                                type: "POST",
                                url: "log_out_module.php",
                                data: {

                                },
                                success: function(result, status, xhr) {
                                        $("#error").html(result)



                                }
                        });
                });

        })
</script>

<script src="assets/js/bootstrap.bundle.js"></script>