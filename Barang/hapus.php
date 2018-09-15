<?php
require_once 'barang.php';

$barang = new Barang();
$kode_barang = $_GET['kode_barang'];
$barang->hapusBarang($kode_barang);
header("Location: index.php");
?>