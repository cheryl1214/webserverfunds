function logSearch(elem) {
  var query = elem.value;
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "php/redirect.php?q=" + query, true);
  xhttp.send();
}