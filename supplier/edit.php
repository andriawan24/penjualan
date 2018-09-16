
<?php 
require_once 'header.php';	
require_once 'supplier.php';

$kode_sup = $_GET['kode_sup'];
$ubah = new Supplier();
$cariSatu = $ubah->cariSatuSup($kode_sup);

if(isset($_POST['submit']))
{
	$nama_sup = $_POST['nama_sup'];
	$kontak = $_POST['kontak'];

	$ubah->editSupplier($nama_sup, $kontak, $kode_sup);
	header("Location:index.php");
}
 ?>
<h2>Ubah Data Supplier</h2>
<form action="edit.php?kode_sup=<?= $_GET['kode_sup'] ?>" method="post" class="form-group">
	<input type="text" name="nama_sup" class="form-control" value="<?= $cariSatu['nama_sup'] ?>">
	<div>&nbsp;</div>
	<input type="text" name="kontak" class="form-control" value="<?= $cariSatu['kontak'] ?>">
	<div>&nbsp;</div>
	<button type="submit" class="btn btn-primary" style="width:100px" name="submit">Ubah</button>
</form>

