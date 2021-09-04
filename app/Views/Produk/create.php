<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <h2 class="my-3 text-primary">Tambah Data Produk</h2>
    <div class="row">
        <div class="col-8 mt-3">
            <form action="/produk/save" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" autofocus autocomplete="off" value="<?= old('nama'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="produsen" class="col-sm-2 col-form-label">Produsen</label>
                    <div class="col-sm-10">
                        <input type="text" name="produsen" class="form-control" id="produsen" autocomplete="off" value="<?= old('produsen'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" class="form-control" id="harga" autocomplete="off" value="<?= old('harga'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-2">
                        <img src="/img/default.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" name="foto" onchange="previewImg()">
                            <label class="custom-file-label" for="foto">Pilih Gambar</label>
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                <?= $validation->getError('foto'); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row float-none">
                    <div class=" col-sm">
                        <button type="submit" class="btn-sm btn-primary text-decoration-none">Tambah Data</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>