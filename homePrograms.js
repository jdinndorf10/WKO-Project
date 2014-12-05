window.onload = pageLoad;

function pageLoad () {
	document.getElementById("home").onclick = home;
	document.getElementById("mothers").onclick = mothers;
	document.getElementById("matern").onclick = maternal;
	document.getElementById("homeButton").onclick = homes;
}

function home () {
	document.getElementById("enhancement").className = "paragraphs";
	document.getElementById("home").className = "colored";
	document.getElementById("resources").className = "hider";
	document.getElementById("mothers").className = "program";
	document.getElementById("maternal").className = "hider";
	document.getElementById("matern").className = "program";
}

function mothers () {
	document.getElementById("enhancement").className = "hider";
	document.getElementById("home").className = "program";
	document.getElementById("resources").className = "paragraphs";
	document.getElementById("mothers").className = "colored";
	document.getElementById("maternal").className = "hider";
	document.getElementById("matern").className = "program";
}

function maternal () {
	document.getElementById("enhancement").className = "hider";
	document.getElementById("home").className = "program";
	document.getElementById("resources").className = "hider";
	document.getElementById("mothers").className = "program";
	document.getElementById("maternal").className = "paragraphs";
	document.getElementById("matern").className = "colored";
}

function homes(){
	window.location.href = "index.html";
}