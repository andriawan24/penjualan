<?php 
require_once 'koneksi.php';
/**
  * 
  */
 class Supplier extends Koneksi
 {
 	
 	public function daftarSupplier()
 	{
 		$db = parent::getKoneksi();
 		$query = $db->prepare("SELECT * FROM supplier");
 		$query->execute();

 		return $query->fetchAll();
 	}

 	public function tambahSupplier($nama_sup, $kontak)
 	{
 		$db = parent::getKoneksi();
 		$query = $db->prepare("INSERT INTO supplier (kode_sup, nama_sup, kontak) VALUES ('', '$nama_sup', '$kontak');");
	 	return	$query->execute();
 	}

 	public function editSupplier($nama_sup, $kontak, $kode_sup)
 	{
 		$db = parent::getKoneksi();
 		$query = $db->prepare("UPDATE supplier SET nama_sup = '$nama_sup', kontak = '$kontak'");
 		return $query->execute();
 	}

 	public function hapusSupplier($kode_sup)
 	{
 		$db = parent::getKoneksi();
 		$query = $db->prepare("DELETE FROM supplier WHERE kode_sup = $kode_sup");
 		return $query->execute();
 	}
 	public function cariSatuSup($kode_sup)
 	{
 		$db = $this->getKoneksi();
 		$query = $db->prepare("SELECT * FROM supplier WHERE kode_sup = '$kode_sup'");
 		$query->execute();

 		return $query->fetch();
 	}
 } 


 ?>