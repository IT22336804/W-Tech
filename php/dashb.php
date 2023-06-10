

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Manage Jobs</title>
    
    <link rel="stylesheet" href="../css/dashb.css">
</head>
<body>
    <div class="grid-container">
        <!-- Rest of the code -->
        
        <table>
            <tr>
                <th>JOB ID</th>
                <th>Category</th>
                <th>Job Title</th>
                <th>Short Description</th>
                <th>Salary</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            
            <?php
            // Display job data in table rows
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["job_id"] . "</td>";
                    echo "<td>" . $row["category"] . "</td>";
                    echo "<td>" . $row["job_title"] . "</td>";
                    echo "<td>" . $row["short_description"] . "</td>";
                    echo "<td>" . $row["salary"] . "</td>";
                    echo "<td>";
                    echo "<form method='POST' action=''>";
                    echo "<input type='hidden' name='job_id' value='" . $row["job_id"] . "'>";
                    echo "<select name='status' onchange='this.form.submit()'>";
                    echo "<option value='Selected for Interview'" . ($row["status"] == "Selected for Interview" ? " selected" : "") . ">Selected for Interview</option>";
                    echo "<option value='Rejected'" . ($row["status"] == "Rejected" ? " selected" : "") . ">Rejected</option>";
                    echo "<option value='Waitlisted'" . ($row["status"] == "Waitlisted" ? " selected" : "") . ">Waitlisted</option>";
                    echo "</select>";
                    echo "</form>";
                    echo "</td>";
                    echo "<td>";
                    echo "<form method='POST' action=''>";
                    echo "<input type='hidden' name='delete_id' value='" . $row["job_id"] . "'>";
                    echo "<button type='submit' class='delete-button'>Delete</button>";
                    echo "</form>";
                    echo "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='7'>No jobs found</td></tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
