<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment company system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT job_title, salary_amount, short_description, category, full_description, responsibilities, requirements FROM jobs";
$result = $conn->query($sql);

$counter = 0; 
$i = 0;

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $i++;

        echo '<div class="job-description" id="job-description' . $i . '" style="display: none;">';
        echo '  <div class="topic-job">';
        echo '    <h1 class="job-title" data-jobid="' . $row['job_title'] . '">' . $row['job_title'] . '</h1>';
        echo '   <a href="application-form.php"> <button class="apply">Apply</button></a>';
        echo '  </div>';
        echo '  <hr style="border-color: black; width: 100%;">';
        echo '  <div class="details">';
        echo '    <h2>Job Details</h2>';
        echo '    <br><br>';
        echo '    <h3>Description</h3> ';
        echo '    <p>'.$row['full_description'].'</p>';
        echo '    <br><h3>Responsibilities</h3>';
        echo '    <br>';
        echo '    '.$row['responsibilities'].'';
        echo '    <br>';
        echo '    <h3>Requirements</h3>';
        echo '    <br>';
        echo '    '.$row['requirements'].'';
        echo '  </div>';
        echo '</div>';
        
    }
}

$conn->close();
?>