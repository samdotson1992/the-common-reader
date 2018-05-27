<!doctype html>
<html>

<h1>
<?php
$book = $_GET['book'];

echo 'https://www.gutenberg.org/files/' . $book . '/'. $book.  '-h/'. $book . '-h.htm';

?>
</h1>

</html>
