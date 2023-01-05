function darkMode(){
 var dark = document.cookie.split(";")[0].split("=")[1]; 
 var d = new Date();
 d.setHours(d.getHours() + (24 * 30)); 
 if(dark == '1'){
  document.getElementById('dark').innerHTML = '';
  document.getElementById('night').innerHTML = '<i class="fa-solid fa-moon"></i>深色';
  document.cookie = "dark= 0; path=/; expires="+d.toGMTString();
 }else{
  document.getElementById('dark').innerHTML = '@media {html,img,iframe,after { filter: invert(1) hue-rotate(180deg); }}';
  document.getElementById('night').innerHTML = '<i class="fa-solid fa-lightbulb"></i>浅色';
  document.cookie = "dark= 1; path=/; expires="+d.toGMTString();
 }
}
