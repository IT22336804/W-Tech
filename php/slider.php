<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment company system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT job_title, salary_amount, short_description,category,full_description,responsibilities,requirements FROM jobs";
$result = $conn->query($sql);

$counter = 0; 
$i = 1;
$swipper_buttons = array();
$j = 1;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        if ($counter % 4 == 0) {
            echo '<div class="slide">';
        }
        
        echo '<div class="box" id="box' . $i . '" data-category="' . $row['category'] . '">';
        echo '<h2>'.$row['job_title'].'</h2>';
        echo '<p class="est-sal"><img src="images\dollar.png" >'.$row['salary_amount'].'</p>';
        echo '<p>'.$row['short_description'].'</p>';
        echo '</div>';
        
        $counter++;
        
        if ($counter % 4 == 0) {
            echo '</div>'; 
            
            $swipper_buttons[]= '<div class="swiper-button" id="swiper-button">'.$j++.'</div>';
        }
       $i++;
      
    }
    
    
    if ($counter % 4 != 0) {
        echo '</div>'; 
        
        $swipper_buttons[]='<div class="swiper-button" id="swiper-button">'.$j++.'</div>';
    }
    
    echo '<div class="swiper-navigation">';
    echo implode('', $swipper_buttons); 
    echo '</div>';
}

$conn->close();
?>
