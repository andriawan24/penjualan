<?php require_once 'barang/koneksi.php';

/**
 * Membuat Fungsi login
 */
class User extends Koneksi
{
	public $username;
	public $password;

	public function Login()
	{
		$db = $this->getKoneksi();
		try
		{
			//ambil data dari database
			$query = $db->prepare("SELECT * FROM user WHERE username = '$this->username'");
			$query->execute();
			$data = $query->fetch();

			//jika jumlah baris > 0
			if($query->rowCount() > 0){
				//jika password yang dimasukkan sesuai dengan yang ada di database
				if($data['password'] == $this->password){
					session_start();
					//simpan informasi user login
					$_SESSION['username'] = $data['username'];
					$_SESSION['password'] = $data['password'];
					header("Location: barang/index.php");
				}else{
					return false;
				}
			}else{
				return false;
			}
		}
		catch(PDOexception $e){
			echo $e->getMessage();
			return false;
		}
	}
}