<!DOCTYPE html>
<html>
<head>
<title>WKO's Programs</title>
<link  href="footer/footer.css" rel="stylesheet">
</head>
<body>
	<div>
		<?php
			$families = (glob("inputs/familyEnhancement*.txt"));					
						foreach ($families as $family) {
						list($fam) = file($family);
		?>
			<p class = "content"><?= $fam?></p>
			
			<?php
			}
			?>
	</div>		
			
	<div>		
	<?php
		list($one, $two, $three) = file("inputs/homeVisitingPrograms.txt");
	?>			
		<ul id = "sidebar">			
			
			<li class = "menu"><a href="HomeProgramsAndEnhancement.php"><?= $one ?></li>
			<li class = "menu"><a href="mothersProgram.php"><?= $two ?></li>
			<li class = "menu"><a href="Maternal.php"><?= $three ?></li>

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
	
</body>
</html>	