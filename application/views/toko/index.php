<div class="container">
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
    <?php if ($this->session->flashdata('flash')) : ?>
        <div class="row mt-3">
            <div class="col-md-6">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    Transaksi <strong>berhasil</strong> 
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    <?php endif; ?>
        <div class="row mt-3">
            <?php foreach ($headset as $hs) : ?> 
                <div class="col-md">
                    <div class="card rounded" style="width: 18rem;">
                        <img src="<?= base_url(); ?>assets/gambar/<?= $hs['gambar']; ?>" class="card-img-top " alt="..." width="300" height="300">
                        <div class="card-body">
                            <p class="card-title h5 text-center"><?= $hs['nama_headset']; ?></p>
                            <p class="card-text font-weight-bold text-success">Rp <?= number_format($hs['harga'], 0, ",", "."); ?></p>
                            <p class="card-text">Stok: <?= $hs['stok']; ?></p>
                            <a href="<?= base_url(); ?>toko/pembelian/<?= $hs['id_headset']; ?>" class="btn btn-primary float-right">beli</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

</div>
