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

// Check if the job ID was passed as a parameter
if (isset($_POST["id"])) {
    // Get the job ID
    $jobId = $_POST["id"];

    $sql = "DELETE FROM jobs WHERE id = $jobId";

if ($conn->query($sql)) {
    echo "success";
} else {
    echo "error: " . $conn->error;
}

}

$conn->close();
?>
