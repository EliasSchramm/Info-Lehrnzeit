<h2>Kurze Einleitung</h2>
<p class="start_text">CSS ist die Sprache mit welcher man in der Lage ist die Website zu gestalten. Eine jede Website, egal wie groß oder klein, erhält ihr aussehen durch CSS.
  Aus meiner eigenen Erfahrung kann ich sagen das es sehr, sehr lange dauert bis man einen Style erstellt hat der sich fertig anfühlt. Der Fakt dass die Ausbildung zu Website-Desinger 3 Jahre dauert
  unterstreicht die Komplexität dieser Sprache noch einmal. Deshalb werde ich im folgenden nur die simplen Gestaltungsmöglichkeiten vorstellen. Keine Sorge es werden genug sein um die Website ansprechend aussehen zu lassen.
</p>

<p class="start_text">Ich werde für alle Beispiele die folgende Website verwenden. Keine Sorge sollten einige Dinge seltsam aussehen, ich werde sie erklären wenn sie relevant werden.</p>

<div class="code" t="html">
  <p>&lt;!doctype html&gt;<br /><br />&lt;html lang="de"&gt;<br /><br />&nbsp; &lt;head&gt;<br />&nbsp;&nbsp;&nbsp; &lt;meta charset="utf-8"/&gt;<br />&nbsp;&nbsp;&nbsp; &lt;link rel="stylesheet" href="css/bsp&lt;?php echo $_GET["style"]; ?&gt;.css" type="text/css"/&gt;<br />&nbsp;&nbsp;&nbsp; &lt;title&gt;Lorem ipsum&lt;/title&gt;<br />&nbsp; &lt;/head&gt;<br />&nbsp; &lt;body&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;div class="kopf"&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h1&gt;&Uuml;berschrift 1&lt;/h1&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h2&gt;&Uuml;berschrift 2&lt;/h2&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;h3&gt;&Uuml;berschrift 3&lt;/h3&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p class="einleitung"&gt;Hallo, ich bin ein sehr, sehr sinvoller &lt;span class="rot"&gt; Einleitungstext. &lt;/span&gt; &lt;/p&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;div class="inhalt"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;hr&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Das is n tolles Bild:&lt;/p&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;img src="img/bild.jpg" alt="bild"&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;"Lorem ipsum" ist ein F&uuml;lltext der es erm&ouml;glicht die Website zu gestalten selbst wenn es noch keinen fertigen Inhalt gibt.&lt;/p&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p class="gr&uuml;n_hervorgehoben"&gt;Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.&lt;/p&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.&lt;/p&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. &lt;/p&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer&lt;/p&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;&lt;a href="https://www.loremipsum.de/"&gt;Hier weiterlesen&lt;/a&gt;&lt;p&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;ul&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Item 1&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Item 2&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Item 3&lt;/li&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Items:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;ul&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Item 4&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Item 5&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;li&gt;Item 6&lt;/li&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/ul&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/li&gt;<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;/ul&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;hr&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br /><br />&nbsp;&nbsp;&nbsp; &lt;div class="fuss"&gt;<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &lt;p&gt;Sponsored by to much coffe&lt;/p&gt;<br />&nbsp;&nbsp;&nbsp; &lt;/div&gt;<br /><br />&nbsp; &lt;/body&gt;<br />&lt;/html&gt;<br /><br /><br /><br /><br /></p>
</div>

<a href="bsp/bsp.php?style=0" target="_blank">Anschauen</a>

<h3>Erklärung</h3>

<p class="start_text">
  So das dein Browser das CSS Dokument erkennt muss es mit .css enden. Zudem must du folgendes in den Head deiner Website einfügen: <i>&lt;link rel="stylesheet" href="" type="text/css"/&gt;</i>
  In 'href' muss der Weg zu deiner Datei eingetragen sein. Zudem ist in dem Quelltext oben bei manchen Elementen ein <i>class=""</i>. Diese Klassen bezeichnen einen Bereich welcher ein bestimmtes Aussehen haben soll.
</p>

<h2>Der Grundaufbau</h2>

<p>Der Grundaufbau von CSS ist deutlich einfacher als der von HTML, da er sehr eindimensional ist. Prinzipiell ist er so aufgebaut:</p>

<div class="code" t="css">
  <p>klasse/objekt {<br />&nbsp; eigenschaftsname1: wert;<br />&nbsp; eigenschaftsname2: wert;<br />&nbsp; eigenschaftsname3: wert;<br />}<br /><br /></p>
</div>

<p class="start_text">
  Möchte mann das Aussehen von allen Elementen eines Types (p,h1,h2, ...) ändern so muss man vor die erste Klammer den HTML Typ schreiben. Möchte man hingegen eine Klasse definieren muss man den Namen der Klasse hinter einen Punkt schreiben (z.B.: <i>.name</i>).
</p>

<h2>Hintergrund</h2>

<p class="start_text">Nun wird es Zeit die Website zu gestalten. Beginnen wir mit dem Hintergrund. Zunächts etwas zu Farben: Farben müssen immer im sog. Hexadezimalsystem angegeben sein. Ich empfehle einfach ein Tool wie das <a href="https://www.w3schools.com/colors/colors_picker.asp" target="_blank">hier</a> zu verwenden.</p>
<p class="start_text">Den Hintergrund festzulegen ist sehr einfach:</p>

<div class="code" t="css">
  <p>body {<br />&nbsp; background-color: #d9b3ff;<br />}<br /><br /></p>
</div>

<a href="bsp/bsp.php?style=1" target="_blank">Anschauen</a>

<p class="start_text">Hier haben wir allen Elementen in '<i>body</i>' die Eigenschaft '<i>background-color</i>' gegeben. <br>
  Möchten wir nun aber dass der Inhaltsteil eine andere Farbe hat können wir dies folgend machen:
</p>

<div class="code" t="css">
  <p>body {<br />&nbsp; background-color: #d9b3ff;<br />}<br /><br />.inhalt{<br />&nbsp; background-color: #e6ccff; &nbsp;<br />}<br /><br /></p>
</div>

<a href="bsp/bsp.php?style=2" target="_blank">Anschauen</a>

<p class="start_text">Hier haben wir die div's genutzt. Denn der div welcher die Klasse 'inhalt' hat kann von uns gesondert gestaltet werden. Nun ist aber immer noch so ein Ramen um
  unseren Inhalt. Das kommt davon das jedes Element einen imaginären Rand besitzt. Diesen können wir so entfernen:
</p>

<div class="code" t="css">
  <p>body {<br />&nbsp; background-color: #d9b3ff;<br />&nbsp; margin-left: 0px;<br />&nbsp; margin-right: 0px;<br />}<br /><br />.inhalt{<br />&nbsp; background-color: #e6ccff;<br />}<br /><br /><br /><br /></p>
</div>

<a href="bsp/bsp.php?style=3" target="_blank">Anschauen</a>

<h2>Text/Schrift</h2>

<p>Nun haben wir den Hintergrund gestaltet. Als nächstes sollten wir uns der Schrift zuwenden.<br>
  Die Schrift jetzt sieht warscheinlich bei einigen anders aus. Sollte der Schrifttyp nicht näher definiert sein ist es dem Browser überlassen eine Schriftart auszuwählen.
  Zum Glück ist es sehr einfach die Schriftart zu ändern:
</p>

<div class="code" t="css">
  <p>body {<br />&nbsp; background-color: #d9b3ff;<br /><br />&nbsp; margin-left: 0px;<br />&nbsp; margin-right: 0px;<br /><br />&nbsp; font-family: Arial;<br />}<br /><br />.inhalt{<br />&nbsp; background-color: #e6ccff;<br />}<br /><br /><br /><br /><br /><br /></p>
</div>

<a href="bsp/bsp.php?style=4" target="_blank">Anschauen</a>

<p class="start_text">Jetzt sieht der Text Modern aus. Als nächstes möchte ich das der Kopf und der Fuß zentriert sind. Dies ist auf folgende Weise zu ereichen:</p>

<div class="code" t="css">
  <p>body {<br />&nbsp; background-color: #d9b3ff;<br /><br />&nbsp; margin-left: 0px;<br />&nbsp; margin-right: 0px;<br /><br />&nbsp; font-family: Arial;<br />}<br /><br />.inhalt{<br />&nbsp; background-color: #e6ccff;<br />}<br /><br />.kopf, .fuss{<br />&nbsp;&nbsp;&nbsp; text-align: center;<br />}<br /><br /></p>
</div>

<a href="bsp/bsp.php?style=5" target="_blank">Anschauen</a>

<p class="start_text">Hier ist etwas praktisches zu sehen: es ist möglich mehrere Klassen/Objekte auf gleiche Weise zu definieren indem man sie mit Komma trennt.</p>
<p class="start_text">Nun finde ich dass die Hauptüberschrift deutlich größer sein könnte. Hierfür ist "<i>font-size</i>" zu nutzen.</p>

<div class="code", t="css">
  <p>body {<br />&nbsp; background-color: #d9b3ff;<br /><br />&nbsp; margin-left: 0px;<br />&nbsp; margin-right: 0px;<br /><br />&nbsp; font-family: Arial;<br />}<br /><br />.inhalt{<br />&nbsp; background-color: #e6ccff;<br />}<br /><br />.kopf, .fuss{<br />&nbsp;&nbsp;&nbsp; text-align: center;<br />}<br /><br />h1{<br />&nbsp; font-size: 55px;<br />}<br /><br /></p>
</div>

<a href="bsp/bsp.php?style=6" target="_blank">Anschauen</a>

<p class="start_text">Als nächstes möchte ich Farben in den Text bringen. Um den Text zu färben wird die '<i>color</i>' Eigenschaft benutzt.</p>

<div class="code" t="css">
    <p>&nbsp;body {<br />&nbsp; background-color: #d9b3ff;<br /><br />&nbsp; margin-left: 0px;<br />&nbsp; margin-right: 0px;<br /><br />&nbsp; font-family: Arial;<br />}<br /><br />.inhalt{<br />&nbsp; background-color: #e6ccff;<br />}<br /><br />.kopf, .fuss{<br />&nbsp;&nbsp;&nbsp; text-align: center;<br />}<br /><br />h1{<br />&nbsp; font-size: 55px;<br />}<br /><br />.rot{<br />&nbsp; color: #ff4d4d;<br />}<br /><br />.gr&uuml;n_hervorgehoben{<br />&nbsp; font-size: 20px;<br />&nbsp; color: #004d00;<br />}<br /><br /></p>
</div>

<a href="bsp/bsp.php?style=7" target="_blank">Anschauen</a>

<h2>Kurzer Feinschliff</h2>

<p class="start_text">Es sticht mir die ganze Zeit ins Auge, dass die Elemente im Inhalt so am Rand kleben. Dies kommt davon dass wir weiter oben <b>alle</b> imaginären Ramen entfernt haben. Also müssen wir die im Inhalt wieder aktivieren.</p>

<div class="code" t="css">
    <p>body {<br />&nbsp; background-color: #d9b3ff;<br /><br />&nbsp; margin-left: 0px;<br />&nbsp; margin-right: 0px;<br /><br />&nbsp; font-family: Arial;<br />}<br /><br />.inhalt{<br />&nbsp; background-color: #e6ccff;<br />}<br /><br />.kopf, .fuss{<br />&nbsp;&nbsp;&nbsp; text-align: center;<br />}<br /><br />h1{<br />&nbsp; font-size: 55px;<br />}<br /><br />.rot{<br />&nbsp; color: #ff4d4d;<br />}<br /><br />.gr&uuml;n_hervorgehoben{<br />&nbsp; font-size: 20px;<br />&nbsp; color: #004d00;<br />}<br /><br />.inhalt p, img, ul{<br />&nbsp; margin-left: 60px;<br />&nbsp; margin-right: 60px;<br />}<br /><br />ul ul{<br />&nbsp; margin-left: 5px;<br />&nbsp; margin-right: 5px;<br />}<br /><br /></p>
</div>

<a href="bsp/bsp.php?style=8" target="_blank">Anschauen</a>

<h2>Bilder</h2>

<p class="start_text">Nun möchte ich mich dem Bild widmen. Ich möchte dass es in der Mitte und kleiner ist. Obwol es möglich ist die Größe des Bildes im HTML code einzustellen, ist es ebenso möglich mit CSS. <i>width</i> und <i>height</i> sind hier die Eigenschaften.</p>

<div class="code" t="css">

  <p>body {<br />&nbsp; background-color: #d9b3ff;<br /><br />&nbsp; margin-left: 0px;<br />&nbsp; margin-right: 0px;<br /><br />&nbsp; font-family: Arial;<br />}<br /><br />.inhalt{<br />&nbsp; background-color: #e6ccff;<br />}<br /><br />.kopf, .fuss{<br />&nbsp;&nbsp;&nbsp; text-align: center;<br />}<br /><br />h1{<br />&nbsp; font-size: 55px;<br />}<br /><br />.rot{<br />&nbsp; color: #ff4d4d;<br />}<br /><br />.gr&uuml;n_hervorgehoben{<br />&nbsp; font-size: 20px;<br />&nbsp; color: #004d00;<br />}<br /><br />.inhalt p, img, ul{<br />&nbsp; margin-left: 60px;<br />&nbsp; margin-right: 60px;<br />}<br /><br />ul ul{<br />&nbsp; margin-left: 5px;<br />&nbsp; margin-right: 5px;<br />}<br /><br /><br />img{<br /><br />&nbsp; display: block;<br />&nbsp; margin-left: auto;<br />&nbsp; margin-right: auto;<br />&nbsp; width: 150px;<br />&nbsp; height: 150px;<br /><br /><br />}<br /><br /></p>

</div>

<a href="bsp/bsp.php?style=9" target="_blank">Anschauen</a>

<h2>Die Trennlinien</h2>

<p class="start_text">Als nächstes möchte ich mich den Trennlinien widmen. Im Moment sehen sie sehr dünn aus. Dass können wir ändern:</p>

<div class="code" t="css">
  <p>hr{<br />&nbsp; height: 3px;<br />&nbsp; background-color : #000;<br />}<br /><br /></p>
</div>

<a href="bsp/bsp.php?style=10" target="_blank">Anschauen</a>

<p>Nun sehen die Linien jedoch sehr verwaschen aus. Dies kommt daher das diese Linien noch eine Umrandung haben. Die können wir entfernen. Auserdem schneiden die Linien sehr Agressiv die Seite. Sie leicht durchsichtig zu machen würde der sache helfen.</p>


<div class="code" t="css">
  <p>hr{<br />&nbsp; height: 3px;<br />&nbsp; background-color : #000;<br />&nbsp; border: 0px;<br />&nbsp; opacity: 0.5;<br />}</p>
</div>

<a href="bsp/bsp.php?style=11" target="_blank">Anschauen</a>

<h2>Listen</h2>
<p>Die Liste gefällt mir eigentlich, allerdings finde ich die Punkte am Anfang überflüssig. Folgendes entfernt es:</p>

<div class="code" t="css">
    <p>ul {<br />&nbsp; list-style-type: none;<br />}</p>
</div>

<a href="bsp/bsp.php?style=12" target="_blank">Anschauen</a>

<h2>Ein Link als Button</h2>

<p class="start_text">Als letztes möchte ich mich dem Link annehmen. Aktuell sieht er (nur als Text) recht fade aus. Deshalb möchte ich ihn so umdesingen dass er wie ein Button(Knopf) aussieht.</p>

<h3>Der Hintergrund</h3>

<p class="start_text">Als erstes gebe ich den Weißen Hintergrund mit abgerundeten Ecken. Abgerundete Ecken erhällt man mit '<i>border-radius</i>'.</p>

<div class="code" t="css">
  <p>a{<br />&nbsp; background-color: #fff;<br />&nbsp; border-radius: 10px;<br>}</p>
</div>

<a href="bsp/bsp.php?style=13" target="_blank">Anschauen</a>

<h3></h3>
