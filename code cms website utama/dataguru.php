<?php 
require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT id, nama, j_kelamin, t_lahir, tgl_lahir, s_pegawai, nip, pendidikan, univ, alamat, email, telp, foto FROM tbl_guru");
$no = 1;

$active = 'master';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('header.php');
  ?>
</head>

<body>

  <!--Main Navigation-->
  <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand waves-effect" href="index.php">
        <img src="assets/mp4/1sedang.png" alt="">
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Right -->
        <ul class="navbar-nav nav-flex-icons mr-auto">
          <li class="nav-item">
            <a href="index.php" class="nav-link"> <strong> SDN KEPUTRAN 06 PEKALONGAN </strong>
            </a>
          </li>
        </ul>

        <!-- Left -->
        <ul class="navbar-nav ml-auto">
          <!-- Dropdown PROFIL-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">PROFIL</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="sambutan.php">SAMBUTAN KEPALA SEKOLAH</a>
              <a class="dropdown-item" href="sejarah.php">SEJARAH</a>
              <a class="dropdown-item" href="VisiMisi.php">VISI - MISI</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="dataguru.php">DATA PENDIDIK</a>
          </li>
          <!-- Dropdown INFORMASI-->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">INFORMASI</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="Agenda.php">AGENDA</a>
              <a class="dropdown-item" href="Pengumuman.php">PENGUMUMAN</a>
              <a class="dropdown-item" href="https://corona.pekalongankota.go.id/" target="_blank">COVID 19</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="berita.php">BERITA</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="artikel.php">ARTIKEL</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="download.php">DOWNLOAD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="hubungi.php">HUBUNGI KAMI</a>
          </li>
        </ul>

      </div>

      </div>
    </nav>
    <!-- Navbar -->

  </header>
  <!--Main Navigation-->

  <!--Main layout-->
  <main class="mt-5 pt-5">
    <div class="container">

      <!--Section: Jumbotron-->
      <section class="card blue-gradient wow fadeIn">

        <!-- Content -->
        <div class="card-body text-white text-center py-5 px-5 my-5"style="background-image: url(assets/mp4/gif.gif); background-size:auto;">
          <img src="assets/mp4/2extrabig.png" class="animated bounce infinite" alt="Transparent MDB Logo" id="animated-img1" width="30%">
          <h1 class="mb-4">
            <strong>DATA PENDIDIK</strong>
          </a>

        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <br><br>

      <div class="row">

          <!-- Conten Hapus -->
          <?php while($row = mysqli_fetch_assoc($query)) : ?>
          <div class="col-lg-3 col-md-12 mb-4">

              <!--Card-->
              <div class="card card-cascade wider mb-4">

              <!--Card image-->
              <div class="view view-cascade overlay">
                  <div class="avatar mx-auto" align="center">
                      <img src="images/guru/<?= $row['foto'] ?>" class="card-img-top rounded-square img-fluid" alt="Card image cap" style="width:350px; height:450px;">
                      <a href="#!">
                        <div class="mask rgba-white-slight"></div>
                      </a>
                  </div>
              </div>
              <!--/Card image-->

              <!--Card content-->
              <div class="card card-body card-body-cascade text-center" style="background-image: url(assets/mp4/love.gif); background-size:auto;">
                  <!--Title-->
                  <a href="#">
                    <h6 class="font-weight-bold white-text mt-4"><?= $row['nama'] ?></h6>
                  </a>
                  <h6 class="font-weight-bold blue-text my-3"><?= $row['pendidikan'] ?></h6>
                  <a href="detailguru.php?id=<?= $row['id'] ?>" class="btn blue-gradient"><i class="fas fa-star pr-2" aria-hidden="true"></i>KUNJUNGI</a>
              </div>
              <!--/.Card content-->
              
              </div>
              <!--/.Card-->

          </div>
          <?php endwhile; ?>
      </div>

      <!-- content hapus -->
      

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <?php
  include('footer.php');
  ?>
</body>

</html>
