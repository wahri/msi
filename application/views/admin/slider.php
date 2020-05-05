<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>
            <?= $this->session->flashdata('message'); ?>
            <a href="<?= site_url('admin/tambahslider') ?>" class="btn btn-primary">Tambah slider</a>
            <div class="row">
                <div class="col-md-8">
                    <table class="table mt-3">
                        <thead class="thead-dark">
                            <tr>
                                <th width="10%">No</th>
                                <th>Slider</th>
                                <th width="20%">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($slider as $s) :
                            ?>
                                <tr>
                                    <td rowspan="2" class="align-middle text-center"><?= $i ?></td>
                                    <td rowspan="2"><img src="<?= base_url('assets/images/slider/') . $s['gambar'] ?>" alt="<?= $s['header1'] ?>" width="100%"></td>
                                    <td class="align-middle text-center">
                                        <a href="<?= base_url('admin/editslider/') . $s['id_slider'] ?>" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="align-middle text-center">
                                        <a href="<?= base_url('admin/hapusslider/') . $s['id_slider'] ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                            <?php $i++;
                            endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>