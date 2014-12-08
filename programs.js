window.onload = pageLoad;

function pageLoad () {
	document.getElementById("home").onclick = home;
	document.getElementById("mothers").onclick = mothers;
	document.getElementById("matern").onclick = maternal;
	document.getElementById("riding").onclick = ride;
	document.getElementById("camp").onclick = camp;
	document.getElementById("dayOut").onclick = day;
	document.getElementById("swimming").onclick = swim;
	document.getElementById("hosting").onclick = host;
	document.getElementById("volunteer").onclick = vol;
	document.getElementById("homeButton").onclick = homes;
	document.getElementById("Home").onclick = homeP;
	document.getElementById("center").onclick = center;
	document.getElementById("Ho").onclick = homeP;
	document.getElementById("cent").onclick = center;
}

function homeP() {
	document.getElementById("main").className = "hideBar";
	document.getElementById("m2").className = "hideBar";
	document.getElementById("m1").className = "sidebar";
}

function center() {
	document.getElementById("main").className = "hideBar";
	document.getElementById("m2").className = "sidebar";
	document.getElementById("m1").className = "hideBar";
}

function home () {
	document.getElementById("enhancement").className = "paragraphs";
	document.getElementById("home").className = "colored";
	document.getElementById("resources").className = "hider";
	document.getElementById("mothers").className = "program";
	document.getElementById("maternal").className = "hider";
	document.getElementById("matern").className = "program";
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
}

function mothers () {
	document.getElementById("enhancement").className = "hider";
	document.getElementById("home").className = "program";
	document.getElementById("resources").className = "paragraphs";
	document.getElementById("mothers").className = "colored";
	document.getElementById("maternal").className = "hider";
	document.getElementById("matern").className = "program";
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
}

function maternal () {
	document.getElementById("enhancement").className = "hider";
	document.getElementById("home").className = "program";
	document.getElementById("resources").className = "hider";
	document.getElementById("mothers").className = "program";
	document.getElementById("maternal").className = "paragraphs";
	document.getElementById("matern").className = "colored";
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
}

function homes(){
	window.location.href = "index.html";
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
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
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
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
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
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
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
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
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
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
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
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
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
	document.getElementById("initWords").className = "hider";
	document.getElementById("initialWords").className = "hider";
}