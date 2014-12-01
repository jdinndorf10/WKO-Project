window.onload = pageLoad;
			
function pageLoad(){
	document.getElementById("volunteer").onclick = volunteer;
	document.getElementById("outright").onclick = outright;
	document.getElementById("match").onclick = match;
	document.getElementById("pledge").onclick = pledge;
	document.getElementById("kind").onclick = kind;
	document.getElementById("specialEvents").onclick = specialEvents;
	document.getElementById("thirdParty").onclick = thirdParty;
	document.getElementById("planned").onclick = planned;
	document.getElementById("map").onclick = map;
}

function map(){
	alert("hi");
	//document.getElementById("submit").onclick = checkLocation;
	//document.getElementById("location").className = "visible";
}

function checkLocation(){
	//var address = document.getElementById("address").value;
}

function volunteer(){
	document.getElementById("volunteerB").className = "box";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";
}

function outright(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "box";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";
}

function match(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "box";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";
}

function pledge(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "box";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";												
}

function planned(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "box";												
}

function kind(){	
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "box";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";										
}

function specialEvents(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "box";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";															
}

function thirdParty(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "box";
	document.getElementById("plannedB").className = "hidden";														
}