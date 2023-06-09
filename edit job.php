<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recruitment company system";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $jobId = $_GET["id"] ?? $_POST["id"];

    $category = $_POST["category"];
    $jobTitle = $_POST["job_title"];
    $shortDescription = $_POST["short_description"];
    $salaryAmount = $_POST["salary_amount"];
    $fullDescription = $_POST["full_description"];
    $responsibilities = $_POST["responsibilities"];
    $requirements = $_POST["requirements"];

    $sql = "UPDATE jobs SET category='$category', job_title='$jobTitle', short_description='$shortDescription', salary_amount='$salaryAmount', full_description='$fullDescription', responsibilities='$responsibilities', requirements='$requirements' WHERE id=$jobId";

    if ($conn->query($sql) === true) {
        header("Location: Manage Jobs.php?message=success");
        exit();
    } else {
        header("Location: Manage Jobs.php?message=error");
        exit();
    }
} else {
    $jobId = $_GET["id"];

    $sql = "SELECT id, category, job_title, short_description, salary_amount, full_description, responsibilities, requirements FROM jobs WHERE id=$jobId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $job = $result->fetch_assoc();
    } else {
        header("Location: Manage Jobs.php?message=notfound");
        exit();
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
    <link rel="stylesheet" href="css\Edit jobs.css">
</head>
<body>
    <h1>Edit Job</h1>

    <form action="edit job.php?id=<?php echo $jobId; ?>" method="POST">
        <div>
            <label for="category">Category:</label>
            <select id="category" name="category">
                <option value="software-developer" <?php if ($job["category"] === "software-developer") echo "selected"; ?>>Software Developer</option>
                <option value="data-analyst" <?php if ($job["category"] === "data-analyst") echo "selected"; ?>>Data Analyst</option>
                <option value="ux-ui-designer" <?php if ($job["category"] === "ux-ui-designer") echo "selected"; ?> >UX/UI Designer</option>
                <option value="project-manager" <?php if ($job["category"] === "project-manager") echo "selected"; ?>>Project Manager</option>
                <option value="quality-assurance" <?php if ($job["category"] === "quality-assurance") echo "selected"; ?>>Quality Assurance</option>
                <option value="it-consultant" <?php if ($job["category"] === "it-consultant") echo "selected"; ?>>IT Consultant</option>
                <option value="cybersecurity" <?php if ($job["category"] === "cybersecurity") echo "selected"; ?>>Cyber Security</option>
                
            </select>
          
        </div>
        <div>
            <label for="job_title">Job Title:</label>
            <input type="text" id="job_title" name="job_title" value="<?php echo $job["job_title"]; ?>">
        </div>
        <div>
            <label for="short_description">Short Description:</label>
            <textarea id="short_description" name="short_description"><?php echo $job["short_description"]; ?></textarea>
        </div>
        <div>
            <label for="salary_amount">Salary:</label>
            <input type="text" id="salary_amount" name="salary_amount" value="<?php echo $job["salary_amount"]; ?>">
        </div>
        <div>
            <label for="full_description">Full Description:</label>
            <textarea id="full_description" name="full_description"><?php echo $job["full_description"]; ?></textarea>
        </div>
        <div>
            <label for="responsibilities">Responsibilities:</label>
            <textarea id="responsibilities" name="responsibilities"><?php echo $job["responsibilities"]; ?></textarea>
        </div>
        <div>
            <label for="requirements">Requirements:</label>
            <textarea id="requirements" name="requirements"><?php echo $job["requirements"]; ?></textarea>
        </div>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
