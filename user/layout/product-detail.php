<?php 
    include '../../../common/connectSQL.php';
?>
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
		<link rel="stylesheet" href="../css/product-detail.css" />
	</head>
	<body>
		<!-- Header -->
		<?php include 'common/header.html'?>

        <main>
            <div class="link">  
                <div class="container">
                <div class="sub"><a href="./index.html"><i class="fa-solid fa-house"></i>Trang chủ</a></div>
                <p>></p>
                <div class="sub"><a href="./List_Product.html">Iphone</a></div>
                <p>></p>
                <div class="sub ac"><a href="./Detail_Product.html">Apple Iphone 13 Pro Max - Chính hãng VN/A</a></div>
                </div>
            </div>
            <div class="infor">
                <div class="container row">
                    <h4>Điện thoại di động Apple iPhone 13 Pro Max - Chính hãng VN/A</h4>
                <div class="image_list col-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="../img/iphone13.png" class="d-block w-100" alt="...">
                            
                          </div>
                          <div class="carousel-item">
                            <img src="../img/iphone 13 white.png" class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="../img/iphone 13 black.webp" class="d-block w-100" alt="...">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                          <span style="background-color: black;border-radius: 50%;" class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                          <span style="background-color: black;border-radius: 50%;" class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                      </div>
                      <div class="heart">
                        <!-- <i class="fa-solid fa-shield-heart"></i>  -->
                        <div class="circle">
                            <i class="fa-solid fa-heart tim1"></i>
                            <i class="fa-solid fa-heart tim2"></i> 
                        </div>
                        
                         
                      </div>
                </div>
                <div class="price col-5">
                    <div class="price-item">
                        <span style="color:red; font-weight:bold;font-size:25px">28,950,000 đ</span><span>| Giá bao gồm 10% VAT</span>
                    </div>
                    <div class="move">
                        <i class="fa-solid fa-truck-fast"></i><span>   MIỄN PHÍ VẬN CHUYỂN TOÀN QUỐC</span>
                    </div>
                    <div class="choice">
                        <br>
                        <h6>Lựa chọn phiên bản</h6>
                        <form>
                            <div class="box ac">
                                <input type="radio" value="128GB" id="1" />
                                <span>  128GB</span>
                                <p style="color:rgb(250, 28, 224);font-weight:bold;">28,950,000 đ</p>
                            </div>
                            <div class="box">
                                <input type="radio" value="256GB" id="2"/>
                                <span>  128GB</span>
                                <p style="color:rgb(250, 28, 224);font-weight:bold;">28,950,000 đ</p>
                            </div>
                        </form>
                        <h6 class="mt-4">Lựa chọn màu và xem địa chỉ còn hàng</h6>
                        <form >
                            <div class="box ac">
                                <input type="radio" value="Gold" id="1" />
                                <span>  Gold</span>
                                <p style="color:rgb(250, 28, 224);font-weight:bold;">28,950,000 đ</p>
                            </div>
                            <div class="box">
                                <input type="radio" value="Silver" id="2"/>
                                <span>  Silver</span>
                                <p style="color:rgb(250, 28, 224);font-weight:bold;">28,950,000 đ</p>
                            </div>
                        </form>
                    </div>
                    <div class="discount">

                    </div>
                    <div  class="buy row">
                        <a href="" class="col-10">
                        <div class="buy-now "><h6>MUA NGAY</h6><span>Giao hàng tận nhà (COD) hoặc Nhận tại của hàng</span></div>
                        </a>
                        <a href="" class="col-2"><div class="cart"><i class="fa-solid fa-cart-plus"></i></div></a>
                    </div>
                </div>
                <div class="address col-3">
                    <div>
                        <h6>Thông tin bảo hành</h6>
                        <p><i class="fa-solid fa-cart-plus"></i>  Bảo hành chính hãng 12 tháng tại trung tâm bảo hành uỷ quyền Apple Việt Nam. Bao xài đổi lỗi - 1 đổi 1 trong 30 ngày đầu</p>
                        
                    </div>
                    <div>
                        <h6>Chọn màu và xem địa chỉ còn hàng</h6>
                        <select>
                            <option >Tất cả</option>
                            <option ></i>Hà Nội</option>
                            <option>Bắc Ninh</option>
                            <option >Bắc Giang</option>
                            <option >Thái Nguyên</option>
                        </select>
                        <div class="ad">

                        </div>
                        <div class="infor-plus">
                            <p style="font-weight: bold; color:green">ĐTDĐ Apple iPhone 13 Pro Max 128GB Silver_MLL73VN/A - TBH - 122 Thái Hà - Cũ</p>
                            <p>Giá chỉ từ: <b style="color:red">26,800,000 ₫</b>
                                <br>
                                Tiết kiệm:<b style="color:red"> 2,150,000 ₫</b>
                                <br>
                                Bảo hành 3 tháng. Bao xài đổi lỗi trong 15 ngày</p>
                        </div>
                    </div>
                </div>
            </div>
            </div>
            <!-- Modal layout -->
            <div class="modal">
                <div class="modal_overlay"></div>
                <div class="modal_body">
                    <div class="modal_inner">

                    </div>
                </div>
            </div>
            <div class="information">
                <div class="container row">  
                <div class="meme col-7">
                    <h5>Mua iPhone 13 Pro Max chính hãng, giá tốt tại ACC company</h5>
                    <p>Apple đã chính thức ra mắt dòng iPhone 2021 với tên gọi iPhone 13 Series. Trong đó iPhone 13 Pro Max là phiên bản cao cấp nhất với màn hình lớn, tốc độ làm tươi 120Hz và dung lượng lưu trữ lên tới 1TB.</p>
                    <h6>Thiết kế vuông vức sang trọng, tần số quét lên tới 120Hz</h6>
                    <p>Xét về phong cách thiết kế, iPhone 13 Pro Max vẫn sở hữu khung viền vuông vức bằng kim loại sang trọng tương tự như iPhone 12 Pro Max. Mặt lưng của máy được hoàn thiện nhám để tránh lưu lại vân tay khi sử dụng. Cầm chiếc iPhone 13 Pro Max trên tay chắc chắn sẽ thu hút mọi ánh nhìn bởi thiết kế quá ấn tượng.<br>

                        Là chiếc iPhone lớn nhất nên màn hình của iPhone 13 Pro Max cũng có kích thước lên tới 6.7 inch. Trên màn hình vẫn có tai thỏ quen thuộc nhưng đã được tinh chỉnh nhỏ gọn hơn thế hệ trước 20% nhằm tối ưu hóa không gian hiển thị. Camera selfie 12MP nằm trong tai thỏ và cung cấp bảo mật Face ID. Màn hình vẫn được bảo vệ bởi kính cường lực Ceramic Shield siêu bền.
                        
                        Apple đã trang bị màn hình Super Retina XDR với công nghệ ProMotion giúp tinh chỉnh tần số quét 10 - 120Hz. Độ sáng tối đa cũng đã được tăng lên 1.200 nits. Có thể nói đây là điểm sáng giá nhất của iPhone 13 Pro Max.</p>
                        <img src="../img/iphone-13-pro-max-2.png">
                </div>
                <div class="specification col-5">
                    <h6>Thông số kỹ thuật Apple iPhone 13 Pro Max - Chính hãng VN/A</h6>
                    <img src="../img/iphone13.png">
                    <p><b>Công nghệ màn hình:</b> OLED<br>
                        <b>Độ phân giải:</b> 1284 x 2778 Pixels, 3 camera 12 MP, 12 MP<br>
                        <b>Hệ điều hành:</b> iOS 15<br>
                        <b>Chip xử lý (CPU):</b> Apple A15 Bionic 6 nhân<br>
                        <b>Bộ nhớ trong (ROM):</b> 128 GB<br>
                        <b>RAM:</b> 6 GB<br>
                        <b>Mạng di động:</b> Hỗ trợ 5G<br>
                        <b>Số khe sim:</b> 1 Nano SIM & 1 eSIM</p>
                </div>
            </div> 
            </div>
            <div class="product-similar">
                <div class="container">
                <h4 style="margin:20px 0;">sản phẩm tương tự</h4>
                <!-- <div class="container text-center my-3">
                    <h2 class="font-weight-light">Bootstrap Multi Slide Carousel</h2> -->
                    <div class="row mx-auto my-auto justify-content-center">
                        <div id="recipeCarousel" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="item col-md">
                                        <div style="display:flex"><div><i class="fa-brands fa-apple"></i></div><div>Authorities <br> Reseller</div></div>
                                        <div><image src="../img/iphone13.png"></div>
                                        <div class="text"><p><strong>Apple Iphone 13 - Chính hãng<br> VN/A</strong></p></div>
                                        <div class="text"><Strong style="color:red" >21,250,000 đ</Strong></div>
                                        <div class="text"><strong style="background-color:orange;color:white;">KM</strong><p>Sẵn sàng giảm thêm
                                            tới  1.500.000 đ... <strong style="color:orange"> VÀ % KM KHÁC</strong>
                                        </p></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="item col-md">
                                        <div style="display:flex"><div><i class="fa-brands fa-apple"></i></div><div>Authorities <br> Reseller</div></div>
                                        <div><image src="../img/iphone13.png"></div>
                                        <div class="text"><p><strong>Apple Iphone 13 - Chính hãng<br> VN/A</strong></p></div>
                                        <div class="text"><Strong style="color:red" >21,250,000 đ</Strong></div>
                                        <div class="text"><strong style="background-color:orange;color:white;">KM</strong><p>Sẵn sàng giảm thêm
                                            tới  1.500.000 đ... <strong style="color:orange"> VÀ % KM KHÁC</strong>
                                        </p></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="item col-md">
                                        <div style="display:flex"><div><i class="fa-brands fa-apple"></i></div><div>Authorities <br> Reseller</div></div>
                                        <div><image src="../img/iphone13.png"></div>
                                        <div class="text"><p><strong>Apple Iphone 13 - Chính hãng<br> VN/A</strong></p></div>
                                        <div class="text"><Strong style="color:red" >21,250,000 đ</Strong></div>
                                        <div class="text"><strong style="background-color:orange;color:white;">KM</strong><p>Sẵn sàng giảm thêm
                                            tới  1.500.000 đ... <strong style="color:orange"> VÀ % KM KHÁC</strong>
                                        </p></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="item col-md">
                                        <div style="display:flex"><div><i class="fa-brands fa-apple"></i></div><div>Authorities <br> Reseller</div></div>
                                        <div><image src="../img/iphone13.png"></div>
                                        <div class="text"><p><strong>Apple Iphone 13 - Chính hãng<br> VN/A</strong></p></div>
                                        <div class="text"><Strong style="color:red" >21,250,000 đ</Strong></div>
                                        <div class="text"><strong style="background-color:orange;color:white;">KM</strong><p>Sẵn sàng giảm thêm
                                            tới  1.500.000 đ... <strong style="color:orange"> VÀ % KM KHÁC</strong>
                                        </p></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="item col-md">
                                        <div style="display:flex"><div><i class="fa-brands fa-apple"></i></div><div>Authorities <br> Reseller</div></div>
                                        <div><image src="../img/iphone13.png"></div>
                                        <div class="text"><p><strong>Apple Iphone 13 - Chính hãng<br> VN/A</strong></p></div>
                                        <div class="text"><Strong style="color:red" >21,250,000 đ</Strong></div>
                                        <div class="text"><strong style="background-color:orange;color:white;">KM</strong><p>Sẵn sàng giảm thêm
                                            tới  1.500.000 đ... <strong style="color:orange"> VÀ % KM KHÁC</strong>
                                        </p></div>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <div class="item col-md">
                                        <div style="display:flex"><div><i class="fa-brands fa-apple"></i></div><div>Authorities <br> Reseller</div></div>
                                        <div><image src="../img/iphone13.png"></div>
                                        <div class="text"><p><strong>Apple Iphone 13 - Chính hãng<br> VN/A</strong></p></div>
                                        <div class="text"><Strong style="color:red" >21,250,000 đ</Strong></div>
                                        <div class="text"><strong style="background-color:orange;color:white;">KM</strong><p>Sẵn sàng giảm thêm
                                            tới  1.500.000 đ... <strong style="color:orange"> VÀ % KM KHÁC</strong>
                                        </p></div>
                                    </div>
                                </div>
                            </div>
                            <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            </a>
                            <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            </a>
                        </div>
                    </div>
                    <!-- <h5 class="mt-2 fw-light">advances one slide at a time</h5> -->
                </div>
                  </div>
            </div>
            <div class="comment">
                <div class="container">
                    <h5>Bình luận về Apple iPhone 13 Pro Max - Chính hãng VN/A</h5>
                    <form>
                        <input class="box" type="text" placeholder="Họ tên" size="35px" style="height:35px;padding-left: 10px;">
                        <input class="box" type="text" placeholder="Điện thoại" size="35px" style="height:35px;padding-left: 10px;margin-left: 20px;">
                        <input class="box" type="Email" placeholder="Email" size="35px" style="height:35px;padding-left: 10px;margin-left: 20px;">
                        <br>
                        <textarea placeholder="Nội dung tối thiểu 15 ký tự *" cols="120" rows="4"></textarea >
                        <br> 
                       
                        <button type="button" ><i class="fa-solid fa-paper-plane"></i> GỬI BÌNH LUẬN</button>
                    </form>
                    <div class="feedback row">
                        <div class="acc col-1"><img src="../img/accc.png" width="50px" height="50px"></div>
                        <div class="col-11">
                            <b>Trần Ngọc Anh</b>
                            <p style="font-size: 10px;color:gray">3 tuần trước (12/02/2022)</p>
                            <br>
                            <p>Hàng khá ngon , MLEM MLEM !!!</p>
                            <br>
                            <div class="ma row">
                                <div class="logo col-1"><i class="fa-solid fa-square-caret-right"></i></div>
                                <div class="col-11">
                                    <b>ACC Company Smartphone</b>
                                    <p style="font-size: 10px;color:gray">3 tuần trước (12/02/2022)</p>
                                    <br>
                                    <p>Cảm ơn quý khách !!!!</p>
                                    <div class="bl">
                                        <button type="button" onclick="dropdown()">Nhập bình luận của bạn       <i class="fa-solid fa-paper-plane"></i></button>
                                    </div>
                                    <form class="na">
                                        <input class="box" type="text" placeholder="Họ tên" size="25px" style="height:35px;padding-left: 10px;">
                                        <input class="box" type="text" placeholder="Điện thoại" size="25px" style="height:35px;padding-left: 10px;margin-left: 20px;">
                                        <input class="box" type="Email" placeholder="Email" size="25px" style="height:35px;padding-left: 10px;margin-left: 20px;">
                                        <br>
                                        <textarea placeholder="Nội dung tối thiểu 15 ký tự *" cols="100" rows="4"></textarea >
                                        <br> 
                                       
                                        <button type="button" ><i class="fa-solid fa-paper-plane"></i> GỬI BÌNH LUẬN</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
		<!-- Footer -->
		<?php include 'common/footer.html'?>
	</body>
    <script>
        function dropdown(){
            document.querySelector(".na").style.display="block";
            document.querySelector(".bl").style.display="none";
        }
        let items = document.querySelectorAll('.product-similar .carousel .carousel-item')

        items.forEach((el) => {
            const minPerSlide = 5
            let next = el.nextElementSibling
            for (var i=1; i<minPerSlide; i++) {
                if (!next) {
                    // wrap carousel by using first child
                    next = items[0]
                }
                let cloneChild = next.cloneNode(true)
                el.appendChild(cloneChild.children[0])
                next = next.nextElementSibling
            }
        })
    </script>
</html>
