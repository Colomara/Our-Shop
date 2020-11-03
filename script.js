	function validate() {
		var userName = document.getElementById("userName");
		var userPassword = document.getElementById("userPassword");
		var userPassword1 = document.getElementById("userPassword1");
		var email = document.getElementById("email");



		if(!userName.value) {
			userName.style.border = "4px solid red";
			
		}

		if(!userPassword.value) {
			userPassword.style.border = "4px solid red";
			
		}
		if(!userPassword1.value) {
			userPassword1.style.border = "4px solid red";
			
		}
		if(!email.value) {
			email.style.border = "4px solid red";
		
		}


		return true;

	}
	
var str = document.getElementById("Str");
var counter = 0;
str.addEventListener('mouseover', Mcounter);
function Mcounter(){
	counter++;
	str.innerHTML ='Строку задели мышкой ' + counter+' раз';
}

var But = document.getElementById("but");
But.addEventListener('click', buttonclick);
function buttonclick(){
	
alert('you clicked on me');
}

document.querySelector(`body`).onload = () => {
    alert('Я обновился');
}




Theme = () => {
    if(localStorage.getItem('theme') != undefined){
        if(localStorage.getItem('theme') == 'black'){
            localStorage.setItem(`theme`, `white`);
            StockTheme();
        }else{
            localStorage.setItem('theme', 'black');
            NextTheme();
        }
    }else{
        localStorage.setItem('theme', 'black');
        NextTheme();
    }
}


StockTheme = () => {
$('.button').css({"background-color":'blue'})
$('.head').css({"background-color":'blue'})
	$('.vvod').css({"color":'black'})
	$('.block1').css({"background-color":'orange'})
	$('.block1').css({"color":'black'})
	$('.block2').css({"background-color":'green'})
	$('.block2').css({"color":'black'})
	$('.block3').css({"background-color":'blue'})
	$('.block3').css({"color":'black'})
	$('form').css({"background-color":'#01DFD7'})
	$('input').css({"background-color":'white'})
	$('.s').css({"color":'white'})
	$('.btn').css({"background-color":'black'})
}

NextTheme = () => {
$('.button').css({"background-color":'green'})
	$('.head').css({"background-color":'black'})
		$('.vvod').css({"color":'white'})
$('.block1').css({"background-color":'black'})
$('.block1').css({"color":'gray'})
$('.block2').css({"background-color":'black'})
$('.block2').css({"color":'gray'})
$('.block3').css({"background-color":'black'})
$('.block3').css({"color":'gray'})
$('form').css({"background-color":'#0B0B61'})
$('input').css({"background-color":'gray'})
$('.s').css({"color":'#8A2908'})
$('.btn').css({"background-color":'blue'})
}






