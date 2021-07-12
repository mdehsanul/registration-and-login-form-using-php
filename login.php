<?php
require_once 'header.php';
require_once 'config/function.php';
?>
<div class="container">
    <div class="row py-5 mt-5 d-flex align-items-center">
        <div class="col-md-5 mt-md-5">
            <img src="./img/login.png" alt="" class="img-fluid">
            <h1 class="text-center">Welcome to</h1>
            <p class="fs-3 text-center">Online Content Provider Limited</p>
        </div>

        <!-- -------- Login form -------- -->
        <div class="col-md-7 mt-md-5" id="secondLogin">
            <form class="row g-3 form" method="post" name="login_form" id="login_form">
                <div class="col-md-8">
                    <label for="email" class="form-label fs-5">Email</label>
                    <input type="email" class="form-control" id="loginemail" name="loginemail" placeholder="Email">
                    <span class="error">
                        <p id="loginemail_error"></p>
                    </span>
                </div>
                <div class="col-md-8">
                    <label for="password" class="form-label fs-5"> Password</label>
                    <input type="password" class="form-control" id="loginpassword" name="loginpassword" placeholder="Password">
                    <span class="error">
                        <p id="loginpassword_error"></p>
                    </span>
                </div>
                <div class="col-md-8 d-grid">
                    <button type="submit" value="submit" class="btn text-white" name="login">Login</button>
                </div>
                <!-- don't have an account -->
                <div class="form-group col-md-7 text-center">
                    <p>Don't have account? <a href="./index.php" id="signup">Sign up here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- javascript -->
<script>
    document.getElementById("login_form").onsubmit = function() {
        var loginemail = document.forms["login_form"]["loginemail"].value;
        var loginpassword = document.forms["login_form"]["loginpassword"].value;
        var submit = true;
        if (loginemail == null || loginemail == "") {
            emailError = "Please enter your email";
            document.getElementById("loginemail_error").innerHTML = emailError;
            submit = false;
        }

        if (loginpassword == null || loginpassword == "") {
            passwordError = "Please enter your password";
            document.getElementById("loginpassword_error").innerHTML = passwordError;
            submit = false;
        };
        return submit;
    }

    function removeWarning() {
        document.getElementById(this.id + "_error").innerHTML = "";
    }

    document.getElementById("loginemail").onkeyup = removeWarning;
    document.getElementById("loginpassword").onkeyup = removeWarning;
</script>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>