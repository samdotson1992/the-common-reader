<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="main.js"></script>
<link href="main.css" rel="stylesheet" type="text/css" />

</head>

<?php 


//$html = file_get_contents("https://www.gutenberg.org/files/31469/31469-h/31469-h.htm");
error_reporting(E_ALL);
ini_set('display_errors', 1);


$d = new DOMDocument;
$mock = new DOMDocument;
$contents = file_get_contents("https://www.gutenberg.org/files/31469/31469-h/31469-h.htm");
$d->loadHTML($contents);
$body = $d->getElementsByTagName('body')->item(0);
foreach ($body->childNodes as $child){
    
    $mock->appendChild($mock->importNode($child, true));
}

echo $mock->saveHTML();



?>


<script>
var page = <?php $mock ?>;

</script>



</body>
</html>
