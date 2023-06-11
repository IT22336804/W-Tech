<?php
session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/About US.css">
    <title>About Us</title>
</head>
<body>

    <section class="header">
    <nav>
        <div class="logo">
            <img src="../images/W - Tech.png" alt="Company Logo">
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



</section>
<section class="content">
    <div class="about-us">
        <h1>ABOUT US</h1>
        <p>W-TECH is a leading IT company that combines technical expertise with creativity to deliver comprehensive digital solutions. With a diverse team of professionals, we specialize in software development, web design, mobile app development, cloud solutions, and IT consulting services.</p>
    
        <p>Our team at W-TECH is driven by a passion for technology and a commitment to excellence. We stay updated with the latest industry trends and cutting-edge technologies to provide our clients with innovative and future-proof solutions. Our collaborative approach and attention to detail ensure that every project is executed to perfection.</p>
        
        <p>At W-TECH, we believe in understanding our clients' unique requirements and tailoring our solutions to meet their specific needs. Whether it's developing a custom software application, creating a stunning website, or implementing a scalable cloud infrastructure, we strive to deliver solutions that drive growth and success for our clients.</p>
        
        <p>Our commitment to quality is unwavering. We follow industry best practices and rigorous testing procedures to ensure that our solutions are robust, secure, and scalable. We prioritize user experience, seamless functionality, and elegant design in every project we undertake.</p>
        
        <p>Customer satisfaction is the cornerstone of our business. We prioritize open communication, transparency, and building long-term relationships with our clients. Our dedicated support team is always ready to assist and provide ongoing maintenance and updates to keep your digital solutions running smoothly.</p>
        
        <p>Partner with W-TECH and experience the power of technology-driven solutions that propel your business forward. Contact us today to discuss your IT requirements and embark on a digital transformation journey with us.</p>
        <div class="awards">
           <h2> Awards</h2>
            
        
        <div class="award-img">
            <img src="../images/award1.avif" alt="">
            <img src="../images/award2.avif" alt="">
        </div>
    </div>
    </div>
    
</section>

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
</body>
</html>