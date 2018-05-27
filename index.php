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
      <li class="active"><a href="library.html">Library</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Background Color<span class="caret"></span></a>
        <ul class="dropdown-menu">
        <li> <button  href="#" class = "btn-lg btn-block" style="background-color:whitesmoke" type="button"
onclick="document.getElementById('book').style.backgroundColor = 'whitesmoke'"> </button></li>        
<li> <button  href="#" class ="btn-lg btn-block" style="background-color:#efcba7" type="button"
        onclick="document.getElementById('book').style.backgroundColor = '#efcba7'"> </button></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">  Font Size <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'x-small'" > x-small  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'small'" > small  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'medium'" > medium  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'large'" > large  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'x-large'" > x-large  </button></li>
          <li> <button  href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontSize = 'xx-large'" > xx-large  </button></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Font Style  <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li> <button style = "font-family:Verdana" href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontFamily = 'Verdana'" > Verdana </button></li>
          <li> <button style = "font-family:Lucida Console" href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontFamily = 'Lucida Console'" >Lucida Console</button></li>
          <li> <button style = "font-family:Arial" href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontFamily = 'Arial'" > Arial </button></li>
          <li> <button style = "font-family:Tahoma" href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontFamily = 'Tahoma'" >Tahoma</button></li>
          <li> <button  style = "font-family:Times New Roman" href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontFamily = 'Times New Roman'" > Times New Roman </button></li>
          <li> <button style = "font-family:Georgia" href="#" class ="btn-md  btn-block" onclick = "document.getElementById('book').style.fontFamily = 'Georgia'" >Georgia</button></li>
        </ul>
      </li>

  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Chapter <span class="caret"></span></a>
        <ul class="dropdown-menu" id = "toc" >
           


        </ul>
      </li>

        </ul>
    </ul>
  </div>
</nav>


  <div class = "container"  > 

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
