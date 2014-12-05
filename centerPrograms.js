window.onload = pageLoad;

function pageLoad () {
	document.getElementById("riding").onclick = ride;
	document.getElementById("camp").onclick = camp;
	document.getElementById("dayOut").onclick = day;
	document.getElementById("swimming").onclick = swim;
	document.getElementById("hosting").onclick = host;
	document.getElementById("volunteer").onclick = vol;
	document.getElementById("community").onclick = comm;
	document.getElementById("homeButton").onclick = home;
}

function ride () {
	document.getElementById("ride").className = "paragraphs";
	document.getElementById("riding").className = "colored";
	document.getElementById("camper").className = "hider";
	document.getElementById("camp").className = "program";
	document.getElementById("dayout").className = "hider";
	document.getElementById("dayOut").className = "program";
	document.getElementById("swim").className = "hider";
	document.getElementById("swimming").className = "program";
	document.getElementById("host").className = "hider";
	document.getElementById("hosting").className = "program";
	document.getElementById("voluntee").className = "hider";
	document.getElementById("volunteer").className = "program";
	document.getElementById("events").className = "hider";
	document.getElementById("community").className = "program";
}

function camp () {
	document.getElementById("ride").className = "hider";
	document.getElementById("riding").className = "program";
	document.getElementById("camper").className = "paragraphs";
	document.getElementById("camp").className = "colored";
	document.getElementById("dayout").className = "hider";
	document.getElementById("dayOut").className = "program";
	document.getElementById("swim").className = "hider";
	document.getElementById("swimming").className = "program";
	document.getElementById("host").className = "hider";
	document.getElementById("hosting").className = "program";
	document.getElementById("voluntee").className = "hider";
	document.getElementById("volunteer").className = "program";
	document.getElementById("events").className = "hider";
	document.getElementById("community").className = "program";
}

function day () {
	document.getElementById("ride").className = "hider";
	document.getElementById("riding").className = "program";
	document.getElementById("camper").className = "hider";
	document.getElementById("camp").className = "program";
	document.getElementById("dayout").className = "paragraphs";
	document.getElementById("dayOut").className = "colored";
	document.getElementById("swim").className = "hider";
	document.getElementById("swimming").className = "program";
	document.getElementById("host").className = "hider";
	document.getElementById("hosting").className = "program";
	document.getElementById("voluntee").className = "hider";
	document.getElementById("volunteer").className = "program";
	document.getElementById("events").className = "hider";
	document.getElementById("community").className = "program";
}

function swim () {
	document.getElementById("ride").className =  "hider";
	document.getElementById("riding").className = "program";
	document.getElementById("camper").className = "hider";
	document.getElementById("camp").className = "program";
	document.getElementById("dayout").className = "hider";
	document.getElementById("dayOut").className = "program";
	document.getElementById("swim").className = "paragraphs";
	document.getElementById("swimming").className = "colored";
	document.getElementById("host").className = "hider";
	document.getElementById("hosting").className = "program";
	document.getElementById("voluntee").className = "hider";
	document.getElementById("volunteer").className = "program";
	document.getElementById("events").className = "hider";
	document.getElementById("community").className = "program";
}

function host () {
	document.getElementById("ride").className = "hider";
	document.getElementById("riding").className = "program";
	document.getElementById("camper").className = "hider";
	document.getElementById("camp").className = "program";
	document.getElementById("dayout").className = "hider";
	document.getElementById("dayOut").className = "program";
	document.getElementById("swim").className = "hider";
	document.getElementById("swimming").className = "program";
	document.getElementById("host").className = "paragraphs";
	document.getElementById("hosting").className = "colored";
	document.getElementById("voluntee").className = "hider";
	document.getElementById("volunteer").className = "program";
	document.getElementById("events").className = "hider";
	document.getElementById("community").className = "program";
}

function vol () {
	document.getElementById("ride").className = "hider";
	document.getElementById("riding").className = "program";
	document.getElementById("camper").className = "hider";
	document.getElementById("camp").className = "program";
	document.getElementById("dayout").className = "hider";
	document.getElementById("dayOut").className = "program";
	document.getElementById("swim").className = "hider";
	document.getElementById("swimming").className = "program";
	document.getElementById("host").className = "hider";
	document.getElementById("hosting").className = "program";
	document.getElementById("voluntee").className = "paragraphs";
	document.getElementById("volunteer").className = "colored";
	document.getElementById("events").className = "hider";
	document.getElementById("community").className = "program";
}

function comm () {
	document.getElementById("ride").className = "hider";
	document.getElementById("riding").className = "program";
	document.getElementById("camper").className = "hider";
	document.getElementById("camp").className = "program";
	document.getElementById("dayout").className = "hider";
	document.getElementById("dayOut").className = "program";
	document.getElementById("swim").className = "hider";
	document.getElementById("swimming").className = "program";
	document.getElementById("host").className = "hider";
	document.getElementById("hosting").className = "program";
	document.getElementById("voluntee").className = "hider";
	document.getElementById("volunteer").className = "program";
	document.getElementById("events").className = "paragraphs";
	document.getElementById("community").className = "colored";
}

function home(){
	window.location.href = "index.html";
}