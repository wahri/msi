<!DOCTYPE HTML>
<html>

<head>
	<title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/owl.theme.default.min.css">

	<!-- Date Picker -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.css">

</head>

<body>

	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="<?= base_url('home') ?>">Footwear</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
							<form action="#" class="search-wrap">
								<div class="form-group">
									<input type="search" class="form-control search" placeholder="Search">
									<button class="btn btn-primary submit-search text-center" type="submit"><i
											class="icon-search"></i></button>
								</div>
							</form>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li><a href="<?= base_url('home') ?>">Home</a></li>
								<li class="has-dropdown active">
									<a href="men.html">Men</a>
									<ul class="dropdown">
										<li><a href="product-detail.html">Product Detail</a></li>
										<li><a href="cart.html">Shopping Cart</a></li>
										<li><a href="checkout.html">Checkout</a></li>
										<li><a href="order-complete.html">Order Complete</a></li>
										<li><a href="add-to-wishlist.html">Wishlist</a></li>
									</ul>
								</li>
								<li><a href="women.html">Women</a></li>
								<li><a href="about.html">About</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li class="cart"><a href="cart.html"><i class="icon-shopping-cart"></i> Cart [0]</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off (Almost) Everything! Use Code: Summer Sale</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 50% off all summer shoes</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="<?= base_url('home') ?>">Home</a></span> / <span>Product Details</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg product-detail-wrap">
					<div class="col-sm-8">
						<div class="owl-carousel">
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="<?= base_url('assets/images/barang/').$barang['gambar'] ?>" class="img-fluid"
											alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="<?= base_url('assets/') ?>images/item-2.jpg" class="img-fluid"
											alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="<?= base_url('assets/') ?>images/item-3.jpg" class="img-fluid"
											alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="<?= base_url('assets/') ?>images/item-4.jpg" class="img-fluid"
											alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="product-desc">
							<h3>Women's Boots Shoes Maca</h3>
							<p class="price">
								<span>Rp. <?= $barang['harga'] ?>,-</span>
								<!-- <span class="rate">
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-half"></i>
									(74 Rating)
								</span> -->
							</p>
							<?= $barang['deskripsi'] ?>
							
							<div class="row">
								<div class="col-sm-12 text-center">
									<p class="addtocart"><a href="cart.html" class="btn btn-warning btn-addtocart"><i
												class="icon-whatsapp"></i> Pesan Sekarang!</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-12 pills">
								<div class="bd-example bd-example-tabs">
									<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

										<li class="nav-item">
											<a class="nav-link active" id="pills-deskripsi-tab" data-toggle="pill"
												href="#pills-deskripsi" role="tab" aria-controls="pills-deskripsi"
												aria-expanded="true">Deskripsi</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-cara-penggunaan-tab" data-toggle="pill"
												href="#pills-cara-penggunaan" role="tab" aria-controls="pills-cara-penggunaan"
												aria-expanded="true">Cara Penggunaan</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-bahan-tab" data-toggle="pill"
												href="#pills-bahan" role="tab" aria-controls="pills-bahan"
												aria-expanded="true">Bahan</a>
										</li>
										<li class="nav-item">
											<a class="nav-link" id="pills-info-tab" data-toggle="pill"
												href="#pills-info" role="tab" aria-controls="pills-info"
												aria-expanded="true">Info Tambahan</a>
										</li>
									</ul>

									<div class="tab-content" id="pills-tabContent">
										<div class="tab-pane border fade show active" id="pills-deskripsi"
											role="tabpanel" aria-labelledby="pills-deskripsi-tab">
											<?= $barang['deskripsi'] ?>
										</div>
										<div class="tab-pane border fade" id="pills-cara-penggunaan" role="tabpanel"
											aria-labelledby="pills-cara-penggunaan-tab">
											<?= $barang['cara_penggunaan'] ?>
										</div>
										<div class="tab-pane border fade" id="pills-bahan" role="tabpanel"
											aria-labelledby="pills-bahan-tab">
                                            <?= $barang['bahan'] ?>
                                        </div>
										<div class="tab-pane border fade" id="pills-info" role="tabpanel"
                                            aria-labelledby="pills-info-tab">
                                            <?= $barang['info'] ?>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="colorlib-footer" role="contentinfo">
			<div class="container">
				<div class="row row-pb-md">
					<div class="col footer-col colorlib-widget">
						<h4>About Footwear</h4>
						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost
							unorthographic life</p>
						<p>
							<ul class="colorlib-social-icons">
								<li><a href="#"><i class="icon-twitter"></i></a></li>
								<li><a href="#"><i class="icon-facebook"></i></a></li>
								<li><a href="#"><i class="icon-linkedin"></i></a></li>
								<li><a href="#"><i class="icon-dribbble"></i></a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Customer Care</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">Contact</a></li>
								<li><a href="#">Returns/Exchange</a></li>
								<li><a href="#">Gift Voucher</a></li>
								<li><a href="#">Wishlist</a></li>
								<li><a href="#">Special</a></li>
								<li><a href="#">Customer Services</a></li>
								<li><a href="#">Site maps</a></li>
							</ul>
						</p>
					</div>
					<div class="col footer-col colorlib-widget">
						<h4>Information</h4>
						<p>
							<ul class="colorlib-footer-links">
								<li><a href="#">About us</a></li>
								<li><a href="#">Delivery Information</a></li>
								<li><a href="#">Privacy Policy</a></li>
								<li><a href="#">Support</a></li>
								<li><a href="#">Order Tracking</a></li>
							</ul>
						</p>
					</div>

					<div class="col footer-col">
						<h4>News</h4>
						<ul class="colorlib-footer-links">
							<li><a href="blog.html">Blog</a></li>
							<li><a href="#">Press</a></li>
							<li><a href="#">Exhibitions</a></li>
						</ul>
					</div>

					<div class="col footer-col">
						<h4>Contact Information</h4>
						<ul class="colorlib-footer-links">
							<li>291 South 21th Street, <br> Suite 721 New York NY 10016</li>
							<li><a href="tel://1234567920">+ 1235 2355 98</a></li>
							<li><a href="mailto:info@yoursite.com">info@yoursite.com</a></li>
							<li><a href="#">yoursite.com</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="copy">
				<div class="row">
					<div class="col-sm-12 text-center">
						<p>
							<span>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>
									document.write(new Date().getFullYear());
								</script> All rights reserved | This template is made with <i class="icon-heart"
									aria-hidden="true"></i> by <a href="https://colorlib.com"
									target="_blank">Colorlib</a>
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
							<span class="block">Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a>
								, <a href="http://pexels.com/" target="_blank">Pexels.com</a></span>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
	</div>

	<!-- jQuery -->
	<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
	<!-- popper -->
	<script src="<?= base_url('assets/') ?>js/popper.min.js"></script>
	<!-- bootstrap 4.1 -->
	<script src="<?= base_url('assets/') ?>js/bootstrap.min.js"></script>
	<!-- jQuery easing -->
	<script src="<?= base_url('assets/') ?>js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="<?= base_url('assets/') ?>js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="<?= base_url('assets/') ?>js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="<?= base_url('assets/') ?>js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="<?= base_url('assets/') ?>js/jquery.magnific-popup.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="<?= base_url('assets/') ?>js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="<?= base_url('assets/') ?>js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="<?= base_url('assets/') ?>js/main.js"></script>

	<script>
		$(document).ready(function () {

			var quantitiy = 0;
			$('.quantity-right-plus').click(function (e) {

				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				$('#quantity').val(quantity + 1);


				// Increment

			});

			$('.quantity-left-minus').click(function (e) {
				// Stop acting like a button
				e.preventDefault();
				// Get the field name
				var quantity = parseInt($('#quantity').val());

				// If is not undefined

				// Increment
				if (quantity > 0) {
					$('#quantity').val(quantity - 1);
				}
			});

		});
	</script>


</body>

</html>