<?php
require 'conn.php';
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

	<title>Data ADShotels</title>
    <style>


.card1{
	position:absolute;
	left:10%;
	top:35%;
	width:250px;
	color:white;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
}

.card2{
	position:absolute;
	left:42%;
	top:35%;
	width:250px;
	color:white;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
}
.card3{
	position:absolute;
	left:75%;
	top:35%;
	width:250px;
	color:white;
	box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.5);
    max-width: 300px;
    margin: auto;
    text-align: center;
    font-family: arial;
}

.title {
  color: white;
  font-size: 18px;
}
@media (max-width: 800px){
	
	.card1{
		left: 20%;
	}
	.card2{
		left: 20%;
		top: 140%;
	}
	.card3{
		left: 20%;
		top: 245%;
	}
}
		
	
    </style>
</head>
<body bgcolor="#f9d342">
	 <header class = "header" id = "header" style="min-height: 120vh;">
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
                    <li><a href = "index.html">home</a></li>
                    <li><a href = "data_booking.php">Data Booking</a></li>
                    <li><a href = "data_contact.php">Data Contact</a></li>
                    <li><a href = "registrasi.php">Sign up</a></li>
                    <li><a href = "logout.php">logout</a></li>
                </ul>
            </div>
   
    <br><br><br><br><br>
    
    <div class="card1">
        <img src="image/alvan.jpg" alt="alvan" style="width:100%">
        <h1>Alvan Fathurahman</h1>
        <p class="title">CEO & Founder</p>
        <p>SMK WIKRAMA BOGOR</p>
        <div style="margin: 24px 0;">   
          <a href="https://wa.me/6285947650520" target="blank"><i class="fa fa-whatsapp"></i></a>  
          <a href="https://www.instagram.com/alvannf_" target="blank"><i class="fa fa-instagram"></i></a>
     	</div>
 	 </div>
          
          <div class="card2">
        <img src="image/dimaas.jpg" alt="dimas" style="width:100%">
        <h1>Dimas Wicaksono</h1>
        <p class="title">CEO & Founder</p>
        <p>SMK WIKRAMA BOGOR</p>
        <div style="margin: 24px 0;">   
          <a href="https://wa.me/6281311761749" target="blank"><i class="fa fa-whatsapp"></i></a>  
          <a href="https://www.instagram.com/dimas_ws24/" target="blank"><i class="fa fa-instagram"></i></a>
        </div>
        </div> 
          <div class="card3">
        <img src="image/aziz.jpg" alt="aziz" style="width:100%">
        <h1>Muhammad Syahril Aziz</h1>
        <p class="title">CEO & Founder</p>
        <p>SMK WIKRAMA BOGOR</p>
        <div style="margin: 24px 0;">   
          <a href="https://wa.me/628568882962" target="blank"><i class="fa fa-whatsapp"></i></a>  
          <a href="https://www.instagram.com/quin.ez/" target="blank"><i class="fa fa-instagram"></i></a>  
           
        </div> 
        </div>
         <script src="script.js"></script>
        
</body>
</html>