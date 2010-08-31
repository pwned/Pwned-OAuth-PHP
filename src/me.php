<?php
include("config/settings.inc.php");

$oauth = new OAuth(PWNED_CONSUMER_KEY,PWNED_CONSUMER_SECRET,OAUTH_SIG_METHOD_HMACSHA1,OAUTH_AUTH_TYPE_URI); //initiate
$oauth_token_info = unserialize(file_get_contents(PWNED_OAUTH_TMP_DIR . "/access_token_resp"));
$oauth->setToken($oauth_token_info['oauth_token'],$oauth_token_info['oauth_token_secret']);

try{
	$oauth->fetch("http://api.pwned.com/me", null, OAUTH_HTTP_METHOD_POST, array("User-Agent" => "pecl/oauth"));
	$response_info = $oauth->getLastResponseInfo();
	$res = $oauth->getLastResponse();
	$array_res = json_decode($res);
	print_r($array_res);
} catch(OAuthException $E) {
	echo "Exception caught!\n";
   	echo "Response: ". $E->lastResponse . "\n";
}