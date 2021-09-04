<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-2">
    <h2 class="text-primary">Detail Produk</h2>
    <div class="row">
        <div class="col mt-3">
            <div class=" border border-dark rounded-lg card mb-3" style="max-width: 540px;">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="/img/<?= $produk['foto']; ?>" class="card-img" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $produk['nama']; ?></h5>
                            <p class="card-text"> <b>Produsen :</b> <?= $produk['produsen']; ?></p>
                            <p class="card-text"><small class="text-muted"> <b>Harga/Satuan :</b> Rp<?= $produk['harga']; ?></small></p>
                            <a href="/produk/edit/<?= $produk['slug']; ?>" class="btn btn-warning mr-1 text-decoration-none">Ubah</a>

                            <form action="/produk/<?= $produk['id']; ?>" method="post" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="delete">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ingin menghapus?');">Hapus</button>
                            </form>

                            <br></br>
                            <a href="/produk" class="fas fa-arrow-circle-left text-info text-decoration-none"> Kembali </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>