<?php

function all()
{
    global $koneksi;
    $dets = $koneksi->query("SELECT * FROM mobil");
    $data = [];
    while ($item = mysqli_fetch_assoc($dets)) {
        $data[] = $item;
    }

    return $data;
}

function jumlahMobil()
{
    global $koneksi;
    $mobil = $koneksi->query("SELECT COUNT(id) jumlah_mobil FROM mobil")->fetch_assoc();
    return  $mobil['jumlah_mobil'];
}

function create($post, $file)
{
    global $koneksi;
    // gambar upload
    $target_dir = "../../storage/";
    $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["gambar"]["tmp_name"]);
    if ($check !== false) {
        move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file);
    } else {
        $uploadOk = 0;
    }

    $namaGambar = $_FILES['gambar']['name'];


    $koneksi->query("INSERT INTO `mobil` (`nama`, `jenis`, `merek`, `deskripsi`, `harga`, `status`, `gambar`) VALUES ('$post[nama]', '$post[jenis]', '$post[merk]', '$post[deskripsi]', $post[harga], $post[status], '$namaGambar')");
}

function getById($id)
{
    global $koneksi;
    return $koneksi->query("SELECT * FROM mobil WHERE id=$id")->fetch_assoc();
}

function update($post, $file)
{
    global $koneksi;


    $namaGambar = $file['gambar']['name'];
    if ($namaGambar) {
        // gambar upload
        $target_dir = "../../storage/";
        $target_file = $target_dir . basename($file["gambar"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $check = getimagesize($file["gambar"]["tmp_name"]);
        if ($check !== false) {
            move_uploaded_file($file["gambar"]["tmp_name"], $target_file);
        } else {
            $uploadOk = 0;
        }
        $gmb = ", `gambar` = '$namaGambar'";
    }else{
        $gmb = "";
    }


    $koneksi->query("UPDATE `mobil` SET `nama` = '$post[nama]', `jenis` = '$post[jenis]', `merek` = '$post[merk]', `deskripsi` = '$post[deskripsi]', `harga` = $post[harga], `status` = $post[status] $gmb WHERE `mobil`.`id` = $post[id]");
}

function delete($id)
{
    global $koneksi;
    $koneksi->query("DELETE FROM mobil WHERE id = $id");
}
