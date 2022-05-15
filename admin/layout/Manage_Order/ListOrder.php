<?php
    include '../connectSQL.php';
    
    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List order</title>
</head>
<body>
    <?php include '../common/header.php' ?>

    <table class="table">
        <thead>
            <th>user id</th>
            <th>ship name</th>
            <th>address</th>
            <th>phone</th>
            <th>shipping fee</th>
            <th>email</th>
            <th>created_date</th>
            <th>shipped_date</th>
            <th></th>
        </thead>

        <?php
            while ($row = $result->fetch_assoc()) {
                echo    "<tr>" .
                    "<td>" . $row["user_id"] . "</td>" . 
                    "<td>" . $row["ship_name"] . "</td>" .
                    "<td>" . $row["address"] . "</td>" .
                    "<td>" . $row["phone"] . "</td>" .
                    "<td>" . $row["shipping_fee"] . "</td>" .
                    "<td>" . $row["email"] . "</td>" .
                    "<td>" . $row["created_date"] . "</td>" .
                    "<td>" . $row["shipped_date"] . "</td>" .
                    "<td>"
                        . "<a href='DetailOrder.php/" . $row["id"] . "'>Chi tiết</a>"
                        . "<a href='DeleteOrder.php?id=" . $row["id"] . "'>Xoá</a>"
                        . 
                    "</td>"
                    .
                "</tr>";
            }
        ?>
    </table>
</body>
</html>