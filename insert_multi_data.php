<?php
$servername = "localhost";
$username = "apekshan";
$password = "appu3";
$dbname = "newDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO movies(name, actor, actress,director, year)
VALUES ('Avanr shrimannarayana', 'Rakshith', 'sanvi', 'Sachin', '2019');";

$sql .= "INSERT INTO movies (name, actor, actress,director, year)
VALUES ('Brahmachari', 'Satish', 'Aditi', 'Chandra','2019');";

$sql .="INSERT INTO movies (name, actor, actress,director, year)
VALUES ('Gentleman','Prajwal','Nishwika','Jadesh','2020');";

$sql .="INSERT INTO movies (name, actor,actress,director,year)
VALUES ('Mufti', 'shivraj' ,'Sanvi','Narthan','2017');";

$sql .="INSERT INTO movies(name, actor,actress,director,year)
VALUES ('Tagaru','shivraj','Bhavana','Soori','2018');";



if (mysqli_multi_query($conn, $sql)) {
  echo "Records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
