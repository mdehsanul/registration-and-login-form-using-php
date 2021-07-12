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
            <form class="row g-3 form" method="post">
                <h2 class="fw-bold">Login</h2>
                <!-- email -->
                <div class="col-md-7 form-validation">
                    <label for="loginemail" class="form-label fs-5">Your Email</label>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control p-2" placeholder="email" id="loginemail" autocomplete="off">
                    </div>
                </div>
                <!-- password -->
                <div class="col-md-7 form-validation">
                    <label for="loginpassword" class="form-label fs-5">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control p-2" placeholder="password" id="loginpassword" autocomplete="off">
                    </div>
                </div>
                <!-- checkbox -->
                <div class="col-12">
                    <div class="form-check m-2">
                        <input type="checkbox" class="form-check-input" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Remember me
                        </label>
                    </div>
                </div>
                <!-- submit button -->
                <div class="col-md-7 d-grid">
                    <button type="submit" name="login" class="btn text-white fs-5">Login</button>
                </div>
                <!-- don't have an account -->
                <div class="form-group col-md-7 text-center">
                    <p>Don't have account? <a href="#" id="signup">Sign up here</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once 'footer.php'; ?>