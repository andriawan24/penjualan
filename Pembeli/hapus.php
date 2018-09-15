<?php 
require_once 'pembeli.php';

$pembeli = new Pembeli();
$kode_cus = $_GET['kode_cus'];
$pembeli->hapusPembeli($kode_cus);
header("Location: index.php");
 ?>