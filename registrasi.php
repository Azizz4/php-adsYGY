<?php

require 'conn.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST['register'])) {
	function registrasi($data){
	global $koneksi;
	$username =strtolower(stripcslashes($data['username']));
	$password =mysqli_real_escape_string($koneksi,$data['password']);
	$password2 =mysqli_real_escape_string($koneksi,$data['password2']);

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
		alert('password tidak sama');
		</script>";
	return false;
	}
	//enskripsi password
	$pass = password_hash($password, PASSWORD_DEFAULT);

	//tambah ke tabel
	mysqli_query($koneksi,"  INSERT INTO user VALUES ('','$username','$pass')");
	return mysqli_affected_rows($koneksi);
}

	if ( registrasi($_POST) > 0) {
		echo "<script>
		alert('User baru berhasil ditambahkan !');
		</script>";
	}else{
		echo mysqli_error($koneksi);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	  <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
	<style>
		button{
			position: relative;
			width: 200px;
			height: 30px;
			background-color: black;
			color: white;
		}
		.tengah{
			position: absolute;
			width: 20%;
			height: 45%;
			background-color: transparent;
			top: 30%;
			left: 40%;
			font-size: 20px;
			
		}
		.tengah ul li input{
			position: relative;
			width: 200px;
			height: 25px;
		}
		.tengah ul li label{
			position: relative;
			font-size: 20px;
			
		}
		.tengah ul li{
		display: inline-block; 
		}
		@media (max-width: 800px){
			.tengah{
				left: 30%;
				
			}
		}
	</style>
	
            
</head>
<body>
	<header class = "header" id = "header" style="min-height: 130vh;">
        <div class = "head-top">
            <div class = "site-name">
                <span>ADSHOTELS</span>
            </div>
            <div class = "site-nav">
                <span id = "nav-btn">MENU <i class = "fas fa-bars"></i></span>
            </div>
        </div>
       </header>
        <div class = "sidenav" id = "sidenav">
                <span class = "cancel-btn" id = "cancel-btn">Close
                    <i class = "fas fa-times"></i>
                </span>

                <ul class = "navbar">
                    <li><a href = "all_data.php">Back</a></li>        
                </ul>
            </div>
	

<form action="" method="post">
	<div class="tengah">
	<ul>
		<li>
			<label for="username">Username :</label>
			<input type="name" name="username" id="username">
		</li>
		<li>
			<label for="password">Password :</label>
			<input type="password" name="password" id="password">
		</li>
		<li>
			<label for="password2">Konfirmasi Password </label>
			<input type="password" name="password2" id="password2">
		</li>
		<br>
		<li>
			<button type="submit" name="register">Daftar !</button>
		</li>
	</ul>
	</div>
</form>
<script src="script.js"></script>
</body>
</html>