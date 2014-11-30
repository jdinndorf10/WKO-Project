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
	 * @param string $photoAlbumId
	 *
	 * @throws FacebookRequestException
	 * @throws Exception
	 */
	public function __construct($appId,$appSecret,$photoAlbumId) {
		$this->appId = $appId;
		$this->appSecret = $appSecret;
		$this->photoAlbumId = $photoAlbumId;
		
		FacebookSession::setDefaultApplication($appId,$appSecret);
		
		$params = array();
		$params["grant_type"] = 'client_credentials'; //need

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
	
	/*
	 * Uses created session and passed AlbumId to send a request to FB
	 *
	 * @returns a graphObject containing response from Graph API
	 *
	 * @throws FacebookRequestException
	 * @throws Exception
	 */
	public function albumGraphRequest() {
		//create and send request
			try {
			$session = FBgalleryProto::getSession();
			$albumId = FBgalleryProto::getPhotoAlbumId();
			$request = new FacebookRequest($session, 'GET', '/'.$albumId.'/photos');
			
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
	 * TODO: currently just prints out all photos in album in img tage whereever called
	 *
	 */
	public function printPhotos($PhotoList) {
		//gets number of photos
		$numberOfPhotos = $this->getNumberofPhotos($PhotoList);
	
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
		
	}
	
	/**
	 * @returns PhotoList which contains an array of all the photos in the album
	 * The array keys are 0- the number of photos in order they appear in the album.
	 */
	public function getPhotos() {
		//make graph api request for photos
		$graphObject = $this->albumGraphRequest();
	
		//holds integers 0-#ofphotos, each a photoObject
		$PhotoList = $graphObject->getProperty('data');

		return $PhotoList;
	}
	


}

?>