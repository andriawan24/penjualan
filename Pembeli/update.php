
	<?php 
	require_once 'header.php';
	require_once 'pembeli.php';
	 
		$kode_cus = $_GET['kode_cus'];
		$ubah = new Pembeli();
		$cariSatu = $ubah->lihatSatuPembeli($kode_cus);

		if(isset($_POST['submit'])){
			$nama_cus = $_POST['nama_cus'];
			$alamat = $_POST['alamat'];
			$no_tlp = $_POST['no_tlp'];

			$ubah->ubahDataPembeli($nama_cus, $alamat, $no_tlp, $kode_cus);
			header("Location: index.php");
		}
	 ?>
	<h2>Ubah Data Pembeli</h2>
	<div>&nbsp;</div>
	<form action="update.php" method="post" class="form-group">
		<input type="text" name="nama_cus" placeholder="Nama Customer" value="<?= $cariSatu['nama_cus'];?>" class="form-control">
		<div>&nbsp;</div>
		<input type="text" name="alamat" class="form-control" value="<?= $cariSatu['alamat']; ?>">
		<div>&nbsp;</div>
		<input type="text" name="no_tlp" class="form-control" value="<?= $cariSatu['no_tlp']; ?>">
		<div>&nbsp;</div>
		<button type="submit" name="submit" class="btn btn-success" style="padding:5px 20px; font-size:17px;"><i class="fa fa-archive"></i> Simpan</button>
	</form>
</body>
</html>