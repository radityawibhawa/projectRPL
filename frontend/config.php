<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('863694554580-rkp3asatv50al06hdpeqpdfat173clcb.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('GOxRS4CeL0a9Pf8cDcxW95sI');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/frontend/login.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here  
