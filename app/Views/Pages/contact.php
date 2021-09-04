<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-3">
        <div class="col">
            <h2>Contact Us</h2>
            <?php foreach ($alamat as $a) : ?>
                <ul>
                    <li><?= $a['tipe']; ?></li>
                    <li><?= $a['alamat']; ?></li>
                    <li><?= $a['kota']; ?></li>
                </ul>
            <?php endforeach;  ?>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col">
            <i class="fas fa-envelope mt-5"> websitemoza08@gmail.com </i> <br>
            <i class="fab fa-instagram mt-2"> websitemoza_</i> <br>
            <i class="fas fa-phone-square-alt mt-2"> +6812xxx11519 </i> <br>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>