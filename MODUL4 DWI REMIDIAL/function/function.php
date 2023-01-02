<?php

function data_pembayaran()
{
    global $koneksi;
    $dets = $koneksi->query("SELECT * FROM metode_pembayaran");
    $data = [];
    while($item = mysqli_fetch_assoc($dets)){
        $data[] = $item;
    }

    return $data;
}


function jumlahTransaksi()
{
    global $koneksi;
    $mobil = $koneksi->query("SELECT COUNT(id) jumlah_transaksi FROM transaksi")->fetch_assoc();
    return  $mobil['jumlah_transaksi'];
}


function sewaSekarang($post)
{
    global $koneksi;
    $id_user = $_SESSION['id'];
    $id_pembayaran = $post['id_pembayaran'];
    $durasi = $post['durasi'];
    $id_mobil = $post['id_mobil'];

    $mobil = $koneksi->query("SELECT * FROM mobil WHERE id=$id_mobil")->fetch_assoc();
    $total = $mobil['harga'] * $durasi;


    $koneksi->query("INSERT INTO `transaksi` (`id_user`, `id_mobil`, `durasi`, `total`, `id_pembayaran`, `status`) VALUES ($id_user, $id_mobil, $durasi, $total, $id_pembayaran, 2)");
}

function data_transaksiuser()
{
    global $koneksi;
    $id_user = $_SESSION['id'];
    $dets = $koneksi->query("SELECT transaksi.*, mobil.nama as nama_mobil, mobil.jenis as jenis_mobil, pmb.nama as nama_pembayaran, pmb.nomor_rekening as nomor_rekening FROM transaksi INNER JOIN mobil ON mobil.id=transaksi.id_mobil INNER JOIN metode_pembayaran pmb ON pmb.id=transaksi.id_pembayaran WHERE transaksi.id_user=$id_user ORDER BY transaksi.id DESC");
    $data = [];
    while($item = mysqli_fetch_assoc($dets)){
        $data[] = $item;
    }

    return $data;
}

