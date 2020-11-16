// Get the modal
var modal1 = document.getElementById("myModal1");
var modal2 = document.getElementById("myModal2");
var modal3 = document.getElementById("myModal3");
var modal4 = document.getElementById("myModal4");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var div1 = document.getElementById("cat-sets-cadeau-pour-elle");
var div2 = document.getElementById("cat-sets-cadeau-pour-lui");
var div3 = document.getElementById("cat-sets-cadeau-pour-jeunes");
var div4 = document.getElementById("cat-sets-cadeau-maquillage");

div1.onclick = function(){
  modal1.style.display = "block";
}
div2.onclick = function(){
  modal2.style.display = "block";
}
div3.onclick = function(){
  modal3.style.display = "block";
}
div4.onclick = function(){
  modal4.style.display = "block";
}

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];
var span2 = document.getElementsByClassName("close2")[0];
var span3 = document.getElementsByClassName("close3")[0];
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {modal1.style.display = "none";}
span2.onclick = function() {modal2.style.display = "none";}
span3.onclick = function() {modal3.style.display = "none";}
span4.onclick = function() {modal4.style.display = "none";}