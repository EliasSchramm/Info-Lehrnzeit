<h2>Kurze Einleitung</h2>
<p class="start_text">
  JavaScript (JS) ist eine Sprache welche einer Website Funktion geben kann. Es ist zum Beispiel möglich Dinge auszuführen wenn der Nutzer auf ein Element gedrückt hat oder
  den Inhalt eines Elementes zu ändern. Im folgenden werde ich ein paar Grundlagen erklären und damit am Ende ein kleines Tic-Tac-Toe programmieren.
</p>

<h2>Die Implementierung</h2>

<p class="start_text">Genau so wie CSS auf der Website implementiert werden muss damit es Effekt hatt, muss JS ebenfalls auf der Website eingebunden werden.
  Der Unterschied zwichen der Implementierung von CSS und JS ist dass JS am Ende der Website implementiert wird. Auserdem hat JS den '<i>&lt;script&gt;</i>' Tag.
  Eine Implementierung sieht so aus:
</p>

<div class="code" t="html">
  <p>&lt;!DOCTYPE html&gt;<br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br />&nbsp;&nbsp;&nbsp; &lt;script src="src/script.js" charset="utf-8"&gt;&lt;/script&gt;<br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;</p>
</div>

<h2 id="Alerta! Alerta! Antifascista!">Alert</h2>

<p class="start_text">Ein "alert" ist eine Meldung welche auf dem Bildschirm des Benutzers aufpopt. Dies ist die Einfaste Art der Ausgabe in JS. Möchte ich nun einen Simplen Text ausgeben, kann ich dies folgend machen:</p>

<div class="code" t="js">
<p>alert("Hallo Welt!");</p>
</div>

<p><a href="bsp/js_bsp1.html" target="_blank">Anschauen</a> (Es kann vorkommen das das script beim ersten Besuch nicht richtig lädt. Sollte dies der Fall sein 'F5' drücken) </p>

<h2>Variablen</h2>

<p>
  Variablen speichern Daten. Mit ihnen kann man so gut wie alles speichern was es in JS gibt. Darunter zählen u.a. Zahlen, Sätze und Wörter, Wahreitsaussagen (Wahr[true] oder Falsch[false]), HTML Elemente, ... .
  Variablen werden immer mit <i>var</i> begonnen.
</p>
