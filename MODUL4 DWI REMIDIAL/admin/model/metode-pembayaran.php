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

function create($post)
{
    global $koneksi;
    $koneksi->query("INSERT INTO `metode_pembayaran` (`nama`, `nomor_rekening`, `pemilik`) VALUES ('$post[nama]', '$post[nomor_rekening]', '$post[pemilik]')");
}

function getById($id)
{
    global $koneksi;
    return $koneksi->query("SELECT * FROM metode_pembayaran WHERE id=$id")->fetch_assoc();
}

function update($post)
{
    global $koneksi;
    $koneksi->query("UPDATE `metode_pembayaran` SET `nama` = '$post[nama]', `nomor_rekening` = '$post[nomor_rekening]', `pemilik` = '$post[pemilik]' WHERE `metode_pembayaran`.`id` = $post[id]");
}

function delete($id)
{
    global $koneksi;
    $koneksi->query("DELETE FROM metode_pembayaran WHERE id = $id");
}
