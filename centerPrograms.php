<!DOCTYPE html>
<html>
<head>
	<title>WKO's Programs</title>
	<link href="WKO.css" rel="stylesheet">
	<script src="centerPrograms.js" type="text/javascript"></script>
	<link href='http://fonts.googleapis.com/css?family=Quicksand:700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fira+Sans:500' rel='stylesheet' type='text/css'>
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
			list($one, $two, $three, $four, $five, $six, $seven) = file("inputs/centerPrograms.txt");
		?>			
			<ul id = "sidebar">			
			
				<li class = "menu"> <span class = "program" id = "riding"><?= $one ?></span></li>
				<li class = "menu"> <span class = "program" id = "camp"><?= $two ?></span></li>
				<li class = "menu"> <span class = "program" id = "dayOut"><?= $three ?></span></li>
				<li class = "menu"> <span class = "program" id = "swimming"><?= $four ?></span></li>
				<li class = "menu"> <span class = "program" id = "hosting"><?= $five ?></span></li>
				<li class = "menu"> <span class = "program" id = "volunteer"><?= $six ?></span></li>
				<li class = "menu"> <span class = "program" id = "community"><?= $seven ?></span></li>

			</ul>
	</div>
		
		<div class = "hider" id = "swim">
			<?php
				$families = (glob("inputs/Swimming*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>	
		
		<div class = "hider" id = "ride">
			<?php
				$families = (glob("inputs/horseRiding*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>	
		
		<div class = "hider" id = "dayout">
			<?php
				$families = (glob("inputs/Moms*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>	
		
		<div class = "hider" id = "voluntee">
			<?php
				$families = (glob("inputs/Volunteer*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>
		
		<div class = "hider" id = "host">
			<?php
				$families = (glob("inputs/Hosting*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>	
		
		<div class = "hider" id = "events">
			<?php
				$families = (glob("inputs/Community Events*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>	
		
		<div class = "hider" id = "camper">
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