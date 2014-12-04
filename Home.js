window.onload = pageLoad;
			
function pageLoad(){
	document.getElementById("homeButton").onclick = home;
}

function home(){
	window.location.href = "index.html";
}
$(document).ready(function(){  
	$('#contact').click(function () {
		alert('Contact stuff');});});

$(document).ready(function(){ 
	$('#tos').click(function () {
		alert('ToS stuff');});});

$(document).ready(function(){ 
	$('#priv').click(function () {
		alert('privacy stuff');});});