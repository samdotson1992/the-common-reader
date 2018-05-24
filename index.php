<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="main.js"></script>
<link href="main.css" rel="stylesheet" type="text/css" />

</head>

<body id = "book" > 


<ul class="sidenav">
        <li><a href="#library">Library</a></li>
        <li><a href="#settings">Settings</a></li>

        <li> <button class ="b" type="button" onclick= "fontChange(-1)" > - </button></li>
                
                <li> <button class ="b" type="button" 
                        onclick= "fontChange(1)" > + </button></li>

        <li> <button class ="b" style="background-color:whitesmoke" type="button" 
onclick="document.getElementById('book').style.backgroundColor = 'whitesmoke'"> </button></li>

<li> <button class ="b" style="background-color:#efcba7" type="button" 
        onclick="document.getElementById('book').style.backgroundColor = '#efcba7'"> </button></li>

</ul>
      

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
var pres = document.getElementsByTagName("pre")
pres[0].remove()
pres[0].remove()
</script>

</body>
</html>
