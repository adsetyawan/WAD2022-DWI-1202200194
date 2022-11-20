<?php
require './connector.php';

$namamobil = $_POST['nama'];
$pemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];
$gambar = $_FILES['gambar']['name'];
$target = "../asset/images/";

if (!$img) {
  return false;
}
$query = "INSERT INTO showroom_dwi_table (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran,belum lunas')";

mysqli_query($db, $query);

return mysqli_affected_rows($db)
?>
