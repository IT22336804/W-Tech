<?php
require 'configK.php';

if (isset($_POST['action']) && isset($_POST['Application_ID'])) {
    $action = $_POST['action'];
    $id = $_POST['Application_ID'];

    if ($action === 'accept') {
        $status = 'Accepted';
        $sql = "UPDATE application SET status = '$status' WHERE Application_ID = $id";
        if ($conn->query($sql)) {
            echo '<script>alert("Status updated successfully")</script>';
        } else {
            echo "ERROR: " . $conn->error;
        }
    } elseif ($action === 'reject') {
        $status = 'Rejected';
        $sql = "UPDATE application SET status = '$status' WHERE Application_ID = $id";
        if ($conn->query($sql)) {
            echo '<script>alert("Status updated successfully")</script>';
        } else {
            echo "ERROR: " . $conn->error;
        }
    } elseif ($action === 'waitlist') {
        $status = 'Waitlisted';
        $sql = "UPDATE application SET status = '$status' WHERE Application_ID = $id";
        if ($conn->query($sql)) {
            echo '<script>alert("Status updated successfully")</script>';
        } else {
            echo "ERROR: " . $conn->error;
        }
    } elseif ($action === 'delete') {
        $sql = "DELETE FROM application WHERE Application_ID = $id";
        if ($conn->query($sql)) {
            echo '<script>alert("Application deleted successfully")</script>';
        } else {
            echo "ERROR: " . $conn->error;
        }
    } else {
        echo '<script>alert("Invalid action")</script>';
    }
}

// Retrieve all job applications
$sql = "SELECT * FROM application";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['Applicant_fname'] . ' ' . $row['Applicant_lname'] . '</td>';
        echo '<td>' . $row['Applicant_email'] . '</td>';
        echo '<td>' . $row['Applicant_mobile'] . '</td>';
        echo '<td><a href="' . $row['Resume_location'] . '">View Resume</a></td>';
        echo '<td><a href="' . $row['Cover_letter_location'] . '">View Cover Letter</a></td>';
        echo '<td>' . $row['Comments'] . '</td>';
        echo '<td>' . $row['status'] . '</td>';
        echo '<td>';
        echo '<button onclick="updateStatus(\'accept\', ' . $row['Application_ID'] . ')">Accept</button>';
        echo '<button onclick="updateStatus(\'reject\', ' . $row['Application_ID'] . ')">Reject</button>';
        echo '<button onclick="updateStatus(\'waitlist\', ' . $row['Application_ID'] . ')">Waitlist</button>';
        echo '<button onclick="updateStatus(\'delete\', ' . $row['Application_ID'] . ')">Delete</button>';
        echo '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>No job applications found.</p>';
}

$conn->close();
?>
$conn->close();
?>
