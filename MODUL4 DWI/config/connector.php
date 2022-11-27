<?php

$connector = new mysqli("localhost", "root", "", "modul4", 3308);

if (!$connector) {
  die("Koneksi Gagal: " . $connector->connect_error);
}

?>
