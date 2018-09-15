	<?php 
		require_once 'header.php';
		require_once 'barang.php';

		$kode_barang = $_GET['kode_barang'];
		$ubah = new Barang();
		$satuBarang = $ubah->cariSatuBarang($kode_barang);
	?>
	<a class="btn btn-success" href="update.php?kode_barang=<?= $satuBarang['kode_barang']; ?>">Ubah</a>
	<a class="btn btn-warning" href="hapus.php?kode_barang=<?= $satuBarang['kode_barang']; ?>">Hapus</a>
	<div>&nbsp;</div>
	<table class="table table-striped">
		<tr>
			<th width="19%">Kode Barang</th>
			<td width="1%"> : </td>
			<td><?= $satuBarang['kode_barang']; ?></td>
		</tr>
		<tr>
			<th>Nama Barang</th>
			<td> : </td>
			<td><?= $satuBarang['nama_barang']; ?></td>
		</tr>
		<tr>
			<th>Harga</th>
			<td> : </td>
			<td><?= $satuBarang['harga']; ?></td>
		</tr>
		<tr>
			<th>Stok Barang</th>
			<td> : </td>
			<td><?= $satuBarang['stok']; ?></td>
		</tr>

	</table>
	
	