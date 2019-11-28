let btn = document.querySelectorAll('.showSingle');
for (let i = 0; i < btn.length; i++) {
  btn[i].addEventListener("click", colorMe);
}
function colorMe() {
  for (var i = 0; i < btn.length; i++) {
    btn[i].style.background = "#fff";
    btn[i].style.color = "#818181";
    btn[i].style.borderBottom = "1px solid #fff";
  	btn[i].style.fontWeight = "normal";
  }
  this.style.background = "#fff";
  this.style.color = "#dc6c28";
  this.style.borderBottom = "1px solid #dc6c28";
  this.style.fontWeight = "bold";
}
