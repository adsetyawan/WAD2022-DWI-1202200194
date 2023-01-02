<?php


function data_transaksi()
{
    global $koneksi;
    $dets = $koneksi->query("SELECT transaksi.*, mobil.nama as nama_mobil, mobil.jenis as jenis_mobil, pmb.nama as nama_pembayaran, pmb.nomor_rekening as nomor_rekening FROM transaksi INNER JOIN mobil ON mobil.id=transaksi.id_mobil INNER JOIN metode_pembayaran pmb ON pmb.id=transaksi.id_pembayaran ORDER BY transaksi.id DESC");
    $data = [];
    while($item = mysqli_fetch_assoc($dets)){
        $data[] = $item;
    }

    return $data;
}

function update($post)
{
    global $koneksi;
    if($post['status'] == 1)
    {
        $koneksi->query("UPDATE `mobil` SET `status` = 2 WHERE `mobil`.`id` = $post[id_mobil]");
    }
    $koneksi->query("UPDATE `transaksi` SET `status` = $post[status] WHERE `transaksi`.`id` = $post[id]");
}

function delete($id)
{
    global $koneksi;
    $koneksi->query("DELETE FROM transaksi WHERE id = $id");
}
