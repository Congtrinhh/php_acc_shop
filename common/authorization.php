<?php
    // nếu chưa đăng nhập thì redirect sang trang login để đăng nhập
    include 'requiredLogin.php';
    include 'connectSQL.php';

    $userId = $_SESSION['ID'];

    $sql = "SELECT * FROM users WHERE id=$userId";

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    
    if ( strcasecmp($row["role"], "admin")!=0 || strcasecmp($row["role"], "manager")!=0 ) {
        echo "Khong co quyen truy cap";
        header('Location: /login.php');
    } 
?>