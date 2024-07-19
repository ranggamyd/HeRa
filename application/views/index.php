<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>HeRa - Healthy Rabbit App</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/fe/assets/img/logo_only.png" rel="icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/fe/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/fe/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/fe/assets/vendor/aos/aos.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/fe/assets/css/style.css" rel="stylesheet" />
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center justify-content-between">
      <div class="logo">
        <!-- <h1><a href="/">Appland</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="/">
          <img src="<?= base_url() ?>assets/fe/assets/img/logo.png" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover" />
        </a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <!-- <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li>
              <a class="nav-link scrollto" href="#features">App Features</a>
            </li>
            <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
            <li><a class="nav-link scrollto" href="#pricing">Pricing</a></li>
            <li><a class="nav-link scrollto" href="#faq">F.A.Q</a></li>
            <li class="dropdown">
              <a href="#"
                ><span>Drop Down</span> <i class="bi bi-chevron-down"></i
              ></a>
              <ul>
                <li><a href="#">Drop Down 1</a></li>
                <li class="dropdown">
                  <a href="#"
                    ><span>Deep Drop Down</span>
                    <i class="bi bi-chevron-right"></i
                  ></a>
                  <ul>
                    <li><a href="#">Deep Drop Down 1</a></li>
                    <li><a href="#">Deep Drop Down 2</a></li>
                    <li><a href="#">Deep Drop Down 3</a></li>
                    <li><a href="#">Deep Drop Down 4</a></li>
                    <li><a href="#">Deep Drop Down 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Drop Down 2</a></li>
                <li><a href="#">Drop Down 3</a></li>
                <li><a href="#">Drop Down 4</a></li>
              </ul>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li> -->
            <li><a class="nav-link scrollto" href="<?= base_url() ?>home">Home</a></li>
            <li><a class="nav-link scrollto" href="<?= base_url() ?>home/diagnosa">Diagnosa</a></li>
            <li><a class="nav-link scrollto" href="<?= base_url() ?>home/tentang">Tentang</a></li>
          <li>
            <a class="getstarted" href="<?= base_url() ?>auth/login"><i class="bi bi-box-arrow-in-right me-2"></i> Login</a>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 d-lg-flex flex-lg-column justify-content-center align-items-stretch pt-5 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <div>
            <h1>
              Selamat datang di solusi cerdas untuk kesehatan kelinci Anda!
            </h1>
            <h2>
              <strong>HeRa (Healthy Rabbit App)</strong> <br />HeRa
              menggunakan metode AHP (Analytic Hierarchy Process) dan CF
              (Certainty Factor) untuk membantu Anda mendiagnosa penyakit
              kelinci kesayangan Anda dengan tepat. Jaga kesehatan kelinci
              Anda dengan teknologi terbaru!
            </h2>
            <a href="<?= base_url() ?>home/diagnosa" class="download-btn"><i class="bi bi-play-circle-fill" style="font-size: 1rem;""></i> Mulai Diagnosa</a
              >
            </div>
          </div>
          <div
            class=" col-lg-5 d-lg-flex flex-lg-column align-items-stretch order-1 order-lg-2 hero-img" data-aos="fade-up">
                <img src="<?= base_url() ?>assets/fe/assets/img/hero-img.png" style="width: 500px; object-fit: cover" class="img-fluid" alt="" />
          </div>
        </div>
      </div>
  </section>
  <!-- End Hero -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>HeRa</span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits">
          Designed by <a href="#">ShiPut</a>
        </div> -->
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/fe/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/fe/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/fe/assets/js/main.js"></script>
</body>

</html>