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
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
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

            <!--Section: Cards-->
            <section class="pt-4">

                <!-- Heading & Description -->
                <div class="wow fadeIn">
                    <!--Section heading-->
                    <h3 class="text-center mb-5">HUBUNGI KAMI</h3>
                </div>
                <hr class="mb-5">

                <br>

                <div class="row mt-3 wow fadeIn">
                <!--Grid column-->
                <div class="col-lg-5 col-xl-4 mb-4">
                    <!--Featured image-->
                    <div class="view overlay rounded z-depth-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.9502177888335!2d109.6760193143671!3d-6.8965580694050646!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7024321f4ddfcd%3A0x2f5e37fb128178d0!2sSDN%20KEPUTRAN%2006%20PEKALONGAN!5e0!3m2!1sid!2sid!4v1595303947308!5m2!1sid!2sid" width="450" height="450" frameborder="1" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-lg-7 col-xl-7 ml-xl-4 mb-4">
                    <div class="card text-white bg-primary mb-3" style="max-width: 20rem;">
                    <div class="card-header">ALAMAT</div>
                    <div class="card-body">
                        <h5 class="card-title">Jl. Ra. Kartini, Keputran, Kec. Pekalongan Tim., Kota Pekalongan</h5>
                        <p class="card-text text-white">Jawa Tengah 51128</p>
                    </div>
                    </div>

                    <div class="card text-white bg-success mb-3" style="max-width: 20rem;">
                    <div class="card-header">Telephone/Email</div>
                    <div class="card-body">
                        <h5 class="card-title">(0285)428336</h5>
                        <p class="card-text text-white">06keputranpekalongan@gmail.com</p>
                    </div>
                    </div>
                </div>
                <!--Grid column-->
                
          </div>
            </section>
        </div>
        
    </main>
    <!--Main layout-->
    <br><br><br><br>
    <!--Footer-->
  <?php
  include('footer.php');
  ?>
</body>

</html>