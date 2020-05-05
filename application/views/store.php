<div class="breadcrumbs">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="bread"><span><a href="index.html">Home</a></span> / <span>Men</span></p>
            </div>
        </div>
    </div>
</div>

<div class="breadcrumbs-two">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="breadcrumbs-img" style="background-image: url('<?= base_url('assets/') ?>images/cover-img-1.jpg');">
                    <h2>Men's</h2>
                </div>
                <div class="menu text-center">
                    <p><a href="#">New Arrivals</a> <a href="#">Best Sellers</a> <a href="#">Extended Widths</a> <a href="#">Sale</a></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-featured">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <div class="featured">
                    <div class="featured-img featured-img-2" style="background-image: url('<?= base_url('assets/') ?>images/men.jpg');">
                        <h2>Casuals</h2>
                        <p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="featured">
                    <div class="featured-img featured-img-2" style="background-image: url('<?= base_url('assets/') ?>images/women.jpg');">
                        <h2>Dress</h2>
                        <p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 text-center">
                <div class="featured">
                    <div class="featured-img featured-img-2" style="background-image: url('<?= base_url('assets/') ?>images/item-11.jpg');">
                        <h2>Sports</h2>
                        <p><a href="#" class="btn btn-primary btn-lg">Shop now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="colorlib-product">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>View All Products</h2>
            </div>
        </div>
        <div class="row row-pb-md">
            <?php
            $i = 1;
            foreach ($barang as $b) :
            ?>
                <div class="col-md-3 col-lg-3 mb-4 text-center">
                    <div class="product-entry border">
                        <a href="<?= base_url('home/produk/') . $b['id_barang'] ?>" class="prod-img">
                            <img src="<?= base_url('assets/images/barang/' . $b['gambar']) ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                        </a>
                        <div class="desc">
                            <h2><a href="<?= base_url('home/produk/') . $b['id_barang'] ?>"><?= $b['nama'] ?></a></h2>
                            <span class="price">Rp. <?= $b['harga'] ?>,-</span>
                        </div>
                    </div>
                </div>
            <?php
                if ($i == 4) {
                    echo "<div class='w-100'></div>";
                    $i = 1;
                }
            endforeach;
            ?>
        </div>
        
        <div class="row">
            <div class="col-md-12 text-center">
                <div class="block-27">
                <?= $this->pagination->create_links() ?>
                    <!-- <ul>
                        <li><a href="#"><i class="ion-ios-arrow-back"></i></a></li>
                        <li class="active"><span>1</span></li>
                        <li>
                            <a href="#">
                            </a>
                        </li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><i class="ion-ios-arrow-forward"></i></a></li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
</div>