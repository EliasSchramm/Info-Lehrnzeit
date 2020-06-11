var ele = document.getElementsByClassName("field");
var player = "X";
var anzeige = document.getElementById("anzeige");
var spieler_anzeige = document.getElementById("player");
var reset = document.getElementById("reset");
var game_end = false;

var ways_to_win = [
                    0,1,2,
                    3,4,5,
                    6,7,8,
                    0,3,6,
                    1,4,7,
                    2,5,8,
                    0,4,8,
                    2,4,6
                  ]

reset.onclick = function() {
  for(var i = 0; i < ele.length; i++){
    ele[i].innerHTML = "";
  }
  game_end = false;
  player = "X";
  spieler_anzeige.innerHTML = "Aktueller Spieler: " + player;
  anzeige.innerHTML = "";
}

function input(e){
  var field = document.getElementById(e);

  if(field.innerHTML == "" && !game_end){

    field.innerHTML = player;

    var fields_not_left = 0;

    for(var j = 0; j < ways_to_win.length/3; j++){

      var count = 0;
      for(jj = 0; jj < 3; jj++){

        var temp = document.getElementById(ways_to_win[(j*3)+jj]);

        if(temp.innerHTML == "X"){
            count ++;
        }else if (temp.innerHTML == "O") {
            count --;
        }else{
          fields_not_left ++;
        }
      }
      if(count == 3){
        anzeige.innerHTML = "X gewinnt!";
        game_end = true;
      }else if (count == -3) {
        anzeige.innerHTML = "O gewinnt!";
        game_end = true;
      }
    }

    if (fields_not_left == 0 && !game_end) {
      anzeige.innerHTML = "Niemand gewinnt!";
    }

    if(player == "X"){
      player = "O";

    }else {
      player = "X";
    }

    spieler_anzeige.innerHTML = "Aktueller Spieler: " + player;

  }

}

for(var i = 0; i < ele.length; i++){
  ele[i].setAttribute("id", i);
  ele[i].setAttribute("onclick", "input("+ i +")");
}
