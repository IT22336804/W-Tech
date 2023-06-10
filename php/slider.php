<?php
// Create a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment company system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve job data from the database
$sql = "SELECT job_title, salary_amount, short_description,category,full_description,responsibilities,requirements FROM jobs";
$result = $conn->query($sql);

$counter = 0; // Initialize the counter variable
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
            echo '</div>'; // Close the slide element after every four boxes
            
            $swipper_buttons[]= '<div class="swiper-button" id="swiper-button">'.$j++.'</div>';
        }
       $i++;
      
    }
    
    // Check if any remaining boxes need to be closed
    if ($counter % 4 != 0) {
        echo '</div>'; // Close the slide element if there are remaining boxes
        
        $swipper_buttons[]='<div class="swiper-button" id="swiper-button">'.$j++.'</div>';
    }
    
    echo '<div class="swiper-navigation">';
    echo implode('', $swipper_buttons); // Display the array elements
    echo '</div>';
}

$conn->close();
?>
