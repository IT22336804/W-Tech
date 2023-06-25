
<?php
// Retrieve form data
$category = $_POST['category'];
$type = $_POST['type'];
$jobTitle = $_POST['job_title'];
$salary_amount = $_POST['salary_amount'];
$short_description = $_POST['short-description'];
$full_description = $_POST['full-description'];
$responsibilites = $_POST['responsibilities'];
$requirements = $_POST['requirements'];
// Create a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment company system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO jobs (category,type, job_title, salary_amount, short_description, full_description, responsibilities, requirements) VALUES ('$category', '$type', '$jobTitle', '$salary_amount', '$short_description','$full_description', '$responsibilites', '$requirements')";

if ($conn->query($sql) === TRUE) {
   
    header("Location: ../addjob.html");
    exit;

} else {
    echo "Error inserting data: " . $conn->error;
}


$conn->close();

?>



