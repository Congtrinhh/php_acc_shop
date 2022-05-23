<?php include '../../../common/authorization.php'; ?>
<?php
    include '../../../common/connectSQL.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../../user/css/base.css">
    <link rel="stylesheet" href="./../../css/dashboard.css">
    <link rel="stylesheet" href="./../../css/Addfood.css">
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
                <th>address</th>
                <th>phone</th>
                <th>shipping fee</th>
                <th>email</th>
                <th>created_date</th>
                <th>shipped_date</th>
                <th></th>
            </thead>
        <?php
         // start of pagination block 1
                    $currentPage = !empty($_GET["page"]) ? $_GET["page"] : 1;
                    $itemPerPage = !empty($_GET["perPage"]) ? $_GET["perPage"] : 10;
                    $offset = ($currentPage-1)*$itemPerPage;
                    $totalRecords = 0;
                    $totalPages = 0;

                    $pageUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    parse_str(parse_url($pageUrl)['query'], $params);
                    $keys = array_keys($params);
                    $queryString="?";
                    for ($i=0; $i<count($keys); $i++){
                        if ($keys[$i]=="perPage" || $keys[$i]=="page") {
                            continue;
                        }
                        $queryString .= $keys[$i] . "=" . $params[$keys[$i]] . "&";
                    }
                    $queryString .= "perPage=" . $itemPerPage;
                    // end of pagination block 1

    $sql = "SELECT * FROM orders LIMIT $itemPerPage OFFSET $offset";
    $result = mysqli_query($conn, $sql);
    
            while ($row = $result->fetch_assoc()) {
                echo    "<tr>" .
                    "<td>" . $row["user_id"] . "</td>" . 
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
        <?php
            // start of pagination block 2
                $sqlTotalRecordsForPagination = "SELECT * FROM orders";
                $resultTotalRecords = mysqli_query($conn, $sqlTotalRecordsForPagination);
                $totalRecords = $resultTotalRecords->num_rows;
                $totalPages = ceil($totalRecords/$itemPerPage);
                // end of pagination block 2

                include '../../../common/pagination.php';
        ?>
        </div>

        
        
    </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</html>