
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

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Insert the form data into the table
$sql = "INSERT INTO jobs (category,type, job_title, salary_amount, short_description, full_description, responsibilities, requirements) VALUES ('$category', '$type', '$jobTitle', '$salary_amount', '$short_description','$full_description', '$responsibilites', '$requirements')";

if ($conn->query($sql) === TRUE) {
    // Data inserted successfully, redirect back to the form page
    header("Location: ../addjob.html");
    exit;

} else {
    echo "Error inserting data: " . $conn->error;
}

// Close the database connection
$conn->close();

?>



