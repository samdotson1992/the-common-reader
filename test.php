<!doctype html>
<html>

<h1>

 <?php
 ini_set('display_errors', 1);
 error_reporting(E_ALL);

$servername = "localhost";
$username = "sam";
$password = "Password1@";
$dbname = "books";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";


// sql to create table
$sql = "CREATE TABLE books_info (
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500),
    number INT(10),
    coverurl VARCHAR(500),
    desc VARCHAR(500),
    gutrul VARCHAR(500)
    )";
    

    if ($conn->query($sql) === TRUE) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();

// Create database
$conn->close();

?> 

</h1>

</html>
