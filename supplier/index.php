<?php 
require_once 'header.php'; 
?>
<h2>Daftar Supplier</h2>
<div>&nbsp;</div>
<a href="tambah.php" class="btn btn-primary" style="padding:5px 30px;font-size:17px"><i class="fa fa-plus"></i>	</a>
<div>&nbsp;</div>
<table class="table table-hover">
	<tr>
		<thead>
			<th style="background-color:#efefef;text-align:center;" width="7%">Kode Supplier</th>
			<th style="background-color:#efefef;text-align:center;">Nama Supplier</th>
			<th style="background-color:#efefef;text-align:center;">Kontak</th>
			<th style="background-color:#efefef;"></th>
		</thead>
	</tr>
	<?php require_once 'supplier.php';
	$supplier = new Supplier();
	$i = 1; 
	foreach($supplier->daftarSupplier() as $data) : ?>
	<tr>
		<td class="text-center"><?php echo $i++; ?></td>
		<td class="text-center"><?php echo $data['nama_sup']; ?></td>
		<td class="text-center"><?php echo $data['kontak']; ?></td>
		<td class="text-center">
			<a class="btn btn-success" href="detail.php?kode_sup=<?= $data['kode_sup']; ?>"><i class="fa fa-info"></i> Detail</a> 
			<a class="btn btn-primary" href="edit.php?kode_sup=<?= $data['kode_sup']?>"><i class="fa fa-cut"></i> Edit</a>
			<a href="hapus.php?kode_sup=<?php echo $data['kode_sup']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
		</td>
	</tr>
	<?php endforeach; ?>
</table>
<a href="../logout.php">Log Out</a>
