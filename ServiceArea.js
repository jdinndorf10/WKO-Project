window.onload = pageLoad;
			
function pageLoad(){
	document.getElementById("map").onclick = show;
}

function show(){
	document.getElementById("submit").onclick = checkLocation;
	document.getElementById("location").className = "show";
}

function checkLocation(){
	var zip = document.getElementById("zip").value;
	if (zip == 1)
		alert("hi");
	if( zip == 63620||zip == 63621||zip == 63623||zip == 63625||zip == 63629||zip == 63632||zip == 63633||zip == 63636||zip == 63638||
		zip == 63650||zip == 63654||zip == 63656||zip == 63663||zip == 63665||zip == 63666||zip == 63675||zip == 63763||zip == 63901||
		zip == 63902||zip == 63932||zip == 63934||zip == 63937||zip == 63938||zip == 63940||zip == 63941||zip == 63943||zip == 63944||
		zip == 63945||zip == 63950||zip == 63951||zip == 63952||zip == 63954||zip == 63956||zip == 63957||zip == 63961||zip == 63962||
		zip == 63964||zip == 63965||zip == 63966||zip == 63967||zip == 65438||zip == 65439||zip == 65466||zip == 65546||zip == 65566||
		zip == 65588)
		alert("Zip code is in service area");
	else
		alert("Zip code is not in service area");

}