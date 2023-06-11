<?php
    session_start();
    echo $loggedUser = $_SESSION["loggedUser"];

    require "configK.php";

    if(isset($_POST["submit"])){

        $uname = $_POST["uname"];
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $email = $_POST["email"];
        $mobile = $_POST["mobile"];
        $bio = $_POST["bio"];

        if(!empty($_FILES["profile-pic"]["name"])){
            $pic_name = $email . "_profile_pic";
            $pic_temp_name = $_FILES["profile-pic"]["tmp_name"];
            $pic_target_dir = "../uploads/profile pics/";
            $pic_target_file = $pic_target_dir . basename($pic_name);

            move_uploaded_file($pic_temp_name, $pic_target_file);
        }
        else{
            $sql2 = "SELECT Profile_pic_location FROM user WHERE Email = '$loggedUser'";
            $result = $conn->query($sql2);
            $row = $result->fetch_assoc();
            $pic_target_file = $row["Profile_pic_location"];
        }

        $sql = "UPDATE user SET First_Name = '$fname', Last_Name = '$lname', Email = '$email', Mobile = '$mobile', Bio = '$bio', Username = '$uname', Profile_pic_location = '$pic_target_file' WHERE Email = '$loggedUser' ";

        if($conn->query($sql)){

            echo "<script>alert('Details successfully updated')</script>";
            $_SESSION["loggedUser"] = $email;
            $_SESSION["username"] = $uname;
            $_SESSION["pic"] = $pic_target_file;
            header("location: user-profile.php");
        }
        else{
            echo "<script>alert('Error')</script>";
        }
    }

    $conn->close();

?>