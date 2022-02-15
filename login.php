<?php
require 'conn.php';
session_start();

	//cek cookie
	if (isset($_COOKIE['id']) && isset($_COOKIE['key'])) {
		$id = $_COOKIE['id'];
		$key = $_COOKIE['key'];

		//ambil username berdasarkan id
		$result = mysqli_query($koneksi, "SELECT username FROM user WHERE id = $id");
		$row = mysqli_fetch_assoc($result);

		//cek cookie dan username nya
		if ($key === hash('sha256', $row['username'])) {
			$_SESSION['login'] = true;
		}

		if (isset($_SESSION["login"])) {
			header("Location: all_data.php");
			exit;
		}
	}


	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '$username'");

		//cek username
		if (mysqli_num_rows($result) === 1) {

			//cek password
			$row = mysqli_fetch_assoc($result);
			if ( password_verify($password, $row["password"]) ){
				//set session
				$_SESSION["login"] = true;

				//cek remember me
				if (isset($_POST['remember'])) {
					//buat cookie
					setcookie('id', $row['id'], time() + 3600);
					setcookie('key', hash('sha256', $row['username']), time() + 3600);
				}
				header("Location: all_data.php");
				exit;
			}
		}
		$error = true;
}
?>

<!DOCTYPE html>

<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<style media="screen">
        
        
  body {
   
    background-repeat: no-repeat;
    background-size: cover;
  }

  #backlogin {
	position: absolute;
	top:10%;
    background:white;
    left: 30%;
	width: 35%;
    height: 350px;
    
    margin-top: 150px;
  }

  @font-face {
    src: url('font/Product Sans Regular.ttf');
    font-family: Product Sans;
  }

  @font-face {
    src: url('font/OpenSans-Light.ttf');
    font-family: OpenSans-Light;
  }

  #backlogin form {
    margin-top: 15px;
    float: left;
    padding: 5px;
  }

  #backlogin .inputa {
    width: 90%;
    margin-top: 1px;
    height: 50px;
    border: 0px;
    border-bottom: 1px solid #292826;
    font-size: 16px;
    font-family: OpenSans-Light;
    background: transparent;
  }

  #backlogin .wed {
    margin-top: 40px;
    width: 45%;
    height: 40px;
    background:#292826;;
    border: none;
    color: white;
    font-family: product sans;
    font-size: 20px;
    border-radius: 5px;
  }

  #backlogin h1 {
    text-align: center;
    padding: 5px;
    color: #292826;
    font-family: Product Sans;
  }

  #backlogin hr {
    width: 50%;
    height: 4px;
    border: none;
    background: #f9d342;;
  }
</style>
    </style>
  <meta charset="utf-8">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>
</head>

<body>
<header class = "header" id = "header" style="min-height: 130vh;">
        <div class = "head-top">
            <div class = "site-name">
                <span>ADS HOTEL</span>
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
                    <li><a href = "index.html">back</a></li>
                   
                </ul>
            </div> 
            
            <form action="" method="post">
<?php if (isset($error)) : ?>
	<p style="color: red;">Username/Password Salah!</p>
<?php endif; ?>


<center>
    <div id="backlogin">
      <h1>Login ADS Hotel</h1>
      <hr>
      <form id="login" action="" method="post"> 
        <input type="text" class="inputa" name="username" value="" autocomplete="off" placeholder="Masukan Username"> 
        <input type="password" class="inputa" name="password" autocomplete="off" value="" placeholder="Masukan password"><br><br>
        <label for="remember">Remember Me !</label>
				<input type="checkbox" name="remember" id="remember"> <br><br>
        <input type="submit" class="wed"name="login" value="Submit"> <input type="reset" class="wed" name="" value="Reset"> 
     </form>
    </div>
  </center>
  <script src="script.js"></script>
</body>
  
</html>