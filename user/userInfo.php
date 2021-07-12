<?php
require_once '../config/function.php';
require_once '../config/updateinfo.php';

if (!isset($_SESSION["id"])) {
    header("Location: login.php");
}

$id = $_SESSION['id'];
$query = "SELECT * from users WHERE id='$id'";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>User Information</title>
</head>

<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h1 class="text-center text-success mt-5">Welcome!! <?php echo $row["firstname"], " ", $row["lastname"] ?></h1>
                <div class="card mt-5 mb-3 mx-auto " style="max-width: 540px;">
                    <div class="row g-0">
                        <h4 class="card-header text-center">User Information</h4>
                        <div class="col-md-4">
                            <!-- not working -->
                            <img src="'upload-images/'<?php echo $row['image']; ?>" class="img-fluid rounded-start" alt="..." style="max-width: 178px;">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text fs-5">Name : <?php echo $row["firstname"], " ", $row["lastname"] ?></p>
                                <p class="card-text fs-5">phone : <?php echo $row["phone"] ?></p>
                                <p class="card-text fs-5">Email : <?php echo $row["email"]  ?></p>
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <!-- Button trigger modal -->
                                    <a href="#" class="btn btn-success mt-4" data-bs-toggle="modal" data-bs-target="#exampleModal">Update</a>
                                    <a href="logout.php" class="btn btn-danger  mt-4">Logout</a>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title text-center" id="exampleModalLabel">Update your Account</h3>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body ml-auto">
                                                    <form class="row g-3" id="form" method="post" enctype="multipart/form-data">
                                                        <!-- id -->
                                                        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                                        <!-- first name -->
                                                        <div class="col-md-6 form-validation">
                                                            <label for="firstname" class="form-label fs-5"> First
                                                                name</label>
                                                            <div class="input-group">

                                                                <input type="text" name="firstname" class="form-control p-2" id="firstname" placeholder="firstname" value="<?php echo $row['firstname'] ?>" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <!-- last name -->
                                                        <div class="col-md-6 form-validation">
                                                            <label for="lastname" class="form-label fs-5">Last name</label>
                                                            <div class="input-group">
                                                                <input type="text" name="lastname" class="form-control p-2" id="lastname" placeholder="lastname" value="<?php echo $row['lastname'] ?>" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <!-- Phone Number -->
                                                        <div class="col-md-12 form-validation">
                                                            <label for="phone" class="form-label fs-5">Phone</label>
                                                            <div class="input-group">
                                                                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number" value="<?php echo $row['phone'] ?>" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <!-- email -->
                                                        <div class="col-md-12 form-validation">
                                                            <label for="email" class="form-label fs-5">Your Email</label>
                                                            <div class="input-group">
                                                                <input type="email" name="email" class="form-control p-2" id="email" placeholder=" email" value="<?php echo $row['email'] ?>" autocomplete="off">
                                                            </div>
                                                        </div>
                                                        <!-- password -->
                                                        <div class="col-md-12 form-validation">
                                                            <label for="password" class="form-label fs-5">Password</label>
                                                            <div class="input-group">
                                                                <input type="password" name="password" class="form-control p-2" placeholder="password" value="<?php echo $row['password'] ?>" id="password">
                                                            </div>
                                                        </div>
                                                        <!-- upload image -->
                                                        <div class="col-md-12 form-validation">
                                                            <label for="image" class="form-label fs-5">Upload Image</label>
                                                            <div class="input-group">
                                                                <input type="file" name="image" class="form-control p-2">
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" name="updateinfo" class="btn btn-success">Save changes</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>