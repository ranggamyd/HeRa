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
    <link href="<?= base_url() ?>assets/fe/assets/vendor/wizard/wizard.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/fe/assets/css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top header-transparent d-print-none">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="logo">
                <!-- <h1><a href="/">Appland</a></h1> -->
                <!-- Uncomment below if you prefer to use an image logo -->
                <a href="<?= base_url() ?>">
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

    <main id="main">
        <!-- ======= Breadcrumbs Section ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <h2>Hasil Diagnosa</h2>
                    <ol>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li>Hasil Diagnosa</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End Breadcrumbs Section -->

        <!-- ======= Contact Section ======= -->
        <section class="contact" id="print-area">
            <div class="container" data-aos="fade-up">
                <div class="section-title d-print-none">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2>Hasil Diagnosa</h2>
                        <a href="#" id="print" onClick="window.print();" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="tooltip" data-placement="right" title="Klik tombol ini untuk mencetak hasil diagnosa"><i class="fas fa-print fa-sm text-white-50"></i> Print</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header">
                                <h4 class="mb-0 text-gray-800">Data Pengguna</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped">
                                    <?php foreach ($pasien as $item) { ?>
                                        <tr>
                                            <th>Nama:</th>
                                            <td><?= $item['nama'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Umur:</th>
                                            <td><?= $item['umur'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>No. HP:</th>
                                            <td><?= $item['no_hp'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Nama Kelinci:</th>
                                            <td><?= $item['nama_kelinci'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Alamat:</th>
                                            <td><?= $item['alamat'] ?></td>
                                        </tr>
                                        <tr>
                                            <th>Tanggal Diagnosa:</th>
                                            <td><?= date('H:i - d-m-Y', strtotime($tanggal)) ?></td>
                                        </tr>
                                    <?php } ?>
                                </table>
                                <!-- 
                            <?php foreach ($pasien as $item) { ?>
                                <div class="row">
                                    <div class="col-4">
                                        <label for="nama">Nama :</label><br>
                                        <input type="text" class="form-control bg-light mb-3" value="<?= $item['nama'] ?>" disabled>
                                        <label for="jk">Jenis Kelamin :</label>
                                        <input type="text" class="form-control bg-light mb-2" value="<?= $item['jenis_kelamin'] ?>" disabled>
                                    </div>
                                    <div class="col-4">
                                        <label for="umur">Umur :</label><br>
                                        <input type="text" class="form-control bg-light mb-3" value="<?= $item['umur'] ?>" disabled>
                                        <label for="ortu">Nama Orang Tua :</label>
                                        <input type="text" class="form-control bg-light mb-2" value="<?= $item['nama_orangtua'] ?>" disabled>
                                    </div>
                                    <div class="col-4">
                                        <label for="alamat">Alamat :</label><br>
                                        <input type="text" class="form-control bg-light mb-3" value="<?= $item['alamat'] ?>" disabled>
                                        <label for="tgl">Tanggal Diagnosa :</label>
                                        <input type="text" class="form-control bg-light mb-2" value="<?= $tanggal ?>" disabled>
                                    </div>
                                </div>
                            <?php } ?> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header">
                                <h4 class="mb-0 text-gray-800">Gejala yang di alami Pengguna</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered table-striped diagnosa">
                                    <tr>
                                        <th width="8%">No</th>
                                        <th width="10%">Kode</th>
                                        <th>Gejala yang dialami (keluhan)</th>
                                        <th width="20%">Pilihan</th>
                                    </tr>
                                    <?php
                                    $ig = 0;
                                    foreach ($argejala as $key => $value) {
                                        $kondisi = $value;
                                        $ig++;
                                        $gejala = $key;
                                        $r4 = $this->db->where('id_gejala', $key)->get('gejala')->row_array();
                                        echo '<tr><td>' . $ig . '</td>';
                                        echo '<td>' . str_pad($r4['kode_gejala'], 3, '0', STR_PAD_LEFT) . '</td>';
                                        echo '<td><span class="hasil text text-primary">' . $r4['nama_gejala'] . "</span></td>";
                                        echo '<td><span class="kondisipilih">' . $arkondisitext[$kondisi] . "</span></td></tr>";
                                    }

                                    // $np = 0;
                                    // foreach ($arpenyakit as $key => $value) {
                                    //     $np++;
                                    //     $idpkt[$np] = $key;
                                    //     $nmpkt[$np] = $arpkt[$key];
                                    //     $vlpkt[$np] = $value;
                                    // }
                                    // if ($arpkt[$idpkt[1]]) {
                                    //     $gambar = 'gambar/penyakit/' . $argpkt[$idpkt[1]];
                                    // } else {
                                    //     $gambar = 'gambar/noimage.png';
                                    // }
                                    ?>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card shadow-sm mb-3 text-center">
                    <!-- <img class="card-img-top img-bordered-sm" style="float:right; margin-left:15px;" src="<?php echo base_url($argpkt[$idpkt1[1]]); ?>" height="200"> -->
                    <div class="card-header bg-primary">
                        <h4 class="mb-0 text-white">Hasil Diagnosa</h4>
                    </div>
                    <div class="card-body">
                        <h5>Jenis penyakit yang disebabkan oleh gejala tersebut adalah : </h5>
                        <?php
                        $key = 0;
                        foreach ($arpenyakit as $key => $value) {
                            $idpkt1[1] = $key;
                            $vlpkt1[1] = $value;
                        ?>
                            <b>
                                <h4 class="text text-success">
                                    <?php
                                    if ($arpkt[$idpkt1[1]] == NULL) {
                                        echo 0;
                                    } else {
                                        echo $arpkt[$idpkt1[1]];
                                    }
                                    ?>

                            </b> / <?php echo $vlpkt1[1] * 100; ?> % (<?php echo round($vlpkt1[1], 3); ?>)<br></h4>
                            <h5><?= nl2br($this->db->get_where('penyakit', ['nama_penyakit' => $arpkt[$idpkt1[1]]])->row('deskripsi')); ?></h5>
                        <?php if ($key++ > 0) break;
                        } ?>

                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header">
                                <h4 class="mb-0 text-gray-800">Solusi</h4>
                            </div>
                            <div class="card-body">
                                <?php
                                $key = 0;
                                foreach ($arpenyakit as $key => $value) {
                                    $idpkt1[1] = $key;
                                ?>
                                    <h4><?php echo nl2br($arspkt[$idpkt1[1]]); ?></h4>

                                <?php if ($key++ > 1) break;
                                } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card shadow-sm mb-3">
                            <div class="card-header">
                                <h4 class="mb-0 text-gray-800">Kemungkinan lain</h4>
                            </div>
                            <div class="card-body">
                                <?php
                                $i = 0;
                                foreach ($arpenyakit as $key => $value) {
                                    // var_dump($i);
                                    if ($i++ > 0) {
                                        $idpkt[1] = $key;
                                        $vlpkt[1] = $value;
                                ?>
                                        <b>
                                            <h4 class="text text-info"> -
                                                <?php
                                                if ($arpkt[$idpkt[1]] == NULL) {
                                                    echo 0;
                                                } else {
                                                    echo $arpkt[$idpkt[1]];
                                                }
                                                ?>

                                        </b> / <?php echo $vlpkt[1] * 100; ?> % (<?php echo round($vlpkt[1], 3); ?>)<br></h4>
                                <?php if ($i++ > 5) break;
                                    }
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row d-print-none">
                    <div class="col d-flex justify-content-center gap-3">
                        <a href="<?= base_url() ?>home" class="btn btn-success"><i class="bi bi-house" style="font-size: 1rem;""></i> Halaman Utama</a>
                        <a href=" <?= base_url() ?>home/diagnosa" class="btn btn-secondary"><i class="bi bi-arrow-repeat" style="font-size: 1rem;""></i> Diagnosa Ulang</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id=" footer">
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
</body>