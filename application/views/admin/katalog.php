<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">
                <?php
                if ($level == 'kosong') :
                ?>
                    <?= $judul ?>
                <?php elseif ($level == 'silver') : ?>
                    Produk Silver
                <?php elseif ($level == 'gold') : ?>
                    Produk Gold
                <?php elseif ($level == 'platinum') : ?>
                    Produk Platinum
                <?php endif; ?>
            </h1>

            <hr>
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <?= $error ?>
            <div class="row">
                <div class="col-md-10">
                    <?php
                    if ($level == 'kosong') :
                    ?>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Barang</button>
                        <div class="row">
                            <div class="col-md-12">
                                <a href="<?= base_url('admin/katalog/silver') ?>" type="button" class="btn btn-secondary">Produk Silver</a>
                                <a href="<?= base_url('admin/katalog/gold') ?>" type="button" class="btn btn-warning ml-3">Produk Gold</a>
                                <a href="<?= base_url('admin/katalog/platinum') ?>" type="button" class="btn btn-info ml-3">Produk Platinum</a>
                            </div>
                        </div>

                    <?php
                    else :
                        if ($level == 'silver') {
                            $query = $silver;
                        } elseif ($level == 'gold') {
                            $query = $gold;
                        } elseif ($level == 'platinum') {
                            $query = $platinum;
                        } else {
                            $query = null;
                        }
                    ?>
                        <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target=".bd-example-modal-lg">Tambah Barang</button>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <a href="<?= base_url('admin/katalog/silver') ?>" type="button" class="btn btn-secondary">Produk Silver</a>
                                <a href="<?= base_url('admin/katalog/gold') ?>" type="button" class="btn btn-warning ml-3">Produk Gold</a>
                                <a href="<?= base_url('admin/katalog/platinum') ?>" type="button" class="btn btn-info ml-3">Produk Platinum</a>
                            </div>
                        </div>
                        <table class="table table-sm text-center table-bordered table-striped " id="dataTable">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Nama Barang</th>
                                    <th>Harga</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($query as $d) :
                                ?>
                                    <tr>
                                        <td><img src="<?= site_url('assets/images/barang/') . $d['gambar'] ?>" alt="<?= $d['nama'] ?>" height="200px"></td>
                                        <td class="align-middle"><?= $d['nama'] ?></td>
                                        <td class="align-middle">Rp. <?= $d['harga'] ?>,-</td>
                                        <td class="align-middle">
                                            <a class="badge badge-info" href="<?= site_url('admin/infobarang/') . $d['id_barang'] ?>">Tambah Info</a>
                                            <a class="badge badge-warning" href="<?= site_url('admin/editbarang/') . $d['id_barang'] ?>">Edit</a>
                                            <a class="badge badge-danger" href="<?= site_url('admin/hapusbarang/') . $d['id_barang'] ?>">Delete</a>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                endforeach;
                                ?>
                            </tbody>
                        </table>
                    <?php endif; ?>

                </div>
            </div>

            <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Form Tambah Pelanggan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <?php echo form_open_multipart(); ?>
                            <div class="form-group">
                                <label>Nama Barang</label>
                                <input type="text" class="form-control" name="nama">
                            </div>
                            <div class="form-group">
                                <label>Harga Barang</label>
                                <input type="text" class="form-control" name="harga">
                            </div>
                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" class="form-control-file">
                            </div>
                            <select class="form-control" name="paket">
                                <option>Pilih Paket</option>
                                <option value="silver">Silver</option>
                                <option value="gold">Gold</option>
                                <option value="platinum">Platinum</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>