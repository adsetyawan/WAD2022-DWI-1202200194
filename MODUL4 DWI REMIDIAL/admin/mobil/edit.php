<?php
session_start();
require '../config/config.php';
require '../model/mobil.php';
auth();
admin();
$id = $_GET['id'];
$item = getById($id);

if (isset($_POST['update'])) {
    // var_dump($_FILES);die;
    update($_POST, $_FILES);
    header('Location:' . URL . 'admin/mobil');
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
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" value="<?= $item['id'] ?>">
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="nama">Nama</label>
                                    <input type="text" class="form-control" placeholder="Nama" id="nama" name="nama" required value="<?= $item['nama'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="jenis">Jenis</label>
                                    <input type="text" class="form-control" placeholder="Jenis" id="jenis" name="jenis" required value="<?= $item['jenis'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="merk">Merek</label>
                                    <input type="text" class="form-control" placeholder="merk" id="merk" name="merk" required value="<?= $item['merek'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="harga">Harga Sewa/jam</label>
                                    <input type="number" class="form-control" placeholder="harga" id="harga" name="harga" required value="<?= $item['harga'] ?>">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="3" class="form-control"><?= $item['deskripsi'] ?></textarea>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="mb-2" for="status">Status</label>
                                    <select name="status" id="status" class="form-control">
                                        <option <?php if ($item['status'] == 1) : ?> selected <?php endif; ?> value="1">Tersedia</option>
                                        <option <?php if ($item['status'] == 2) : ?> selected <?php endif; ?> value="2">Tidak Tersedia</option>
                                    </select>
                                </div>

                                <div class="form-group mb-3">
                                    <label class="mb-2" for="gambar">Gambar</label>
                                    <input type="file" class="form-control" placeholder="gambar" id="gambar" name="gambar" >
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
