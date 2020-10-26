<?php

$host = "localhost";
$user = "hdang";
$password = "Haidang@123456789";
$database = "Loginfb";
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
    echo "Connection Fail: " . mysqli_connect_errno();
    exit;
}