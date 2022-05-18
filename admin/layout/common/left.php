<?php 
    session_start();
	$role = "";
	if (isset($_SESSION["role"])) {
		$role = $_SESSION["role"];
	}

	$isAdmin = false;
	$isManager = false;
    if (strcasecmp($role, "admin")==0) {
		$isAdmin = true;
    } else if (  strcasecmp($role, "manager")==0 ) {
        $isManager = true;
    }    
?>
<style>
	ul li.page.off {
		display: none;
	}
</style>
<div class="left">
	<ul>
		<li><a href="">Dashboard</a></li>
		<li class="page">
			<a class="d-block" data-bs-toggle="collapse" href="#bigLink1" role="button" aria-expanded="false" aria-controls="bigLink1">Quản lý danh mục (category) <i class="fas fa-chevron-right"></i></a>
			<ul class="collapse sub_pages" id="bigLink1">
				<li><a href="../Categories/AddCategory.php">Tạo</a></li>
				<li><a href="../Categories/ListCategory.php">Danh sách danh mục</a></li>
			</ul>
		</li>
		<li class="page">
			<a class="d-block" data-bs-toggle="collapse" href="#bigLink2" role="button" aria-expanded="false" aria-controls="bigLink2">Quản lý sản phẩm (product) <i class="fas fa-chevron-right"></i></a>
			<ul class="collapse sub_pages" id="bigLink2">
				<li><a href="../Products/AddProduct.php">Tạo</a></li>
				<li><a href="../Products/ListProduct.php">Danh sách sản phẩm</a></li>
			</ul>
		</li>
		<li class="page <?php echo $isAdmin ? 'on' : 'off' ?>">
			<a class="d-block" data-bs-toggle="collapse" href="#bigLink3" role="button" aria-expanded="false" aria-controls="bigLink3">Quản lý người dùng (user) <i class="fas fa-chevron-right"></i></a>
			<ul class="collapse sub_pages" id="bigLink3">
				<li><a href="../Users/AddUser.php">Tạo</a></li>
				<li><a href="../Users/ListUser.php">Danh sách user</a></li>
			</ul>
		</li>
		<li class="page">
			<a class="d-block" data-bs-toggle="collapse" href="#bigLink4" role="button" aria-expanded="false" aria-controls="bigLink4">Quản lý đơn hàng (order) <i class="fas fa-chevron-right"></i></a>
			<ul class="collapse sub_pages" id="bigLink4">
				<li><a href="../Orders/ListOrder.php">Danh sách đơn hàng</a></li>
			</ul>
		</li>
		<li class="page">
			<a class="d-block" data-bs-toggle="collapse" href="#bigLink5" role="button" aria-expanded="false" aria-controls="bigLink5">Quản lý kho <i class="fas fa-chevron-right"></i></a>
			<ul class="collapse sub_pages" id="bigLink5">
				<li><a href="./Importations/AddImportation.php">Tạo</a></li>
				<li><a href="./Importations/ListImportation.php">Danh sách Kho</a></li>
			</ul>
		</li>
		
		<li class="page"><a href="../common/logout.php?logout=true">Đăng xuất <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
	</ul>
</div>
