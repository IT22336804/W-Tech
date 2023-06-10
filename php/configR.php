<?php
$conn = new mysqli ("localhost", "root", "", "job recruitement");
if ($conn->connect_error){
    die("Databse failed to connect: ".$conn->connect_error);
}