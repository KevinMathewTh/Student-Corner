<?php
	include_once 'src/Google_Client.php';
	include_once 'src/contrib/Google_Oauth2Service.php';
	
	// Edit Following 3 Lines
	$clientId = '313219596413-p93de9gft2u150qdkcab0k7gvkae9ha2.apps.googleusercontent.com'; //Application client ID
	$clientSecret = 'cjhFw21yOxEXRTgpUzh8IYhG'; //Application client secret
	$redirectURL = 'https://studentcorner.isavit.club/php/launch.php'; //Application Callback URL
	
	$gClient = new Google_Client();
	$gClient->setApplicationName('Web client 1');
	$gClient->setClientId($clientId);
	$gClient->setClientSecret($clientSecret);
	$gClient->setRedirectUri($redirectURL);
    $gClient->setScopes("email");
	$google_oauthV2 = new Google_Oauth2Service($gClient);
?>