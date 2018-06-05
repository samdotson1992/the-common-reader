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
$conn->close();

?> 

</h1>

</html>
