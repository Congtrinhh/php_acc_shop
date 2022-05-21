<?php 
	session_start(); 
	if (isset($_POST["logout"])) {
		session_destroy();
		header("Location:../../index.php");
	}
	include '../../common/connectSQL.php';
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
			<form class="search" method="GET" action="../layout/product-list.php">
				<input type="text" name="keyword" placeholder="Hôm nay bạn cần tìm gì?" />
				<button class="btn"><i class="fa-solid fa-magnifying-glass"></i></button>
			</form>
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
				<?php
					$sql = "SELECT * FROM categories";

					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($result)) {
						echo "<li><a href='product-list.php?category=" . $row["slug"] . "'>" . $row["name"] . "</a></li>";
					}
				?>
			</ul>
		</div>
	</div>
</header>
