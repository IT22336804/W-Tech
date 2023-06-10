<?php
  session_start();
  require "configR.php";
  if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "SELECT Password FROM user WHERE Email = '$email'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
      $row = $result->fetch_assoc();

      $storedPwd = $row["Password"];

      if($storedPwd === $password){
        $_SESSION["email"] = $email;
        echo "<script>alert('Login succeessful');</script>";
        
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
  </div>
</body>
</html>
