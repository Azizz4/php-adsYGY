<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="inicss.css">
	<style type="text/css">
		.row{
			position: absolute;
			background-size: cover;
			width: 500px;
			height: 550px;
			top: 30%;
			left: 50%;
			padding:20px;
			text-align: left;
			background-color: #fac871;
			
		}
		.fontnya{
			position: relative;
			top: 10%;
			color: black;
			font-size: 15px;
			font-family: century gothic;
			word-spacing: 5px;
		}
		.columns {
			position: absolute;
			background-color: transparent;
			top: 20%;
			color: white;
			width: 37%;
			height: 80%;
			right: 60%;
			padding:20px;
			text-align: left;
		}
		@media (max-width: 800px){
			.row{
				top: 120%;
				left: 1%;
				width: 90%;

			}
			.columns{
				width: 95%;
				right: 0%;

			}			
		}
		

	
	</style>
</head>
<body>
		<div class="atas">
		 <div class="logo"><img src="image/logoo.png"></div>
            <ul>
                <li><a href="index.html">Back</a></li>
                <li class="active"><a href="">VIP</a></li>
               
            </ul>
           </div>

<form method="post" action="">
		<div class="columns">
			<center><h3 style="color: white">Booking</h3></center>
			<div class="fontt">
					<td>Check in :</td>
					<td></td>
					<td><input type="date" name="in" autocomplete="off" required style="width: 100%; height: 30px;  "></td>
					<p></p>
					<td>Time booking (days)   :</td>
					<td></td>
					<td><input type="number" name="out" autocomplete="off" required style="width: 100%; height: 30px; "></td>
					<p></p>
					<td>Responsible :</td>
					<td></td>
					<td><input type="text" name="res" autocomplete="off" required placeholder="Responsible" style="width: 100%; height: 30px; "></td>
					<p></p>
					<td>Number phone:</td>
					<td></td>
					<td><input type="number" min="0" name="pone" autocomplete="off" required placeholder="08xxxxxxxxx..." style="width: 100%; height: 30px; "></td>
					<p></p>
					<td>kategories  :</td>
					<p></p>
					<td><input type="radio" name="kat" value="Adult">Adult</td>
					<td><input type="radio" name="kat" value="Kids">Kids</td>
					<td><input type="radio" name="kat" value="Family">Family</td>
					<td><input type="radio" name="kat" value="Couple">Couple</td>
			        <P></P>
					<td><button type="submit" name="submit" style=" background: #fac871; color: white;width: 100%; height: 40px;" onclick="return confirm('benernichhh?');">Submit</button></td>
			</div>
		</div>
	</form>
		
		
	<div class="row">
		<div class="fontnya">
	<?php
	// Check If form submitted, insert form data into users table.
	if (isset($_POST['submit'])) {
	  $in = htmlspecialchars($_POST['in']);
	  $out= htmlspecialchars($_POST['out']);
	  $res = htmlspecialchars($_POST['res']);
	  $pone = htmlspecialchars($_POST['pone']);
	  $kat = htmlspecialchars($_POST['kat']);
	 
	  if ($harga = 800000) {
	  	 $jumlah = ($out * $harga);
	  	 $kategori = "VIP";
	  
	  
	  echo "<h3>Thank you , your booking data has been recorded</h3>";


	echo "Check-in : " . $in . "<br>";
	echo "<p></p>";
	echo "Time booking : " . $out . "<br>";
	echo "<p></p>";
    echo "Responsible : " . $res . "<br>";
    echo "<p></p>";
    echo "Number Phone : " . $pone . "<br>";
    echo "<p></p>";
    echo "kategories : " . $kat . "<br>";
    echo "<p></p>";
    echo "Total price : RP." . $jumlah;
    echo "<h3>pay via dana = 085947650521</h3><br>";
    echo "<h3>Dont forget to screenshots proof of payment</h3>";
    


	?>
		</div>
	</div>
	<?php  
	// include database connection file
		include_once("conn.php");
		// Insert user data into table
		$result = mysqli_query($koneksi, "INSERT INTO booking VALUES('','$in','$out','$res','$pone','$kat','$kategori','$jumlah','')");
		}
		// user added
		if ($result) {
			echo "
				<script>
				alert('Booking succes'); 
				</script>
			";
		}else{
			echo "<script>
				alert('Booking error'); 
				</script>";
	}
}
	?>
</body>
</html>