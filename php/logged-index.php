<?php
    session_start();
?>




<!DOCTYPE html>
<html>
<head>
    <title>Recruitment Company System</title>
    <link rel="stylesheet" type="text/css" href="../css/Homepage.css">
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
    
    <div class="welcome">
        <div class="welcome-content">
            <h1 class="welcome-text">To Choose Your Level<br> Dream Career</h1>
            <a class="explore" href="logged-Find-jobs.php"><span>EXPLORE</span><i></i></a>
        </div>
        <img  src="../images/Home1.jpg" alt="Welcome Image">
    </div>
</section>
<section class="second-sec">
    <div class="welcome-content2">
        <h1>WELCOME</h1>
    </div>
    <div class="description-section">
        <img class="description-image" src="../images/Welcome.jpg" alt="Description Image">
        <div class="description-text">
            <p>Welcome to W-tech, a leading technology company dedicated to delivering innovative solutions. With our team of skilled professionals and cutting-edge technologies, we provide a wide range of services tailored to meet your business needs. From web development and mobile applications to cloud computing and artificial intelligence, we specialize in delivering robust and scalable solutions. Our mission is to empower businesses with transformative technology, enabling them to thrive in today's digital landscape. Partner with W-tech and embark on a journey of digital excellence.</p>
        </div>
    </div>
</section>

<section class="carousel-section">
    <section class="carousel">
        <ul class="carousel__list">
          <li class="carousel__item" tabindex="0">
            <div class="carousel__box">
              <div class="carousel__image"><img src="../images/front end.jpg"/></div>
              <div class="carousel__contents">
                <h2 class="user__name">User Name</h2>
                <h3 class="user__title">User Title</h3>
              </div>
            </div>
          </li>
          <li class="carousel__item" tabindex="0">
            <div class="carousel__box">
              <div class="carousel__image"><img src="../images/back end.jpg"/></div>
              <div class="carousel__contents">
                <h2 class="user__name">User Name</h2>
                <h3 class="user__title">User Title</h3>
              </div>
            </div>
          </li>
          <li class="carousel__item" tabindex="0">
            <div class="carousel__box">
              <div class="carousel__image"><img src="../images/pic2.jpg"/></div>
              <div class="carousel__contents">
                <h2 class="user__name">User Name</h2>
                <h3 class="user__title">User Title</h3>
              </div>
            </div>
          </li>
          
        </ul>
        <!-- Carousel Controls -->
        <div class="carousel__nav">
          <button class="prev">
           <img src="../images/back.png" alt="">
              
            <span></span>
          </button>
          <button class="next"><span></span>
            
             <img src="../images/next.png" alt="">
            
          </button>
        </div>
      </section>
      
    
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

<script src="../js/carousel.js"></script>i
</body>
</html>