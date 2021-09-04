<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <h4 class="my-3 text-primary">Tambah Data Penjualan</h4>
    <hr>
    <div class="row">
        <div class="col-8 mt-3">
            <form action="/penjualan/save" method="post">
                <?= csrf_field(); ?>
                <div class="form-group row">
                    <label for="customer" class="col-sm-2 col-form-label">Customer</label>
                    <div class="col-sm-10">
                        <input type="text" name="customer" class="form-control <?= ($validation->hasError('customer')) ? 'is-invalid' : ''; ?>" id="customer" autofocus autocomplete="off" value="<?= old('customer'); ?>">
                        <div id="validationServer03Feedback" class="invalid-feedback">
                            <?= $validation->getError('customer'); ?>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="nama_produk" class="col-sm-2 col-form-label">Nama Produk</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_produk" class="form-control" id="nama_produk" autocomplete="off" value="<?= old('nama_produk'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" name="harga" class="form-control" id="harga" autocomplete="off" value="<?= old('harga'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="unit" class="col-sm-2 col-form-label">Total/Unit</label>
                    <div class="col-sm-10">
                        <input type="text" name="unit" class="form-control" id="unit" autocomplete="off" value="<?= old('unit'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="tgl_beli" class="col-sm-2 col-form-label">Tanggal Pembelian</label>
                    <div class="col-sm-10">
                        <input type="datetime-local" name="tgl_beli" class="form-control" id="tgl_beli" autocomplete="off" value="<?= old('tgl_beli'); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="total_harga" class="col-sm-2 col-form-label">Total Harga</label>
                    <div class="col-sm-10">
                        <input type="text" name="total_harga" class="form-control" id="total_harga" autocomplete="off" value="<?= old('harga'); ?>">
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