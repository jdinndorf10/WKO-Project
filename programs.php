<!DOCTYPE html>
<html>
<head>
	<title>WKO's Programs</title>
	<link href="WKO.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans:500' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
</head>
<body>

<div id="wrapper">
	<div id="header">
		<div id="homeButton">
			<a id = "homeLocator" href="index.html">
				<br>Whole Kids	Outreach
			</a>
		</div>
   <div id="nav">
   		<ul>
				<li class="list"><a class="Buttons" id="First" href="">About</a></li>
				<li class="list"><a class="Buttons" href="programs.php">Programs</a></li>
				<li class="list"><a class="Buttons" href="HelpNow.html">Help</a></li>
				<li class="list"><a class="Buttons" href="volunteer2.php">Volunteer</a></li>
              <li class="list"><a class="Buttons" href="https://www.paypal.com/">Donate Now!</a></li>
		</ul>
   </div>
	</div>
	
    <div id="content">
    
    	<div>		
		<?php
			list($one, $two) = file("inputs/programs.txt");
		?>			
			<ul id = "sidebar">			
			
				<li class = "menu"><a class = "program" href="CenterPrograms.php"><?= $one ?></a></li>
				<li class = "menu"><a class = "program" href="HomePrograms.php"><?= $two ?></a></li>

			</ul>
	</div>
		
		<div class = "paragraphs">
			<?php
				list($one, $two) = file("inputs/program.txt");
			?>
				<p><?= $one?></p>
				<p><?= $two?></p>
			
		</div>	
    </div>
    
    <div id="footer">
    	<ul class = "footerList">	
			<li class="socfoot"><a href = "https://twitter.com/WKO_Missouri"><img class = "socialMediaLogo" src="footer/twitter.png" alt = "twitter" ></a></li>
			<li class="socfoot"><a href = "https://www.facebook.com/wholekidsoutreach"><img class = "socialMediaLogo" src="footer/facebook.png" alt = "facebook"></a></li>
		</ul>
			<p><a href="#">Contact Us</a> | <a href="#">Terms of Use</a> | 
				<a href="http://wholekidsoutreach.org/wholekids">Site Map</a> | 
				<a href="#">Privacy Statement</a><br> Copyright &copy; 2014. All Rights Reserved.</p>
	</div>
    </div>
	
</body>
</html>	