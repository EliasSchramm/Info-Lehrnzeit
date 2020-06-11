var anzeige = document.getElementById('zaeler');
var mehr = document.getElementById('mehr');
var weniger = document.getElementById('weniger');

var zaeler = 0;

mehr.onclick = function() {
  zaeler += 1;

  if(zaeler > 10){
    zaeler = -10;
  }

  anzeige.innerHTML = zaeler;
}

weniger.onclick = function() {
  zaeler -= 1;

  if(zaeler < -10){
    zaeler = 10;
  }

  anzeige.innerHTML = zaeler;
}
