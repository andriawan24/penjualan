<?php 
require_once 'koneksi.php';
/**
 * 
 */
class Pembeli extends Koneksi
{
	
	public function lihatDaftarPembeli()
	{
		$db = $this->getKoneksi();
		$query = $db->prepare("SELECT * FROM pembeli");
		$query->execute();

		return $query->fetchAll();
	}
	public function lihatSatuPembeli($kode_cus){
		$db = $this->getKoneksi();
		$query = $db->prepare("SELECT * FROM pembeli WHERE kode_cus='$kode_cus'");
		$query->execute();

		return $query->fetch();
	}
	public function hapusPembeli($kode_cus){
		$db = $this->getKoneksi();
		$query = $db->prepare("DELETE FROM pembeli WHERE kode_cus = $kode_cus");
		$query->execute();
	}
	public function tambahPembeli($nama_cus, $alamat, $no_tlp)
	{
		$db = $this->getKoneksi();
		$query = $db->prepare("INSERT INTO pembeli (kode_cus, nama_cus, alamat, no_tlp) VALUES ('', '$nama_cus', '$alamat', '$no_tlp');");
		return $query->execute();
	}
	public function ubahDataPembeli($nama_cus, $alamat, $no_tlp, $kode_cus){
		$db = $this->getKoneksi();
		$query = $db->prepare("UPDATE pembeli SET nama_cus = '$nama_cus', alamat = '$alamat', no_tlp = '$no_tlp'");
		return $query->execute();
	}	
}


 ?>