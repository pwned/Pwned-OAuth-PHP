<?php
include("config/settings.inc.php");

$oauth = new OAuth(PWNED_CONSUMER_KEY,PWNED_CONSUMER_SECRET,OAUTH_SIG_METHOD_HMACSHA1,OAUTH_AUTH_TYPE_URI); //initiate
$request_token_info = unserialize(file_get_contents(PWNED_OAUTH_TMP_DIR . "/request_token_resp"));
$oauth->setToken($request_token_info["oauth_token"],$request_token_info["oauth_token_secret"]);//user allowed the app, so u
$access_token_info = $oauth->getAccessToken(PWNED_OAUTH_ACCESS_TOKEN);
file_put_contents(PWNED_OAUTH_TMP_DIR . "/access_token_resp",serialize($access_token_info)); //save it