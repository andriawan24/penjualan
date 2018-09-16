	<?php 
	require_once 'header.php';
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
		<h2>Ubah Data Barang</h2>
	</div>
	<hr />
	<div class="container">
	<form action="update.php?kode_barang=<?=$satuBarang['kode_barang'] ?>" method="post" class="form-group row">
		<input type="text" name="nama_barang" value="<?= $satuBarang['nama_barang']; ?>" class="form-control" style="padding:15px;margin-bottom:10px"><br>
		<input type="number" name="harga" value="<?= $satuBarang['harga']; ?>" class="form-control" style="padding:15px;margin-bottom:10px"><br>
		<input type="number" name="stok" value="<?= $satuBarang['stok']; ?>" class="form-control" style="padding:15px;margin-bottom:10px">
		<input type="submit" name="submit" class="btn btn-success"><br>
	</form>
	</div>
