<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chi tiet san pham</title>
    <!-- fontawesome - icon -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer"
    />
    <!-- bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"
    ></script>

    <link rel="stylesheet" href="../css/base.css" />
    <link rel="stylesheet" href="../css/header.css" />
    <link rel="stylesheet" href="../css/footer.css" />
    <link rel="stylesheet" href="../css/login.css" />
</head>
<body>

</body>

<!-- Header -->
		<?php include 'common/header.html'?>

    <main class="main-content container">
        <div class="bg-wrapper"><img src="../img/login-bg.png"></div>

        <div class="form-wrapper">
            <h1>Đăng nhập</h1>
            <form id='loginForm' method='POST' action='perform-login.php'>
                <div class="form-row">
                    <label class="label">Tài khoản</label>
                    <div class="input">
                        <input type="text" name="user-name" id="user-name">
                    </div>
                </div>
                <div class="form-row">
                    <label class="label">Mật khẩu</label>
                    <div class="input">
                        <input type="password" name="password" />
                    </div>
                </div>
                <div class="form-row d-none">
                    <label class="label">Nhớ đăng nhập</label>
                    <div class="input">
                        <input type="text" name="" id="">
                    </div>
                </div>
          
                <div class="form-row btns-group">
                    <button class="btn btn-submit"type="submit">ĐĂNG NHẬP</button>
                    <button class="btn"type="button"><a href="register.php">ĐĂNG KÝ</a></button>
                </div>
            </form>
        </div>
    </main>

    <!-- Footer -->
		<?php include 'common/footer.html'?>
</html>