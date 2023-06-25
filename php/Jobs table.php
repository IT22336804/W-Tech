<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment company system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT id,job_title, salary_amount, short_description,category,full_description,responsibilities,requirements FROM jobs";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["category"]."</td>";
        echo "<td>".$row["job_title"]."</td>";
        echo "<td>".$row["short_description"]."</td>";
        echo "<td>".$row["salary_amount"]."</td>";
        echo "<td>".$row["full_description"]."</td>";
        echo "<td>".$row["responsibilities"]."</td>";
        echo "<td>".$row["requirements"]."</td>";
        echo '<td><button onclick="editJob('.$row["id"].')"  class="edit-button">Edit</button></td>';
        echo '<td><button onclick="deleteJob('.$row["id"].')" class="delete-button">Delete</button></td>';
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='6'>No jobs found.</td></tr>";
}



$conn->close();

?>