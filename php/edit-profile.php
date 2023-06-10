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

        $sql = "UPDATE user SET First_Name = '$fname', Last_Name = '$lname', Email = '$email', Mobile = '$mobile', Bio = '$bio', Username = '$uname' WHERE Email = '$loggedUser' ";

        if($conn->query($sql)){

            echo "<script>alert('Details successfully updated')</script>";
            $_SESSION["loggedUser"] = $email;
            header("location: user-profile.php");
        }
        else{
            echo "<script>alert('Error')</script>";
        }
    }

?>