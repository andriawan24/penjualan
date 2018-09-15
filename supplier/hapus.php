<?php 
require_once 'supplier.php';

$hapus = new Supplier();
$kode_sup = $_GET['kode_sup'];
$hapus->hapusSupplier($kode_sup);
header("Location:index.php");
 ?>