
<?php

$servername="localhost";
$username="root";
$password="Pass@123";
$db="tp";

$conn=mysqli_connect($servername, $username, $password, $db);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

echo "connection sucessfully";

mysqli_close($conn);

?>