<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h4 class="text-primary mt-3">Penjualan</h4>
        </div>
        <div class="my-4 mr-3">
            <a href="/penjualan/tambah" class="btn-sm btn-primary float-right text-decoration-none"> Tambah Data Penjualan </a>
        </div>
    </div>
    <?php if (session()->getFlashdata('pesan')) : ?>
        <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
        </div>
    <?php endif; ?>
    <hr>
    <div class="table-responsive-sm row">
        <div class="col">
            <!-- Button Cari -->
            <div class="row float-right">
                <div class="col">
                    <form action="" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Masukkan kata kunci pencarian.." name="keyword" id="keyword" autocomplete="off">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="submit" name="submit">Cari</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Customer</th>
                        <th scope="col">Nama Produk</th>
                        <th scope="col">Harga/Unit</th>
                        <th scope="col">Total/Unit</th>
                        <th scope="col">Tanggal Pembelian</th>
                        <th scope="col">Total Harga</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (5 * ($currentPage - 1)); ?>
                    <?php foreach ($penjualan as $pj) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $pj['customer']; ?></td>
                            <td><?= $pj['nama_produk']; ?></td>
                            <td><?= $pj['harga']; ?></td>
                            <td><?= $pj['unit']; ?></td>
                            <td><?= $pj['tgl_beli']; ?></td>
                            <td><?= $pj['total_harga']; ?></td>
                            <td><a href="/penjualan/edit" class="btn-sm btn-success mr-1 rounded-circle fas fa-edit"></a>
                                <a href="/penjualan/delete" class="btn-sm btn-danger mr-1 rounded-circle fas fa-trash"></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
            <div class="float-right my-2">
                <?= $pager->links('penjualan', 'penjualan_pagination'); ?>
            </div>
        </div>
    </div>
</div>
</div>

<?= $this->endSection(); ?>