<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "bookingform";

$con = new mysqli($servername, $username, $password, $database_name);

if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error . " (Error Code: " . $con->connect_errno . ")");
}