<div class="container">

    <div class="row mt-3">
        <div class="col-md-6">
        <a href="<?= base_url(); ?>user" class="btn btn-primary">Kembali</a>
            <div class="card mt-3">
                <div class="card-header">
                    Form Tambah Data User
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="id_user">ID User</label>
                            <input type="text" name="id_user" class="form-control" id="id_user">
                            <small class="form-text text-danger"><?= form_error('id_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="nama_user">Username</label>
                            <input type="text" name="nama_user" class="form-control" id="nama_user">
                            <small class="form-text text-danger"><?= form_error('nama_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fullname_user">Nama Lengkap</label>
                            <input type="text" name="fullname_user" class="form-control" id="fullname_user">
                            <small class="form-text text-danger"><?= form_error('fullname_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password_user">Password</label>
                            <input type="password" name="password_user" class="form-control" id="password_user">
                            <small class="form-text text-danger"><?= form_error('password_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="saldo_user">Saldo</label>
                            <input type="text" name="saldo_user" class="form-control" id="saldo_user">
                            <small class="form-text text-danger"><?= form_error('saldo_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <div class="input-group mb-3">
                                <select name="level" class="custom-select" id="level">
                                    <option selected disabled="disabled">Level</option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>


        </div>
    </div>

</div>