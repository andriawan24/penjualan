<?php
/**
 *
 */
class Koneksi
{
	public function getKoneksi(){
		$host = "localhost";
		$dbname = "penjualan";
		$username = "root";
		$password = "";

		$db = new PDO("mysql:host={$host};dbname={$dbname};", $username, $password);
		return $db;
	}
}
?>