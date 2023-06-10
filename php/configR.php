<?php
$conn = new mysqli ("localhost", "root", "", "recruitement company system");
if ($conn->connect_error){
    die("Databse failed to connect: ".$conn->connect_error);
}