<!DOCTYPE html>
<html>
<head>
	<title>CanSat in Greece</title>
</head>
<body>
	<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "news";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, title, details FROM cansat_news";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - title: ". $row["title"]. " " . $row["details"] . "<br>";
         echo $row["id"];
         echo $row["title"];
     }
} else {
     // echo "0 results";
}

$conn->close();
?>
</body>
</html>