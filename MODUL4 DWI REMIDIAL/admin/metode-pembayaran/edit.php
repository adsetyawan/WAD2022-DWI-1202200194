<?php
session_start();
require '../config/config.php';
require '../model/metode-pembayaran.php';
auth();
admin();

$id = $_GET['id'];
$item = getById($id);
if(isset($_POST['update']))
{
    update($_POST);
    header('Location:' . URL . 'admin/metode-pembayaran');
}
?>
<?php require '../master/header.php' ?>
<div class="container-fluid">
    <div class="row">
        <?php require '../master/sidebar.php' ?>
        <main class="col-md-9 ml-sm-auto col-lg-10 px-md-4 py-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?= URL . 'admin' ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Metode Pembayaran</li>
                </ol>
            </nav>
            <h1 class="h2">Edit Data</h1>
            <p></p>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $item['id'] ?>">
                        <div class="form-group mb-3">
                            <label class="mb-2" for="nama">Nama Pembayaran</label>
                            <input type="text" class="form-control" placeholder="Nama Pembayaran" id="nama" name="nama"
                                required value="<?= $item['nama'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2" for="nomor_rekening">Nomor Rekening</label>
                            <input type="text" class="form-control" placeholder="Nomor Rekening" id="nomor_rekening"
                                name="nomor_rekening" required value="<?= $item['nomor_rekening'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label class="mb-2" for="pemilik">Pemilik</label>
                            <input type="text" class="form-control" placeholder="Pemilik" id="pemilik" name="pemilik"
                                required value="<?= $item['pemilik'] ?>">
                        </div>
                        <div class="form-group mb-3">
                            <button name="update" class="btn btn-primary px-4">Update</button>
                        </div>
                    </form>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>
<?php require '../master/footer.php' ?>
