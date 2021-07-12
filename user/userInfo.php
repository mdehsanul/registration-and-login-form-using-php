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
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center text-success mt-5">Welcome!! <?php echo $row["username"] ?></h1>
                <table class="table mt-5">
                    <thead class="table-success">
                        <tr>
                            <th>Image</th>
                            <th>User name</th>
                            <th>Telephone</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $row['image']; ?></td>
                            <td><?php echo $row["username"] ?></td>
                            <td><?php echo $row["telephone"] ?></td>
                            <td><?php echo $row["email"]  ?></td>
                            <td><?php echo $row["password"]  ?></td>
                            <td><button type="button" class="btn btn-warning text-white" id="update">
                                    update
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <div class="col-12 ">
                    <a href="logout.php" class="btn btn-danger mt-4 ">Logout</a>
                </div>
            </div>
            <div class="col-md-6 mt-5 " style="margin-left: 470px;" id="updateform">
                <form class="row g-3" method="post" enctype="multipart/form-data" name="registration_form" id="registration_form">
                    <!-- id -->
                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                    <div class="col-md-8">
                        <label for="name" class="form-label fs-5">Usrer Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name" value="<?php echo $row['username'] ?>">
                        <span class="error">
                            <p id="name_error"></p>
                        </span>
                    </div>
                    <div class="col-md-8">
                        <label for="telephone" class="form-label fs-5"> Telephone</label>
                        <input type="tel" class="form-control" id="telephone" name="telephone" placeholder="Telephone" value="<?php echo $row['telephone'] ?>">
                        <span class="error">
                            <p id="telephone_error"></p>
                        </span>
                    </div>
                    <div class="col-md-8">
                        <label for="email" class="form-label fs-5">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email'] ?>">
                        <span class="error">
                            <p id="email_error"></p>
                        </span>
                    </div>
                    <div class="col-md-8">
                        <label for="password" class="form-label fs-5"> Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" value="<?php echo $row['password'] ?>">
                        <span class="error">
                            <p id="password_error"></p>
                        </span>
                    </div>
                    <!-- upload image -->
                    <div class="col-md-5">
                        <label for="image" class="form-label fs-5">Upload Image</label>
                        <div class="input-group">
                            <input type="file" name="image" class="form-control p-2 mb-3">
                        </div>
                    </div>
                    <div class="col-md-8 d-grid">
                        <button type="submit" class="btn btn-success text-white register_button" name="updateinfo" id="updateinfo" value="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- javascript -->
    <script>
        // update
        const update = document.getElementById("update");
        const updateform = document.getElementById("updateform");
        const updateinfo = document.getElementById("updateinfo");

        updateform.style.display = "none";

        update.addEventListener("click", () => {
            updateform.style.display = "block";
        });

        updateinfo.addEventListener("click", () => {
            updateinfo.style.display = "none";
        })
    </script>
    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>