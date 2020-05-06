            
            <aside id="colorlib-hero">
                <div class="flexslider">
                    <ul class="slides">
                        <?php
                        $slider = $this->db->get('slider')->result_array();
                        foreach ($slider as $s) :
                        ?>
                            <li style="background-image: url('<?= base_url('assets/images/slider/') . $s['gambar'] ?>');">
                                <div class="overlay"></div>
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6 offset-sm-3 text-center slider-text">
                                            <div class="slider-text-inner">
                                                <div class="desc">
                                                    <h1 class="head-1"><?= $s['header1'] ?></h1>
                                                    <h2 class="head-2"><?= $s['header2'] ?></h2>
                                                    <p><a href="<?= $s['link'] ?>" class="btn btn-primary"><?= $s['nama_button'] ?></a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </aside>
            <!-- <div class="colorlib-intro">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="colorlib-product">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="featured">
                            <a href="#" class="featured-img" style="background-image: url(./assets/images/men.jpg);"></a>
                            <div class="desc">
                                <h2><a href="#">Shop Men's Collection</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 text-center">
                        <div class="featured">
                            <a href="#" class="featured-img" style="background-image: url(./assets/images/women.jpg);"></a>
                            <div class="desc">
                                <h2><a href="#">Shop Women's Collection</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

            <div class="colorlib-product">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
                            <h2>Produk MSI</h2>
                        </div>
                    </div>
                    <div class="row row-pb-md">
                        <?php
                        $this->db->limit(8);
                        $barang = $this->db->get('barang')->result_array();
                        foreach ($barang as $b) :
                        ?>
                            <div class="col-lg-3 mb-4 text-center">
                                <div class="product-entry border">
                                    <a href="<?= base_url('home/produk/') . $b['id_barang'] ?>" class="prod-img">
                                        <img src="<?= base_url('assets/images/barang/') . $b['gambar'] ?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
                                    </a>
                                    <div class="desc">
                                        <h2><a href="<?= base_url('home/produk/') . $b['id_barang'] ?>"><?= $b['nama'] ?></a></h2>
                                        <span class="price"><?= "Rp. " . number_format($b['harga'],2,',','.') ?></span>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="w-100"></div>

                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <p><a href="<?= base_url('home/store') ?>" class="btn btn-danger btn-lg">MSI Store</a></p>
                        </div>
                    </div>
                </div>
            </div>