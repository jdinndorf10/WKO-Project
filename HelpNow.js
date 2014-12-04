window.onload = pageLoad;
			
function pageLoad(){
	document.getElementById("volunteer").onclick = volunteerF;
	document.getElementById("outright").onclick = outrightF;
	document.getElementById("match").onclick = matchF;
	document.getElementById("pledge").onclick = pledgeF;
	document.getElementById("kind").onclick = kindF;
	document.getElementById("specialEvents").onclick = specialEventsF;
	document.getElementById("thirdParty").onclick = thirdPartyF;
	document.getElementById("planned").onclick = plannedF;
}

function volunteerF(){
	document.getElementById("volunteerB").className = "box";
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";
	
	document.getElementById("volunteer").className = "orange";
	document.getElementById("outright").className = "options";
	document.getElementById("match").className = "options";
	document.getElementById("pledge").className = "options";
	document.getElementById("kind").className = "options";
	document.getElementById("specialEvents").className = "options";
	document.getElementById("thirdParty").className = "options";
	document.getElementById("planned").className = "options";
}

function outrightF(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "box";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";
	
	document.getElementById("volunteer").className = "options";
	document.getElementById("outright").className = "orange";
	document.getElementById("match").className = "options";
	document.getElementById("pledge").className = "options";
	document.getElementById("kind").className = "options";
	document.getElementById("specialEvents").className = "options";
	document.getElementById("thirdParty").className = "options";
	document.getElementById("planned").className = "options";
}

function matchF(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "box";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";
	
	document.getElementById("volunteer").className = "options";
	document.getElementById("outright").className = "options";
	document.getElementById("match").className = "orange";
	document.getElementById("pledge").className = "options";
	document.getElementById("kind").className = "options";
	document.getElementById("specialEvents").className = "options";
	document.getElementById("thirdParty").className = "options";
	document.getElementById("planned").className = "options";
}

function pledgeF(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "box";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";	

	document.getElementById("volunteer").className = "options";
	document.getElementById("outright").className = "options";
	document.getElementById("match").className = "options";
	document.getElementById("pledge").className = "orange";
	document.getElementById("kind").className = "options";
	document.getElementById("specialEvents").className = "options";
	document.getElementById("thirdParty").className = "options";
	document.getElementById("planned").className = "options";	
}

function plannedF(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "box";		

	document.getElementById("volunteer").className = "options";
	document.getElementById("outright").className = "options";
	document.getElementById("match").className = "options";
	document.getElementById("pledge").className = "options";
	document.getElementById("kind").className = "options";
	document.getElementById("specialEvents").className = "options";
	document.getElementById("thirdParty").className = "options";
	document.getElementById("planned").className = "orange";	
}

function kindF(){	
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "box";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";	

	document.getElementById("volunteer").className = "options";
	document.getElementById("outright").className = "options";
	document.getElementById("match").className = "options";
	document.getElementById("pledge").className = "options";
	document.getElementById("kind").className = "orange";
	document.getElementById("specialEvents").className = "options";
	document.getElementById("thirdParty").className = "options";
	document.getElementById("planned").className = "options";	
}

function specialEventsF(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "box";
	document.getElementById("thirdPartyB").className = "hidden";
	document.getElementById("plannedB").className = "hidden";	

	document.getElementById("volunteer").className = "options";
	document.getElementById("outright").className = "options";
	document.getElementById("match").className = "options";
	document.getElementById("pledge").className = "options";
	document.getElementById("kind").className = "options";
	document.getElementById("specialEvents").className = "orange";
	document.getElementById("thirdParty").className = "options";
	document.getElementById("planned").className = "options";		
}

function thirdPartyF(){
	document.getElementById("volunteerB").className = "hidden";	
	document.getElementById("outrightB").className = "hidden";
	document.getElementById("matchB").className = "hidden";
	document.getElementById("pledgeB").className = "hidden";
	document.getElementById("kindB").className = "hidden";
	document.getElementById("specialEventsB").className = "hidden";
	document.getElementById("thirdPartyB").className = "box";
	document.getElementById("plannedB").className = "hidden";

	document.getElementById("volunteer").className = "options";
	document.getElementById("outright").className = "options";
	document.getElementById("match").className = "options";
	document.getElementById("pledge").className = "options";
	document.getElementById("kind").className = "options";
	document.getElementById("specialEvents").className = "options";
	document.getElementById("thirdParty").className = "orange";
	document.getElementById("planned").className = "options";	
}