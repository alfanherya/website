-<!DOCTYPE html>
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
                    <h3 class="text-center mb-5">DOWNLOAD</h3>
                </div>
                <!-- Heading & Description -->

                <!--Grid row-->
                <div class="row wow fadeIn">
                
                <!-- Content Here -->
                <table class="table">
                    <thead class="black white-text" align="center">
                    <tr>
                        <th scope="col">DOWNLOAD FILE</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>
                        <?php
                             mysql_connect('localhost','u1118670_sekolahku','u1118670_sekolahku');
                             mysql_select_db('u1118670_sekolahku');
                            
                            $query  = "SELECT * FROM upload";
                            $hasil  = mysql_query($query);

                            
                            while($data = mysql_fetch_array($hasil))
                            {
                              echo "<h5><a href='admin/download/download.php?id=".$data['id']."'>".$data['name']."</a> (".$data['size']." Byte)</h5>";
                            }
                        ?>
                      </td>
                      
                    </tr>
                    </tbody>
                </table>

                </div>
                <!--Grid row-->

                <hr class="mb-5">
                <br>
            </section>
            <!--Section: Cards-->

        </div>
    </main>
    <!--Main layout-->
    <br><br><br><br><br><br>
    <!--Footer-->
  <?php
  include('footer.php');
  ?>
</body>

</html>