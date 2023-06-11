<?php
    session_start();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/Find Jobs.css">
    
    <title>Find Jobs</title>
   
</head>
<body>
    <div class="container">
    <header>
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
    </header>
    

    <form action="" class="search-bar">
        <input type="text" placeholder="Search for jobs" class="type">
        <button type="submit"><img src="../images/Search.png" alt=""></button>
    </form>
<div class="drop-dwn">
    <div class="categories" id="categories">
  <span class="cat">Categories</span>
  <span class="arrw-dwn1" id="button1"><img src="../images/chevron.png" alt=""></span>

  <ul class="list-items1">
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="software-developer" onclick="filterBoxes('software-developer')">
        Software Developer
      </label></span>
    </li>
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="data-analyst" onclick="filterBoxes('data-analyst')">
        Data Analyst
      </label></span>
    </li>
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="ux-ui-designer" onclick="filterBoxes('ux-ui-designer')">
        UX/UI Designer
      </label></span>
    </li>
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="project-manager" onclick="filterBoxes('project-manager')">
        Project Manager
      </label></span>
    </li>
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="quality-assurance" onclick="filterBoxes('quality-assurance')">
        Quality Assurance
      </label></span>
    </li>
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="it-consultant" onclick="filterBoxes('it-consultant')">
        IT Consultant
      </label></span>
    </li>
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="cybersecurity" onclick="filterBoxes('cybersecurity')">
        Cybersecurity
      </label></span>
    </li>
  </ul>
</div>

<div class="job-type">
  <span class="cat">Job Type</span>
  <span class="arrw-dwn3" id="button2"><img src="../images/chevron.png" alt=""></span>

  <ul class="list-items2">
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="online" onclick="filterBoxes('online')">
        Online
      </label></span>
    </li>
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="hybrid" onclick="filterBoxes('hybrid')">
        Hybrid
      </label></span>
    </li>
    <li class="item">
      <span class="checkbox"><label class="checkbox-label">
        <input type="checkbox" data-category="physical" onclick="filterBoxes('physical')">
        Physical
      </label></span>
    </li>
  </ul>
</div>


</div>


<div class="job-list">
  <div id="filtered-jobs"  class="grid-container">
    <div class="slider" id="slider">

      <?php 
        include 'slider.php'
        ?>
    </div>
    <?php 
    include 'Job posting.php'
    ?>
  </div>
</div>
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

<script src="../js/Find Jobs.js"></script>

</body>
</html>