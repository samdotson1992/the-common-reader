<!doctype html>
<html>

<h1>

<?php
$link = mysql_connect('localhost', 'sam', 'Password1@');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}

$sql = 'CREATE DATABASE my_db';
if (mysql_query($sql, $link)) {
    echo "Database my_db created successfully\n";
} else {
    echo 'Error creating database: ' . mysql_error() . "\n";
}
?>

</h1>

</html>
