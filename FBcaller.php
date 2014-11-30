<!doctype html>
<html lang="en">
<head>
	<title>Google Maps</title>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
</head>
<body>
<h2>Facebook Proto</h2>	
	<?php
	
	require('FBgalleryProto.php');
	
	$appId = '978057762210560';
	$appSecret = 'c609025febe9ce58864818bb997300af';
	$photoAlbumId = '726590807432594';
	
	$FBGallery = new FBgalleryProto($appId,$appSecret,$photoAlbumId);
	$PhotoList = $FBGallery->getPhotos();
	$FBGallery->printPhotos($PhotoList);
	
	?>
	
	<p>Its Over!</p>

</body>
</html>