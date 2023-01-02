<?php
session_start();
require 'admin/config/config.php';
require 'function/auth.php';
require 'template/header.php';

if(isset($_POST['register']))
{
    register($_POST);
}
?>

<div class="container"  style="margin-top: 50px">
    <div class="row justify-content-center mb-4">
        <div class="col-md-5">
            <div class="card">
                <div class="card-body">
                    <h3 class="mb-5 text-center">Register</h3>
                    <form method="post" action="">
                        <div class="form-group mb-3">
                            <label for="nama" class="mb-2">Nama</label>
                            <input type="text" name="nama" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="email" class="mb-2">Email</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="password" class="mb-2">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="konfirmasi_password" class="mb-2">Konfirmasi Kata Sandi</label>
                            <input type="password" name="konfirmasi_password" class="form-control" required>
                        </div>

                        <div class="pt-1 mb-4">
                            <button name="register" class="btn btn-info btn-block">Register</button>
                        </div>
                    </form>
                    <p>Sudah punya akun? <a href="<?= URL . 'login.php' ?>" class="text-primary">Login</a></p>
                    <p class="small text-center"><a href="<?= URL ?>">Beranda</a></p>
                </div>
            </div>
        </div>
    </div>

    <?php require 'template/footer.php' ?>
