<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data user <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <p class="h1 mt-3 text-center">Daftar User</p>

    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>user/tambah" class="btn btn-primary">Tambah Data User</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data user.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if (empty($user)) : ?>
        <div class="alert alert-danger" role="alert">
            data user tidak ditemukan.
        </div>
    <?php endif; ?>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">ID User</th>
                <th scope="col">Username</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Password</th>
                <th scope="col">Saldo</th>
                <th scope="col">Level</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($user as $usr) : ?>
                <tr>
                    <td><?= $usr['id_user']; ?></td>
                    <td><?= $usr['nama_user']; ?></td>
                    <td><?= $usr['fullname_user']; ?></td>
                    <td><?= $usr['password_user']; ?></td>
                    <td>Rp <?= number_format($usr['saldo_user'], 0, ",", "."); ?></td>
                    <td><?= $usr['level']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>user/hapus/<?= $usr['id_user']; ?>" class="badge badge-danger  tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>user/ubah/<?= $usr['id_user']; ?>" class="badge badge-success ">ubah</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>