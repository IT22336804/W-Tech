<?php
    require 'configK.php';

    if (isset($_GET['action']) && isset($_GET['Application_ID'])) {
        $action = $_GET['action'];
        $id = $_GET['Application_ID'];

        // Update the status based on the selected action
        if ($action === 'accept') {
            $status = 'Accepted';
        } elseif ($action === 'reject') {
            $status = 'Rejected';
        } elseif ($action === 'waitlist') {
            $status = 'Waitlisted';
        } elseif ($action === 'delete') {
            // Delete the application from the database
            $sql = "DELETE FROM application WHERE Application_ID = $id";
            if ($conn->query($sql)) {
                echo '<script>alert("Application deleted successfully")</script>';
            } else {
                echo "ERROR: " . $conn->error;
            }
        } else {
            echo '<script>alert("Invalid action")</script>';
        }

        // Update the status in the database if it's not a delete action
        if ($action !== 'delete') {
            $sql = "UPDATE application SET status = '$status' WHERE Application_ID = $id";
            if ($conn->query($sql)) {
                echo '<script>alert("Status updated successfully")</script>';
            } else {
                echo "ERROR: " . $conn->error;
            }
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
            echo '<button onclick="confirmAction(' . $row['Application_ID'] . ', \'accept\')">Accept</button>';
            echo '<button onclick="confirmAction(' . $row['Application_ID'] . ', \'reject\')">Reject</button>';
            echo '<button onclick="confirmAction(' . $row['Application_ID'] . ', \'waitlist\')">Waitlist</button>';
            echo '</td>';
            echo '<td><button onclick="confirmAction(' . $row['Application_ID'] . ', \'delete\')">Delete</button></td>';
            echo '</tr>';
        }

        echo '</table>';
    } else {
        echo 'No job applications found.';
    }

    $conn->close();
?>