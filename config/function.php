<?php
session_start();
require_once 'database.php';

// registration
if (isset($_POST['register'])) {
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
    move_uploaded_file($filetemp, "upload-images/" . $filename);

    $query = mysqli_query($conn, "SELECT * from users WHERE email='$email'");
    $result =  mysqli_fetch_array($query);

    if (is_array($result)) {
        $_SESSION["email"] = $result['email'];
        echo '<script type = "text/javascript">';
        echo 'alert("Email already exit");';
        echo '</script>';
    } else {
        $sql = "INSERT INTO `users`(`firstname`, `lastname`, `phone`, `email`, `password`, `image`) VALUES ('$firstname','$lastname','$phone','$email','$password', '$filename')";
        $data = mysqli_query($conn, $sql);
        if ($data) {
            echo '<script type = "text/javascript">';
            echo 'Account Successfully Registered';
            echo '</script>';
        }
    }
}

// login
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * from users WHERE email='$email'");
    $result =  mysqli_fetch_array($query);

    if (is_array($result)) {
        $database_password = $result['password'];
        if ($password == $database_password) {
            header('location: user/userInfo.php');
            $_SESSION['id'] = $result['id'];
            $_SESSION['email'] = $result['email'];
        } else {
            header("location: ./login.php");
            echo '<script type = "text/javascript">';
            echo 'alert("passwod does not match")';
            echo '</script>';
        }
    } else {
        header("location: ./login.php");
        echo 'alert("Email or Password does not match")';
    }
}
