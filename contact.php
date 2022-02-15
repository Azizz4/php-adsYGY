 <!DOCTYPE html>
 <html>
 <head>
     <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
        <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

     <title>Contact</title>
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
                    <li><a href = "index.html">Home</a></li>
                    <li><a href = "index.html">Rooms</a></li>
                    <li><a href = "">Contact us</a></li>
                    <li><a href = "about.html">About</a></li>
                </ul>
            </div>
     <form method="post">
            <div class="columns" id = "contactus">
                <center><h1>Contact us</h1></center>
                <div class="fontt">
                        <td>Your Name</td>
                        <td></td>
                        <td><input type="text" name="name" autocomplete="off" placeholder="Your name" style="width: 100%; height: 30px; "></td>
                        <p></p>
                        <td>Email</td>
                        <td></td>
                        <td><input type="Email" name="email" autocomplete="off" placeholder="Email" style="width: 100%; height: 30px; "></td>
                        <p></p>
                        <td>Number Phone</td>
                        <td></td>
                        <td><input type="number" min="0" name="pone" autocomplete="off" placeholder="only number bro:D" style="width: 100%; height: 30px; "></td>
                        <p></p>
                        <td>Feedback</td>
                        <td></td>
                        <td><textarea name="feedback" style="width: 100%; height: 100px; " placeholder="Your feedback"  ></textarea></td>
                        <br><br>
                        <td><button type="submit" name="submit" style="width: 100%; 
                        height: 30px; background-color:#f9d342; 
                        color:black" >Submit</button></td>
                </div>
            </div>
        </form>
    </div>
    <script src="script.js"></script>
    <?php
    // Check If form submitted, insert form data into users table.
    if (isset($_POST['submit'])) {
      $name = htmlspecialchars($_POST['name']);
      $email= htmlspecialchars($_POST['email']);
      $pone = htmlspecialchars($_POST['pone']);
      $feedback = htmlspecialchars($_POST['feedback']);
      
    // include database connection file
        include_once("conn.php");
        // Insert user data into table
        $result = mysqli_query($koneksi, "INSERT INTO contact VALUES('','$name','$email','$pone','$feedback')");
        
        // user added
        if ($result) {
            echo "
                <script>
                alert('your feedback was sent succes'); 
                </script>
            ";
        }else{
            echo "<script>
                alert('your feedback failed to send'); 
                </script>";
    }
}
    ?>
</body>
</html>
        