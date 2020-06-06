var header_sel_html = document.getElementById("html");
var header_sel_css = document.getElementById("css");
var header_sel_js = document.getElementById("js");


var sec_html = document.getElementById("sec_html");
var sec_css = document.getElementById("sec_css");
var sec_js = document.getElementById("sec_js");

var body = document.getElementById("body");

header_sel_html.onclick = function() {
  header_sel_html.setAttribute("class","language_category selected");
  header_sel_css.setAttribute("class","language_category");
  header_sel_js.setAttribute("class","language_category");

  sec_html.setAttribute("class","csec visible");
  sec_js.setAttribute("class","csec invisible");
  sec_css.setAttribute("class","csec invisible");

  body.setAttribute("class","body_html");
}

header_sel_css.onclick = function() {
  header_sel_css.setAttribute("class","language_category selected");
  header_sel_js.setAttribute("class","language_category");
  header_sel_html.setAttribute("class","language_category");

  sec_css.setAttribute("class","csec visible");
  sec_js.setAttribute("class","csec invisible");
  sec_html.setAttribute("class","csec invisible");

  body.setAttribute("class","body_css");
}

header_sel_js.onclick = function() {
  header_sel_js.setAttribute("class","language_category selected");
  header_sel_css.setAttribute("class","language_category");
  header_sel_html.setAttribute("class","language_category");

  sec_js.setAttribute("class","csec visible");
  sec_html.setAttribute("class","csec invisible");
  sec_css.setAttribute("class","csec invisible");

  body.setAttribute("class","body_js");
}
