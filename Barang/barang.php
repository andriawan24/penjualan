<?php

require_once 'koneksi.php';

/**
 * Membuat Perintah-perintah yang bisa di jalankan di database
 */
class Barang extends Koneksi
{
	
	/*method*/
	public function findAllBarang(){
		$db = $this->getKoneksi();
		
		$query = $db->prepare("SELECT * FROM barang");
		$query->execute();

		return $query->fetchAll();
	}

	public function hapusBarang($kode_barang){
		$db = $this->getKoneksi();
		$query = $db->prepare("DELETE FROM barang WHERE kode_barang = $kode_barang");
		return $query->execute();
	}

	public function tambahBarang($nama_barang, $harga, $stok){
		$db = $this->getKoneksi();
		$query = $db->prepare("INSERT INTO barang (kode_barang, nama_barang, harga, stok) VALUES ('', '$nama_barang', '$harga', '$stok'); ");
		$query->execute();
		return $query;
	}
	public function cariSatuBarang($kode_barang){
		$db = $this->getKoneksi();
		$query = $db->prepare("SELECT * FROM barang WHERE kode_barang = $kode_barang");
		$query->execute();
		return $query->fetch();
	}
	public function ubahBarang($nama_barang, $harga, $stok, $kode_barang){
		$db = $this->getKoneksi();
		$query = $db->prepare("UPDATE barang SET nama_barang = '$nama_barang', harga = '$harga', stok = '$stok' WHERE kode_barang = $kode_barang");
		return $query->execute();
	}

	
}
?>