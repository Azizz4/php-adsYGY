
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
	top:1%;
    background:white;
    left: 30%;
	width: 35%;
    height: 450px;
    color: black;
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
    position: relative;
    left: 10%;
    width: 90%;
    margin-top: 1px;
    height: 20px;
    border: 0px;
    border-bottom: 1px solid #292826;
    font-size: 20px;
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
    width: 90%;
    height: 4px;
    border: none;
    background: #f9d342;;
  }
</style>
    </style>
  <meta charset="utf-8">
  <title>Update</title>
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
                    <li><a href = "data_booking.php">back</a></li>
                   
                </ul>
            </div> 
            
            



<center>
  <?php 
  require "conn.php";
  $id = $_GET['id'];
  $data = mysqli_query($koneksi, "SELECT * FROM booking WHERE id=$id");
  while ($d = mysqli_fetch_array($data)) {
    
  ?>
    <div id="backlogin">
      <h1>Update Data Booking ADSHotel</h1>
      <hr>
      <form  action="" method="post"> 
        <input type="hidden" name="id" value="<?php echo $d['id'] ?>">
        <tr>Check-in</tr>
        <input type="date" class="inputa" name="check" value="<?php echo $d['check_in'] ?>" autocomplete="off">
        <br>
        <tr>Penanggung</tr>
        <input type="text" class="inputa" name="pen" value="<?php echo $d['penanggung'] ?>" autocomplete="off" ><br>
        <tr>Nomor telepon</tr>
        <input type="text" class="inputa" name="no" value="<?php echo $d['no_telepon'] ?>" autocomplete="off" ><br>
        <tr>Pembayaran</tr>
        <br>
        <td><input type="radio" name="pem" value="Done">Done</td> ||
        <td><input type="radio" name="pem" value="Note yet">Note yet</td>
        <br>
				
        <input type="submit" class="wed"name="submit" value="Submit"> <input type="reset" class="wed" name="" value="Reset"> 
     </form>
    </div>
  <?php 
  } 
  ?>
  <?php 
  if (isset($_POST['submit'])) {
    $id= $_POST['id'];
    $check = htmlspecialchars($_POST['check']);
    $pen = htmlspecialchars($_POST['pen']);
    $no = htmlspecialchars($_POST['no']);
    $pem = htmlspecialchars($_POST['pem']);

    include_once("conn.php");

  $update = mysqli_query($koneksi, "UPDATE booking SET check_in = '$check', penanggung= '$pen', no_telepon= '$no', pembayaran = '$pem' WHERE id= $id");
  if ($update) {
      echo "
        <script>
        alert('update data succes');
        document.location.href = 'data_booking.php'; 
        </script>
      ";
    }else{
      echo "<script>
        alert('update data error');
        document.location.href = 'data_booking.php'; 
        </script>";
    }
    
    
    
  }


  
  ?>
  </center>
  <script src="script.js"></script>
</body>
  
</html>