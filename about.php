<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require "./config/connectDB.php";
#session_save_path("/tmp");
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Goggles a Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link href="css/login_overlay.css" rel='stylesheet' type='text/css' />
	<link href="css/style6.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/shop.css" type="text/css" />
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/owl.theme.css" type="text/css" media="all">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link rel="stylesheet" href="./css/header.css">
	<title>TSL Shop</title>
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="//fonts.googleapis.com/css?family=Inconsolata:400,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<?php
	require "header.php"
	?>
	<!-- top Products -->
	<section class="banner-bottom-wthreelayouts py-lg-5 py-3">
		<div class="container-fluid">

			<div class="inner-sec-shop px-lg-4 px-3">
				<div class="about-content py-lg-5 py-3">
					<div class="row">

						<div class="col-lg-6 p-0">
							<img src="images/banner1.jpg" alt="Goggles" class="img-fluid">
						</div>
						<div class="col-lg-6 about-info">
							<h3 class="tittle-w3layouts text-left mb-lg-5 mb-3">Về chúng tôi</h3>
							<p class="my-xl-4 my-lg-3 my-md-4 my-3">Với hơn 5 năm kinh nghiệm trong ngành, chúng tôi đã không ngừng nỗ lực để xây dựng và phát triển thương hiệu. Bắt đầu từ những bước đi nhỏ, GOGLES hiện nay đã trở thành một trong những đơn vị uy tín, được khách hàng và đối tác tin tưởng trong việc cung cấp kính mắt. Mỗi bước tiến của chúng tôi đều gắn liền với sự hài lòng và thành công của khách hàng.

Đội Ngũ Chuyên Nghiệp
Chúng tôi tự hào về đội ngũ nhân viên giàu kinh nghiệm, luôn sẵn sàng lắng nghe và hỗ trợ khách hàng. Với sự am hiểu sâu sắc về lĩnh vực, các chuyên gia của chúng tôi không chỉ giúp bạn tìm ra giải pháp hiệu quả mà còn đồng hành cùng bạn trong suốt quá trình triển khai.

Giá Trị Cốt Lõi

Chất lượng: Sản phẩm/dịch vụ của chúng tôi luôn được kiểm soát nghiêm ngặt về chất lượng để mang lại sự an tâm tuyệt đối cho khách hàng.
Tận Tâm: Chúng tôi luôn lắng nghe và thấu hiểu nhu cầu của bạn, từ đó cung cấp giải pháp phù hợp nhất.
Sáng Tạo: Không ngừng nghiên cứu và phát triển, GOGLES cam kết mang đến những sản phẩm tiên tiến và đột phá.
Tính Chính Thống: Chúng tôi duy trì sự minh bạch trong mọi hoạt động và giao dịch, đảm bảo sự tin tưởng từ khách hàng.
								book.
							</p>

							<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Mua ngay</a>

						</div>
					</div>
				</div>
				<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Thành viên</h3>
				<div class="partners-info">
					<div class="row mt-lg-5 mt-3">
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="images/team1.jpg" alt="">
								</div>
								<div class="team-info">
									<h4>Founder</h4>
									<span>Mô tả </span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a href="#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="images/team2.jpg" alt="">
								</div>
								<div class="team-info">
									<h4>Co founder</h4>
									<span>Mô tả </span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a href="#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="images/team3.jpg" alt="">
								</div>
								<div class="team-info">
									<h4>Partner 3</h4>
									<span>Description </span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a href="#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-md-3 team-main-gd">
							<div class="team-grid text-center">
								<div class="team-img">
									<img class="img-fluid rounded" src="images/team4.jpg" alt="">
								</div>
								<div class="team-info">
									<h4>Partner 4</h4>
									<span>Description </span>
									<ul class="d-flex justify-content-center py-3 social-icons">
										<li>
											<a href="#">
												<i class="fab fa-facebook-f"></i>
											</a>
										</li>
										<li class="mx-3">
											<a href="#">
												<i class="fab fa-twitter"></i>
											</a>
										</li>
										<li>
											<a href="#">
												<i class="fab fa-google-plus-g"></i>
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /grids -->
				<div class="bottom-sub-grid-content py-lg-5 py-3">
					<div class="row">
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">

								<span class="far fa-hand-paper"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Satisfaction Guaranteed</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="fas fa-rocket"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">Fast Shipping</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
						<div class="col-lg-4 bottom-sub-grid text-center">
							<div class="bt-icon">
								<span class="far fa-sun"></span>
							</div>

							<h4 class="sub-tittle-w3layouts my-lg-4 my-3">UV Protection</h4>
							<p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
							<p>
								<a href="shop.html" class="btn btn-sm animated-button gibson-three mt-4">Shop Now</a>
							</p>
						</div>
						<!-- /.col-lg-4 -->
					</div>
				</div>
				<!-- //grids -->
				<!--/meddle-->
				<div class="row">
					<div class="col-md-12 middle-slider my-4">
						<div class="middle-text-info ">

							<h3 class="tittle-w3layouts two text-center my-lg-4 mt-3">Summer Flash sale</h3>
							<div class="simply-countdown-custom" id="simply-countdown-custom"></div>

						</div>
					</div>
				</div>
				<!--//meddle-->

				<!-- /testimonials -->
				<div class="testimonials py-lg-4 py-3 mt-4">
					<div class="testimonials-inner py-lg-4 py-3">
						<h3 class="tittle-w3layouts text-center my-lg-4 my-4">Tesimonials</h3>
						<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="testimonials_grid text-center">
										<h3>Anamaria
											<span>Customer</span>
										</h3>
										<label>United States</label>
										<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
											Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Esmeralda
											<span>Customer</span>
										</h3>
										<label>United States</label>
										<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
											Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
									</div>
								</div>
								<div class="carousel-item">
									<div class="testimonials_grid text-center">
										<h3>Gretchen
											<span>Customer</span>
										</h3>
										<label>United States</label>
										<p>Maecenas interdum, metus vitae tincidunt porttitor, magna quam egestas sem, ac scelerisque nisl nibh vel lacus.
											Proin eget gravida odio. Donec ullamcorper est eu accumsan cursus.</p>
									</div>
								</div>
								<a class="carousel-control-prev test" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="fas fa-long-arrow-alt-left"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next test" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="fas fa-long-arrow-alt-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>

								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- //testimonials -->
				<div class="row galsses-grids pt-lg-5 pt-3">
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="images/banner4.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p> Express your style now.</p>
							</figcaption>
						</figure>
					</div>
					<div class="col-lg-6 galsses-grid-left">
						<figure class="effect-lexi">
							<img src="images/banner1.jpg" alt="" class="img-fluid">
							<figcaption>
								<h3>Editor's
									<span>Pick</span>
								</h3>
								<p>Express your style now.</p>
							</figcaption>
						</figure>
					</div>
				</div>

				<!-- /clients-sec -->
				<div class="testimonials p-lg-5 p-3 mt-4">
					<div class="row last-section">
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-gift"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Genuine Product</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-shield-alt"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Secure Products</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-dollar-sign"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Cash on Delivery</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
						<div class="col-lg-3 footer-top-w3layouts-grid-sec">
							<div class="mail-grid-icon text-center">
								<i class="fas fa-truck"></i>
							</div>
							<div class="mail-grid-text-info">
								<h3>Easy Delivery</h3>
								<p>Lorem ipsum dolor sit amet, consectetur</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //clients-sec -->

			</div>
		</div>
	</section>


	<?php
	require "footer.php"
	?>
</body>

</html>