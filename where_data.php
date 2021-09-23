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

$sql = "SELECT name,actor FROM movies WHERE actor='shivraj'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "name: " . $row["name"].  "   ------   Actor: " . $row["actor"].  "<br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
