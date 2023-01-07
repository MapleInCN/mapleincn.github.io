var l = '<i class="fa-solid fa-lightbulb"></i>浅色';
var d = '<i class="fa-solid fa-moon"></i>深色';
var toggler = document.getElementById('dark-toggler');
$(function() {
  const darkMode = localStorage.getItem("darkMode");
  if (darkMode === 'on') {
    toggler.innerHTML = l;
    $("body").addClass("dark-mode")
  } else {
    toggler.innerHTML = d;
    $("body").removeClass("dark")
  }
});
function darkSwitch() {
  $("body").toggleClass("dark-mode");
  const darkMode = localStorage.getItem("darkMode");
  if (darkMode === 'on') {
    toggler.innerHTML = d;
    localStorage.setItem("darkMode", "off")
  } else {
    toggler.innerHTML = l;
    localStorage.setItem("darkMode", "on")
  }
}
