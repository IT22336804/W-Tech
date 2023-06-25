<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment company system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST["id"])) {
    
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
