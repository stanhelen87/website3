<?php

// include the PamFax API client and set your credentials
require_once('includes/pamfax_api.php');

// @pamfax use this uri, when live access will be granted for you -- https://api.pamfax.biz/


if($GLOBALS['IS_DEV'] == true)
{
	$GLOBALS['PAMFAX_API_URL']         = "https://dev-api.pamfax.biz/";
	$GLOBALS['PAMFAX_API_APPLICATION'] = "DEV_ACCESS"; // @pamfax: your api key from sandbox
	$GLOBALS['PAMFAX_API_SECRET_WORD'] = "c0ol20o9"; // @pamfax your secret from sandbox

	//$GLOBALS['PAMFAX_API_URL']         = "https://sandbox-api.pamfax.biz/";
	//$GLOBALS['PAMFAX_API_APPLICATION'] = "pamfax_website3"; // @pamfax: your api key from sandbox
	//$GLOBALS['PAMFAX_API_SECRET_WORD'] = "3zkxSJhMfTeQfN"; // @pamfax your secret from sandbox

	//$GLOBALS['PAMFAX_API_URL']         = "https://beta-api.pamfax.biz/";
	//$GLOBALS['PAMFAX_API_APPLICATION'] = "pamfax_website3"; // @pamfax: your api key from sandbox
	//$GLOBALS['PAMFAX_API_SECRET_WORD'] = "3zkxSJhMfTeQfN";

	//$GLOBALS['PAMFAX_API_URL']         = "https://api.pamfax.biz/";
	//$GLOBALS['PAMFAX_API_APPLICATION'] = "pamfax_website3"; // @pamfax: your api key from sandbox
	//$GLOBALS['PAMFAX_API_SECRET_WORD'] = "3zkxSJhMfTeQfN";
}else
{
	if($GLOBALS['IS_LIVE'] == true)
	{
		$GLOBALS['PAMFAX_API_URL']         = "https://api.pamfax.biz/";
		$GLOBALS['PAMFAX_API_APPLICATION'] = "pamfax_website3"; // @pamfax: your api key from sandbox
		$GLOBALS['PAMFAX_API_SECRET_WORD'] = "3zkxSJhMfTeQfN"; // @pamfax your secret from sandbox	
	}else
	{
		if( $_SERVER['SERVER_NAME'] == 'pamfax.by')
		{
			$GLOBALS['PAMFAX_API_URL']         = "https://api.pamfax.biz/";
			$GLOBALS['PAMFAX_API_APPLICATION'] = "pamfax_website3"; // @pamfax: your api key from sandbox
			$GLOBALS['PAMFAX_API_SECRET_WORD'] = "3zkxSJhMfTeQfN"; // @pamfax your secret from sandbox				
		}
		else if( $_SERVER['SERVER_NAME'] == 'pamfax.pamconsult.by')
		{
			$GLOBALS['PAMFAX_API_URL']         = "https://sandbox-api.pamfax.biz/";
			$GLOBALS['PAMFAX_API_APPLICATION'] = "pamfax_website3"; // @pamfax: your api key from sandbox
			$GLOBALS['PAMFAX_API_SECRET_WORD'] = "3zkxSJhMfTeQfN"; // @pamfax your secret from sandbox				
		}else
		{
			$GLOBALS['PAMFAX_API_URL']         = "https://beta-api.pamfax.biz/";
			$GLOBALS['PAMFAX_API_APPLICATION'] = "pamfax_website3"; // @pamfax: your api key from sandbox
			$GLOBALS['PAMFAX_API_SECRET_WORD'] = "3zkxSJhMfTeQfN"; // @pamfax your secret from sandbox	
		}
	}
}

// tell the API client to use static wrapper classes
pamfax_use_static();

// tell the API client to create objects from returned XML automatically
$GLOBALS['PAMFAX_API_MODE']        = ApiClient::API_MODE_JSON;