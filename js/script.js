 

var countDownDate = new Date("Sep 11, 2025 17:37:25").getTime();
var x = setInterval(function() {

  var counter= document.querySelector("#countdown");
  var now = new Date().getTime(); 
  var distance = countDownDate - now;

  
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  
 counter.innerHTML = days + " Jours " + hours + " Heures "
  + minutes + " Minutes " + seconds + " Secondes ";

  
  if (distance < 0) {
    clearInterval(x);
    counter.innerHTML = "La Session Est Terminée";
  }
}, 1000);


const win = document.querySelector("#winner");


var myModal = new bootstrap.Modal(document.getElementById('Modal'),{
  keybord: false
} )

win.addEventListener('click',function(){

  setTimeout(function(){
    myModal.show();
  } , 1000);
  
  });
  




