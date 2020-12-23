<?php 
require_once 'koneksi.php';

$query = mysqli_query($koneksi, "SELECT id, judul, isi, tgla, penulis, foto FROM tbl_berita");
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
            <strong>BERITA PUTNAM</strong>
          </a>

        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->

      <section class="pt-4">
          <br><br>
          <!-- Heading & Description -->
          <div class="wow fadeIn">
              <!--Section heading-->
              <h3 class="text-center mb-5">BERITA</h3>
          </div>

          <hr class="mb-5">

          <!--Grid row-->
          <div class="row">
            <?php while($row = mysqli_fetch_assoc($query)) : ?>
            <div class="col-lg-4 col-md-12 mb-4">

              <!--Card-->
              <div class="card card-cascade wider mb-4">

                <!--Card image-->
                <div class="view view-cascade">
                  <img src="images/berita/<?= $row['foto'] ?>" class="card-img-top">
                  <a href="#!">
                    <div class="mask rgba-white-slight"></div>
                  </a>
                </div>
                <!--/Card image-->

                <!--Card content-->
                <div class="card-body card-body-cascade text-left">
                  <!--Title-->
                  <h5 class="card-title"><?= $row['judul'] ?></h5>
                  <!--Text-->
                  <p class="card-text"><i class="far fa-calendar-alt"></i>&nbsp;<?= $row['tgla'] ?></p>
                  <p class="card-text"><i class="fas fa-user-edit"></i>&nbsp;<?= $row['penulis'] ?></p>

                  <a href="detailberita.php?id=<?= $row['id'] ?>" class="btn btn-outline-default btn-rounded waves-effect"><i class="far fa-gem mr-2" aria-hidden="true"></i>KUNJUNGI</a>
                </div>
                <!--/.Card content-->
              
              </div>
              <!--/.Card-->

            </div>
            <?php endwhile; ?>
          </div>
          <!--Grid row-->

          <hr class="mb-5">

      </section>
    </div>
    
  </main>
  <!--Main layout-->

  <!--Footer-->
  <?php
  include('footer.php');
  ?>
</body>

</html>
