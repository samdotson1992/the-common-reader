<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="main.js"></script>
<link href="main.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://s3-us-west-1.amazonaws.com/patterns.esri.com/files/calcite-web/1.0.1/css/calcite-web.min.css">
<script src="https://s3-us-west-1.amazonaws.com/patterns.esri.com/files/calcite-web/1.0.1/js/calcite-web.min.js"></script>
<link rel="stylesheet" href="\awesomplete-gh-pages\awesomplete.css" /> 
<script src="\awesomplete-gh-pages\awesomplete.js" async></script> 
</head>
<body > 

<div class="panel modifier-class">
<nav  class="leader-1"> 
<li class="btn btn-grouped btn-transparent" ><a href="library.html">Library</a></li>
<div class="dropdown js-dropdown">
  <!-- extends side-nav -->
  <button class="btn btn-transparent dropdown-btn js-dropdown-toggle" tabindex="0" aria-haspopup="true" aria-expanded="false"> Font size</button>
  <!-- extends side-nav -->
  <nav class="dropdown-menu modifier-class" role="menu">
    <!-- extends side-nav-link -->
    <a> <button  href="#" class ="btn dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontSize = 'x-small'" > x-small  </button></a>
    <a> <button  href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontSize = 'small'" > small  </button></a>
    <a> <button  href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontSize = 'medium'" > medium  </button></a>
    <a> <button  href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontSize = 'large'" > large  </button></a>
    <a> <button  href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontSize = 'x-large'" > x-large  </button></a>
    <a> <button  href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontSize = 'xx-large'" > xx-large  </button></a>
  </nav>
  </div>
  <div class="dropdown js-dropdown">
  <!-- extends side-nav -->
  <button class="btn btn-transparent dropdown-btn js-dropdown-toggle" tabindex="0" aria-haspopup="true" aria-expanded="false"> Font style</button>
  <!-- extends side-nav -->
  <nav class="dropdown-menu modifier-class" role="menu">
    <!-- extends side-nav-link -->
 
    <li> <button style = "font-family:Verdana" href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontFamily = 'Verdana'" > Verdana </button></a>
      <a> <button style = "font-family:Lucida Console" href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontFamily = 'Lucida Console'" >Lucida Console</button></a>
      <a> <button style = "font-family:Arial" href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontFamily = 'Arial'" > Arial </button></a>
      <a> <button style = "font-family:Tahoma" href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontFamily = 'Tahoma'" >Tahoma</button></a>
      <a> <button  style = "font-family:Times New Roman" href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontFamily = 'Times New Roman'" > Times New Roman </button></a>
      <a> <button style = "font-family:Georgia" href="#" class ="btn  dropdown-link"  role="menu-item" onclick = "document.getElementById('book').style.fontFamily = 'Georgia'" >Georgia</button></a>


  </nav>
  </div>

</nav>
</div>
  <div class = "container"> 

<div id = "book">

<?php 


//error_reporting(E_ALL);
//ini_set('display_errors', 1);

error_reporting(E_ERROR | E_PARSE);
//$html = file_get_contents("https://www.gutenberg.org/files/31469/31469-h/31469-h.htm");

$book = $_GET['book'];

$url =  'https://www.gutenberg.org/files/' . $book . '/'. $book.  '-h/'. $book . '-h.htm';

$d = new DOMDocument;
$mock = new DOMDocument;
$contents = file_get_contents($url);
$d->loadHTML($contents);
$body = $d->getElementsByTagName('body')->item(0);
foreach ($body->childNodes as $child){
    
    $mock->appendChild($mock->importNode($child, true));
}

echo $mock->saveHTML();

?>


</div>



<script>
calcite.init();

var pres = document.getElementsByTagName("pre")
pres[0].remove()

var toc = document.getElementsByClassName("toc")
drop_toc = ""

for (var i = toc.length - 1; i >= 0; --i) {
  drop_toc += "<li>" +  toc[i].innerHTML + "</li>"
  toc[i].remove();
}

document.getElementById("toc").innerHTML = drop_toc;
</script>

</div>

</body>
</html>
