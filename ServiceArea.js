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


<!--Google maps code-->
var zoomedIn = false;

function initialize() {
    var stylez = [
      {
        featureType: "all",
        stylers: [
          { hue: "#0000ff" },
          { saturation: -75 }
        ]
      },
      {
        featureType: "poi",
        elementType: "label",
        stylers: [
          { visibility: "off" }
        ]
      }
    ];

    var latlng = new google.maps.LatLng(37.194687, -90.952620), //WKO center
    
        mapOptions = {
            mapTypeControlOptions: {
                mapTypeIds: [google.maps.MapTypeId.ROADMAP, "Edited"] 
            },
            zoom: 10,
            center: latlng
        },
        
        map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions),
        
        styledMapType = new google.maps.StyledMapType(stylez, {name: "Edited"}),
        
        marker = new google.maps.Marker({
            position: latlng, 
            map: map, 
            animation: google.maps.Animation.DROP,
            title:"Whole Kids Outreach Center"
        }),
        
        infowindow = null;
        
        map.mapTypes.set("Edited", styledMapType);
        map.setMapTypeId('Edited');
    
    function toggleBounce () {
        if (marker.getAnimation() != null) {
            marker.setAnimation(null);
        } else {
            marker.setAnimation(google.maps.Animation.BOUNCE);
        }
    }
    
    function smoothZoom (map, level, cnt, mode) {

		// If mode is zoom in
		if(mode == true) {

			if (cnt >= level) {
				return;
			}
			else {
				var z = google.maps.event.addListener(map, 'zoom_changed', function(event){
					google.maps.event.removeListener(z);
					smoothZoom(map, level, cnt + 1, true);
				});
				setTimeout(function(){map.setZoom(cnt)}, 80);
			}
		} else {
			if (cnt <= level) {
				return;
			}
			else {
				var z = google.maps.event.addListener(map, 'zoom_changed', function(event) {
					google.maps.event.removeListener(z);
					smoothZoom(map, level, cnt - 1, false);
				});
				setTimeout(function(){map.setZoom(cnt)}, 80);
			}
		}
	}    
    google.maps.event.addListener(marker, 'click', function () {
        toggleBounce();
        setTimeout(toggleBounce, 1500);
    });
	
    $('.btn').click(function(event) {
        if(!zoomedIn) {
				smoothZoom(map, 20, map.getZoom(), true);
				zoomedIn = true;
                $(this).text('Zoom');
			} else {
				smoothZoom(map, 9, map.getZoom(), false);
				zoomedIn = false;
                $(this).text('Zoom');
			} 
    });
}

initialize();