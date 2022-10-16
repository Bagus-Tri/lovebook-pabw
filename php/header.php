<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Lovebook</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assets/img/LogoLovebook.png" rel="icon">
  <link href="../assets/img/LogoLovebook.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript" src="js/fusioncharts.js"></script>
  <script type="text/javascript" src="js/themes/fusioncharts.theme.fusion.js"></script>
  <script type="text/javascript" src="js/themes/fusioncharts.theme.fint.js"></script>
  <script type="text/javascript">
        FusionCharts.ready(function() {
            var visitChart = new FusionCharts({
                type: 'line',
                renderAt: 'chartPenjualan',
                width: '1100',
                height: '550',
                dataFormat: 'jsonurl',
                dataSource: 'selling/penjualan.json'
            });

            visitChart.render();
        });
    </script>
    <script type="text/javascript">
        FusionCharts.ready(function() {
            var cSatScoreChart = new FusionCharts({
                type: 'column2d',
                renderAt: 'chartKefavoritan',
                width: '600',
                height: '375',
                dataFormat: 'jsonurl',
                dataSource: 'selling/kefavoritan.json'
            }).render();
        });
    </script>

  <!-- Template Main CSS File -->
  <link href="../assets/css/main.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="../index.html" class="logo d-flex align-items-center me-auto me-lg-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="../assets/img/logolovebookFIX.png" alt="">
        <h1 class="navbar">Lovebook<span>.</span></h1>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="../index.html">Beranda</a></li>
          <li class="dropdown"><a href="category.html"><span>Kategori</span> <i
                class="bi bi-chevron-down dropdown-indicator"></i></a>
            <ul>
              <li><a href="category-fiction.html">Fiksi</a></li>
              <li><a href="category-nonfiction.html">Non-Fiksi</a></li>
            </ul>
          </li>
          <li><a href="aboutus.html">Tentang Kami</a></li>
        </ul>
      </nav><!-- .navbar -->
      <nav>
        <a href="cart.html"><i class="bi bi-cart4 position-relative fs-5"><span
              class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2 <span
                class="visually-hidden">unread messages</span></span></i></a>
        <a class="btn-book-a-table bi bi-person-circle fs-5" href="login.html"></a>
      </nav>
      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    </div>
  </header><!-- End Header -->