<?php
$servername = "127.0.0.1:3307";
$username = "root";
$password = "";
$dbname = "registration_form";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "Database Connection Error";
}
