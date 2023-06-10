<?php
$conn = new mysqli ("localhost", "root", "", "recruitment company system");
if ($conn->connect_error){
    die("Databse failed to connect: ".$conn->connect_error);
}