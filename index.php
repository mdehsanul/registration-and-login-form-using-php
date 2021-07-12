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
        <div class="col-md-7 mt-md-5">
            <form class="row g-3" method="post" enctype="multipart/form-data" name="registration_form" id="registration_form">
                <div class="col-md-8 form-validation ">
                    <label for="name" class="form-label fs-5">Usrer Name</label>
                    <div>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                        <span class="error">
                            <p id="name_error"></p>
                        </span>
                    </div>
                </div>
                <div class="col-md-8 form-validation ">
                    <label for="telephone" class="form-label fs-5"> Telephone</label>
                    <div>
                        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Telephone">
                        <span class="error">
                            <p id="telephone_error"></p>
                        </span>
                        <small></small>
                    </div>
                </div>
                <div class="col-md-8 form-validation ">
                    <label for="email" class="form-label fs-5">Email</label>
                    <div>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                        <span class="error">
                            <p id="email_error"></p>
                        </span>
                        <small></small>
                    </div>
                </div>
                <div class="col-md-8 form-validation ">
                    <label for="password" class="form-label fs-5"> Password</label>
                    <div>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        <span class="error">
                            <p id="password_error"></p>
                        </span>
                    </div>
                </div>
                <div class="col-md-8 form-validation ">
                    <label for="cpassword" class="form-label fs-5">Confirm Password</label>
                    <div>
                        <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
                        <span class="error">
                            <p id="cpassword_error"></p>
                        </span>
                        <small></small>
                    </div>
                </div>
                <!-- upload image -->
                <div class="col-md-5">
                    <label for="image" class="form-label fs-5">Upload Image</label>
                    <div class="input-group">
                        <input type="file" name="image" class="form-control p-2 mb-3">
                    </div>
                </div>
                <div class="col-md-8 d-grid">
                    <button type="submit" class="btn text-white register_button" name="register" value="submit">Register
                        Now</button>
                </div>
                <div class="col-md-8 text-center">
                    <p>Already Registered? <a href="./login.php" id="alreadyRegistered">Login</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once 'footer.php' ?>