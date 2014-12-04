<?php
	
	require('FBgalleryProto.php');
	
	$appId = '978057762210560';
	$appSecret = 'c609025febe9ce58864818bb997300af';
	$photoAlbumId = '726590807432594';
	$pageId = '726589127432762';
	
	//getting instance
	$FBGallery = new FBgalleryProto($appId,$appSecret);
	
	
	$PhotoList = $FBGallery->getPhotos($photoAlbumId);
	echo json_encode($PhotoList);
	
	//printing photos
	//$FBGallery->printPhotos($PhotoList);
	
	//printing statuses
	//$status = $FBGallery->getStatus($pageId);
	
?>