<h2>Kurze Einleitung</h2>
<p class="start_text">HTML ist die Sprache welche <u>beschreibt</u>, welche Elemente mit welchem Inhalt sich auf der Website befinden.<br>
Mit dieser Sprache ist es möglich die Website zu strukturieren (Text, Links, Formulare, Bilder, ... einfügen), sowie Text grob zu formatieren.<br>
Style erhält die Website mit CSS und Funktion erhält die Website durch JavaScript.</p>
<p class="start_text">Im folgenden werde ich den Aufbau einer simplen Website erklären. Anschliesend werde ich ihr etwas Style(CSS) und Funktion(JavaScript) geben.
Ich empfehle die Kategorien chronologisch durchzugehen.</p>

<h2>Der Grundaufbau</h2>

<p class="start_text">Eine jede Website hat folgenden Grundaufbau:</p>

<div class="code" t="html">

  <p>&lt;!doctype html&gt;<br /><br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Lorem ipsum&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;</p>
  <p><br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;</p>

</div>

<a href="bsp/bsp1.html" target="_blank">Anschauen</a>

<h3>Erklärung</h3>

<p class="start_text">Der Grundaufbau des Websitecodes besteht aus 2 Teilen: dem <b>Head</b> und dem <b>Body</b>.
  Der Head ist der Bereich zwichen<i>&nbsp; &lt;head&gt;</i> und&nbsp;&lt;/head&gt;.
  In ihm werden dem Browser alle Informationen gegeben die er braucht/will.
  Um es simpel zu halten reicht es den Titel der Website in dem "title" Bereich einzutragen.<br>
  Der Body hingegen ist der Bereich zwichen<i>&nbsp; &lt;body&gt;</i> und&nbsp;&lt;/body&gt;.
  Er ist der Bereich welcher am Ende beim aufrufen der Website angezeigt wird. Fast jedes Element &lt;x&gt; in HTML muss mit einem &lt;/x&gt; abgeschlossen werden,
  sollte dies einmal nicht der Fall sein werde ich darauf hinweisen.
</p>

<h2>Einfacher Text</h2>

<h3>Überschriften</h3>

<p class="start_text">Überschriften sind sehr wichtig um die Website anschaulich zu gestalten, sie strukturieren den Text. <br>
  Insgesammt gibt es 6 "Arten" von Überschriften: &lt;h1&gt;, &lt;h2&gt;, &lt;h3&gt;, &lt;h4&gt;, &lt;h5&gt; und &lt;h6&gt;. <br>
  Je größer die Zahl nach dem h ist desto kleiner ist die Überschrift. &lt;h1&gt; ist die Hauptüberschrift. Sie sollte immer nur einmal auf der Website zu finden sein.</p>
<p class="start_text">Anmerkung: Jedes Dokument deiner Website braucht die .html Endung um von deinem Browser erkannt zu werden.
  Deine Haupseite sollte immer 'index.html' heisen.</p>
<p class="start_text">So sieht es aus wenn alle Überschriften nebeneinander stehen:</p>

<div class="code" t="html">
  <p>&lt;!doctype html&gt;<br /><br />&lt;html lang="de"&gt;<br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Lorem ipsum&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;h1&gt;&Uuml;berschrift 1&lt;/h1&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h2&gt;&Uuml;berschrift 2&lt;/h2&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h3&gt;&Uuml;berschrift 3&lt;/h3&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h4&gt;&Uuml;berschrift 4&lt;/h4&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h5&gt;&Uuml;berschrift 5&lt;/h5&gt;<br />&nbsp;&nbsp;&nbsp; &lt;h6&gt;&Uuml;berschrift 6&lt;/h6&gt;<br /><br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /></p>
</div>

<a href="bsp/bsp2.html" target="_blank">Anschauen</a>

<h3>Absätze</h3>
<p class="start_text">Absätze werden mit &lt;p&gt; markiert. Sie werden benutzt um Teilthemen von einander abzugrenzen. Möchte mann einfach nur einen Zeilenumbruch
  kann man &lt;br&gt; verwenden. &lt;br&gt; ist einer dieser Sonderfälle welche kein Endelement brauchen.</p>

<p class="start_text">So sieht Text aus der mit Absätzen formatiert wurde:</p>
<div class="code" t="html">

</div>
