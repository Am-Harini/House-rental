<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "house_rental";

// Attempt to establish a connection to the MySQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    // If connection failed, print debugging information
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit;
}

?>
