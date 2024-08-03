<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/bootstrap-5/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bootstrap-5/bootstrap-icons/font/bootstrap-icons.css">
</head>

<body class="scrollbar">
  <!-- Start Navbar Top -->
  <?php include 'components/nav-top.php'; ?>
  <!-- End Navbar Top -->

  <!-- Start Header -->
  <?php include 'components/header.php'; ?>
  <!-- End Header -->

  <!-- Start Navbar Bottom -->
  <?php include 'components/nav-bottom.php'; ?>
  <!-- End Navbar Bottom -->

  <!-- Start Content -->
  <?php include $page ?>
  <!-- End Content -->

  <!-- Start Footer -->
  <?php include 'components/footer.php'; ?>
  <!-- End Footer -->

  <script src="assets/bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>

</html>