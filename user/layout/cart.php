<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Trang chủ</title>
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

		<!-- style chung -->
		
		<link rel="stylesheet" href="../css/base.css" />
		<link rel="stylesheet" href="../css/header.css" />
		<link rel="stylesheet" href="../css/footer.css" />
		<link rel="stylesheet" href="../css/cart.css" />
	</head>
	<body>
		<!-- Header -->
		<?php include 'common/header.html'?>

		<!-- Gio hang -->
		<div class="cart container">
			<div class="cart-info">
				<div class="item">
					<div class="img">
						<img src="/front-end/asset/image/ip13.png">
						<p class="title">Apple iPhone 13 - Chính hãng VN/A</p>
						<p class="price">
							<strong>20,990,000 ₫</strong>
						</p>
						<div class="number">
							<label>Số lượng</label>
							<div class="control">
								<button>-</button>
								<input type="text" value="1">
								<button>+</button>
							</div>
						</div>
					</div>
					<div class="options">
						<div class="option">
							<strong>Phiên bản</strong>
							<label>
								<i class="icon-checked"></i>
								<span>128GB</span>
							</label>
						</div>
						<div class="option">
							<strong>Màu sắc</strong>
							<label>
								<i class="icon-checked"></i>
								<span>Red</span>
							</label>
						</div>
					</div>
					<div class="cart-total">
						<p>Tổng giá trị: <strong class="price">20,990,000 ₫</strong> </p>
						<p>Tổng thanh toán: <strong class="price text-red">20,990,000 ₫</strong></p>
						<p><i>Hai mươi triệu chín trăm chín mươi nghìn đồng chẵn.</i></p>
					</div>
				</div>
	
			</div>
			<div class="cart-form">
				<form >
					<h3>Thông tin đặt hàng</h3>
					<p class="text-gray"><i>Bạn cần nhập đầy đủ các trường thông tin có dấu *</i></p>
					<div class="row">
						<div class="col">
							<div class="control">
								<input name="Title" type="text" placeholder="Họ và tên *">
							</div>
						</div>
					</div>
	
					<div class="row">
						<div class="col">
							<div class="control">
								<input name="Phone" type="tel" placeholder="Số điện thoại *">
							</div>
						</div>
					</div>
	
					<div class="row">
						<div class="col">
							<div class="control">
								<select id="SystemCityID" name="SystemCityID" placeholder="Tỉnh/Thành phố *">
									<option value="">Tỉnh/Thành phố *</option>
								</select>
							</div>
						</div>
						<div class="col">
							<div class="control">
								<select id="SystemDistrictID" name="SystemDistrictID" placeholder="Quận/Huyện *">
									<option value="">Quận/Huyện *</option>
								</select>
							</div>
						</div>
					</div>
	
					<div class="row shInfo">
						<div class="col">
							<div class="control">
								<input name="Address" type="text" placeholder="Địa chỉ nhận hàng *">
							</div>
						</div>
					</div>
	
					<div class="row shInfo">
						<div class="col">
							<div class="control">
								<input name="Email" type="email" placeholder="Email">
							</div>
						</div>
					</div>
	
					<div class="row shInfo">
						<div class="col">
							<div class="control">
								<textarea name="Note" placeholder="Ghi chú" spellcheck="false" style="height: 70px; overflow-y: hidden;"></textarea>
							</div>
						</div>
					</div>
	
					<div class="row shInfo">
						<div class="col-center">
							<div class="control">
								<input name="Counpon" type="text" placeholder="Mã giảm giá (Nếu có)">
							</div>
						</div>
					</div>
	
						<div class="row shInfo">
	
							<div class="control-button">
										<button type="submit">XÁC NHẬN VÀ ĐẶT HÀNG</button>
							</div>
						</div>
				</form>
	
			</div>
		</div>

		<!-- Footer -->
		<?php include 'common/footer.html'?>
	</body>
</html>
