<?php 
	session_start(); 
	if (isset($_POST["logout"])) {
		session_destroy();
		header("Location:../../index.php");
	}
?>

<header class="header">
	<div class="top">
		<div class="container">
			<ul>
				<li><a href="">Liên hệ</a></li>
				<li><a href="">Giới thiệu</a></li>
				<li class="<?php echo !isset($_SESSION["ID"]) ? 'on' : 'off' ?>"><a href="register.php">Đăng ký</a></li>
				<li class="<?php echo !isset($_SESSION["ID"]) ? 'on' : 'off' ?>"><a href="../../common/login.php">Đăng nhập</a></li>

				<li class="<?php echo isset($_SESSION["ID"]) ? 'on' : 'off' ?>" ><?php echo $_SESSION["user_name"]; ?></li>
				<li class="<?php echo isset($_SESSION["ID"]) ? 'on' : 'off' ?>">
					<form method="POST" id="logoutForm">
						<input type="submit" name="logout" value="Đăng xuất">
					</form>
				</li>
			</ul>
		</div>
	</div>
	<div class="middle">
		<div class="container">
			<a href="../../index.php" class="logo"><img src="" alt="" /><i class="fa-solid fa-square-caret-right"></i>ACC smart phone</a>
			<div class="search">
				<input type="text" name="search" placeholder="Hôm nay bạn cần tìm gì?" />
				<button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
			</div>
			<div class="header-cart">
				<a href="cart.php">
					<i class="fa-solid fa-cart-shopping"></i>
					<span class="amount badge badge-primary">1</span>
				</a>
			</div>
		</div>
	</div>
	<div class="bottom">
		<div class="container">
			<ul>
				<li><a href="product-list.php">Samsung</a></li>
				<li><a href="">Apple</a></li>
				<li><a href="">Oppo</a></li>
				<li><a href="">Xiaomi</a></li>
				<li><a href="">Realme</a></li>
				<li><a href=""> Vivo</a></li>
			</ul>
		</div>
	</div>
</header>
