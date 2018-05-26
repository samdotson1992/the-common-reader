<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="main.js"></script>
<link href="main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body > 

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">The Common Reader</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Library</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Background Color<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li> <button  href="#" class = "btn-lg btn-block" style="background-color:whitesmoke" type="button"
onclick="document.getElementById('book').style.backgroundColor = 'whitesmoke'"> </button></li>        
<li> <button  href="#" class ="btn-lg btn-block" style="background-color:#efcba7" type="button"
        onclick="document.getElementById('book').style.backgroundColor = '#efcba7'"> </button></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Font Size <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'x-small'" > x-small  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'small'" > small  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'medium'" > medium  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'large'" > large  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'x-large'" > x-large  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'xx-large'" > xx-large  </button></li>
        </ul>
      </li>
        </ul>
    </ul>
  </div>
</nav>


  <div class = "container"  > 

<div id = "book">
<?php 

$url = "http://www.gutenberg.org" . $_GET['book']

echo $url 

error_reporting(E_ERROR | E_PARSE);
//$html = file_get_contents("https://www.gutenberg.org/files/31469/31469-h/31469-h.htm");
//error_reporting(E_ALL);
//ini_set('display_errors', 1);


$d = new DOMDocument;
$mock = new DOMDocument;
$contents = file_get_contents('https://www.gutenberg.org/files/31469/31469-h/31469-h.htm');
$d->loadHTML($contents);
$body = $d->getElementsByTagName('body')->item(0);
foreach ($body->childNodes as $child){
    
    $mock->appendChild($mock->importNode($child, true));
}


echo $mock->saveHTML();

?>


</div>



<script>
var pres = document.getElementsByTagName("pre")
pres[0].remove()
pres[0].remove()
</script>

</div>

</body>
</html>
