<!DOCTYPE html>
<html>
<head>
	<title>Toko Bahagia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style/assets/css/bootstrap.min.css">
	<style type="text/css">
		body{
			background-image:url("style/img/road-220058_1280.jpg");\
			background-size:cover;
			background-position:fixed;
		}
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
		#warn{
			color:#dc3545;
			text-align:center;	
			font-size:18pt;
			font-weight:bold;
		}
	</style>
</head>
<body>
	<div class="tengah">
		<form class="form-group" action="index.php" method="post" onsubmit="submit()">
			<h4  style="color:#343a40"><strong>Username : </strong></h4>
			<input type="text" name="username" placeholder="username" class="form-control" required autofocus >
			<div>&nbsp;</div>
			<h4  style="color:#343a40"><strong>Password : </strong></h4>
			<input type="password" name="password" placeholder="password" class="form-control" required>
			<div>&nbsp;</div>
			<input type="submit" name="submit" class="btn btn-primary" style="padding:9px 19px;">
		</form>

	<?php
	require_once 'user.php';
	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		$password = $_POST['password'];

		$user = new User();

		$user->username = $username;
		$user->password = $password;

		if($user->Login()){
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
			header("Location: barang/index.php");
		}else{
			echo "<p id='warn'>Username atau Password Salah! </p>";
		}
	}
	?>

	</div>
</body>
</html>
