console.log("the script");
var color = ["red","green","blue","yellow","purple","black"];
var click = 0;
function countClick(){
  var cadre = document.getElementById("color");
  click++;
  cadre.style.backgroundColor = color[click];
  if(color[click] == undefined){
      click = 0;
  cadre.style.backgroundColor = color[click];
}
console.log(color[click]);

}

function countClickNeg(){
  var cadre = document.getElementById("color");
  click--;
  cadre.style.backgroundColor = color[click];
  if(color[click] == undefined){
      click = 5;
  cadre.style.backgroundColor = color[click];
}
  console.log(color[click]);
}
