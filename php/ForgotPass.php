<?php
require "configR.php";

if(isset($_POST["submit"])){
  $email = $_POST["email"];

  $sql = "SELECT Email FROM user WHERE Email = '$email'";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
  

    $resetLink = "https://example.com/reset-password"; 
    $message = "Reset your password by clicking the link: $resetLink";
    mail($email, "Password Reset", $message);

    echo "<script>alert('Password reset link has been sent to your email');</script>";
  }
  else{
   
    echo "<script>alert('Invalid Email');</script>";
  }
}
?>

 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/ForgotPass.css">
  <title>Forgot Password</title>
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
      <h2>Forgot Password</h2>
      <p>Enter your email address below to reset your password:</p>
      <form method="POST" action="reset_password.php">
        <div class="form-group">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
          <input type="submit" name="submit" class="submit" value="Reset Password">
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

