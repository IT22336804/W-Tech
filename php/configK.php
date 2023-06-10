<?php

$conn = new mysqli("localhost", "root", "", "recruitment company system");

if($conn->connect_error){
    die("Connection failed: ". $conn->connect_error);
}


?>