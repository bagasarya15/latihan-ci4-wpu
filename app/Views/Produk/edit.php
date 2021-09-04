<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <h2 class="my-3">Ubah Data Produk</h2>
    <div class="row">
        <div class="col-8 mt-3">
            <form action="/produk/update/<?= $produk['id']; ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $produk['slug']; ?>">
                <input type="hidden" name="fotoLama" value="<?= $produk['foto']; ?>">
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus autocomplete="off" value="<?= (old('nama')) ? old('nama') : $produk['nama']; ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="produsen" class="col-sm-2 col-form-label">Produsen</label>
                    <div class="col-sm-10">
                        <input type="text" name="produsen" class="form-control" id="produsen" autocomplete="off" value="<?= (old('produsen')) ? old('produsen') : $produk['produsen']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" class="form-control" id="harga" autocomplete="off" value="<?= (old('harga')) ? old('harga') : $produk['harga']; ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-2">
                        <img src="/img/<?= $produk['foto']; ?>" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                            <label class="custom-file-label" for="foto"><?= $produk['foto']; ?></label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class=" col-sm my-3 ml-3">
                            <button type="submit" class="btn-sm btn-primary text-decoration-none">Ubah Data</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>