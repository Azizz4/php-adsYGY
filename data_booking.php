<?php
require 'conn.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

$booking = booking("SELECT * FROM booking ORDER BY id DESC");

if (isset($_POST["cari"])) {
	$booking = caringab($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			
			background:black;
		}
		table{

		}
		a{
			text-decoration: none;
			color: #d63031;
		}
		tr th{
			border: 2px solid orange;
			color: white;
			width: 100px;
			height: 30px;
			text-align: center;
			font-family: century gothic;
		}
		tr td{
			border: 2px solid orange;
			color: white;
			
			text-align: center;
		}
		ul{
			
			float: right;
			position: relative;
			top: 5%;
			list-style-type: none;
			margin-top: 25px;
			margin-right: 25px;
			padding-top: 30px;
		}
		ul li{
			display: inline-block; 
		}
		ul li a{
			text-decoration: none;
			color: white;
			padding: 10px 20px;
			border:1px solid;
			transition: 0.6s;
			margin-top: 10px;
		}
		ul li :hover{
			background-color: #ffa200;
			color: white;
		}
		ul li.active a{
			background-color: #ffa200;
			color: white;
		}
		ul li a:hover {
			font-size: 20px;
			transition: 0.6s;
		}
		.tabel1{
		position: relative;
	
		}
		 input{
			width: 800px; 
			height: 40px; 
			border-top-left-radius: 50px; 
			border-bottom-left-radius: 50px; 
			font-size: 20px;
		}
		button{
			text-align: left; 
			width:100px; 
			height: 45px;  
			border-top-right-radius: 50px; 
			border-bottom-right-radius: 50px; 
			background: white; 
			color: black; 
			font-size: 20px;
		}
		@media (max-width: 900px){
			input{
				width: 380px;
				font-size: 15px;
			}
			button{
				width: 70px;
				font-size: 15px;
			}
		}
	</style>
</head>
<body>	
		<ul>
		<li class="active"><a href="data_booking">Data Booking</a></li>
			<li><a href="data_contact.php">Data Contact</a></li>
            <li><a href="all_data.php">Admin</a></li>
        </ul>	
		<br><br><br><br><br><br><br>
	 <form action="" method="post">
	<div class="tabel1">
		<br><br>
			<form action="" method="post">

				<input type="text" name="keyword" size="40" autofocus placeholder="Masukan keyword pencarian.." autocomplete="off"		id="keyword">
				<button type="submit" name="cari" id="tombol-cari">Cari!</button>
				<br><br><br>
			</form>
	<div id="container">
			<table border="1" cellpadding="10" cellspacing="0">
					<tr>
						<th>No.</th>
						<th>ID</th>
						<th>Time</th>
						<th>Penanggung</th>
						<th>No Telepon</th>
						<th>Kategori</th>
						<th>Kategori Ruang</th>
						<th>Check In</th>
						<th>Total</th>
						<th>aksi</th>
					</tr>

					<?php $i = 1; ?>
					<?php foreach ($booking as $row) :?>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row["id"];?></td>
						<td><?php echo $row["time"];?></td>
						<td><?php echo $row["penanggung"];?></td>
						<td><?php echo $row["no_telepon"];?></td>
						<td><?php echo $row["kategori"];?></td>
						<td><?php echo $row["kategories_room"];?></td>
						<td><?php echo $row["check_in"];?></td>
						<td><?php echo $row["total"];?></td>
						<td>
							<a href="update.php?id=<?= $row["id"]; ?>";>UPDATE</a>||
							<a href="deletebook.php?id=<?= $row["id"]; ?>" onclick="return confirm('benernichhh?');">DELETE</a>
						</td>
					</tr>
					<?php $i++; ?>
				<?php endforeach;?>
			</table>
		</div>
<script src="js/jsngab.js"></script>
</body>
</html>