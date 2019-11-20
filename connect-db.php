<?php
// Database Variables (edit with your own server information)
$server = '66.147.242.186';
$user = 'urcscon3_assign6';
$pass = 'coffee1N/21';
$db = 'urcscon3_assign6';

// Connect to Database
$connection = mysqli_connect($server,$user,$pass,$db);
if (!$connection) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
?>