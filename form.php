<!-- Start Content -->
<div class="container-fluid pb-5">
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
        <!-- Start Form -->
        <form class="row ps-5 pt-2 needs-validation" action="proses/simpanPesanPaket.php" method="post" novalidate>
          <!-- Start Input Nama -->
          <div class="form-group">
            <label for="inputNama" class="form-label">Nama</label>
            <input id="inputNama" class="form-control" type="text" name="namaForm" required>
            <div class="invalid-feedback">
              Nama wajib diisi.
            </div>
          </div>
          <!-- End Input Nama -->

          <!-- Start Input Alamat -->
          <div class="form-group">
            <label for="inputAlamat" class="form-label">Alamat</label>
            <textarea id="inputAlamat" class="form-control" name="AlamatForm" rows="3" required></textarea>
            <div class="invalid-feedback">
              Alamat wajib diisi.
            </div>
          </div>
          <!-- End Input Alamat -->

          <!-- Start Input Tujuan -->
          <div class="form-group">
            <label for="inputTujuan" class="form-label">Tujuan Pariwisata</label>
            <select id="inputTujuan" class="form-control" name="TujuanForm" required>
              <option value="">Pilih tujuan</option>
              <option value="Bali">Bali</option>
              <option value="Lampung">Lampung</option>
              <option value="Bangka">Bangka</option>
            </select>
            <div class="invalid-feedback">
              Tujuan wajib dipilih.
            </div>
          </div>
          <!-- End Input Tujuan -->

          <!-- Start Input Gender -->
          <div class="form-group">
            <label for="gender" class="form-label">Gender Anda</label>
            <div class="form-check">
              <input class="form-check-input" name="GenderForm" type="radio" id="genderPria" value="Pria" required>
              <label class="form-check-label" for="genderPria">Pria</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" name="GenderForm" type="radio" id="genderWanita" value="Wanita" required>
              <label class="form-check-label" for="genderWanita">Wanita</label>
            </div>
            <div class="invalid-feedback">
              Gender wajib dipilih.
            </div>
          </div>
          <!-- End Input Gender -->

          <!-- Start Input Jumlah -->
          <div class="form-group">
            <label for="inputJumlah" class="form-label">Jumlah Paket</label>
            <input id="inputJumlah" class="form-control" type="number" name="paketForm" required>
            <div class="invalid-feedback">
              Jumlah paket wajib diisi.
            </div>
          </div>
          <!-- End Input Jumlah -->

          <!-- Start Input Akomodasi -->
          <div class="form-group">
            <label for="akomodasi" class="form-label">Akomodasi Tambahan</label>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="sarapanForm" id="sarapanForm" value="1">
              <label class="form-check-label" for="sarapanForm">Akomodasi Tambahan Sarapan</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="kendaraanForm" id="kendaraanForm" value="1">
              <label class="form-check-label" for="kendaraanForm">Akomodasi Tambahan Kendaraan</label>
            </div>
            <div class="form-check">
              <input type="checkbox" class="form-check-input" name="penginapanForm" id="penginapanForm" value="1">
              <label class="form-check-label" for="penginapanForm">Akomodasi Tambahan Penginapan</label>
            </div>
          </div>
          <!-- End Input Akomodasi -->

          <!-- Start Input Waktu Perjalanan -->
          <div class="form-group">
            <label for="inputWaktuPerjalanan" class="form-label">Waktu Perjalanan (hari)</label>
            <input id="inputWaktuPerjalanan" class="form-control" type="number" name="waktuPerjalanan" required>
            <div class="invalid-feedback">
              Waktu perjalanan wajib diisi.
            </div>
          </div>
          <!-- End Input Waktu Perjalanan -->

          <!-- Start Input Jumlah Peserta -->
          <div class="form-group">
            <label for="inputJumlahPeserta" class="form-label">Jumlah Peserta</label>
            <input id="inputJumlahPeserta" class="form-control" type="number" name="jumlahPeserta" required>
            <div class="invalid-feedback">
              Jumlah peserta wajib diisi.
            </div>
          </div>
          <!-- End Input Jumlah Peserta -->

          <!-- Start Input Tanggal Berangkat -->
          <div class="form-group">
            <label for="inputTanggal" class="form-label">Tanggal Berangkat</label>
            <input id="inputTanggal" class="form-control" type="date" name="tanggalForm" required>
            <div class="invalid-feedback">
              Tanggal berangkat wajib diisi.
            </div>
          </div>
          <!-- End Input Tanggal Berangkat -->

          <!-- Start Input Email -->
          <div class="form-group">
            <label for="inputEmail" class="form-label">Email Anda</label>
            <input id="inputEmail" class="form-control" type="email" name="emailForm" required>
            <div class="invalid-feedback">
              Email wajib diisi dan harus valid.
            </div>
          </div>
          <!-- End Input Email -->

          <!-- Start Input No HP -->
          <div class="form-group">
            <label for="inputHP" class="form-label">No Handphone Anda</label>
            <input id="inputHP" class="form-control" type="number" name="hpForm" required>
            <div class="invalid-feedback">
              No Handphone wajib diisi.
            </div>
          </div>
          <!-- End Input No HP -->

          <!-- Start Button -->
          <div class="form-group mt-2">
            <button class="btn btn-primary" type="submit">Submit</button>
          </div>
          <!-- End Button -->
        </form>
        <!-- End Form -->
      </div>
    </div>

    <div class="col-lg-4">
      <video controls="controls" width="100%" autoplay>
        <source src="assets/video/Wonderland Indonesia.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>
<!-- End Content -->

<script>
  // Bootstrap validation
  (function() {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>