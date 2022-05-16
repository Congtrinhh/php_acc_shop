<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "acc_smartphone";
    
    $conn = mysqli_connect($host, $username, $password, $database);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>