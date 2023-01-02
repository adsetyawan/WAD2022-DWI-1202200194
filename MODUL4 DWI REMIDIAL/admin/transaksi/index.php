<?php
session_start();
require '../config/config.php';
require '../model/transaksi.php';
auth();
admin();

$items = data_transaksi();
if (isset($_POST['delete'])) {
    delete($_POST['id']);
    header('Location:' . URL . 'admin/transaksi');
}

if(isset($_POST['update']))
{
    update($_POST);
    header('Location:' . URL . 'admin/transaksi');
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
                    <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
                </ol>
            </nav>
            <h1 class="h2">Trasaksi</h1>
            <p></p>
            <div class="row">
                <div class="col-12">
                    <a href="<?= URL . 'admin/transaksi/tambah.php' ?>" class="btn btn-primary mb-3">Tambah Data</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <tr>
                                        <th>No.</th>
                                        <th>Nama Mobil</th>
                                        <th>Durasi/jam</th>
                                        <th>Pembayaran</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                    <?php $i = 1;
                                    foreach ($items as $item) : ?>

                                        <tr>
                                            <td><?= $i++; ?></td>
                                            <td><?= $item['nama_mobil'] ?></td>
                                            <td><?= $item['durasi'] ?></td>
                                            <td><?= $item['nama_pembayaran'] . ' - ' . $item['nomor_rekening'] ?></td>
                                            <td>
                                                <?php if ($item['status'] == 1) : ?>
                                                    <span class="badge bg-success">Sudah Bayar</span>
                                                <?php else : ?>
                                                    <span class="badge bg-danger">Belum Bayar</span>
                                                <?php endif; ?>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalDetail<?= $item['id'] ?>">
                                                    Detail
                                                </button>
                                                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#modalEdit<?= $item['id'] ?>">
                                                    Edit
                                                </button>
                                                <form action="" method="post" class="d-inline">
                                                        <input type="hidden" value="<?= $item['id'] ?>" name="id">
                                                        <button class="btn btn-sm btn-danger" name="delete">Hapus</button>
                                                    </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </main>
    </div>
</div>

<!-- Modal -->
<?php foreach ($items as $item) : ?>
    <div class="modal fade" id="modalDetail<?= $item['id'] ?>" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetailLabel">Detail Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-inline">
                        <li class="list-item-inline d-flex justify-content-between">
                            <span>Nama Mobil</span>
                            <span><?= $item['nama_mobil'] ?></span>
                        </li>
                        <br>
                        <li class="list-item-inline d-flex justify-content-between">
                            <span>Jenis</span>
                            <span><?= $item['jenis_mobil'] ?></span>
                        </li>
                        <br>
                        <li class="list-item-inline d-flex justify-content-between">
                            <span>Durasi</span>
                            <span><?= $item['durasi'] ?> jam</span>
                        </li>
                        <br>
                        <li class="list-item-inline d-flex justify-content-between">
                            <span>Total</span>
                            <span>Rp. <?= number_format($item['total']) ?></span>
                        </li>
                        <br>
                        <li class="list-item-inline d-flex justify-content-between">
                            <span>Tanggal</span>
                            <span><?= $item['tanggal'] ?></span>
                        </li>
                        <br>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEdit<?= $item['id'] ?>" tabindex="-1" aria-labelledby="modalDetailLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalDetailLabel">Edit Transaksi</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="" method="POST">
                    <input type="hidden" name="id" value="<?= $item['id'] ?>">
                    <input type="hidden" name="id_mobil" value="<?= $item['id_mobil'] ?>">
                <div class="modal-body">
                    <div class="form-group mb-3">
                        <label for="nama_mobil" class="mb-2">Nama Mobil</label>
                        <input type="nama_mobil" name="nama_mobil" class="form-control" required value="<?= $item['nama_mobil'] ?>" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="pembayaran" class="mb-2">Pembayaran</label>
                        <input type="pembayaran" name="pembayaran" class="form-control" required value="<?= $item['nama_pembayaran'] . ' - ' . $item['nomor_rekening'] ?>" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="durasi" class="mb-2">Durasi</label>
                        <input type="durasi" name="durasi" class="form-control" required value="<?= $item['durasi'] ?>" readonly>
                    </div>
                    <div class="form-group mb-3">
                        <label for="total" class="mb-2">Total</label>
                        <input type="total" name="total" class="form-control" required value="<?= number_format($item['total']) ?>" readonly>
                    </div>

                    <div class="form-group mb-3">
                        <label for="status" class="mb-2">Status</label>
                        <select name="status" id="status" class="form-control">
                            <option
                                <?php if($item['status'] == 1) : ?>
                                selected
                                <?php endif; ?>
                            value="1">Sudah Dibayar</option>
                            <option
                                <?php if($item['status'] == 2) : ?>
                                selected
                                <?php endif; ?>
                            value="2">Belum Dibayar</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" name="update" class="btn btn-secondary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>

<?php require '../master/footer.php' ?>
