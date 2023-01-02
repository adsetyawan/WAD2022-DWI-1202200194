<?php
session_start();
require 'admin/config/config.php';
require 'function/auth.php';
require 'admin/model/mobil.php';


$items = all();
require 'template/header.php';

?>

<?php require 'template/navbar.php' ?>

<div class="container" style="margin-top: 40px;">
<div class="row mb-3">
    <div class="col-md-12">
        <h3 class="text-center">List Mobil</h3>
    </div>
</div>
    <div class="row">
       <?php foreach($items as $item) : ?>
        <div class="col-md-4">
                <a href="<?= URL . 'detail-mobil.php?id=' . $item['id'] ?>" class="text-decoration-none text-dark">
                <div class="card shadow">
                    <div class="card-body">
                        <img src="<?= URL . 'storage/' . $item['gambar'] ?>" class="img-fluid" alt="">
                        <h4 class="mt-3"><?= $item['nama'] ?></h4>
                        <h6 class="mt-3"><?= number_format($item['harga']) ?>/jam</h6>
                    </div>
                </div>
            </a>
            </div>
       <?php endforeach; ?>
    </div>
</div>

<?php require 'template/footer.php' ?>
