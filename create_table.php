<?php
$servername = "localhost";
$username = "apekshan";
$password = "appu3";
$dbname = "newDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE movies (
name VARCHAR(50) PRIMARY KEY,
actor VARCHAR(30) NOT NULL,
actress VARCHAR(30) NOT NULL,
director VARCHAR(50),
year INT(50)
)";

if ($conn->query($sql) === TRUE) {
  echo "Table movies created successfully";
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>

