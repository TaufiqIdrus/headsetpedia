<div class="container">
    <form action="" method="post">
        <input type="hidden" name="id_user" value="<?= $user['id_user']; ?>">
        <input type="hidden" name="nama_user" value="<?= $user['nama_user']; ?>">
        <input type="hidden" name="id_headset" value="<?= $headset['id_headset']; ?>">
        <input type="hidden" name="nama_headset" value="<?= $headset['nama_headset']; ?>">
        <input type="hidden" name="saldo_user" value="<?= $user['saldo_user']; ?>">
        <input type="hidden" name="saldo_awal" value="<?= $user['saldo_user']; ?>">
        <input type="hidden" name="saldo_akhir" value="<?= $user['saldo_user'] - $headset['harga'];  ?>">
        <input type="hidden" name="harga" value="<?= $headset['harga']; ?>">
        <input type="hidden" name="stok" value="<?= $headset['stok']; ?>">
        <?php
        $hasil = "";
        if ($user['saldo_user'] < $headset['harga']) {
            $hasil = "Maaf Saldo Anda Tidak Mencukupi";
        } else {
            $hasil = "Hai " . $user['nama_user'] . ", apakah Anda yakin akan melakukan transaksi ini?";
        } ?>
        <a href="<?= base_url() ?>toko/pembelian/<?= $headset['id_headset']; ?>" class="btn btn-primary mt-3">Back</a>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Konfirmasi Pembelian Headset </div>
                    <div class="card-body">
                        <p class="h5"><?php echo $hasil; ?></p>
                        <p class="h5 mt-3">Saldo Anda: Rp <?= number_format($user['saldo_user'], 0, ",", "."); ?></p>
                        <img src="<?= base_url(); ?>/assets/gambar/<?= $headset['gambar']; ?>" alt="" width="300" height="300">
                        <h5 class="card-title"><?= $headset['nama_headset']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp <?= number_format($headset['harga'], 0, ",", "."); ?></h6>
                        <p class="card-text">Stok: <?= $headset['stok']; ?></p>
                        <button type="submit" class="btn btn-primary transaksi" name="beli" value="beli">
                            Konfirmasi Pembelian
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>