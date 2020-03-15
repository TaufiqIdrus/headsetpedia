<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data headset <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <p class="h1 mt-3 text-center">Daftar Headset</p>
    <div class="row mt-3">
        <div class="col-md-6">
            <a href="<?= base_url(); ?>headset/tambah" class="btn btn-primary">Tambah Data Headset</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari data headset.." name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if (empty($headset)) : ?>
        <div class="alert alert-danger" role="alert">
            data headset tidak ditemukan.
        </div>
    <?php endif; ?>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">ID Headset</th>
                <th scope="col">Nama Headset</th>
                <th scope="col">File Gambar</th>
                <th scope="col">Harga</th>
                <th scope="col">Stok</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($headset as $hs) : ?>
                <tr>
                    <td><?= $hs['id_headset']; ?></td>
                    <td><?= $hs['nama_headset']; ?></td>
                    <td><?= $hs['gambar']; ?></td>
                    <td>Rp <?= number_format($hs['harga'], 0, ",", "."); ?></td>
                    <td><?= $hs['stok']; ?></td>
                    <td>
                        <a href="<?= base_url(); ?>headset/hapus/<?= $hs['id_headset']; ?>" class="badge badge-danger  tombol-hapus">hapus</a>
                        <a href="<?= base_url(); ?>headset/ubah/<?= $hs['id_headset']; ?>" class="badge badge-success ">ubah</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>