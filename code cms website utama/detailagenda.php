<?php 
require_once 'koneksi.php';

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: Agenda.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT id, judul, isi, tgla, tmpt, wkt, foto FROM tbl_agenda WHERE id = $id");

$row = mysqli_fetch_assoc($query);
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
            <strong>AGENDA PUTNAM</strong>
          </a>

        </div>
        <!-- Content -->
      </section>
      <!--Section: Jumbotron-->
	  
	  <br>
    <table class="table table-stripped">
              <tr>
								<td><b>Foto</b></td>
								<td>:</td>
								<td><img src="images/agenda/<?= $row['foto'] ?>" alt="<?= $row['judul'] ?>" width="50%" class="img-thumbnail"></td>
							</tr>
							<tr>
								<td><b>Judul</b></td>
								<td>:</td>
								<td><?= $row['judul'] ?></td>
							</tr>
							<tr>
								<td><b>Isi</b></td>
								<td>:</td>
								<td><?= $row['isi'] ?></td>
							</tr>
							
							<tr>
								<td><b>Tanggal, Tempat</b></td>
								<td>:</td>
								<td><?= $row['tgla'] ?> , <?= $row['tmpt'] ?></td>
							</tr>
              <tr>
								<td><b>Waktu</b></td>
								<td>:</td>
								<td><?= $row['wkt'] ?></td>
							</tr>
							<tr>
								<td><b></td>
								<td></td>
								<td>
									<a href="Agenda.php" class="btn btn-secondary btn-sm">Kembali</a>
								</td>
							</tr>
						</table>
	
    <hr class="mb-5">
  </main>
  <!--Main layout-->

  <!--Footer-->
  <?php
  include('footer.php');
  ?>
</body>

</html>
