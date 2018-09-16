<?php 
	require_once 'header.php';
	require_once 'supplier.php';
	if(isset($_POST['submit']))
	{
		$tambah = new Supplier();

		$nama_sup = $_POST['nama_sup'];
		$kontak = $_POST['kontak'];

		$tambah->tambahSupplier($nama_sup, $kontak);
		header("Location:index.php");
	}
	 ?>

<form action="tambah.php" method="post" class="form-group">
	<strong>Nama Supplier</strong>
	<input type="text" name="nama_sup" placeholder="Nama Supplier" class="form-control">
	<div>&nbsp;</div>
	<strong>Kontak Perusahaan</strong>
	<input type="text" name="kontak" placeholder="Kontak Perusahaan" class="form-control">
	<div>&nbsp;</div>
	<button type="submit" name="submit" class="btn btn-success" style="padding:5px 30px;font-size:17px"><i class="fa fa-plus"> Tambah</i></button>
</form>