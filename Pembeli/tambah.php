<?php 
	require_once 'header.php';
	?>
	<h2>Tambah Daftar Pembeli</h2>
	<div>&nbsp;</div>
	<form action="tambah.php" method="post" class="form-group">
		<strong>Nama Pembeli</strong>
		<input type="text" name="nama_cus" placeholder="Nama Pembeli" class="form-control" required>
		<div>&nbsp;</div>
		<strong>Alamat Pembeli</strong>
		<input type="text" name="alamat" placeholder="Alamat Pembeli" class="form-control" required>
		<div>&nbsp;</div>
		<strong>No. Telepon</strong>
		<input type="contact" name="no_tlp" placeholder="No.Telepon" class="form-control" required>
		<div>&nbsp;</div>	
		<button type="submit" name="submit" class="btn btn-success" style="padding:5px 30px;font-size:17px"><i class="fa fa-plus"> Tambah</i></button>
	</form>
	<?php require_once 'pembeli.php'; 
	if(isset($_POST['submit'])){
		$pembeli = new Pembeli();
		
		$nama_cus = $_POST['nama_cus'];
		$alamat = $_POST['alamat'];
		$no_tlp = $_POST['no_tlp'];


		$pembeli->tambahPembeli($nama_cus, $alamat, $no_tlp);
		header("Location: index.php");
	} ?>


<?php require_once 'footer.php';
?>