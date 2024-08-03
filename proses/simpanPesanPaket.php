<?php
include "connect.php";

// Menerima data dari form kemudian diteruskan kedalam variabel baru
$nama         = $_POST['namaForm'];
$alamat       = $_POST['AlamatForm'];
$tujuan       = $_POST['TujuanForm'];
$gender       = $_POST['GenderForm'];
$paket        = $_POST['paketForm'];
$sarapan      = isset($_POST['sarapanForm']) ? 1 : 0;
$kendaraan    = isset($_POST['kendaraanForm']) ? 1 : 0;
$penginapan   = isset($_POST['penginapanForm']) ? 1 : 0;
$tanggal      = $_POST['tanggalForm'];
$email        = $_POST['emailForm'];
$hp           = $_POST['hpForm'];
$tanggalPesan = date("Y-m-d");

// Validasi input
if (empty($nama) || empty($alamat) || empty($tujuan) || empty($gender) || empty($paket) || empty($tanggal) || empty($email) || empty($hp)) {
  echo "<script>alert('Semua bidang wajib diisi.');window.history.back();</script>";
  exit();
}

// Harga akomodasi
$hargaPenginapan = 1000000; // Rp 1.000.000
$hargaTransportasi = 1200000; // Rp 1.200.000
$hargaSarapan = 500000; // Rp 500.000

// Menghitung harga paket perjalanan
$hargaPaket = 0;
if ($penginapan) {
  $hargaPaket += $hargaPenginapan;
}
if ($kendaraan) {
  $hargaPaket += $hargaTransportasi;
}
if ($sarapan) {
  $hargaPaket += $hargaSarapan;
}

// Menghitung total tagihan
$jumlahPeserta = $_POST['jumlahPeserta'];
$waktuPerjalanan = $_POST['waktuPerjalanan'];
$totalTagihan = $hargaPaket * $jumlahPeserta * $waktuPerjalanan;

// Query untuk memasukkan data ke dalam database
$sql = "INSERT INTO tb_pemesanan (nama, alamat, tujuan, gender, paket, sarapan, kendaraan, penginapan, tanggal, email, hp, tanggalPesan, totalTagihan) 
        VALUES ('$nama', '$alamat', '$tujuan', '$gender', '$paket', '$sarapan', '$kendaraan', '$penginapan', '$tanggal', '$email', '$hp', '$tanggalPesan', '$totalTagihan')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Data Berhasil Disimpan');window.location.href='../hasilPaket';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
