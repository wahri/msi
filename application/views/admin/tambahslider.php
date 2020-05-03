<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-5">
                    <?php echo form_open_multipart(); ?>
                            <div class="form-group">
                                <label for="gambar">Pilih gambar</label>
                                <input type="file" class="form-control-file" name="gambar">
                                <small id="error" class="form-text text-danger"><?= $error ?></small>
                            </div>
                            <div class="form-group">
                                <label for="header1">Judul</label>
                                <input type="text" class="form-control" name="header1">
                                <small id="error" class="form-text text-danger"><?= form_error('header1') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="header2">Subjudul</label>
                                <textarea class="form-control" rows="2" name="header2"></textarea>
                                <small id="error" class="form-text text-danger"><?= form_error('header2') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="nama_button">Nama Button</label>
                                <input type="text" class="form-control" name="nama_button">
                                <small id="error" class="form-text text-danger"><?= form_error('nama_button') ?></small>
                            </div>
                            <div class="form-group">
                                <label for="link">Link</label>
                                <input type="text" class="form-control" name="link">
                                <small id="error" class="form-text text-danger"><?= form_error('link') ?></small>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>