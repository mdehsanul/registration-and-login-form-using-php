<?php
require_once 'database.php';

// update user info
if (isset($_POST['updateinfo'])) {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // image upload
    $filename = $_FILES['image']['name'];
    $filesize = $_FILES['image']['size'];
    $filetemp = $_FILES['image']['tmp_name'];
    $filetype = $_FILES['image']['type'];
    move_uploaded_file($filetemp, "../update-images/" . $filename);

    $sql = "UPDATE `users` SET `firstname`='$firstname',`lastname`='$lastname',`phone`='$phone',`email`='$email',`password`='$password',`image`='$filename' WHERE id='$id'";
    $data = mysqli_query($conn, $sql);
    if ($data) {
        echo '<script type = "text/javascript">';
        echo 'Account Updated Successfully ';
        echo '</script>';
    }
}
