<?php
// type your $username and $password
$servername = "localhost";
$username = "arro";
$password = "arro";
$dbname = "dogtordb";

echo "test";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
echo "test";
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

