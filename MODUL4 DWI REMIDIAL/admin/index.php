<?php
session_start();
require 'config/config.php';
require 'model/mobil.php';
require '../function/function.php';
auth();
admin();

 ?>
<?php require 'master/header.php' ?>
    <div class="container-fluid">
        <div class="row">
            <?php require 'master/sidebar.php' ?>
            <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                    </ol>
                </nav>
                <h1 class="h2">Dashboard</h1>
                <p></p>
                <div class="row my-4">
                    <div class="col-12 col-md-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="card">
                            <h5 class="card-header">Jumlah Mobil</h5>
                            <div class="card-body">
                              <h5 class="card-title text-center display-4"><?= jumlahMobil() ?></h5>

                            </div>
                          </div>
                    </div>
                    <div class="col-12 col-md-6 mb-4 mb-lg-0 col-lg-3">
                        <div class="card">
                            <h5 class="card-header">Jumlah Transaksi</h5>
                            <div class="card-body">
                              <h5 class="card-title text-center display-4"><?= jumlahTransaksi() ?></h5>
                            </div>
                          </div>
                    </div>
                </div>

            </main>
        </div>
    </div>
<?php require 'master/footer.php' ?>
