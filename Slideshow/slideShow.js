$(document).ready(function() {

		//ajax query to php to get photo array
		var obj;
		$.get("Slideshow/FBcaller.php", function(data){
                //alert("Data Loaded: " + data);
				//$("#dataLoaded").html(data);
				obj = JSON.parse(data);
            },"json");
			
		
		for (var index = 0; index < obj.length; ++index) {
			var htmlS = $("#dataLoaded").html();
			$("#dataLoaded").html(htmlS + "<br>" +obj[index]);
			
		}		
			
			
			
			
            /*var slideimages = new Array()

            function slideshowimages() {
                for (i = 0; i < slideshowimages.arguments.length; i++) {
                    slideimages[i] = new Image()
                    slideimages[i].src = slideshowimages.arguments[i]
                }
            }

            function gotoshow() {
                if (!window.winslide || winslide.closed)
                    winslide = window.open(slidelinks[whichlink])
                else
                    winslide.location = slidelinks[whichlink]
                winslide.focus()
            }*/

   
});