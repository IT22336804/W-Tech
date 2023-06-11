<?php
  session_start();
  require "configR.php";
  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT Username, Password, Profile_pic_location FROM user WHERE Email = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      $row = $result->fetch_assoc();

      $storedPwd = $row["Password"];

      if($storedPwd === $password){
        $_SESSION["loggedUser"] = $email;
        $_SESSION["username"] = $row["Username"];
        $_SESSION["pic"] = $row["Profile_pic_location"];
        echo "<script>alert('Login succeessful');</script>";
        header("location: logged-index.php");
      }
      else{
        echo "<script>alert('Invalid Password');</script>";
      }
    }
    else{
      echo "<script>alert('Invalid Email');</script>";
    }
  }
  
?>

<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="../css/LoginUser.css">
</head>
<body>
  <div class="container">
  <section class="header">
    <nav>
        <div class="logo">
            <img src="images\W - Tech.png" alt="Company Logo">
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



</section>
    <div class="card">
      <h2>Login</h2>
      <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <input type="email" placeholder="Email" name="email" required>
        <input type="password" placeholder="Password" name="password" required>
        <label><input type="checkbox"> Remember me</label>
        <input type="submit" name="submit" class="submit" value="Log In">Sign In</button>
        <a href="forgot_password.html">Forgot Password?</a>
      </form>
      <?php if (isset($message)): ?>
        <p><?php echo $message; ?></p>
      <?php endif; ?>
    </div>

    <section class="footer">
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
</section>

  </div>
</body>
</html>
