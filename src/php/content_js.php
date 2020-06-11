<h2>Kurze Einleitung</h2>
<p class="start_text">
  JavaScript (JS) ist eine Sprache welche einer Website Funktion geben kann. Es ist zum Beispiel möglich Dinge auszuführen wenn der Nutzer auf ein Element gedrückt hat oder
  den Inhalt eines Elementes zu ändern. Im folgenden werde ich ein paar Grundlagen erklären und damit am Ende ein kleines Tic-Tac-Toe programmieren. Warnung: Ich werde nur einen Crashkurs über dieses Thema geben. Für mehr Erklärung kann man sich <a href="https://www.w3schools.com/js/" target="_blank">hier</a> einlesen.
</p>

<h2>Die Implementierung</h2>

<p class="start_text">Genau so wie CSS auf der Website implementiert werden muss damit es Effekt hatt, muss JS ebenfalls auf der Website eingebunden werden.
  Der Unterschied zwichen der Implementierung von CSS und JS ist dass JS am Ende der Website implementiert wird. Auserdem hat JS den '<i>&lt;script&gt;</i>' Tag.
  Eine Implementierung sieht so aus:
</p>

<div class="code" t="html">
  <p>&lt;!DOCTYPE html&gt;<br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br />&nbsp;&nbsp;&nbsp; &lt;script src="src/script.js" charset="utf-8"&gt;&lt;/script&gt;<br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;</p>
</div>

<h2>Alert</h2>

<p class="start_text">Ein "alert" ist eine Meldung welche auf dem Bildschirm des Benutzers aufpopt. Dies ist die Einfaste Art der Ausgabe in JS. Möchte ich nun einen Simplen Text ausgeben, kann ich dies folgend machen:</p>

<div class="code" t="js">
<p>alert("Hallo Welt!");</p>
</div>

<p><a href="bsp/js_bsp1.html" target="_blank">Anschauen</a> (Es kann vorkommen das das script beim ersten Besuch nicht richtig lädt. Sollte dies der Fall sein 'F5' drücken) </p>

<h2>Variablen</h2>

<p>
  Variablen speichern Daten. Mit ihnen kann man so gut wie alles speichern was es in JS gibt. Darunter zählen u.a. Zahlen, Sätze und Wörter, Wahreitsaussagen (Wahr[true] oder Falsch[false]), HTML Elemente, ... .
  Variablen werden immer mit <i>var</i> begonnen. Anschliesend muss man ihnen einen Namen geben und nach einem '=' den Wert festlegen.
  Beispielhafte Deklaration von Variablen:
</p>

<div class="code" t="js">
  <p>
    //Zahlen <br>
    var alter_tim = 10; <br>
    var anzahl_birnen = 36; <br>
    <br>
    //Wörter und Sätze<br>
    var tolles_wort = "wort";<br>
    var toller_satz = "Ich bin ein Satz.";<br>
    <br>
    //Wahreitsaussagen<br>
    var atmet_noch = true;<br>
    var geldbaum_in_vorgarten = false;<br>
    <br>
    //HTML Elemente <br>
    var ele = document.getElementById("tolle_id");
  </p>
</div>

<p class="start_text">
  In dem Quelltext oben fällt warscheinlich das Erhalten des HTML Elementes auf. Immer wenn mann ein Element in JS nutzen möchte muss man dem Element ein '<i>id</i>'' Attribut geben (z.b. '<i>&lt;p id="tolle_id"&gt;</i>')'
</p>
<h2>if else</h2>

<p class="start_text">if, else bedeutet übersetzt soviel wie 'wenn dann, sonst'. So nutzt mann if, else:</p>

<div class="code" t="js">
  <p>
    var zahl = 10; <br>
    var name = "tom" <br>
    <br>
    if(zahl == 12){<br>
    &nbsp;&nbsp;&nbsp;alert("Stimmt!");<br>
    }else{<br>
    &nbsp;&nbsp;&nbsp;alert("Stimmt nicht!")<br>
    }<br>
    <br>
    if(name == "tom"){<br>
    &nbsp;&nbsp;&nbsp;alert("Stimmt!");<br>
    }else{<br>
    &nbsp;&nbsp;&nbsp;alert("Stimmt nicht!")<br>
    }<br>
  </p>
</div>

<h2>Events</h2>

<p class="start_text">Events representieren eine Aktion welche von dem Nutzer an/mit einem Element der Website ausgeführt wird. Sollte nun dieses Event (z.B. Nutzer klickt Element) ausgelöst werden,
  so wird ein vordefinertes Schnipsel Code ausgeführt. Es gibt für jedes Element Massen über Massen an Events.
  Man sollte sich diese suchen wenn sie Benötigt werden. Ich möchte allerdings '<i>onclick</i>' vorstellen dieses Element wird ausgelöst wenn du auf dass Element klickst.
</p>

<div class="code" t="html">
  <p>&lt;!DOCTYPE html&gt;<br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Test&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h1 id="klick_mich"&gt;Klick mich!&lt;/h1&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;script src="js/script2.js" charset="utf-8"&gt;&lt;/script&gt;<br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /></p>
</div>

<div class="code" t="js">
  <p>var ele = document.getElementById('klick_mich');<br /><br />ele.onclick = function() {<br />&nbsp; alert("Autsch *_*");<br />}<br /><br /></p>
</div>

<a href="bsp/js_bsp2.html" target="_blank">Anschauen</a>

<h2>Wiederholung</h2>

<p class="start_text">Nun möchte ich als Wiederholung von allem oben stehenden einen kleinen Zähler bauen. Dazu ist noch zu wissen dass man den Inhalt eines Elementes mit <i>.innerHTML</i> ändern kann.</p>

<div class="code" t="html">
    <p>&lt;!DOCTYPE html&gt;<br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Test&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h1 id="zaeler"&gt;0&lt;/h1&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h2 id="mehr"&gt;+&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h2 id="weniger"&gt;-&lt;/h2&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;script src="js/script3.js" charset="utf-8"&gt;&lt;/script&gt;<br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /></p>
</div>

<div class="code" t="js">
  <p>var anzeige = document.getElementById('zaeler');<br />var mehr = document.getElementById('mehr');<br />var weniger = document.getElementById('weniger');<br /><br />var zaeler = 0;<br /><br />mehr.onclick = function() {<br />&nbsp; zaeler += 1;<br /><br />&nbsp; if(zaeler &gt; 10){<br />&nbsp;&nbsp;&nbsp; zaeler = -10;<br />&nbsp; }<br /><br />&nbsp; anzeige.innerHTML = zaeler;<br />}<br /><br />weniger.onclick = function() {<br />&nbsp; zaeler -= 1;<br /><br />&nbsp; if(zaeler &lt; -10){<br />&nbsp;&nbsp;&nbsp; zaeler = 10;<br />&nbsp; }<br /><br />&nbsp; anzeige.innerHTML = zaeler;<br />}<br /><br /></p>
</div>

<a href="bsp/js_bsp3.html" target="_blank">Anschauen</a>

<h2>Arrays</h2>

<p class="start_text">Array sind Listen. Diese Listen können fast unendlich viele Daten in sich haben. Einzige Limiterung: alle Daten müssen vom selben Typ sein. Die länge des Array erhält man mit <i>.length</i>.
  Auf eine Zelle kann man zugreifen indem man die stelle in eckigen Klammern angibt. Achtung: In derr Informatik fängt man beim zählen bei Null an!
</p>

<div class="code" t="js">
  <p>var obst = ["Banane","Erdbere","Melone","Kiwi","Apfel","Birne"]</p>
  <p>&nbsp;</p>
  <p>obst[0] //Banane</p>
  <p>obst[3] //Kiwi</p>
  <p>obst.length //6</p>
</div>

<h2>Schleifen</h2>

<p class="start_text">Schleifen sind Elemente welche einen in ihnen enthaltenen Code so lange ausführen bis eine Bedingung erfüllt wird. Es gibt zwei Arten Schleifen: while und for</p>

<h3>while - Schleifen</h3>

<p class="start_text">while Schleifen fragen nach jedem Durchgang eine Variable ab.</p>

<div class="code" t="js">
    while(i < 10){<br>
      i++;<br>
    }<br>
</div>

<h3>for - Schleifen</h3>

<p class="start_text">for Schleifen unterscheiden sich in so fern von while Schleifen dass diese Schleifen nach jedem Durchgang eine Variable verändern und abfragen.</p>

<div class="code" t="js">
    for(i=0;i&lt;10;i++){<br>
      ele.innerHTML = i;<br>
    }<br>
</div>

<h2>Ein letztes Projekt</h2>

<p class="start_text">Nun möchte ich mit allem ober erzählten ein Tic-Tac-Toe schaffen.</p>

<p class="start_text">HTML:</p>

<div class="code" t="html">

  <p>&lt;!DOCTYPE html&gt;<br />&lt;html lang="en" dir="ltr"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;link rel="stylesheet" href="css/bsp_js.css" type="text/css"/&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Tic Tac Toe&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h1 id="anzeige"&gt;&lt;/h1&gt;<br />&nbsp;&nbsp;&nbsp; &lt;table&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;tr&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;th class="field"&gt;&lt;/th&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;th class="field"&gt;&lt;/th&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;th class="field"&gt;&lt;/th&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/tr&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;tr&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;td class="field"&gt;&lt;/td&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;td class="field"&gt;&lt;/td&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;td class="field"&gt;&lt;/td&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/tr&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;tr&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;td class="field"&gt;&lt;/td&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;td class="field"&gt;&lt;/td&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;td class="field"&gt;&lt;/td&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/tr&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/table&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;h2 id="player"&gt;Aktueller Spieler: X&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h2 id="reset"&gt;Neustart&lt;/h2&gt;<br /><br /><br />&nbsp;&nbsp;&nbsp; &lt;script src="js/script4.js" charset="utf-8"&gt;&lt;/script&gt;<br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /></p>

</div>

<p class="start_text">CSS:</p>

<div class="code" t="css">

  <p>body{<br />&nbsp; text-align: center;<br />}<br /><br />table {<br />&nbsp; border-collapse: collapse;<br />}<br /><br />table, th, td {<br />&nbsp; border: 1px solid black;<br />}<br /><br />th, td{<br />&nbsp; font-size: 40px;<br />&nbsp; padding: 60px;<br />}<br /><br /><br /><br /></p>

</div>

<p class="start_text">JS:</p>

<div class="code" t="js">

  <p>var ele = document.getElementsByClassName("field");<br />var player = "X";<br />var anzeige = document.getElementById("anzeige");<br />var spieler_anzeige = document.getElementById("player");<br />var reset = document.getElementById("reset");<br />var game_end = false;<br /><br />var ways_to_win = [<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0,1,2,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 3,4,5,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 6,7,8,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0,3,6,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 1,4,7,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,5,8,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 0,4,8,<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 2,4,6<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ]<br /><br />reset.onclick = function() {<br />&nbsp; for(var i = 0; i &lt; ele.length; i++){<br />&nbsp;&nbsp;&nbsp; ele[i].innerHTML = "";<br />&nbsp; }<br />&nbsp; game_end = false;<br />&nbsp; player = "X";<br />&nbsp; spieler_anzeige.innerHTML = "Aktueller Spieler: " + player;<br />&nbsp; anzeige.innerHTML = "";<br />}<br /><br />function input(e){<br />&nbsp; var field = document.getElementById(e);<br /><br />&nbsp; if(field.innerHTML == "" &amp;&amp; !game_end){<br /><br />&nbsp;&nbsp;&nbsp; field.innerHTML = player;<br /><br />&nbsp;&nbsp;&nbsp; var fields_not_left = 0;<br /><br />&nbsp;&nbsp;&nbsp; for(var j = 0; j &lt; ways_to_win.length/3; j++){<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; var count = 0;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; for(jj = 0; jj &lt; 3; jj++){<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; var temp = document.getElementById(ways_to_win[(j*3)+jj]);<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if(temp.innerHTML == "X"){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; count ++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }else if (temp.innerHTML == "O") {<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; count --;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }else{<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; fields_not_left ++;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; if(count == 3){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; anzeige.innerHTML = "X gewinnt!";<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; game_end = true;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }else if (count == -3) {<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; anzeige.innerHTML = "O gewinnt!";<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; game_end = true;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; }<br />&nbsp;&nbsp;&nbsp; }<br /><br />&nbsp;&nbsp;&nbsp; if (fields_not_left == 0 &amp;&amp; !game_end) {<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; anzeige.innerHTML = "Niemand gewinnt!";<br />&nbsp;&nbsp;&nbsp; }<br /><br />&nbsp;&nbsp;&nbsp; if(player == "X"){<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; player = "O";<br /><br />&nbsp;&nbsp;&nbsp; }else {<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; player = "X";<br />&nbsp;&nbsp;&nbsp; }<br /><br />&nbsp;&nbsp;&nbsp; spieler_anzeige.innerHTML = "Aktueller Spieler: " + player;<br /><br />&nbsp; }<br /><br />}<br /><br />for(var i = 0; i &lt; ele.length; i++){<br />&nbsp; ele[i].setAttribute("id", i);<br />&nbsp; ele[i].setAttribute("onclick", "input("+ i +")");<br />}<br /><br /><br /><br /><br /><br /></p>

</div>

<a href="bsp/js_bsp4.html" target="_blank">Anschauen</a>

<h2>Danke fürs Durchlesen!</h2>
