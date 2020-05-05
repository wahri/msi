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
					<div class="col-sm-7">
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
					<div class="col-sm-5">
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
									<p class="addtocart"><a href="cart.html" class="btn btn-success btn-addtocart"><i
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