<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid">
            <h1 class="mt-4"><?= $judul ?></h1>
            <hr>
            <?= $this->session->flashdata('message'); ?>
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="<?= $user['username'] ?>">
                            <small id="error" class="form-text text-danger"><?= form_error('username') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <small id="error" class="form-text text-danger"><?= form_error('password') ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password">Confirm Password</label>
                            <input type="password" class="form-control" id="password2" name="password2">
                        </div>
                        <button class="btn btn-primary mt-3 d-block ml-auto" type="submit">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>