<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container mt">
    <div class="row">
        <div class="col">
            <h4 class="text-primary mt-3">Home</h4>
        </div>
    </div>
    <hr>
    <!-- Start Card -->
    <div class="row">
        <div class="col-xl-3 col-md-6 mt-5">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Data Produk
                    <a class="text-xl-right text-white stretched-link float-right mr-1"> <b>3</b> </a>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/produk">Lihat Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-shopping-basket fa-2x"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt-5">
            <div class="card bg-warning text-white mb-4">
                <div class="card-body">Data Penjualan
                    <a class="text-xl-right text-white stretched-link float-right mr-1"> <b>40</b> </a>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="/penjualan">Lihat Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-poll fa-2x"></i></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt-5">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Lorem, ipsum dolor.</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Lihat Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mt-5">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Lorem, ipsum dolor.</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-white stretched-link" href="#">Lihat Selengkapnya</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Card -->
</div>
<?= $this->endSection(); ?>