$(document).ready(function(){
var darkMode = document.cookie.split(";")[0].split("=")[1]; 
if(darkMode == 'on'){
document.body.classList.add( 'dark-mode' );
document.getElementById('dark-toggler').innerHTML = '<i class="fa-solid fa-lightbulb"></i>浅色';
}else{
document.body.classList.remove( 'dark-mode' );
document.getElementById('dark-toggler').innerHTML = '<i class="fa-solid fa-moon"></i>深色';
}
})

function darkSwitch() {
var darkMode = document.cookie.split(";")[0].split("=")[1]; 
var d = new Date();
d.setHours(d.getHours() + (24 * 30)); 
if(darkMode == 'on'){
document.body.classList.remove( 'dark-mode' );
document.getElementById('dark-toggler').innerHTML = '<i class="fa-solid fa-moon"></i>深色';
document.cookie = "darkMode = off; path=/; expires="+d.toGMTString();
}else{
document.body.classList.add( 'dark-mode' );
document.getElementById('dark-toggler').innerHTML = '<i class="fa-solid fa-lightbulb"></i>浅色';
document.cookie = "darkMode = on; path=/; expires="+d.toGMTString();
}
}
