<?php
session_start();
require '../config/config.php';
require '../model/metode-pembayaran.php';
auth();
admin();

$items = data_pembayaran();
if(isset($_POST['delete']))
{
    delete($_POST['id']);
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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>
            </nav>
            <h1 class="h2">Dashboard</h1>
            <p></p>
            <div class="row">
                <div class="col-12">
                    <a href="<?= URL . 'admin/metode-pembayaran/tambah.php' ?>" class="btn btn-primary mb-3">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="mt-3 table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Pembayaran</th>
                                        <th>No. Rekening</th>
                                        <th>Pemilik</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($items as $item) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $item['nama'] ?></td>
                                            <td><?= $item['nomor_rekening'] ?></td>
                                            <td><?= $item['pemilik'] ?></td>
                                            <td>
                                                <a href="<?= URL . 'admin/metode-pembayaran/edit.php?id=' . $item['id'] ?>" class="btn btn-info">Edit</a>
                                                <form action="" method="post" class="d-inline">
                                                    <input type="hidden" value="<?= $item['id'] ?>" name="id">
                                                    <button class="btn btn-danger" name="delete">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>

                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>
<?php require '../master/footer.php' ?>
