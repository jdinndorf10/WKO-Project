<!DOCTYPE html>
<html>
<head>
	<title>WKO's Programs</title>
    <script src="jquery-1.11.1.min.js"></script>
    <script src="programs.js" type="text/javascript"></script>
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
				<li class="list"><a class="Buttons" href="programs.php">Programs</a></li>
				<li class="list"><a class="Buttons" href="HelpNow.html">Help</a></li>
				<li class="list"><a class="Buttons" href="volunteer2.php">Volunteer</a></li>
              	<li class="list"><a class="Buttons" target="_blank" href="https://www.paypal.com/">Donate Now!</a></li>
		</ul>
	</div>
	</div>
	
    <div id="content">
    
    <div>		
		<?php
			list($one, $two) = file("inputs/progNav.txt");
			list($Cone, $Ctwo, $Cthree, $Cfour, $Cfive, $Csix, $Cseven) = file("inputs/centerPrograms.txt");
			list($Hone, $Htwo, $Hthree) = file("inputs/homeVisitingPrograms.txt");
		?>			
			<ul class = "sidebar" id = "main" >			
				<li class = "menu"> <span class = "program" id = "center" href=""><?= $one ?></span></li>
				<li class = "menu"> <span class = "program" id = "Home" href=""><?= $two ?></span></li>
			</ul>
			
			<ul class = "hideBar" id = "m1">
				<li class = "menu"> <span class = "program" id = "cent" href=""><?= $one ?></span></li>				
				<li class = "menu"> <span class = "program" id = "home"><?= $Hone ?></span></li>
				<li class = "menu"> <span class = "program" id = "mothers"><?= $Htwo ?></span></li>
				<li class = "menu"> <span class = "program" id = "matern"><?= $Hthree ?></span></li>
			</ul>	
		
			<ul class = "hideBar" id = "m2">
				<li class = "menu"> <span class = "program" id = "Ho" href=""><?= $two ?></span></li>				
				<li class = "menu"> <span class = "program" id = "riding"><?= $Cone ?></span></li>
				<li class = "menu"> <span class = "program" id = "camp"><?= $Ctwo ?></span></li>
				<li class = "menu"> <span class = "program" id = "dayOut"><?= $Cthree ?></span></li>
				<li class = "menu"> <span class = "program" id = "swimming"><?= $Cfour ?></span></li>
				<li class = "menu"> <span class = "program" id = "hosting"><?= $Cfive ?></span></li>
				<li class = "menu"> <span class = "program" id = "volunteer"><?= $Csix ?></span></li>
				<li class = "menu"> <span class = "program" id = "community"><?= $Cseven ?></span></li>
			</ul>					

	</div>
		
		<div class = "paragraphs" id = "initialWords">
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
		
		<div class = "paragraphs" id = "initWords">
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
		
		<div class = "hider" id = "enhancement">
			<?php
				$families = (glob("inputs/familyEnhancement*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>	
		
		<div class = "hider" id = "resources">
			<?php
				$families = (glob("inputs/mothersResources*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
		</div>	
		
		<div class = "hider" id = "maternal">
			<?php
				$families = (glob("inputs/maternalMother*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
			?>
				<p><?= $fam?></p>
			
			<?php
			}
			?>
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
		</ul>
			<ul id="footernav"><li class="socfoot"><a href = "https://twitter.com/WKO_Missouri"><img class = "socialMediaLogo" src="footer/twitter.png" ></a></li><li class="list"><button id="contact">Contact Us</button></li> |<li class="list"> <button id="tos" href="#">Terms of Use</button> </li>| 
				<li class="list"><form id="sitemap" action="http://wholekidsoutreach.org/wholekids">
    	<input type="submit" value="Site Map"></form> </li>| 
				<li class="list"><button  href="#" id="priv">Privacy Statement</button></li><li class="socfoot"><a href = "https://www.facebook.com/wholekidsoutreach"><img class = "socialMediaLogo" src="footer/facebook.png" ></a></li></ul><br>&nbsp;&nbsp;&nbsp; Copyright &copy; 2014. All Rights Reserved.
	</div>
    </div>
	
</body>
</html>	