<?php
    include '../connectSQL.php';
    include '../requireLogin.php';

    $sql = "SELECT * FROM orders";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./../../css/Dasboard.css">
    <link rel="stylesheet" href="./../../css/Addfood.css">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
    <?php  include '../common/header.php'?>
    <main>
    <?php  include '../common/left.php'?>
        <div class="right">
            <h1>Danh sách đơn hàng</h1>
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
                        . "<a href='DetailOrder.php?id=" . $row["id"] . "'>Chi tiết</a>"
                        . "<a href='DeleteOrder.php?id=" . $row["id"] . "'>Xoá</a>"
                        . 
                    "</td>"
                    .
                "</tr>";
            }
        ?>
    </table>
        </div>
        
        
    </main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="./../../../bai9_jquery/bai9_jquery/js/jquery.min.js"></script>
<script src="../../script/Dasboard.js"></script>
</html>