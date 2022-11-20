<?php
require './connector.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_dwi_table WHERE id_mobil = $id";

if (mysqli_query($connector, $sql)) {
  header("location: ../pages/List-Dwi.php");
} else {
  echo "Gagal";
}

?>