<?php 
require_once 'header.php';
require_once 'barang.php';
$barang = new Barang();
session_start();
if(empty($_SESSION['username']) && empty($_SESSION['password'])){
	header("Location: ../index.php");	
}
?>
	<div style="margin-top:10px;">
	<h2>Daftar Barang</h2><br>
	<a href="tambah.php" class="btn btn-primary" style="padding:5px 30px;font-size:17px"><i class="fa fa-plus"></i>	</a>
	<div>&nbsp;</div>
	<table class="table table-hover table-condensed">
		<tr>
			<thead>
				<th style="background-color: #efefef; text-align: center;" width="7%" align="center">Kode Barang</th>
				<th style="background-color: #efefef; text-align: center">Nama Barang</th>
				<th style="background-color: #efefef; text-align: center">Harga</th>
				<th style="background-color: #efefef; text-align: center">Stok</th>
				<th style="background-color: #efefef; text-align: center"></th>
				<th style="background-color: #efefef; text-align: center"></th>
			</thead>
		</tr>
		<?php 
		$i = 1;
		foreach ($barang->findAllBarang() as $data) : ?>
		<tr>
			<td align="center"><?php echo $i++; ?></td>
			<td class="text-center"><?php echo $data['nama_barang']; ?></td>
			<td class="text-center"><?php echo $data['harga'] ?></td>
			<td class="text-center"><?php echo $data['stok'] ?></td>
			<td></td>
			<td class="text-center">
				<a class="btn btn-success" href="detail.php?kode_barang=<?php echo $data['kode_barang']; ?>"><i class="fa fa-info"></i> Detail</a> 
				<a class="btn btn-primary" href="update.php?kode_cus=<?php echo $val['kode_cus']?>"><i class="fa fa-cut"></i> Edit</a>
				<a href="hapus.php?kode_cus=<?php echo $val['kode_cus']; ?>" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</a>
			</td>	
		</tr>
	<?php endforeach;?>
	</table>	
	
	</div>
	<a href="../logout.php">Log Out</a>
