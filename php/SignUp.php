<?php
require "configR.php" ;

if(isset($_POST["submit"])){
  $Fname = $_POST["First_Name"];
  $Lname = $_POST["Last_Name"];
  $dob = $_POST["Date_of_Birth"];
  $email = $_POST["Email"];
  $mobile = $_POST["Mobile"];
  $bio = $_POST["bio"];
  $usern = $_POST["Username"];
  $pass = $_POST["Password"];

  $sql2 = "SELECT * FROM user WHERE Email = '$email'";
  $result = $conn->query($sql2);

  if($result->num_rows === 0){

    $sql= "INSERT INTO user(First_Name, Last_Name, Date_of_Birth, Email, Mobile, Bio, Username, Password) VALUES('$Fname', '$Lname', '$dob', '$email', '$mobile', '$bio;', '$usern', '$pass') " ;
    if($conn->query($sql)){

      echo "<script>alert('User account successfully created');</script>";

    }

    else{
      echo "Error: ". $conn->error;
    }
  }
  else{
    echo "<script>alert('This Email already has an account');</script>";
    
  }


}


?>


<!DOCTYPE html>
<html>

  <head>
    <link rel="stylesheet" href="../css/styles.css">
    <script src="../js/Sign-Up.js"></script>
    <title>SignUp</title>
  
  </head>
  <body>
    <nav>
            <div class="logo">
                <img src="../images/W - Tech.png" alt="Company Logo">
            </div>
            
                <div class="menu">
                    <a class="menu-item" href="../index1.html">Home</a>
                    <a class="menu-item" href="../Find_jobs.php">Find Jobs</a>
                    <a class="menu-item" href="../About_US.html">About Us</a>
                </div>
            
            <div class="signup-login">
                <a class="login-button" href="loginUser.php">Login</a>
                <a class="signup-button" href="SignUp.php">Signup</a>
            </div>
        </nav>
        
    <div class="container">
      <div class="card">
        <h2>Sign Up</h2>
        <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return confirmPassword()">

          <div class="column">
            <input type="text" placeholder="First Name" name="First_Name" required>
            <input type="text" placeholder="Last Name" name="Last_Name" required>
            <input type="email" placeholder="Email" name="Email" required>
            <input type="text" placeholder="Mobile"  pattern="[0]{1}[0-9]{9}" name="Mobile" required>
            <input type="date" placeholder="Date of Birth" name="Date_of_Birth" required>
            <textarea placeholder="Bio" rows="4" name="bio"></textarea>
          </div>
          <div class="column">
            <input type="text" placeholder="Username" name="Username" required>
            <input type="password" placeholder="Password" name="Password" id="pwd" required>
            <input type="password" placeholder="Confirm Password" name="Confirm_Password" id="confirmPwd" required>
          </div>
          <div class="column">
            <input type="submit" name="submit" class="submit" value="Sign Up">
          
          </div>
        </form>
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
 


  
  </body>

</html>
