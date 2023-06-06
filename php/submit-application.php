<?php

require 'config.php';

if(isset($_POST["submit"])){
    
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];

    $sql = "INSERT INTO application(Applicant_fname, Applicant_lname, Applicant_email, Applicant_mobile) VALUES('$fname', '$lname', '$email', '$mobile')";

    if($conn->query($sql)){
        echo "Inserted Successfully";
    }
    else{
        echo "ERROR: " . $conn->error;
    }

    $conn->close();
}
else{
    echo "Please Enter your details.";
}




// $sql = "INSERT INTO application(Application_ID, Applicant_fname, Applicant_lname, Applicant_email, Applicant_mobile) VALUES(001, $fname, $lanme, $email, $mobile)";

// if($conn->query($sql)){
//     echo "Inserted successfully";
// }
// else{
//     echo "Error: ". $conn->error;
// }

// $conn->close();

?>