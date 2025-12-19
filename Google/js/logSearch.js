function logSearch(elem) {
  var query = encodeURIComponent(elem.value);
  var xhttp = new XMLHttpRequest();
  xhttp.open("GET", "php/redirect.php?q=" + query, true);
  xhttp.send();
}