<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>user" class="btn btn-primary">Kembali</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-3">
                <div class="card-header">
                    Form Ubah Data User
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
                        <div class="form-group">
                            <label for="nama_user">Username</label>
                            <input type="text" name="nama_user" class="form-control" id="nama_user" value="<?= $user['nama_user']; ?>">
                            <small class="form-text text-danger"><?= form_error('nama_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="fullname_user">Nama Lengkap</label>
                            <input type="text" name="fullname_user" class="form-control" id="fullname_user" value="<?= $user['fullname_user']; ?>">
                            <small class="form-text text-danger"><?= form_error('fullname_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="password_user">Password</label>
                            <input type="password" name="password_user" class="form-control" id="password_user" value="<?= $user['password_user']; ?>">
                            <small class="form-text text-danger"><?= form_error('password_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="saldo_user">Saldo</label>
                            <input type="text" name="saldo_user" class="form-control" id="saldo_user" value="<?= $user['saldo_user']; ?>">
                            <small class="form-text text-danger"><?= form_error('saldo_user'); ?></small>
                        </div>
                        <div class="form-group">
                            <label for="level">Level</label>
                            <div class="input-group mb-3">
                                <select name="level" class="custom-select" id="level">
                                    <option value="<?= $user['level'] ?>"><?= $user['level'] ?></option>
                                    <option value="admin">Admin</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" name="ubah" class="btn btn-primary float-right">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>