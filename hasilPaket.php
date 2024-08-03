<?php
include "proses/connect.php";

// Query untuk mengambil data dari database
$sql = "SELECT * FROM tb_pemesanan";
$result = $conn->query($sql);
?>

<!-- Start Content -->
<div class="container-fluid pb-5">
  <div class="row">
    <div class="col">
      <div class="row">
        <!-- Start Table -->
        <div class="table-responsive mt-2">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tujuan</th>
                <th>Gender</th>
                <th>Paket</th>
                <th>Sarapan</th>
                <th>Kendaraan</th>
                <th>Penginapan</th>
                <th>Tanggal</th>
                <th>Email</th>
                <th>HP</th>
                <th>Total Tagihan</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                          <td>" . $row["nama"] . "</td>
                          <td>" . $row["alamat"] . "</td>
                          <td>" . $row["tujuan"] . "</td>
                          <td>" . $row["gender"] . "</td>
                          <td>" . $row["paket"] . "</td>
                          <td>" . ($row["sarapan"] ? "Ya" : "Tidak") . "</td>
                          <td>" . ($row["kendaraan"] ? "Ya" : "Tidak") . "</td>
                          <td>" . ($row["penginapan"] ? "Ya" : "Tidak") . "</td>
                          <td>" . $row["tanggal"] . "</td>
                          <td>" . $row["email"] . "</td>
                          <td>" . $row["hp"] . "</td>
                          <td>" . $row["totalTagihan"] . "</td>
                        </tr>";
                }
              } else {
                echo "<tr><td colspan='12'>Tidak ada data</td></tr>";
              }
              ?>
            </tbody>
          </table>
        </div>
        <!-- End Table -->
        <div class="d-flex justify-content-end gap-2">
          <button class="btn btn-primary">
            <a href="form" class="text-white text-decoration-none">Pesan Lagi</a>
          </button>
          <button class="btn btn-success">
            <a href="home" class="text-white text-decoration-none">Lihat Paket</a>
          </button>
        </div>
      </div>
    </div>

    <!-- <div class="col-lg-4">
      <video controls="controls" width="100%" autoplay>
        <source src="video.mp4" type="video/mp4">
      </video>
    </div> -->
  </div>
</div>
<!-- End Content -->

<?php
$conn->close();
?>