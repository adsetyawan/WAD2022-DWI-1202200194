<?php
session_start();
require 'admin/config/config.php';
require 'function/auth.php';
require 'template/header.php';


?>

<?php require 'template/navbar.php' ?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= URL . 'assets/gambar/gambar1.png' ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= URL . 'assets/gambar/gambar2.png' ?>" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="<?= URL . 'assets/gambar/gambar3.png' ?>" class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </button>
</div>

<?php require 'template/footer.php' ?>
