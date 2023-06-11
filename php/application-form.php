<?php
session_start();

    require 'configK.php';

    if(isset($_POST["submit"])){
        if(!empty($_FILES["resume"]["name"] ) && !empty($_FILES["covlet"]["name"])){
         
            $resume_name = $_POST["fname"] . "_resume.pdf";
            $resume_temp_name = $_FILES["resume"]["tmp_name"];
            $resume_target_dir = "../uploads/resume/";
            $resume_target_file = $resume_target_dir . basename($resume_name);

            move_uploaded_file($resume_temp_name, $resume_target_file);

            $covlet_name = $_POST["fname"] . "_cover letter.pdf";
            $covlet_temp_name = $_FILES["covlet"]["tmp_name"];
            $covlet_target_dir = "../uploads/covlet/";
            $covlet_target_file = $covlet_target_dir . basename($covlet_name);

            move_uploaded_file($covlet_temp_name, $covlet_target_file);

            $fname = $_POST["fname"];
            $lname = $_POST["lname"];
            $email = $_POST["email"];
            $mobile = $_POST["mobile"];
            $comment = $_POST["comment"];
    
            $sql = "INSERT INTO application(Applicant_fname, Applicant_lname, Applicant_email, Applicant_mobile, Resume_location, Cover_letter_location, Comments) VALUES('$fname', '$lname', '$email', '$mobile', '$resume_target_file', '$covlet_target_file', '$comment')";
    
            if($conn->query($sql)){
                echo '<script>alert("Successfully applied")</script>';
            }
            else{
                echo "ERROR: " . $conn->error;
            }
    
            $conn->close();

        }

        else{
            echo '<script>alert("Please Upload your Resume and Cover letter before submitting")</script>';
        }
    

    }
   


?>





<!DOCTYPE html>
<html>
<head>
    <title>Apply</title>
    <link rel="stylesheet" type="text/css" href="../css/application-form.css">
    <script src="../js/application-form.js"></script>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="images\W - Tech.png" alt="Company Logo">
        </div>
                
        <div class="menu">
            <a class="menu-item" href="logged-index.php">Home</a>
            <a class="menu-item" href="logged-Find-jobs.php">Find Jobs</a>
            <a class="menu-item" href="logged-About-us.php">About Us</a>
        </div>
                
        <div class="signup-login">
            <a href="user-profile.php" class="username"><?php echo $_SESSION["username"]; ?></a>
            <a href="user-profile.php"><img src="<?php echo $_SESSION["pic"]; ?>"></a>
        </div>
    </nav>

    <div class="application-div">
        <p>Apply to <span>Job title</span></p>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
            <div class="contact-info-div">
                <p>Contact Info</p>
                <div class="contact-info-form">
                    <label for="fname">First Name</label>
                    <input type="text" name="fname" id="fname" required>
                    <label for="lname">Last Name</label>
                    <input type="text" name="lname" id="lname" required>
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" placeholder="exampli@example.com">
                    <label for="mobile">Mobile</label>
                    <input type="text" name="mobile" id="mobile" pattern="[0]{1}[0-9]{9}" placeholder="0123456789">
                </div>
            </div>

            <div class="document-upload-div">
                <div class="resume-covlet-header">
                    <p>Resume</p>
                    <p>Cover Letter</p>
                </div>
                <div class="resume-covlet-div">
                    <div class="resume-div">
                        <label for="resume">Upload your resume here</label>
                        <input type="file" name="resume" id="resume" accept=".pdf" >
                    </div>
                    <div class="covlet-div">
                        <label for="covlet">Upload your cover letter here</label>
                        <input type="file" name="covlet" id="covlet" accept=".pdf" >
                    </div>
                    
                </div>
                
            </div>

            <div class="form-final-div">
                <div class="comments-div">
                    <textarea name="comment" rows="8" cols="124" placeholder="Additional comments"></textarea>
                </div>
                <div class="terms-submit-reset-div">
                    <div class="terms-div">
                        <input type="checkbox" name="terms" id="terms" onchange="termsValidation()">
                        <label for="terms">I have read and agreed to the Terms and Conditions*</label>
                    </div>
                    <div class="submit-reset-div">
                        <input type="reset" name="reset" id="reset" value="Discard">
                        <input type="submit" name="submit" id="submit" value="Submit" disabled>
                    </div>
                </div>
                
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

