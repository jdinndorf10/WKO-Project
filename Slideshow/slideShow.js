$(document).ready(function() {

		//ajax query to php to get photo array
		var index = 0;
		$.get("FBcaller.php", function(data){
				try {
					parsed = JSON.parse(JSON.stringify(data));
				}catch(err) {
					alert("Error: " + err.message);
				}
            },"json")
			.fail(function(request, status, error) {
				alert (request.responseText);
			})
			.done(function() {
				parseData(parsed);
			});
		
		function parseData(parsedJson) {
			var arr = [];

			//parsing json
			for(var x in parsed){
				arr.push(parsed[x]);
			}
			
			//DEBUG: outputting array
			/*for (var index = 0; index < arr.length; index++) {
				var htmlS = $("#dataLoaded").html();
				$("#dataLoaded").html(htmlS + "<br>" +arr[index]);
			}*/	
			
			var intervalID = setInterval(function() {advanceSlideShow(arr)},1000);
			
		}	
		
		function advanceSlideShow(arr) {
			//iterate
			try {
				index = index+1;
				if (index > arr.length) {
					index = 0;
				}
				$("#slideShow").attr("src",arr[index]);
			}catch(err) {
				$("#slideShow").attr("src","default.jpg");
			}
		}
});