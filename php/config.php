<?php

$conn = new mysqli("localhost", "root", "", "testapplicationform");

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}


?>