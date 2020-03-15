<div class="container">
    <form action="" method="post">
        <a href="<?= base_url(); ?>toko/index" class="btn btn-primary mt-3">Kembali</a>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Pembelian Headset </div>
                    <div class="card-body">
                        <input type="hidden" name="id_headset" value="<?= $headset['id_headset']; ?>">
                        <div class="form-group">
                            <label for="id_user">Masukkan ID User</label>
                            <input type="text" name="id_user" class="form-control" id="id_user">
                            <small class="form-text text-danger"><?= form_error('id_user'); ?></small>
                        </div>
                        <img src="<?= base_url(); ?>/assets/gambar/<?= $headset['gambar']; ?>" alt="" width="300" height="300">
                        <h5 class="card-title"><?= $headset['nama_headset']; ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Harga: Rp <?= number_format($headset['harga'], 0, ",", "."); ?></h6>
                        <p class="card-text">Stok: <?= $headset['stok']; ?></p>
                        <button type="submit" name="coba2" class="btn btn-primary float-right">Beli Sekarang</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>