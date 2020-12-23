<?php
 
// setting nama folder tempat upload
$uploaddir = 'data/';
 
// membaca nama file yang diupload
$fileName = $_FILES['userfile']['name'];     
 
// nama file temporary yang akan disimpan di server
$tmpName  = $_FILES['userfile']['tmp_name']; 
 
// membaca ukuran file yang diupload
$fileSize = $_FILES['userfile']['size'];
 
// membaca jenis file yang diupload
$fileType = $_FILES['userfile']['type'];
 
// koneksi ke mysql
mysql_connect('localhost','u1118670_sekolahku','u1118670_sekolahku');
mysql_select_db('u1118670_sekolahku');
 
// menyimpan properti atau informasi file ke tabel upload dalam db
// dengan terlebih dahulu mengecek ada tidaknya nama file dalam tabel
 
$query = "SELECT count(*) as jum FROM upload WHERE name = '$fileName'";
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
 
if ($data['jum'] > 0)
{
   $query = "UPDATE upload SET size = '$fileSize' WHERE name = '$fileName'";
}
else $query = "INSERT INTO upload (name, size, type) VALUES ('$fileName', '$fileSize', '$fileType')";
 
mysql_query($query);
 
// menggabungkan nama folder dan nama file
$uploadfile = $uploaddir . $fileName;
 
// proses upload file ke folder 'data'
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File telah diupload";
    header('Location: index.php');
} else {
    echo "File gagal diupload";
    header('Location: index.php');
}
 
?> 