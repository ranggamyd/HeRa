<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title>HeRa - Healthy Rabbit App</title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/fe/assets/img/logo_only_dark.png" rel="icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/fe/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/fe/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/fe/assets/vendor/aos/aos.css" rel="stylesheet" />
  <link href="<?= base_url() ?>assets/fe/assets/vendor/wizard/wizard.css" rel="stylesheet">

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
        <a href="<?= base_url() ?>">
          <img src="<?= base_url() ?>assets/fe/assets/img/logo_light.png" class="img-fluid" style="width: 150px; height: 150px; object-fit: cover" />
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

  <main id="main">
    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Diagnosa</h2>
          <ol>
            <li><a href="<?= base_url() ?>">Home</a></li>
            <li>Diagnosa</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs Section -->

    <!-- ======= Contact Section ======= -->
    <section class="contact">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Mulai Diagnosa</h2>
          <p>
            Isi formulir berikut dengan gejala-gejala yang dialami kelinci
            Anda. Semakin lengkap data yang Anda masukkan, semakin akurat
            hasil diagnosanya.
          </p>
        </div>

        <div class="row">
          <div class="col-lg-8 offset-lg-2">
            <form id="msform" action="<?= base_url('home/diagnosa') ?>" method="post">
              <ul id="progressbar">
                <li class="active" id="account"><strong>Registrasi</strong></li>
                <li id="personal"><strong>Diagnosa</strong></li>
              </ul>
              <fieldset>
                <div class="form-card">
                  <input type="hidden" class="form-control main-form mb-3" id="id_pasien" value="<?= $idpasien ?>" name="id_pasien" readonly>
                  <input type="hidden" class="form-control main-form" name="tgl_diagnosa" id="tgl_diagnosa" value="<?php
                                                                                                                    date_default_timezone_set('Asia/Jakarta');
                                                                                                                    echo date('Y-m-d H:i:s');
                                                                                                                    ?>">
                  <label for="nama">Nama Lengkap :</label>
                  <input type="text" class="form-control main-form mb-3" id="nama" name="nama" required>
                  <label for="no_hp">No. HP :</label>
                  <input type="text" class="form-control main-form mb-3" id="no_hp" name="no_hp" required>
                  <label for="umur">Umur :</label>
                  <input type="text" class="form-control main-form mb-3" id="umur" name="umur" required>
                  <label for="alamat">Alamat :</label>
                  <textarea name="alamat" id="alamat" cols="10" rows="5" class="form-control main-form"></textarea>
                </div>
                <input type="button" name="next" class="next action-button" value="Mulai Diagnosa" />
              </fieldset>

              <fieldset>
                <div class="form-card">
                  <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                      <thead class="text-center">
                        <th>#</th>
                        <th>Kode</th>
                        <th>Nama Gejala</th>
                        <th>Pilih Kondisi</th>
                      </thead>
                      <tbody>
                        <?php
                        $no = 1;
                        foreach ($gejala as $item) : ?>
                          <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= $item['kode_gejala']; ?></td>
                            <td>Apakah <b><?= $item['nama_gejala'] ?>?</b></td>
                            <td>
                              <select name="kondisi[]" id="kondisi[]" class="form-control select-item">
                                <option value="0" readonly>-- PILIH --</option>
                                <?php foreach ($kondisi as $k) : ?>
                                  <option value="<?= $item['id_gejala'] . '_' . $k['id_kondisi']; ?>"><?= $k['nama_kondisi']; ?></option>
                                <?php endforeach ?>
                              </select>
                            </td>
                          </tr>
                        <?php endforeach ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <input type="submit" class="finish action-button-finish" data-toggle="tooltip" data-placement="top" title="Klik disini untuk melihat hasil diagnosa" name="submit" value="Cek Diagnosa" style="font-family:Arial, FontAwesome">
                <input type="button" name="previous" class="previous action-button-previous" value="Previous" />
              </fieldset>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

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
  <script src="<?= base_url() ?>assets/fe/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>assets/fe/assets/vendor/wizard/wizard.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/fe/assets/js/main.js"></script>

  <script>
    var form = document.getElementById('msform');
    var selectDropdowns = form.getElementsByClassName('select-item');

    form.addEventListener('submit', function(event) {

      let allZero = true;
      Array.from(selectDropdowns).forEach(function(selectDropdown) {
        if (selectDropdown.value !== '0') {
          allZero = false;
        }
      });

      if (allZero) {
        alert('Harap memilih salah satu gejala');
        event.preventDefault();
      } else {
        event.submit();
      }
    });
  </script>
</body>

</html>