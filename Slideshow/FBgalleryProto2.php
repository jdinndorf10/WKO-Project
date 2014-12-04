<!doctype html>
<html lang="en">
<head>
	<title>Google Maps</title>
	<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js'></script>
</head>
<body>
<h2>Facebook Proto</h2>

<?php
	session_start();
	require_once 'facebook-php-sdk-v4-4.0-dev\autoload.php';
	
	use Facebook\FacebookSession;
	use Facebook\FacebookRequestException;
	use Facebook\FacebookRedirectLoginHelper;
	use Facebook\FacebookRequest;
	use Facebook\GraphObject;
	use Facebook\GraphAlbum;
	
	//session
	FacebookSession::setDefaultApplication('978057762210560','c609025febe9ce58864818bb997300af');
	
	//login helper with redirect
	$helper = new FacebookRedirectLoginHelper('http://localhost/WKO-Project/FBgalleryProto2.php');
	
	//validate session
	try {
		$session = $helper->getSessionFromRedirect();
		echo 'validated';
	}catch (FacebookRequestException $ex) {
		echo $ex->getMessage();
	}catch (\Exception $ex) {
		echo $ex->getMessage();
	}
	
	//making request to Graph API
	if (isset($session)) {
		$request = new FacebookRequest($session, 'GET', '/10152367904161814/photos');
		//$request = new FacebookRequest($session, 'GET', '/10152367905086814');
		$response = $request->execute();
		$graphObject = $response->getGraphObject(); //gets a list of PhotoObjects
		
		//$prop holds integer 0-24, each a photoObject
		$PhotoList = $graphObject->getProperty('data');
		
		//gets number of photos
		$array = $PhotoList->asArray();
		$numberOfPhotos = count($array);
		echo '<br>Photo Count: '.$numberOfPhotos.'<br>';
		
		//printing photos
		for ($i = 0; $i < $numberOfPhotos; $i = $i+1) {
			//gets photo object
			$picObj = $PhotoList->getProperty($i);
			//gets photo info
			$picLink = $picObj->getProperty('picture');
			$picName = $picObj->getProperty('name');
			?>
			<img src="<?=$picLink?>" alt="<?=$picName?>">
			<?php
		}
		
		
		/*foreach ($prop2 as $value) {
			echo '<br> Value: '.$value.'|';
			echo gettype($value);
		}*/
	} else {
		//show login url
		echo '<br><a href="'.$helper->getLoginUrl().'">Login</a>';
	}
?>
	
	<p>Its Over!</p>

</body>
</html>