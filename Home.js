window.onload = pageLoad;
			
function pageLoad(){
	document.getElementById("homeButton").onclick = home;
	document.getElementById("homeButton").onmouseover = homeButtonHoverF;
	document.getElementById("homeButton").onmouseout = homeButtonF;
}

function home(){
	window.location.href = "index.html";
}

function homeButtonHoverF(){
	document.getElementById("homeButton").id = "homeButtonHover";
}

function homeButtonF(){
	document.getElementById("homeButtonHover").id = "homeButton";
}

$(document).ready(function(){  
	$('#contact').click(function () {
		alert('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel porta metus. Donec pellentesque risus metus, quis lobortis ex elementum at. Proin ut arcu urna. Curabitur facilisis imperdiet velit eget dapibus. Mauris facilisis tristique eros eu pellentesque. Ut ut congue est. Proin tristique neque id nulla vehicula, nec tempus quam aliquam. Sed vitae blandit neque, at volutpat urna. Duis aliquam tempus turpis et hendrerit. Etiam felis metus, venenatis ac tincidunt eget, ullamcorper a dui. In sodales quam sed maximus gravida.');});});

$(document).ready(function(){ 
	$('#tos').click(function () {
		alert('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel porta metus. Donec pellentesque risus metus, quis lobortis ex elementum at. Proin ut arcu urna. Curabitur facilisis imperdiet velit eget dapibus. Mauris facilisis tristique eros eu pellentesque. Ut ut congue est. Proin tristique neque id nulla vehicula, nec tempus quam aliquam. Sed vitae blandit neque, at volutpat urna. Duis aliquam tempus turpis et hendrerit. Etiam felis metus, venenatis ac tincidunt eget, ullamcorper a dui. In sodales quam sed maximus gravida.');});});

$(document).ready(function(){ 
	$('#priv').click(function () {
		alert('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse vel porta metus. Donec pellentesque risus metus, quis lobortis ex elementum at. Proin ut arcu urna. Curabitur facilisis imperdiet velit eget dapibus. Mauris facilisis tristique eros eu pellentesque. Ut ut congue est. Proin tristique neque id nulla vehicula, nec tempus quam aliquam. Sed vitae blandit neque, at volutpat urna. Duis aliquam tempus turpis et hendrerit. Etiam felis metus, venenatis ac tincidunt eget, ullamcorper a dui. In sodales quam sed maximus gravida.');});});
