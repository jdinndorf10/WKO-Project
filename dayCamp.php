<!DOCTYPE html>
<html>
<head>
	<title>WKO's Programs</title>
	<link href="WKO.css" rel="stylesheet">
	<meta charset="utf-8">
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
    
	<div>		
		<?php
			list($one, $two, $three, $four, $five, $six, $seven) = file("inputs/centerPrograms.txt");
		?>			
			<ul id = "sidebar">			
			
				<li class = "menu"><a href="centerPrograms.php"><?= $one ?></a></li>
				<li class = "menu"><a href="dayCamp.php"><?= $two ?></a></li>
				<li class = "menu"><a href="momsDay.php"><?= $three ?></a></li>
				<li class = "menu"><a href="Swimming.php"><?= $four ?></a></li>
				<li class = "menu"><a href="meetings.php"><?= $five ?></a></li>
				<li class = "menu"><a href="volunteer.php"><?= $six ?></a></li>
				<li class = "menu"><a href="events.php"><?= $seven ?></a></li>

			</ul>
	</div>
		
		<div class = "paragraphs">
			<?php
				$families = (glob("inputs/Camp*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
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