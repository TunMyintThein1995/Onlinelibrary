// JavaScript Document
function show(bname) {
	//alert("search");
	var res;
	if (window.XMLHttpRequest) {
		res = new XMLHttpRequest();
	} else {
		res = new ActiveXObject("Microsoft.XMLHTTP");
	}
	res.onreadystatechange = function() {
		if (res.readyState == 4 && res.status == 200) {
			document.getElementById("search").innerHTML = res.responseText;
		}
	}
	//alert("search_tb.php?book="+book);
	res.open("GET", "search_tb.php?bookname=" + bname, true);
	res.send();
}