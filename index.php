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
        <!-- -------- Registration form -------- -->
        <div class="col-md-7  mt-md-5" id="firstRegistration">
            <form class="row g-3" id="form" method="post" enctype="multipart/form-data">
                <h2 class="fw-bold">Create an Account</h2>
                <!-- first name -->
                <div class="col-md-5 form-validation">
                    <label for="firstname" class="form-label fs-5"> First
                        name</label>
                    <div class="input-group">
                        <input type="text" name="firstname" class="form-control p-2" id="firstname" placeholder="Please enter your firstname" autocomplete="off">
                        <small></small>
                    </div>
                </div>
                <!-- last name -->
                <div class="col-md-5 form-validation">
                    <label for="lastname" class="form-label fs-5">Last name</label>
                    <div class="input-group">
                        <input type="text" name="lastname" class="form-control p-2" id="lastname" placeholder="Please enter your lastname" autocomplete="off">
                        <small></small>
                    </div>
                </div>
                <!-- Phone Number -->
                <div class="col-md-10 form-validation">
                    <label for="phone" class="form-label fs-5">Phone</label>
                    <div class="input-group">
                        <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number" autocomplete="off">
                        <small></small>
                    </div>
                </div>
                <!-- email -->
                <div class="col-md-10 form-validation">
                    <label for="email" class="form-label fs-5">Your Email</label>
                    <div class="input-group">
                        <input type="email" name="email" class="form-control p-2" id="email" placeholder="Please provide an email" autocomplete="off">
                        <small></small>
                    </div>
                </div>
                <!-- password -->
                <div class="col-md-5 form-validation">
                    <label for="password" class="form-label fs-5">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" class="form-control p-2" placeholder="Please enter a password" id="password">
                        <small></small>
                    </div>
                </div>
                <!-- confirm password -->
                <div class="col-md-5 form-validation">
                    <label for="cpassword" class="form-label fs-5">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" name="cpassword" class="form-control p-2" placeholder="Please confirm the password" id="cpassword">
                        <small></small>
                    </div>
                </div>
                <!-- upload image -->
                <div class="col-md-5 form-validation">
                    <label for="image" class="form-label fs-5">Upload Image</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control p-2">
                    </div>
                </div>
                <!-- checkbox -->
                <div class="col-12">
                    <div class="form-check m-2">
                        <input type="checkbox" class="form-check-input" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            I agree to the <span class="fw-bold"><u>Terms and Conditions</u></span>
                        </label>
                    </div>
                </div>
                <!-- submit button -->
                <div class="col-md-10 d-grid">
                    <button type="submit" name="register" class="btn text-white fs-5">Create your
                        account</button>
                </div>
                <!-- Already Registered -->
                <div class="form-group col-md-10 text-center">
                    <p>Already Registered? <a href="#" id="alreadyRegistered">Login</a></p>
                </div>
            </form>
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
<?php require_once 'footer.php' ?>