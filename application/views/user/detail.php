<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data User
                </div>
                <div class="card-body">
                    <p class="card-text">Username: <?= $user['nama_user']; ?></p>
                    <p class="card-text">Nama Lengkap: <?= $user['fullname_user']; ?></p>
                    <p class="card-text">Password: <?= $user['password_user']; ?></p>
                    <p class="card-text">Saldo: <?= $user['saldo_user']; ?></p>
                    <p class="card-text">Level: <?= $user['level']; ?></p>
                    <a href="<?= base_url(); ?>user" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>