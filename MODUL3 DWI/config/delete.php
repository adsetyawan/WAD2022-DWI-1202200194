<?php
requires './connector.php';

$id = $_GET['s_id'];

$sql = "DELETE FROM showroom_dwi_table WHERE id_mobil = 's_id'";

if (mysqli_query($connector, $sql)) {
  header("location: ../pages/List-Dwi.php");
} else {
  echo "Gagal";
}

?>