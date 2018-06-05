<!doctype html>
<html>

<h1>

 <?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);

$servername = "localhost";
$username = "sam";
$password = "Password1@";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

// Create database
$sql = "CREATE DATABASE test";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

?> 

</h1>

</html>
