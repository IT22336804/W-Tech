<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Manage Jobs</title>
    
    <link rel="stylesheet" href="css\Manage jobs.css">
</head>
<body>
    <div class="grid-container">
        <header class="header">
            <div class="menu-icon" onclick="openSidebar()">
                <img class="material-icons-outlined" src="images/menu_FILL0_wght400_GRAD0_opsz48.png" alt="menu icon">
            </div>

            <div class="header-left">
                <img class="material-icons-outlined" src="images/search_FILL0_wght400_GRAD0_opsz48.png" alt="search icon">
            </div>

            <div class="header-right">
                <img class="material-icons-outlined" src="images/notifications_FILL0_wght400_GRAD0_opsz48.png" alt="notification icon">
                <img class="material-icons-outlined" src="images/account_circle_FILL0_wght400_GRAD0_opsz48.png" alt="profile icon">
            </div>
        </header>

        <!-- SIDEBAR -->
        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <img class="logo-icon" src="images\W - Tech.png" alt="logo icon" width="75%">
                </div>
                <img class="material-icons-outlined" src="images/close_FILL0_wght400_GRAD0_opsz48.png" alt="close icon" onclick="closeSidebar()">
            </div>

            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <img class="material-icons-outlined" src="images/overview_FILL0_wght400_GRAD0_opsz48.png" alt="overview icon">
                    <a href="HR_Dashboard.php" class="icon-name">Dashboard</a>
                </li>
                <li class="sidebar-list-item">
                    <img class="material-icons-outlined" src="images/groups_FILL0_wght400_GRAD0_opsz48.png" alt="candidates icon">
                    <b class="icon-name">Manage Applicants</b>
                </li>
                <li class="sidebar-list-item">
                    <img class="material-icons-outlined" src="images/edit_calendar_FILL0_wght400_GRAD0_opsz48.png" alt="schedule icon">
                    <a href="addjob.html" class="icon-name">Add Jobs</a>

                </li>
                <li class="sidebar-list-item">
                    <img class="material-icons-outlined" src="images/settings_FILL0_wght400_GRAD0_opsz48.png" alt="settings icon">
                    <a href="Manage Jobs.php" class="icon-name">Manage Jobs</a>

                </li> 
                
            </ul>
        </aside>
       

        <table>
            <tr>
                <th>JOB ID</th>
                <th>Category</th>
                <th>Job Title</th>
                <th>Short Description</th>
                <th>Salary</th>
                <th>Full Description</th>
                <th>Responsibilities</th>
                <th>Requirements</th>
                <th >Edit</th>
                <th >Delete</th>
            </tr>
            <?php
                include 'php\Jobs table.php'
            ?>
        </table>

        <script>
    function editJob(jobId) {
        // Redirect to the edit page with the job ID as a parameter
        window.location.href = "edit job.php?id=" + jobId;
    }




    function deleteJob(jobId) {
        // Show the confirmation dialog
        var confirmDelete = confirm("Are you sure you want to delete this job?");

        // If the user confirms the deletion
        if (confirmDelete) {
            // Create a new XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Set up the request
            xhr.open("POST", "php/delete_job.php", true);
            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

            // Set up the callback function
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response from the server
                    if (xhr.responseText === "success") {
                        // Delete successful
                        alert("Job deleted successfully.");
                        window.location.reload();
                    } else {
                        // Delete failed
                        alert("Failed to delete the job.");
                    }
                } else if (xhr.readyState === 4 && xhr.status !== 200) {
                    // Handle errors if any
                    alert("Error: " + xhr.status);
                }
            };

            // Send the request with the job ID as data
            xhr.send("id=" + jobId);
        }
    }
</script>

    
</body>


</html>