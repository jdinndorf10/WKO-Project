<!DOCTYPE html>
<html>
<head>
	<title>WKO's Programs</title>
    <script src="jquery-1.11.1.min.js"></script>
	<link href="WKO.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Quicksand:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans:500' rel='stylesheet' type='text/css'>
	<meta charset="utf-8">
</head>
<body>

<div id="wrapper">
	<div id="header">
		<div id="homeButton" onClick="home()">
				<br>Whole Kids	Outreach
		</div>
   <div id="nav">
   		<ul>

				<li class="list"><a class="Buttons" href="about.html">About</a></li>
				<li class="list"><a id="active" class="Buttons" href="programs.php">Programs</a></li>
				<li class="list"><a class="Buttons" href="HelpNow.html">Help</a></li>
				<li class="list"><a class="Buttons" href="volunteer2.php">Volunteer</a></li>
              <li class="list"><a class="Buttons" href="https://www.paypal.com/">Donate Now!</a></li>
		</ul>
   </div>
	</div>
	
    <div id="content">
    
    	<div>		
		<?php
			list($one, $two) = file("inputs/progNav.txt");
		?>			
			<ul id = "sidebar">			
			
				<li class = "menu"><a class = "program" href="CenterPrograms.php"><?= $one ?></a></li>
				<li class = "menu"><a class = "program" href="HomePrograms.php"><?= $two ?></a></li>

			</ul>
	</div>
		
		<div class = "paragraphs">
			<h3>Center Based Programs</h3>
			<?php
				$families = (glob("inputs/centerBased*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>
		
		<div class = "paragraphs">
			<h3>Home Visiting Programs</h3>
			<?php
				$families = (glob("inputs/homeVis*.txt"));					
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
		</ul>
			<ul id="footernav"><li class="socfoot"><a href = "https://twitter.com/WKO_Missouri"><img class = "socialMediaLogo" src="footer/twitter.png" ></a></li><li class="list"><button id="contact">Contact Us</button></li> |<li class="list"> <button id="tos" href="#">Terms of Use</button> </li>| 
				<li class="list"><form id="sitemap" action="http://wholekidsoutreach.org/wholekids">
    	<input type="submit" value="Site Map"></form> </li>| 
				<li class="list"><button  href="#" id="priv">Privacy Statement</button></li><li class="socfoot"><a href = "https://www.facebook.com/wholekidsoutreach"><img class = "socialMediaLogo" src="footer/facebook.png" ></a></li></ul><br>&nbsp;&nbsp;&nbsp; Copyright &copy; 2014. All Rights Reserved.
	</div>
    </div>
	
</body>
</html>	