<!doctype html>
<html>
	<head>
		<title>Volunteer</title>
		<meta charset="utf-8">
		<link href = "WKO.css" type="text/css" rel="stylesheet">
		<link href = "HelpNow.css" type="text/css" rel="stylesheet">
		<link href = "footer.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<div id="wrapper">
	<div id="header">
		<div id="homeButton">
			<br>Whole Kids	Outreach
		</div>
	<div id="nav">
   		<ul>

				<li class="list"><a class="Buttons" id="First" href="programs.php">About</a></li>
				<li class="list"><a class="Buttons" href="contact.html">Contact</a></li>
				<li class="list"><a class="Buttons" href="HelpNow.html">Help</a></li>
				<li class="list"><a class="Buttons" href="volunteer.php">Volunteer</a></li>
              <li class="list"><a class="Buttons" href="https://www.paypal.com/">Donate Now!</a></li>
		</ul>
	</div>
	</div>
    <div id="content">
		<?php
			$myfile = "VolunteerSignUp.txt";
			if (isset($_POST["name"]))
				file_put_contents($myfile,$_POST["name"],FILE_APPEND);
			if (isset($_POST["number"]))
				file_put_contents($myfile," ".$_POST["number"],FILE_APPEND);	
			if (isset($_POST["address"]))
				file_put_contents($myfile," ".$_POST["address"]."\n",FILE_APPEND);
			$_POST["name"] = "";
			$_POST["number"] = "";
			$_POST["address"] = "";
		?>

		<div id="para" id="left">
			<h2 id="middle">Volunteer Info</h2>
			Volunteer opportunities abound at Whole Kids Outreach.
			New and returning volunteers are welcomed and each is offered a unique learning and social experience. 
			<br><br>The WKO Volunteer Program provides an opportunity for volunteers to participate in “mission” as opposed to an assortment of fragmented odd jobs. 
			Volunteers are recruited from schools, established youth and community groups, and through the many relationships WKO has forged with families, businesses and agencies throughout the country. 
			<br><br>The length of any given volunteer experience varies from an hour to a whole week. 
			Volunteers are welcomed onto the WKO property throughout the year for a variety of activities. 
			Each volunteer is acclimated to the expectations of the assigned tasks through a thorough orientation. 
			This orientation also helps connect the service project with the overall mission of WKO, along with God’s global mission for our world.
			<br><br>All volunteer experiences are closely monitored to ensure that the needs of the volunteers are met, questions are answered, and that at all times the best interests and most immediate needs of the target population are being met by the volunteer activities.
			<br><br>Volunteers who participate in extended projects (more than one day) have the chance to be involved in a variety of dynamic projects such as:
			<ul>
				<li>service activities with the WKO grounds and maintenance team</li>
				<li>recreational activities with children of all ages</li>
				<li>community outreach activities for WKO clients who need help with home improvements to improve the safety of their living environments</li>
				<li>Camp Whole Kids, WKO’s four-week summer day camp</li>
			</ul>
			<br><br><a class="link" href="SignUp.php">Click Here to Sign Up</a>
		</div>
		</div>
	    <div id="footer">
			<ul class = "footerList">	
				<li class="socfoot"><a href = "https://twitter.com/WKO_Missouri"><img class = "socialMediaLogo" src="footer/twitter.png" ></a></li>
				<li class="socfoot"><a href = "https://www.facebook.com/wholekidsoutreach"><img class = "socialMediaLogo" src="footer/facebook.png" ></a></li>
			</ul>
			<p><a href="#">Contact Us</a> | <a href="#">Terms of Use</a> | 
				<a href="http://wholekidsoutreach.org/wholekids">Site Map</a> | 
				<a href="#">Privacy Statement</a><br> Copyright &copy; 2014. All Rights Reserved.</p>
		</div>
	</div>
	</body>
</html>