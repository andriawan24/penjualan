<!DOCTYPE html>
<html>
<head>
	<title>Ubah Barang</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<?php 
	require_once 'barang.php';

	$kode_barang = $_GET['kode_barang'];
	$ubah = new Barang();
	$satuBarang = $ubah->cariSatuBarang($kode_barang);
	if(isset($_POST['submit'])){
		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$stok = $_POST['stok'];

		$ubah->ubahBarang($nama_barang, $harga, $stok, $kode_barang);
		header("Location: index.php");
	} 
	?>
	<div class="container" style="margin-top:10px;">
	<h2>Ubah Data Barang</h2></div><hr />
	<div class="container">
	<form action="update.php" method="post" class="form-group row">
	<input type="text" name="nama_barang" value="<?= $satuBarang['nama_barang']; ?>" class="form-control" style="padding:15px;margin-bottom:10px"><br>
	<input type="text" name="harga" value="<?= $satuBarang['harga']; ?>" class="form-control" style="padding:15px;margin-bottom:10px"><br>
	<input type="text" name="stok" value="<?= $satuBarang['stok']; ?>" class="form-control" style="padding:15px;margin-bottom:10px">
	<input type="submit" name="submit" class="btn btn-success"><br>
	</form>
	</div>
</body>
</html>
