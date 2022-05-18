<?php
    include '../../../common/connectSQL.php';
    include '../../class/Product.php';

    $sql = 'SELECT * FROM categories';
    $result = mysqli_query($conn, $sql);

    
    if (isset($_POST["submit"])) {
        echo "<pre>" . print_r($_POST, true) . "</pre>";
        $name = $_POST["name"]; 
        $category_id = $_POST["category_id"]; 
        $price = $_POST["price"]; 
        $short_desc = $_POST["short_desc"];
        $long_desc = $_POST["long_desc"];
        $active = $_POST["active"]; 
        $hot = $_POST["hot"]; 
        $quantity = $_POST["quantity"]; 

        // get thumbnail file

        $product = new Product($name, $category_id, $price, $short_desc, $long_desc, $active, $hot, $quantity, null, 0);


        // if add successfully, add file to system and update thumbnail field

        // redirect to list page
    }

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
    <link rel="stylesheet" href="./../../css/dashboard.css">
    <link rel="stylesheet" href="./../../css/Addfood.css">
</head>
<body>
    <?php  include '../common/header.php'?>
    <main>
        <?php  include '../common/left.php'?>
        <div class="right">
            <h1>Tạo sản phẩm</h1>
            <form id='productForm' method='POST' enctype="multipart/form-data" >
                
                <!-- name -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Tên</span>
                    <input type="text" name="name" class="form-control" placeholder="Tên" aria-label="Tên" aria-describedby="basic-addon2">
                </div>

                <!-- category -->
                <div class="input-group mb-3">
                    <label for="categoryId" class="input-group-text" >Category</label>
                    <select name="category_id"  id="categoryId">
                        <?php 
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<option value='" . $row["id"] . "' >" . $row["name"] . "</option>";
                            }
                        ?>
                    </select>
                </div>

                <!-- price -->
                <div class="input-group mb-3">
                    <span class="input-group-text">$</span>
                    <input type="number" class="form-control" aria-label="Giá" name="price" placeholder="Giá">
                    <span class="input-group-text">.00</span>
                </div>

                <!-- mo ta ngan -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Mô tả ngắn</span>
                    <input type="text" name="short_desc" class="form-control" placeholder="Mô tả ngắn" aria-label="Mô tả ngắn" aria-describedby="basic-addon2">
                </div>

                <!-- mo ta chi tiet -->
                <div class="input-group">
                    <span class="input-group-text">Mô tả chi tiết</span>
                    <textarea name="long_desc" class="form-control" aria-label="With textarea"></textarea>
                </div>

                <!-- active -->
                <div class="input-group my-3">
                    <div class="input-group-text">
                        <input name="active" class="form-check-input mt-0 " type="checkbox" value="true" checked id="active">
                    </div>
                    <label for="active">Active</label>
                </div>

                <!-- hot -->
                <div class="input-group my-3">
                    <div class="input-group-text">
                        <input name="hot" class="form-check-input mt-0 " type="checkbox" value="true" id="hot">
                    </div>
                    <label for="hot">hot</label>
                </div>

                <!-- thumb -->
                <div class="input-group mb-3">
                    <label class="input-group-text" for="thumbnail">Chọn thubnail</label>
                    <input type="file" class="form-control" id="thumbnail" accept="image/*">
                </div>
                
                <!-- mo ta ngan -->
                <div class="input-group mb-3">
                    <span class="input-group-text">Số lượng</span>
                    <input type="number" name="quantity" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon2">
                </div>
                <input type="submit" value="Submit" name="submit" />
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>