
//Muestra un alert si alguno de los campos no esta relleno
function first(){
var usr = document.getElementById('user').value;
var pwd = document.getElementById('password').value;

if(usr==''){
alert('USUARIO esta vacio!');
return false;

}else if(pwd == ''){
alert('PASSWORD esta vacio!');
return false;
}else{
return true;
}


}
function second(){
var tit = document.getElementById('titulo').value;
var arc = document.getElementById('archivo').value;

if(tit == ''){
alert('TITULO esta vacio!');
return false;

}else if(arc == ''){
alert('ARCHIVO esta vacio!');
return false;
}else{
return true;
}

}
