<?php 

if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['id'];
$query_kategori = mysqli_query($koneksi, "SELECT * FROM tbl_kategori_berita");
$query_berita = mysqli_query($koneksi, "SELECT * FROM tbl_berita WHERE id = $id");
$berita = mysqli_fetch_assoc($query_berita);

$active = 'berita'; 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Berita</title>
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							<div class="float-left">
								Ubah Berita
							</div>
							<div class="float-right">
								<a href="index.php">Kembali</a>
							</div>
						</div>
					</div>
					<div class="card-body">
						<form method="POST" action="proses_ubah.php?id=<?= $berita['id'] ?>" enctype="multipart/form-data">
							<div class="form-group">
								<label for="judul">Judul</label>
								<input type="text" value="<?= $berita['judul'] ?>" class="form-control" id="judul" placeholder="judul berita" autocomplete="off" required="required" name="judul">
							</div>
							<div class="form-group">
								<label for="tgla">Tanggal</label>
								<input type="text" value="<?= $berita['tgla'] ?>" class="form-control" id="tgla" placeholder="judul berita" autocomplete="off" required="required" name="tgla">
							</div>
							<div class="form-group">
								<label for="id_kategori">Kategori berita</label>
								<select name="id_kategori" id="id_kategori" class="form-control">
									<?php while($kategori = mysqli_fetch_assoc($query_kategori)) : ?>
										<option value="<?= $kategori['id'] ?>" <?= $berita['id_kategori'] == $kategori['id'] ? 'selected' : '' ?> ><?= $kategori['nama_kategori'] ?></option>
									<?php endwhile; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="penulis">Penulis</label>
								<input type="text" value="<?= $berita['penulis'] ?>" class="form-control" id="penulis" placeholder="Penulis" autocomplete="off" required="required" name="penulis">
							</div>
							<div class="form-group">
								<label for="foto">Foto</label>
								<input type="file" class="form-control-file mb-2" id="foto" placeholder="foto berita" autocomplete="off" name="foto">
								*gambar sebelumnya <br>
								<img src="../../images/berita/<?= $berita['foto'] ?>" alt="<?= $row['judul'] ?>" width="500px" class="mt-2">
							</div>
							<div class="form-group">
								<label for="isi">Isi</label>
								<textarea name="isi" id="ckeditor" class="ckeditor form-control">
									<?= $berita['isi'] ?>
								</textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-sm btn-primary" name="ubah">Ubah</button>
								<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
								<a href="index.php" class="btn btn-sm btn-secondary">Kembali</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/ckeditor/ckeditor.js"></script>
</body>
</html>