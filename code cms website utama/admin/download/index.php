<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Download</title>

   <!--Script CSS-->
  <link type="text/css" href='https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/responsive/2.2.1/css/responsive.dataTables.min.css' rel='stylesheet'>
  <link type="text/css" href='https://cdn.datatables.net/buttons/1.5.1/css/buttons.dataTables.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
  <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">

</head>
<body>
   <!-- navbar start -->
   <?php
   require_once '../cek_session.php';
   $base_url = "https://sdnkeputran06.sch.id/" 
   ?>
   <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container">
         <ul class="navbar-nav">
            <li class="nav-item">
               <a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= $base_url ?>admin/index.php">Dashboard</a>
            </li>
            <li class="nav-item">
               <a class="nav-link <?= $active == 'download' ? 'active' : '' ?> " href="<?= $base_url ?>admin/download/index.php">Download</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="<?= $base_url ?>admin/logout.php" onclick="return confirm('apakah anda yakin?')">Logout</a>
            </li>
         </ul>
      </div>
   </nav>
   <!-- navbar end -->

   <div class="container mt-3">
      <div class="row">
         <div class="col">
            <div class="card shadow">
               <div class="card-header">
                  <div class="clearfix">
                     <div class="float-left">
                     Download
                     </div>
                     
                  </div>
               </div>
               <div class="card-body">
               
                  <!-- This Content -->
                  <form enctype="multipart/form-data" action="upload.php" method="POST">
                     Pilih File: <input name="userfile" type="file" />
                     <input type="hidden" name="MAX_FILE_SIZE" value="10000000000" /> <!-- Ukuran Max 1 GB -->
                     <input type="submit" value="Upload" />
                  </form>
                  
                  <table id="table_id" class="dataTable table table-bordered" width="100%">
                     <thead>
                        <tr>  
                           <th>File Name</th>
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
                                    echo "<p><a href='hapus.php?id=".$data['id']."'><button>Delete</button></a> &nbsp <a href='download.php?id=".$data['id']."'>".$data['name']."</a> (".$data['size']." bytes) </p>";
                                 }
                              ?>
                           </td>
                        </tr>
                     </tbody>
                  </table>

               </div>
            </div>
         </div>
      </div>
   </div>

   



<!--Script Javascript-->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.5.1/js/buttons.colVis.min.js"></script>
<script>
$(document).ready(function() {
  $('#example').DataTable( {
    dom: 'Bfrtip',
    buttons: [
    'colvis'
    ]
  } );
} );
</script>
</body>
</html>