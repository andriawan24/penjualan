<?php require_once 'header.php'; ?>
	<div class="container"">
	<h2>Tambah Barang</h2>
	<div>&nbsp;</div>
	<form action="tambah.php" method="post" class="form-group">
		<div>
		<strong>Nama Barang</strong>
		<input type="text" name="nama_barang" placeholder="Nama Barang" class="form-control">
			
		</div>
		<div>&nbsp;</div>
		<div>
			<strong>Harga Barang</strong>
			<input type="number" name="harga" placeholder="Harga Barang" class="form-control">
		</div>
		<div>&nbsp;</div>

		<div>
			<strong>Jumlah Stok Barang</strong>
			<input type="number" name="stok" placeholder="Jumlah Stok Barang" class="form-control">
		</div>
		<div>&nbsp;</div>
		<input type="submit" name="submit" value=" Simpan Data" class="btn btn-success">
		
	</form>


	<?php 
	require_once 'barang.php';

	if(isset($_POST['submit'])){
		
		$tambah = new Barang();

		$nama_barang = $_POST['nama_barang'];
		$harga = $_POST['harga'];
		$stok = $_POST['stok'];

		$tambah->tambahBarang($nama_barang, $harga, $stok);
		header('Location: index.php');
	}
	 ?>
</body>
</html>