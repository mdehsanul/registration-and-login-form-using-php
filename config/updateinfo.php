<?php
require_once 'database.php';

// update user info
if (isset($_POST['updateinfo'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // image upload
    $filename = $_FILES['image']['name'];
    $filesize = $_FILES['image']['size'];
    $filetemp = $_FILES['image']['tmp_name'];
    $filetype = $_FILES['image']['type'];
    move_uploaded_file($filetemp, "../update-images/" . $filename);

    $sql = "UPDATE `users` SET `username`='$name',`telephone`='$telephone',`email`='$email',`password`='$password',`image`='$filename' WHERE id='$id'";
    $data = mysqli_query($conn, $sql);
    if ($data) {
        echo '<script type = "text/javascript">';
        echo 'Account Updated Successfully ';
        echo '</script>';
    }
}
