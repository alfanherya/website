<?php
if (count($_FILES) > 0) {
    if (is_uploaded_file($_FILES['gambar']['tmp_name'])) {
        $koneksi = mysqli_connect("localhost", "root", "", "db_belajar");
        $datagambar = addslashes(file_get_contents($_FILES['gambar']['tmp_name']));
        $propertiesgambar = getimageSize($_FILES['gambar']['tmp_name']);

        $sql = "INSERT INTO tb_images(tipeimage ,dataimage) VALUES('" . $propertiesgambar['mime'] . "', '" . $datagambar . "')";
        mysqli_query($koneksi, $sql) or die("&lt;b>Error:&lt;/b> Ada kesalahan&lt;br/>" . mysqli_error($koneksi));

        $lastrecord = "SELECT id FROM tb_images ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($koneksi, $lastrecord) or die("&lt;b>Error:&lt;/b> Ada kesalahan&lt;br/>" . mysqli_error($koneksi));
        $getid = mysqli_fetch_array($result);
        if (isset($getid["id"])) {
            $notif = 'Gambar berhasil di simpan, silakan lihat di &lt;a target="_blank" href="view.php?id=' . $getid["id"] . '">sini&lt;/a>';
        }
    }
}
?>
&lt;html>
    &lt;head>
        &lt;title>Menyimpan Gambar Di MySQL&lt;/title>
        &lt;meta charset="UTF-8">
        &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
    &lt;/head>
    &lt;body>
        &lt;?php
        if (isset($notif)) {
            echo $notif;
        }
        ?>
        &lt;form name="formupload" enctype="multipart/form-data" action="" method="post">
            &lt;label>Upload Gambar:&lt;/label>&lt;br />
            &lt;input name="gambar" type="file" />
            &lt;input type="submit" value="Submit" />
        &lt;/form>
    &lt;/body>
&lt;/html>