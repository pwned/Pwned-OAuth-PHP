<?php
define('PWNED_OAUTH_TMP_DIR', function_exists('sys_get_temp_dir') ? sys_get_temp_dir() : realpath($_ENV["TMP"]));

define("PWNED_CONSUMER_KEY","your_consumer_key_here");
define("PWNED_CONSUMER_SECRET","your_consumer_secret_here");
define("PWNED_CALLBACK_URL","http://link.to.com/your/access_token.php");

define("PWNED_OAUTH_REQUEST_TOKEN","http://api.pwned.com/v1/oauth/request_token");
define("PWNED_OAUTH_AUTHORIZE","http://api.pwned.com/v1/oauth/authorize");
define("PWNED_OAUTH_ACCESS_TOKEN","http://api.pwned.com/v1/oauth/access_token");


define("PWNED_ME","http://api.pwned.com/me");
define("PWNED_ME_STATUS","http://api.pwned.com/me/status");
define("PWNED_ME_GAMES","http://api.pwned.com/me/games");

/* See full list in the Pwned Documentation (http://api.pwned.com/docs) */