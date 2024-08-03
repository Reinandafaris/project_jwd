<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_jwd11');

if (!$conn) {
  echo "Gagal Koneksi ke Database";
}
