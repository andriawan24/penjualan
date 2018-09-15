<?php 
/**
  * Membuat Koneksi ke Database
  */
 class Koneksi
 {
 	
 	public function getKoneksi()
 	{
 		$host = "localhost";
 		$dbname = "penjualan";

 		$db = new PDO("mysql:host={$host};dbname={$dbname}", 'root', '');

 		return $db;
 	}
 } ?>