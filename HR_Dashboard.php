<?php
// Connect to your database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment company system";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the total number of jobs from your database
$sql = "SELECT COUNT(*) AS total_jobs FROM jobs";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$totalJobs = $row['total_jobs'];

// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>HR_Dashboard</title>
    <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet"> -->
    <link rel="stylesheet" href="css\HR_Dashboard.css">
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

        <aside id="sidebar">
            <div class="sidebar-title">
                <div class="sidebar-brand">
                    <img class="logo-icon" src="images\W - Tech.png" alt="logo icon" width="75%">
                </div>
                <img class="material-icons-outlined" src="images/close_FILL0_wght400_GRAD0_opsz48.png" alt="close icon" onclick="closeSidebar()">
            </div>

            <ul class="sidebar-list">
               
            <ul class="sidebar-list">
                <li class="sidebar-list-item">
                    <img class="material-icons-outlined" src="images/overview_FILL0_wght400_GRAD0_opsz48.png" alt="overview icon">
                    <a href="HR_Dashboard.php" class="icon-name">Dashboard</a>
                </li>
                <li class="sidebar-list-item">
                    <img class="material-icons-outlined" src="images/groups_FILL0_wght400_GRAD0_opsz48.png" alt="candidates icon">
                    <a class="icon-name">Manage Applicants</a>
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
        <main class="main-container">
                <div class="main-title">
                    <p class="font-weight-bold">DASHBOARD</p>
                </div>

                <div class="main-cards">
                    <div class="card">
                        <div class="card-inner">
                            <p class="text-primary">TOTAL JOBS</p>
                            <img class="card-icons text-blue" src="images/work_FILL0_wght400_GRAD0_opsz48.png" alt="jobs">
                        </div>
                        <span class="text-primary font-weight-bold"><?php echo $totalJobs; ?></span>
                    </div>

                    <div class="card">
                        <div class="card-inner">
                            <p class="text-primary">TOTAL USERS</p>
                            <img class="card-icons text-orange" src="images/person_2_FILL0_wght400_GRAD0_opsz48.png" alt="users">
                        </div>
                        <span class="text-primary font-weight-bold">85</span>
                    </div>

                    <div class="card">
                        <div class="card-inner">
                            <p class="text-primary">SUCCESSFUL HIRINGS</p>
                            <img class="card-icons text-green" src="images/done_all_FILL0_wght400_GRAD0_opsz48.png" alt="hired">
                        </div>
                        <span class="text-primary font-weight-bold">164</span>
                    </div>
                </div>
        </main>
    </div>
    
</body>


</html>