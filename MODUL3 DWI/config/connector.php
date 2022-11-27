<?php

$connector = mysqli_connect("localhost", "root", "", "modul3", 3308);

if (!$connector) {
  die("Koneksi Gagal: " . $connector->connect_error);
}

?>
