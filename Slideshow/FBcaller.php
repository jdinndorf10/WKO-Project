<?php
	
	require('FBgalleryProto.php');
	
	$appId = '978057762210560';
	$appSecret = 'c609025febe9ce58864818bb997300af';
	$photoAlbumId = '726590807432594';
	$pageId = '726589127432762';
	
	//getting instance
	$FBGallery = new FBgalleryProto($appId,$appSecret);
	
	//gets photo links and returns json
	$PhotoList = $FBGallery->getPhotos($photoAlbumId);
	//echo gettype($PhotoList);
	echo json_encode($PhotoList);
?>