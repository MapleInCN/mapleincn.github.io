$(function() {
  const darkMode = localStorage.getItem("darkMode");
  if (darkMode === 'on') {
    document.getElementById('dark-toggler').innerHTML = '<i class="fa-solid fa-lightbulb"></i>浅色';
    $("body").addClass("dark-mode");
  } else {
    document.getElementById('dark-toggler').innerHTML = '<i class="fa-solid fa-moon"></i>深色';
    $("body").removeClass("dark");
  }
});

function darkSwitch() {
  $("body").toggleClass("dark-mode");
  const darkMode = localStorage.getItem("darkMode");
  if (darkMode === 'on') {
    document.getElementById('dark-toggler').innerHTML = '<i class="fa-solid fa-moon"></i>深色';
    localStorage.setItem("darkMode", "off")
  } else {
    document.getElementById('dark-toggler').innerHTML = '<i class="fa-solid fa-lightbulb"></i>浅色';
    localStorage.setItem("darkMode", "on")
  }
}
