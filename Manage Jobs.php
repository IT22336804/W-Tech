

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
                    <a class="icon-name" href="ManageJobApp.php">Manage Applications</a>
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
        
        window.location.href = "edit job.php?id=" + jobId;
    }


    function deleteJob(jobId) {
    var confirmDelete = confirm("Are you sure you want to delete this job?");

    // If confirm delete
    if (confirmDelete) {
        var form = document.createElement("form");
        form.method = "POST";
        form.action = "php/delete_job.php";

        var input = document.createElement("input");
        input.type = "hidden";
        input.name = "id";
        input.value = jobId;

        form.appendChild(input);
        document.body.appendChild(form);
        form.addEventListener("submit", function() {
            
            window.location.href = "Manage Jobs.php";
        });

        form.submit();
    }
}

</script>

    
</body>


</html>