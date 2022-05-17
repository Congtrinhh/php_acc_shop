<?php
    define('HOST', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'acc_smartphone');

    $conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE);
    if (mysqli_connect_error()) {
        die('Error connecting to db: '. mysqli_connect_error());
    }
?>