<!-- Start Content -->
<?php if (isset($_GET['x']) && $_GET['x'] == 'home') {
  $page = 'home.php';
  include 'main.php';
} else if (isset($_GET['x']) && $_GET['x'] == 'form') {
  $page = 'form.php';
  include 'main.php';
} else if (isset($_GET['x']) && $_GET['x'] == 'hasilPaket') {
  $page = 'hasilPaket.php';
  include 'main.php';
} else if (isset($_GET['x']) && $_GET['x'] == 'login') {
  include 'login.php';
} else if (isset($_GET['x']) && $_GET['x'] == 'dashboard') {
  include 'dashboard.php';
} else if (isset($_GET['x']) && $_GET['x'] == 'logout') {
  include 'proses/proses_logout.php';
} else {
  $page = 'home.php';
  include 'main.php';
} ?>
<!-- End Content -->