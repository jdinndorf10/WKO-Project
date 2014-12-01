<!doctype html>
<html>
	<head>
		<title>Volunteer</title>
		<meta charset="utf-8">
		<link href = "WKO.css" type="text/css" rel="stylesheet">
		<link href = "HelpNow.css" type="text/css" rel="stylesheet">
	</head>

	<body>
	<div id="wrapper">
	<div id="header">
		<div id="homeButton">
			<img id="img"src="logo.jpg" alt="logo" width="300" height="100">
			<ul>
				<li class="list"><a class="Buttons" id="First" href="images/about.html">About</a></li>
				<li class="list"><a class="Buttons" href="">Contact Us</a></li>
				<li class="list"><a class="Buttons" href="HelpNow.html">How to Help</a></li>
				<li class="list"><a id="donate" href="https://www.paypal.com/">Donate Now!</a></li>
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
		<div id="para">
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
		</div>
		<div id="form">
		<form action = "Volunteer.php" method="post">
			<h2>Sign Up to Volunteer</h2>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			Name: <input type="text" size="20" name="name"/><br>
			Phone Number: <input type="text" size="20" name="number"/><br>
			Email Address:  <input type="text" size="20" name="address"/><br>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<input type="submit" value="Submit"/>
		</form>
		</div>
    </div>
	<div class = "footer">
		<ul class = "footerList">	
			<li><a href = "https://twitter.com/WKO_Missouri"><img class = "socialMediaLogo" src="twitter.png" ></a></li>
			<li><a href = "https://www.facebook.com/wholekidsoutreach"><img class = "socialMediaLogo" src="facebook.png" ></a></li>
		</ul>
			<p><a href="#">Contact Us</a> | <a href="#">Terms of Use</a> | 
				<a href="http://wholekidsoutreach.org/wholekids">Site Map</a> | 
				<a href="#">Privacy Statement</a><br> Copyright &copy; 2014. All Rights Reserved.</p>
	</div>
	</div>
	</body>
</html>