<?php 
	require_once 'header.php';
	require_once 'pembeli.php';

	$kode_cus = $_GET['kode_cus'];
	$detail = new Pembeli();
	$cariSatuCus = $detail->lihatSatuPembeli($kode_cus);
?>
<a class="btn btn-success" href="update.php?kode_cus=<?= $cariSatuCus['kode_cus'];?>">Ubah</a>
<a class="btn btn-danger" href="hapus.php?kode_cus=<?= $cariSatuCus['kode_cus']?>">Hapus</a>
<div>&nbsp;</div>
<table class="table table-striped">
	<tr>
		<th width="19%">Kode Customer</th>
		<td> : </td>
		<td><?= $cariSatuCus['kode_cus']; ?></td>
	</tr>
	<tr>
		<th>Alamat</th>
		<td> : </td>
		<td><?= $cariSatuCus['alamat']; ?></td>
	</tr>
	<tr>
		<th>No. Telepon</th>
		<td> : </td>
		<td><?= $cariSatuCus['no_tlp']; ?></td>
	</tr>
</table>