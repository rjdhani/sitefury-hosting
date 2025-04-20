<?php
$servername = "localhost";
$username = "nybypzpa_signup";  // Your database username (may vary)
$password = "+UjAWkIc.nv2";  // Your database password (may vary)
$dbname = "nybypzpa_login";  // Your database name

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
