<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $barang['nama'] ?></h1>
            <hr>
            <div class="row">
                <div class="col-md-6">
                    <form action="<?= base_url('admin/proseseditbarang/') . $barang['id_barang'] ?>" method="POST">
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" value="<?= $barang['nama'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Harga Barang</label>
                            <input type="text" class="form-control" name="harga" value="<?= $barang['harga'] ?>">
                        </div>
                        <select class="form-control" name="paket">
                            <option>Pilih Paket</option>
                            <option value="silver" <?= ($barang['paket'] == 'silver') ? 'selected' : '' ?>>Silver</option>
                            <option value="gold" <?= ($barang['paket'] == 'gold') ? 'selected' : '' ?>>Gold</option>
                            <option value="platinum" <?= ($barang['paket'] == 'platinum') ? 'selected' : '' ?>>Platinum</option>
                        </select>
                        <button class="btn btn-primary mt-3 d-block ml-auto" type="submit">Update</button>
                    </form>
                </div>
                <div class="col-md-6 text-center">
                    <?php
                    if ($barang['gambar'] != NULL) :
                    ?>
                        <div class="row">
                            <div class="col-md-12">
                                <img src="<?= site_url('assets/images/barang/') . $barang['gambar'] ?>" height="200px"><span class="mt-3">
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <a href="<?= site_url('admin/hapusgambarbarang/') . $barang['id_barang'] ?>" class="btn btn-danger">Hapus Gambar</a>
                            </div>
                        </div>
                    <?php else : ?>
                        <?php echo form_open_multipart('admin/tambahgambarbarang/' . $barang['id_barang']); ?>
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