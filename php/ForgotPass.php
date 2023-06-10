<?php
require "configR.php";

if(isset($_POST["submit"])){
  $email = $_POST["email"];

  $sql = "SELECT Email FROM user WHERE Email = '$email'";
  $result = $conn->query($sql);

  if($result->num_rows > 0){
    // Email exists in the database
    // Send the password reset link to the user's email

    // Placeholder code to send the email
    // Replace this with your actual code to send the email
    $resetLink = "https://example.com/reset-password"; // Example reset link
    $message = "Reset your password by clicking the link: $resetLink";
    mail($email, "Password Reset", $message);

    echo "<script>alert('Password reset link has been sent to your email');</script>";
  }
  else{
    // Email does not exist in the database
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
  <link rel="stylesheet" href="../css/styles.css">
  <title>Forgot Password</title>
</head>
<body>
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
      <p class="back-link">Remember your password? <a href="login.html">Login here</a></p>
    </div>
  </div>
</body>
</html>

