<?php
session_start();
require 'admin/config/config.php';
require 'function/function.php';
require 'admin/model/mobil.php';
auth();

$items = data_transaksiuser();
// var_dump($items);die;
require 'template/header.php';

?>

<?php require 'template/navbar.php' ?>

<div class="container" style="margin-top: 40px;">
<div class="row mb-3">
    <div class="col-md-12">
        <h3>Transaksi</h3>
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
                                            <span class="badge badge-success">Sudah Bayar</span>
                                        <?php else : ?>
                                            <span class="badge badge-danger">Belum Bayar</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#modalDetail<?= $item['id'] ?>">
                                            Detail
                                        </button>

                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<?php foreach($items as $item) : ?>
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

<?php endforeach; ?>


<?php require 'template/footer.php' ?>
