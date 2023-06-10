<?php
require "configR.php" ;

if(isset($_POST["submit"])){
  $Fname=$_POST["First_Name"];
  $Lname=$_POST["Last_Name"];
  $dob=$_POST["Date_of_Birth"];
  $email=$_POST["Email"];
  $bio=$_POST["bio"];
  $usern=$_POST["Username"];
  $pass=$_POST["Password"];

  $sql= "INSERT INTO user(First_Name, Last_Name, Date_of_Birth, Email, Bio, Username, Password) VALUES('$Fname', '$Lname', '$dob', '$email', '$bio;', '$usern', '$pass') " ;
  if($conn->query($sql)){
    echo "<script>alert('User account successfully created');</script>";
  }

  else{
    echo "Error: ". $conn->error;
  }


}


?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/styles.css">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&display=swap" rel="stylesheet" />
</head>

<nav>
            <div class="logo">
                <img src="images\W - Tech.png" alt="Company Logo">
            </div>
            
                <div class="menu">
                    <a class="menu-item" href="#">Home</a>
                    <a class="menu-item" href="#">Find Jobs</a>
                    <a class="menu-item" href="#">About Us</a>
                </div>
            
            <div class="signup-login">
                <a class="login-button" href="#">Login</a>
                <a class="signup-button" href="#">Signup</a>
            </div>
        </nav>
        
<div class="container">
  <div class="card">
    <h2>Sign Up</h2>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

      <div class="column">
        <input type="text" placeholder="First Name" name="First_Name" required>
        <input type="text" placeholder="Last Name" name="Last_Name" required>
        <input type="email" placeholder="Email" name="Email" required>
        <input type="date" placeholder="Date of Birth" name="Date_of_Birth" required>
        <textarea placeholder="Bio" rows="4" name="bio"></textarea>
      </div>
      <div class="column">
        <input type="text" placeholder="Username" name="Username" required>
        <input type="password" placeholder="Password" name="Password" required>
        <input type="password" placeholder="Confirm Password" name="Confirm_Password" required>
      </div>
      <div class="column">
        <input type="submit" name="submit" class="submit" value="submit">
        <p>Already have an account? <a href="login.html">Log in</a></p>
      </div>
    </form>
  </div>
</div>
</div>

<footer>
    <div class="footer-top">
        <div class="footer-section">
            <h3>SUPPORT</h3>
            <p>Email: sample@example.com</p>
        </div>
        <hr class="footer-line">
        <div class="footer-section">
            <h3>Contact Us</h3>
            <p>Address: 123 Street, City, Country</p>
            <p>Phone: +1234567890</p>
            <p>Fax: +1234567890</p>
        </div>
    </div>
    <hr class="footer-line">
    <div class="footer-bottom">
        <p>Copyright&copy; 2023 W-Tech. All rights reserved.</p>
        <div class="social-media-links">
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
            <a href="#"><img src="twitter.png" alt="Twitter"></a>
            <a href="#"><img src="instagram.png" alt="Instagram"></a>
        </div>
        <div class="footer-buttons">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms and Conditions</a>
        </div>
    </div>
</footer>
 
</html>

  <script src="js/Rivin.js"></script>
</body>

</html>
