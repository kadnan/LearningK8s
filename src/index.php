<?php
echo "Inside K8s with MySQL DIj <br>";
$conn = new mysqli("mysql8-service", "root", ".sweetpwd.", "my_db");
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo $row['name']."<br>";
	}
} else {
	echo "0 results";
}
$conn->close();