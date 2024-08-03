<div class="container-fluid pb-5">
  <div class="row">
    <div class="col-lg-8">
      <div class="row">
        <?php
        require 'proses/connect.php';
        $i = 1;
        $rows = mysqli_query($conn, "SELECT * FROM tb_wisata ORDER BY id DESC");
        foreach ($rows as $row) : ?>
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="img/<?php echo $row['image']; ?>" class="card-img-top" alt="<?php echo $row['image']; ?>" title="<?php echo $row['image']; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row['nama']; ?></h5>
                <p class="card-text"><?php echo $row['deskripsi']; ?></p>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="col-lg-4">
      <video controls="controls" width="100%" autoplay>
        <source src="assets/video/Wonderland Indonesia.mp4" type="video/mp4">
      </video>
    </div>
  </div>
</div>