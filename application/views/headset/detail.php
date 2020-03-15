<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    Detail Data Headset
                </div>
                <div class="card-body">
                    <img src="<?= base_url(); ?>/assets/gambar/<?= $headset['gambar']; ?>" alt="" width="300" height="300">
                    <h5 class="card-title"><?= $headset['nama_headset']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted">Harga: <?= $headset['harga']; ?></h6>
                    <p class="card-text">Stok: <?= $headset['stok']; ?></p>
                    <a href="<?= base_url(); ?>headset" class="btn btn-primary">Kembali</a>
                </div>
            </div>

        </div>
    </div>
</div>