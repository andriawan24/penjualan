<?php
require_once 'user.php';

if(isset($_POST['submit']))
{
	$username = $_POST['username'];
	$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
	
	$regist = new User();
	$regist->Register($username, $password);
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Register</title>
	<link rel="stylesheet" type="text/css" href="style/assets/css/bootstrap.min.css">
	<style type="text/css">
		.tengah{
			width:400px;
			height: 200px;
			padding: 20px;
			position: fixed;
			top: 50%;
			left:50%;
			margin-top:-120px;
			margin-left:-220px;
		}
	</style>
</head>
<body>
	<div class="tengah">
	<H3 class="text-center">Register</H3>
	<form action="register.php" method="post" class="form-group">
		<label>Username : </label>
		<input type="text" name="username" placeholder="Masukkan Username" class="form-control">
		<div>&nbsp;</div>
		<label>Password : </label>
		<input type="text" name="password" placeholder="Masukkan Password" class="form-control">
		<div>&nbsp;</div>
		<button class="btn btn-primary" type="submit" name="submit">Simpan</button>
	</form>
	</div>
</body>
</html>

