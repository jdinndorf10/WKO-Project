$(document).ready(function() {

		//ajax query to php to get photo array
		var obj
		$.get("FBcaller.php", function(data){
                //alert("Data Loaded: " + data);
				//$("#dataLoaded").html(data);
				obj = JSON.parse(data);
            },"json");
			
		
			
			
			
			
			
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