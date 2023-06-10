<?php
    session_start();
    $user = $_SESSION["loggedUser"];
    
    $uname = "Krash612";

    require 'config.php';

    $sql = "SELECT First_Name, Last_Name, Email, Mobile, Bio, Username, Password FROM user WHERE Email = '$user'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();

    }
    else{
        echo "ERROR";
    }
    
    

?>

<?php
    if(isset($_POST["submit"])){
        $savedPwd = $row["Password"];
        $savedEmail = $row["Email"];
        $enteredPWD = $_POST["currentpwd"];
        $newPwd = $_POST["newpwd"];


        if($savedPwd === $enteredPWD){
            
            $sql2 = "UPDATE user SET Password = '$newPwd' WHERE Email = '$savedEmail'";
            
            if($conn->query($sql2)){
                echo "<script>alert('Password changed successfully');</script>";
            }
            else{
                echo "<script>alert('Error when updating password');</script>";
            }

        }
        else{
            echo "<script>alert('Invalid Password');</script>";
        }
    }
    

?>





<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>
    <link rel="stylesheet" type="text/css" href="../css/user-profile.css">
    <script src="../js/user-profile.js"></script>
</head>
<body>
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

    <button class="edit-profile-btn" onclick="editProfile()">Edit Profile</button>

    <form method="post" action="edit-profile.php">
        <div class="user-profile-div">
            <div class="edit-uname-form-div">
                <input type="text" name="uname" class="edit-form" id="uname" value="<?php echo $row["Username"]; ?>">
            </div>

            <div class="edit-fname-form-div">
                <input type="text" name="fname" class="edit-form" id="fname" value="<?php echo $row["First_Name"]; ?>">
            </div>

            <div class="edit-lname-form-div">
                <input type="text" name="lname" class="edit-form" id="lname" value="<?php echo $row["Last_Name"]; ?>">
            </div>

            <div class="edit-email-form-div">
                <input type="text" name="email" class="edit-form" id="email" value="<?php echo $row["Email"]; ?>">
            </div>

            <div class="edit-mobile-form-div">
                <input type="text" name="mobile" class="edit-form" id="mobile" value="<?php echo $row["Mobile"]; ?>">
            </div>

            <div class="edit-bio-form-div">
                <textarea cols="33" rows="4" name="bio" class="edit-form" id="bio"><?php echo $row["Bio"]; ?></textarea>
            </div>
            
            <div class="user-overview">
            
                <div class="profile-pic-div">
                    <img src="../images/default-avatar-profile-icon-of-social-media-user-vector.jpg" alt="Profile picture">
                </div>
                <div class="user-bio-div">
                    <p class="bio-header">Bio</p>
                    <p class="bio-content"><?php echo $row["Bio"]; ?></p>
                </div>
                

            </div>

            <div class="user-details">
                <div class="user-details-div-header">
                    <p class="user-details-header"><?php echo $row["First_Name"] . " " . $row["Last_Name"] ?></p>
                    <input type="submit" name="submit" id="submit" value="Save">
                    
                </div>
                
                <div class="details">
                    <div><p>Username</p><p class="detail-value"><?php echo $row["Username"]; ?></p></div>
                    <div><p>First Name</p><p class="detail-value"><?php echo $row["First_Name"]; ?></p></div>
                    <div><p>Last Name</p><p class="detail-value"><?php echo $row["Last_Name"]; ?></p></div>
                    <div><p>Email</p><p class="detail-value"><?php echo $row["Email"]; ?></p></div>
                    <div><p>Mobile</p><p class="detail-value"><?php echo $row["Mobile"]; ?></p></div>
                </div>
            </div>
            
        </div>
    </form>

    <div class="change-password-form-div">
        <p class="form-header">Change Password</p>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="return checkPwd()">
            <div class="form-content">
                <label for="currentpwd" class="label">Current Password</label>
                <input type="password" class="input" id="currentpwd" name="currentpwd" required>
                <label for="newpwd" class="label">New Password</label>
                <input type="password" class="input" id="newpwd" name="newpwd" required>
                <label for="confirmpwd" class="label">Confirm Password</label>
                <input type="password" class="input" id="confirmpwd" name="confirmpwd" required>
            </div>
            <div class="submit-btn">
                <input type="reset" class="input" name="reset" id="reset" value="  Clear  ">
                <input type="submit" class="input" name="submit" id="submit2" value="Change">
            </div>
            
        </form>
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