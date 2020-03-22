<?php
    $username = 'first_year';
    $password = 'first_year';
    $host = 'localhost';
    $database = 'first_year';
    $conn = mysqli_connect($host,$username,$password,$database);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    echo "Connected successfully";
?>
