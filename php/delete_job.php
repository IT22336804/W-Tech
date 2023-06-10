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

    // Prepare and execute the delete query
    $stmt = $conn->prepare("DELETE FROM jobs WHERE id=?");
    $stmt->bind_param("i", $jobId);

    if ($stmt->execute()) {
        // Delete successful
        echo "success";
    } else {
        // Delete failed
        echo "error";
    }
}

$conn->close();
?>
