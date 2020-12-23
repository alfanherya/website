<?php
 
    mysql_connect('localhost','u1118670_sekolahku','u1118670_sekolahku');
    mysql_select_db('u1118670_sekolahku');
 
    // membaca id file yang akan dihapus
    $id      = $_GET['id'];
 
    // membaca nama file yang akan dihapus berdasarkan id
    $query   = "SELECT * FROM upload WHERE id = '$id'";
    $hasil   = mysql_query($query);
    $data    = mysql_fetch_array($hasil);
    $namaFile = $data['name'];
 
    // query untuk menghapus informasi file berdasarkan id
    $query = "DELETE FROM upload WHERE id = $id";
    mysql_query($query);
  
    // menghapus file dalam folder sesuai namanya   
    unlink("data/".$namaFile);
    echo "File telah dihapus";
    header('Location: index.php');
 
?>