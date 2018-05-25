<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="main.js"></script>
<link href="main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body id = "book" > 

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li> <button class ="b" style="background-color:whitesmoke" type="button"
onclick="document.getElementById('book').style.backgroundColor = 'whitesmoke'"> </button></li>        
<li> <button class ="b" style="background-color:#efcba7" type="button"
        onclick="document.getElementById('book').style.backgroundColor = '#efcba7'"> </button></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
      </li>
      <li><a href="#">Page 2</a></li>
      <li><a href="#">Page 3</a></li>
    </ul>
  </div>
</nav>



       


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
