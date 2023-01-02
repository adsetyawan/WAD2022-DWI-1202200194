<?php
session_start();
require 'admin/config/config.php';
require 'function/auth.php';
require 'function/function.php';
require 'admin/model/mobil.php';


$id = $_GET['id'];
$item = getById($id);
$data_pembayaran = data_pembayaran();

if(isset($_POST['sewa']))
{
    auth();
   sewaSekarang($_POST);
   header('Location:' . URL . 'transaksi.php');
}



require 'template/header.php';

?>

<?php require 'template/navbar.php' ?>

<div class="container" style="margin-top: 40px;">
    <div class="row mb-3">
        <div class="col-md-12">
            <h3 class="text-center">Detail Mobil</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h2 class="mb-3"><?= $item['nama'] ?></h2>
                    <img src="<?= URL . 'storage/' . $item['gambar'] ?>" class="img-fluid" alt="">
                    <h5 class="mt-2">Rp. <?= number_format($item['harga']) ?>/jam</h5>
                    <p class="mt-3">
                        <?= $item['deskripsi'] ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-3">Form Penyewaan</h5>
                    <form action="" method="POST">
                        <input type="hidden" name="id_mobil" value="<?= $item['id'] ?>">
                        <div class="form-group mb-3">
                            <label for="durasi" class="mb-2">Durasi/jam</label>
                            <input type="number" name="durasi" class="form-control" required>
                        </div>
                        <div class="form-group mb-3">
                            <label for="id_pembayaran" class="mb-2">Metode Pembayaran</label>
                          <select name="id_pembayaran" id="id_pembayaran" class="form-control">
                          <?php foreach($data_pembayaran as $pembayaran) : ?>
                           <option value="<?= $pembayaran['id'] ?>"><?= $pembayaran['nama'] ?></option>
                           <?php endforeach; ?>
                          </select>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-info btn-block" name="sewa">Sewa Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require 'template/footer.php' ?>
