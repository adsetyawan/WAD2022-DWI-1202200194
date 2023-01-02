<?php
session_start();
require '../config/config.php';
require '../model/mobil.php';
auth();
admin();

$items = all();
if(isset($_POST['delete']))
{
    delete($_POST['id']);
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
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Overview</li>
                </ol>
            </nav>
            <h1 class="h2">Dashboard</h1>
            <p></p>
            <div class="row">
                <div class="col-12">
                    <a href="<?= URL . 'admin/mobil/tambah.php' ?>" class="btn btn-primary mb-3">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                           <div class="table-responsive">
                           <table class="mt-3 table table-striped">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Gambar</th>
                                        <th>Nama Mobil</th>
                                        <th>Jenis</th>
                                        <th>Merek</th>
                                        <th>Harga Sewa/Jam</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i=1; foreach($items as $item) : ?>
                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td>
                                                <img src="<?= URL . '../../storage/' . $item['gambar'] ?>" alt="" class="img-fluid" style="max-height:40px">
                                            </td>
                                            <td><?= $item['nama'] ?></td>
                                            <td><?= $item['jenis'] ?></td>
                                            <td><?= $item['merek'] ?></td>
                                            <td><?= number_format($item['harga']) ?></td>
                                            <td>
                                                <a href="<?= URL . 'admin/mobil/edit.php?id=' . $item['id'] ?>" class="btn btn-info">Edit</a>
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
            </div>

        </main>
    </div>
</div>
<?php require '../master/footer.php' ?>
