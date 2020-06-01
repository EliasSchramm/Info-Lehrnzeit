var header_sel_html = document.getElementById("html");
var header_sel_css = document.getElementById("css");
var header_sel_js = document.getElementById("js");
var header_sel_php = document.getElementById("php");

var sec_html = document.getElementById("sec_html");
var sec_css = document.getElementById("sec_css");
var sec_js = document.getElementById("sec_js");
var sec_php = document.getElementById("sec_php");

header_sel_html.onclick = function() {
  header_sel_html.setAttribute("class","language_category selected");
  header_sel_css.setAttribute("class","language_category");
  header_sel_php.setAttribute("class","language_category");
  header_sel_js.setAttribute("class","language_category");

  sec_html.setAttribute("class","visible");
  sec_js.setAttribute("class","invisible");
  sec_css.setAttribute("class","invisible");
  sec_php.setAttribute("class","invisible");
}

header_sel_css.onclick = function() {
  header_sel_css.setAttribute("class","language_category selected");
  header_sel_js.setAttribute("class","language_category");
  header_sel_php.setAttribute("class","language_category");
  header_sel_html.setAttribute("class","language_category");

  sec_css.setAttribute("class","visible");
  sec_js.setAttribute("class","invisible");
  sec_html.setAttribute("class","invisible");
  sec_php.setAttribute("class","invisible");
}

header_sel_js.onclick = function() {
  header_sel_js.setAttribute("class","language_category selected");
  header_sel_css.setAttribute("class","language_category");
  header_sel_php.setAttribute("class","language_category");
  header_sel_html.setAttribute("class","language_category");

  sec_js.setAttribute("class","visible");
  sec_html.setAttribute("class","invisible");
  sec_css.setAttribute("class","invisible");
  sec_php.setAttribute("class","invisible");
}

header_sel_php.onclick = function() {
  header_sel_php.setAttribute("class","language_category selected");
  header_sel_js.setAttribute("class","language_category");
  header_sel_css.setAttribute("class","language_category");
  header_sel_html.setAttribute("class","language_category");

  sec_php.setAttribute("class","visible");
  sec_js.setAttribute("class","invisible");
  sec_css.setAttribute("class","invisible");
  sec_html.setAttribute("class","invisible");
}
