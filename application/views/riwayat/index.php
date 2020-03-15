<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Data riwayat <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <p class="h1 mt-3 text-center">Riwayat Pembelian</p>

    <div class="row mt-3">
        <div class="col-md-6">
            <form action="" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Cari Riwayat Pembelian" name="keyword">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Cari</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php if (empty($riwayat)) : ?>
        <div class="alert alert-danger" role="alert">
            data riwayat tidak ditemukan.
        </div>
    <?php endif; ?>
    <table class="table table-bordered mt-3">
        <thead>
            <tr>
                <th scope="col">ID Pembelian</th>
                <th scope="col">ID User</th>
                <th scope="col">Nama User</th>
                <th scope="col">ID Headset</th>
                <th scope="col">Nama Headset</th>
                <th scope="col">Saldo Awal</th>
                <th scope="col">Saldo Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($riwayat as $rwyt) : ?>
                <tr>
                    <td><?= $rwyt['id_pembelian']; ?></td>
                    <td><?= $rwyt['id_user']; ?></td>
                    <td><?= $rwyt['nama_user']; ?></td>
                    <td><?= $rwyt['id_headset']; ?></td>
                    <td><?= $rwyt['nama_headset']; ?></td>
                    <td>Rp <?= number_format($rwyt['saldo_awal'], 0, ",", "."); ?></td>
                    <td>Rp <?= number_format($rwyt['saldo_akhir'], 0, ",", "."); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>