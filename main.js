var font_size = 12;

function fontChange(n){
    font_size +=n;
     document.getElementById('book').style.fontSize = parseInt(font_size) +"px" ;
}