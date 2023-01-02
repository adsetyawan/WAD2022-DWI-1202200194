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
        <h3 class="text-center">Contact Us</h3>
    </div>
</div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12536.746080494875!2d107.62978136208773!3d-6.97987225567118!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e9adf177bf8d%3A0x437398556f9fa03!2sUniversitas%20Telkom!5e0!3m2!1sid!2sid!4v1670484635108!5m2!1sid!2sid"
                        class="w-100" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <ul class="list-inline">
                        <li class="list-inline-item small d-flex justify-content-between">
                            <span>No. HP</span>
                            <span class="ml-3">0809070605</span>
                        </li>
                        <br>
                        <li class="list-inline-item small d-flex justify-content-between">
                            <span>Email</span>
                            <span class="ml-3">sewakendaraan@gmail.com</span>
                        </li>
                        <br>
                        <li class="list-inline-item small d-flex justify-content-between">
                            <span>Alamat</span>
                            <span class="ml-5">Jl. Telekomunikasi. 1, Terusan Buahbatu - Bojongsoang, Telkom University, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257, Indonesia/span>
                        </li>
                        <br>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'template/footer.php' ?>