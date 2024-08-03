<?php

require 'connect.php';

if (isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];

  // Ambil nama gambar dari database
  $sql = "SELECT image FROM tb_wisata WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_assoc($result);
  $image = $row['image'];

  // Hapus gambar dari direktori
  $target_dir = "../img/";
  $target_file = $target_dir . $image;
  if (file_exists($target_file)) {
    unlink($target_file);
  }

  // Hapus data dari database
  $sql = "DELETE FROM tb_wisata WHERE id = $id";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    header('location:../dashboard');
  } else {
    echo "Data tidak berhasil dihapus";
  }
}
