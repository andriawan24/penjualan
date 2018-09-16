<?php 
	require_once 'header.php';
	require_once 'supplier.php';

	$kode_sup = $_GET['kode_sup'];
	$cariSatu = new Supplier();
	$detail = $cariSatu->cariSatuSup($kode_sup);
?>
<a class="btn btn-success" href="edit.php?kode_sup=<?= $detail['kode_sup']; ?>">Ubah</a>
<a class="btn btn-warning" href="hapus.php?kode_sup=<?= $detail['kode_sup']; ?>">Hapus</a>
<div>&nbsp;</div>
<table 	class="table table-striped">
	<tr>
		<th>Kode Supplier</th>
		<td> : </td>
		<td><?= $detail['kode_sup'] ?></td>
	</tr>
	<tr>
		<th width="19%">Nama Supplier</th>
		<td width="1%"> : </td>
		<td><?= $detail['nama_sup']; ?></td>
	</tr>
	<tr>
		<th>Kontak Supplier</th>
		<td> : </td>
		<td><?= $detail['kontak']; ?></td>
	</tr>
</table>