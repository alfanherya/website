<?php
require("koneksi.php");
$perintah = "SELECT * FROM tb_datalogin";
$eksekusi = mysqli_query($konek, $perintah);
$cek = mysqli_affected_rows($konek);

if($cek > 0){
    $response["kode"] = 1;
    $response["pesan"] = "Data Tersedia";
    //$response["data"] = array();
    $ambil = mysqli_fetch_object($eksekusi);
    $response["id"] = $ambil-> id;
    $response["username"] = $ambil-> username;
    $response["password"] = $ambil-> password;
    $response["sekolah"] = $ambil-> sekolah;

    // while ($ambil = mysqli_fetch_object($eksekusi)) {
    //     $F["id"] = $ambil-> id;
    //     $F["nama"] = $ambil-> nama;
    //     $F["password"] = $ambil-> password;
    //     $F["sekolah"] = $ambil-> sekolah;

    //     array_push($response["data"], $F);
    // }
    // $ambil = mysqli_fetch_object($eksekusi){
    //     $F["id"] = $ambil-> id;
    //     $F["nama"] = $ambil-> nama;
    //     $F["password"] = $ambil-> password;
    //     $F["sekolah"] = $ambil-> sekolah;
    // }
}
else {
    $response["kode"] = 0;
    $response["pesan"] = "Data Tidak Tersedia";
}
echo json_encode($response);
mysqli_close($konek);
?>