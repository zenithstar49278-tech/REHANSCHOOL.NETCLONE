error_log("Test message", 3, "/path/to/error.log");  // Create a log file<?php
$host = 'localhost';
$username = 'upbek8wm1lktc';
$password = 'wkctga6nhgu8';
$database = 'databasedbvfmjpwhpmzpv';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
