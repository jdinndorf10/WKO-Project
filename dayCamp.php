<!DOCTYPE html>
<html>
<head>
<title>WKO's Programs</title>
<link href="WKO.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div id = "wrapper">
		<div class = "homevisiting">
		<?php
			$horses = (glob("inputs/Camp*.txt"));					
						foreach ($horses as $horse) {
						list($riding) = file($horse);
		?>
			<p class = "content"><?=$riding?></p>
			
			<?php
			}
			?>
	</div>		
			
	<div>		
	<?php
		list($one, $two, $three, $four, $five, $six, $seven) = file("inputs/centerPrograms.txt");
	?>			
		<ul id = "sidebar">			
			
			<li class = "menu"><a href="centerProgramsAndhorseRiding.php"><?= $one ?></li>
			<li class = "menu"><a href="dayCamp.php"><?= $two ?></li>
			<li class = "menu"><a href="momsDay.php"><?= $three ?></li>
			<li class = "menu"><a href="Swimming.php"><?= $four ?></li>
			<li class = "menu"><a href="meetings.php"><?= $five ?></li>
			<li class = "menu"><a href="volunteer.php"><?= $six ?></li>
			<li class = "menu"><a href="events.php"><?= $seven ?></li>

		</ul>
	</div>
	
	<div class = "footer">
		<ul class = "footerList">	
			<li class = "socfoot"><a href = "https://twitter.com/WKO_Missouri"><img class = "socialMediaLogo" src="footer/twitter.png" ></a></li>
			<li class = "socfoot"><a href = "https://www.facebook.com/wholekidsoutreach"><img class = "socialMediaLogo" src="footer/facebook.png" ></a></li>
		</ul>
			<p><a href="#">Contact Us</a> | <a href="#">Terms of Use</a> | 
				<a href="http://wholekidsoutreach.org/wholekids">Site Map</a> | 
				<a href="#">Privacy Statement</a><br> Copyright &copy; 2014. All Rights Reserved.</p>
	</div>
	</div>
	
</body>
</html>	