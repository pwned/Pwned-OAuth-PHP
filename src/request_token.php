<?php
include("config/settings.inc.php");

$oauth = new OAuth(PWNED_CONSUMER_KEY,PWNED_CONSUMER_SECRET,OAUTH_SIG_METHOD_HMACSHA1,OAUTH_AUTH_TYPE_URI); //initiate	
$request_token_info = $oauth->getRequestToken(PWNED_OAUTH_REQUEST_TOKEN); //get request token
file_put_contents(PWNED_OAUTH_TMP_DIR . "/request_token_resp",serialize($request_token_info));
header('Location: '.PWNED_OAUTH_AUTHORIZE.'?oauth_token='.$request_token_info['oauth_token']); //forward user to authorize url