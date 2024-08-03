<nav class="navbar navbar-expand-lg" style="background-color: #e3f2fd;">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav nav-pills me-auto mb-2 mb-lg-0">
        <li class="nav-item me-2">
          <a class="nav-link <?php echo ((isset($_GET['x']) && $_GET['x'] == 'home') || !isset($_GET['x'])) ? 'active link-light' : 'link-dark' ?>" href="home"><i class="bi bi-house-door-fill"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo (isset($_GET['x']) && $_GET['x'] == 'form') ? 'active link-light' : 'link-dark' ?>" href="form"><i class="bi bi-receipt-cutoff"></i> Pesan Paket</a>
        </li>
      </ul>
    </div>
  </div>
</nav>