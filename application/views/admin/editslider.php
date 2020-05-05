<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= base_url('admin/proseseditslider/') . $slider['id_slider'] ?>" method="POST">
                        <div class="form-group">
                            <label>Judul</label>
                            <input type="text" class="form-control" name="header1" value="<?= $slider['header1'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Subjudul</label>
                            <input type="text" class="form-control" name="header2" value="<?= $slider['header2'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Nama Button</label>
                            <input type="text" class="form-control" name="nama_button" value="<?= $slider['nama_button'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Link</label>
                            <input type="text" class="form-control" name="link" value="<?= $slider['link'] ?>">
                        </div>
                        <button class="btn btn-primary mt-3 d-block ml-auto" type="submit">Update</button>
                    </form>
                </div>
                <div class="col-md-6 text-center">
                    <?php
                    if ($slider['gambar'] != NULL) :
                    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?= site_url('assets/images/slider/') . $slider['gambar'] ?>" height="200px"><span class="mt-3">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="<?= site_url('admin/hapusgambarslider/') . $slider['id_slider'] ?>" class="btn btn-danger">Hapus Gambar</a>
                            </div>
                        </div>
                    <?php else : ?>
                        <?php echo form_open_multipart('admin/tambahgambarslider/' . $slider['id_slider']); ?>
                        <div class="row">
                            <div class="col-md-7 justify-content-center">
                                <div class="form-inline mt-3 border py-4 px-4">
                                    <div class="form-group mb-2">
                                        <label>Upload gambar</label>
                                        <input type="file" class="form-control-file" id="gambar" name="gambar">
                                    </div>
                                    <button class="btn btn-primary" type="submit">Upload gambar</button>
                                </div>
                                </form>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </main>