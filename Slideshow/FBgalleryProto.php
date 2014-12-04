<?php
/**
* @author Josh Dinndorf jdinndorf10@winona.edu
* @copyright This can be free to use for any purpose
*
*	This php program pulls all the photos from an album on facebook
*	using an app access token for authentication.
*
*	NOTE: The web app the is requesting the information must have the page
*	it is requesting linked to it.

*	How to link existing page:
*     http://stackoverflow.com/questions/9265062/how-to-link-a-facebook-app-with-an-existing-fan-page
*/

session_start();
require_once 'facebook-php-sdk-v4-4.0-dev\autoload.php';

use Facebook\FacebookSession;
use Facebook\Entities\AccessToken;
use Facebook\FacebookRequestException;
use Facebook\FacebookRedirectLoginHelper;
use Facebook\FacebookRequest;
use Facebook\GraphObject;
use Facebook\GraphAlbum;

class FBgalleryProto {
	
	/**
	 * @var string of App ID of App for Auth Token
	 */
	private $appId;
	
	/**
	 * @var string of App Secret of App for Auth Token
	 */
	private $appSecret;

	/**
	 * @var string of the photo Album ID where photos want to be used
	 */
	private $photoAlbumId;
	
	/**
	 * @var FacebookSession The session used for this request
	 */
	private $session;

	/**
	 * Constructs a FBgalleryProto and returns it
	 *
	 * @param string $appId
	 * @param string $appSecret
	 *
	 * @throws FacebookRequestException
	 * @throws Exception
	 */
	public function __construct($appId,$appSecret) {
		$this->appId = $appId;
		$this->appSecret = $appSecret;
		
		FacebookSession::setDefaultApplication($appId,$appSecret);

		$session = FacebookSession::newAppSession();
		$this->session = $session;

		//validate session
		try {
			$session->validate();
		}catch (FacebookRequestException $ex) {
			//Session not valid, Graph API retuned an exception with reason
			echo $ex->getMessage();
		}catch (\Exception $ex) {
			//Graph API returned info, but it may mismatch the current app or have expired
			echo $ex->getMessage();
		}
	}
	/**
	 * Returns App ID
	 *
	 * @return string
	 */
	public function getAppId() {
		return $this->AppId;
	}
	/**
	 * Returns App Secret
	 *
	 * @return string
	 */
	public function getAppSecret() {
		return $this->AppSecret;
	}
	
	/**
	 * Returns photoAlbumId
	 *
	 * @return string
	 */
	public function getPhotoAlbumId() {
		return $this->photoAlbumId;
	}
	
	/**
	 * Returns session
	 *
	 * @return FacebookSession
	 */
	public function getSession() {
		return $this->session;
	}
	
	/**
	 * Uses created session and passed AlbumId to send a request to FB
	 *
	 * @param string path for Graph API request
	 * @returns a graphObject containing response from Graph API
	 *
	 * @throws FacebookRequestException
	 * @throws Exception
	 */
	public function graphRequest($path) {
		//create and send request
			try {
			$session = FBgalleryProto::getSession();
			
			$request = new FacebookRequest($session, 'GET', $path);
			
			$response = $request->execute();
			
			$graphObject = $response->getGraphObject(); //gets a list of PhotoObjects
			
			return $graphObject;
			
		}catch (FacebookRequestException $ex) {
			//Session not valid, Graph API retuned an exception with reason
			echo $ex->getMessage();
		}catch (\Exception $ex) {
			//Graph API returned info, but it may mismatch the current app or have expired
			echo $ex->getMessage();
		}

	}
	
	/**
	 *  Get number of photos in PhotoList Object
	 *  
	 *  @param PhotoList
	 *	@returns Integer which is the count of photos in PhotoList
	 */
	public function getNumberofPhotos($PhotoList) {
		$array = $PhotoList->asArray();	
		return count($array);
	}
	
	/**
	 * TODO: currently just prints out all photos in album in img tag whereever called
	 *
	 */
	public function printPhotos($photoArray) {
		//prints photo is basic slideshow\
		foreach ($photoArray as $photoLink) {
			?>
				<img src="<?=$photoLink?>" alt="FB Album SlideShow">
			<?php
		}
	}
	
	/**
	 * @param string $photoAlbumId
	 * @returns Array(integer->string) links to the photo's source with keys 0-# of photos
	 */
	public function getPhotos($photoAlbumId) {
		//make graph api request for photos
		$this->photoAlbumId = $photoAlbumId;
		
		$graphObject = $this->graphRequest('/'.$photoAlbumId.'/photos');
	
		//holds integers 0-#ofphotos, each a photoObject
		$PhotoList = $graphObject->getProperty('data');
		
		//gets number of photos
		$numberOfPhotos = $this->getNumberofPhotos($PhotoList);
	
		//assigning photo links into array
		$photoArray = array();
		for ($i = 0; $i < $numberOfPhotos; $i = $i+1) {
			//gets photo object
			$picObj = $PhotoList->getProperty($i);
			//gets photo source link
			$photoArray[$i] = $picObj->getProperty('source');
		}
		
		return $photoArray;
	}
	
	public function getStatus($pageId) {
		$graphObject = $this->graphRequest('/'.$pageId.'/feed');
		
		//holds integers 0-#ofphotos, each an object
		$feedObject = $graphObject->getProperty('data');
		
		//gets number of photos
		$numberOfPhotos = $this->getNumberofPhotos($feedObject);
		
		echo '<ul>';
		for ($i = 0; $i < $numberOfPhotos; $i = $i+1) {
			//gets object
			$Obj = $feedObject->getProperty($i);
			//prints status's
			$type = $Obj->getProperty('type');
			if ($type == 'status') {
				$msg = $Obj->getProperty('message');
				$time = $Obj->getProperty('created_time');
				//$time = date("M d Y h:ia",$time);
				echo '<li>'.$time.' '.$msg.'</li>';
			}
		}
		echo '<ul>';
		
		return $feedObject;
	
	}
	
}

?>