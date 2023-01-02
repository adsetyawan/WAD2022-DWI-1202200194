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
            <h3 class="text-center">About Us</h3>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card border-0">
                <div class="card-body">
                    <iframe class="w-100" height="415" src="https://www.youtube.com/embed/FCgvu5xIRV0?autoplay=1">
                    </iframe>
                    <p class="mt-3">
                        Bukti nyata bahwa adanya perjalanan menyenangkan di balik perjalanan yang melelahkan kemanapun
                        kami antar kapanpun kami siap yuuuuuk order segera mobilnya.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'template/footer.php' ?>