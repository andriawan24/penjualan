
<?php 
	require_once 'pembeli.php';
	require_once 'header.php';
?>
	<h2>Daftar Pembeli Tahun 2018</h2>
	<div>&nbsp;</div>
	<a href="tambah.php" class="btn btn-primary" style="padding:5px 30px;font-size:17px"><i class="fa fa-plus"></i>	</a>
	<div>&nbsp;	</div>
	<table class="table table-hover">
	<tr>
		<thead>
			<th style="background-color:#efefef;text-align:center;" width="7%">Kode Pembeli</th>
			<th style="background-color:#efefef;text-align:center;">Nama Pembeli</th>
			<th style="background-color:#efefef;text-align:center;">Alamat</th>
			<th style="background-color:#efefef;text-align:center;">No. Telepon</th>
			<th style="background-color:#efefef;text-align:center;"></th>
		</thead>
	</tr>
	<?php 
	$i = 1;	
	$pembeli = new Pembeli();
	foreach($pembeli->lihatDaftarPembeli() as $val) : ?>
	<tr>
		<td class="text-center"><?= $i++; ?></td>
		<td class="text-center"><?= $val['nama_cus'] ?></td>
		<td class="text-center"><?= $val['alamat'] ?></td>
		<td class="text-center"><?= $val['no_tlp'] ?></td>
		<td class="text-center">
			<a class="btn btn-success" href="detail.php?kode_cus=<?= $val['kode_cus']; ?>"><i class="fa fa-info"></i> Detail</a> 
			<a class="btn btn-primary" href="update.php?kode_cus=<?= $val['kode_cus']?>"><i class="fa fa-cut"></i> Edit</a>
			<a href="hapus.php?kode_cus=<?= $val['kode_cus']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
		</td>
	</tr>
	<?php endforeach;?>
	</table>
<a href="../logout.php">Log Out</a>		
</div>

<?php require_once 'footer.php'; ?>