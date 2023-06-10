<?php
    session_start();
    $loggedUser = $_SESSION["loggedUser"];
    require "configK.php";

    if(isset($_POST["submit"])){
        $enteredPwd = $_POST["pwd"];

        $sql = "SELECT Password FROM user WHERE Email = '$loggedUser'";
        $result = $conn->query($sql);
    
        $row = $result->fetch_assoc();
    
        if($row["Password"] === $enteredPwd){
            $sql2 = "DELETE FROM user WHERE Email = '$loggedUser'";
            if($conn->query($sql2)){
                
                header("location: ../index.html");
            }
            else{
                echo "<script>alert('Cannot Remove User')</script>";
            }
            
        }
    
        else{
            echo "<script>alert('Invalid Password')</script>";
        }
    }


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Remove Account</title>
    <link rel="stylesheet" type="text/css" href="../css/delete-account.css">
</head>
<body>
    <div class="form-div">
        
        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
            <div class="form-content">
                <h2 class="form-header">Remove Account</h2><br>
                <label for="pwd">Enter Password</label>
                <input type="password" name="pwd" class="pwd-input">

                <input type="submit" name="submit" value="Remove" class="submit-btn">
            </div>
        </form>
    </div>
</body>
</html>