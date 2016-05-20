<?php

session_start();

if (isset($_SESSION['UserToken']))
    $GLOBALS['PAMFAX_API_USERTOKEN'] = $_SESSION['UserToken'];

require 'page-helper.php';

require 'configs/config.php';
require 'configs/api_config.php';

date_default_timezone_set('America/New_York');

$page_request = null;
$page_lang = null;
$page_params = null;
$page_get  = null;

$t_method = $_SERVER['REQUEST_METHOD'];     
$ip = $_SERVER['REMOTE_ADDR'];

//$page_lang = LanguageIP($ip);  ///////////////////////////////////////////////////////////////////////////////////

if(isset($_GET['page']))
{
	$t_get = $_GET['page'];
	if(substr($t_get, strlen($t_get)-1) == '/')
		$t_get = substr($t_get, 0, strlen($t_get)-1);

    $page_get = explode('/', $t_get);
}

if(isset($_COOKIE['UserIdentifier']) && !isset($_COOKIE['UserToken']))
{

	$result = json_decode( SessionApi::VerifyFromIdentifier( $_COOKIE['UserIdentifier'] ), true );

	if ( $result['result']['type'] == '' && $result['result']['code'] == 'success' ) 
	{
		$GLOBALS['PAMFAX_API_USERTOKEN'] = $result['UserToken']['token'];

		$_SESSION['UserIdentifier'] = $_COOKIE['UserIdentifier'];

		if(isset($_SESSION['UserToken']) == false)
			$_SESSION['UserToken'] = $result['UserToken']['token'];

		setcookie('UserToken', $result['UserToken']['token'], time()+60*60);

		$User = isset($result['User']) ? $result['User'] : NULL;
		$Currency = isset($result['Currency']) ? $result['Currency'] : NULL;

		$GLOBALS['User'] = $User;
		$GLOBALS['Currency'] = $Currency;			

		$result = json_decode( UserInfoApi::ListProfiles(), true );

		if(isset($result['UserProfile']))
		{
			if(isset($result['UserProfile']['name']))
				$GLOBALS['User']['name'] = $result['UserProfile']['name'];
			else
				$GLOBALS['User']['name'] = $GLOBALS['User']['username'];
		}
		else
		{
			unset($GLOBALS['User']);
			unset($GLOBALS['Currency']);

			setcookie('UserToken', null, -1, '/');

			unset($_SESSION['UserToken']);
			unset($GLOBALS['PAMFAX_API_USERTOKEN']);
		}
	}else
	{
		setcookie('UserIdentifier', null, -1, '/');

		unset($_SESSION['UserIdentifier']);
	}

}else if(isset($_COOKIE['UserToken']))
{

	$GLOBALS['PAMFAX_API_USERTOKEN'] = $_COOKIE['UserToken'];

	if(isset($_SESSION['UserToken']) == false)
		$_SESSION['UserToken'] = $_COOKIE['UserToken'];

	$User  = null;
	$result = json_decode( SessionApi::ReloadUser(), true );


	if($result['result']['code'] == 'success')
	{
		setcookie('UserToken', $_COOKIE['UserToken'], time()+60*60);

		if(isset($_COOKIE['UserIdentifier']) == false)
		{
			$res_id = json_decode( SessionApi::CreateLoginIdentifier( false, 60 ), true );

			if ( $res_id['result']['type'] == '' && $res_id['result']['code'] == 'success' ) 
			{
				setcookie('UserIdentifier', $res_id['UserIdentifier']['identifier'], time()+60*60);

				$_SESSION['UserIdentifier'] = $_COOKIE['UserIdentifier'];
			}
		}

		$User = isset($result['User']) ? $result['User'] : NULL;
		$Currency = isset($result['Currency']) ? $result['Currency'] : NULL;

		$GLOBALS['User'] = $User;
		$GLOBALS['Currency'] = $Currency;			

		$result = json_decode( UserInfoApi::ListProfiles(), true );
		if(isset($result['UserProfile']))
		{
			if(isset($result['UserProfile']['name']))
				$GLOBALS['User']['name'] = $result['UserProfile']['name'];
			else
				$GLOBALS['User']['name'] = $GLOBALS['User']['username'];
		}
		else
		{
			unset($GLOBALS['User']);
			unset($GLOBALS['Currency']);

			setcookie('UserToken', null, -1, '/');

			unset($_SESSION['UserToken']);
			unset($GLOBALS['PAMFAX_API_USERTOKEN']);
		}
	}
	else
	{
		setcookie('UserToken', null, -1, '/');

		unset($_SESSION['UserToken']);
		unset($GLOBALS['PAMFAX_API_USERTOKEN']);

		if($_COOKIE['UserIdentifier'])
		{
			$result = json_decode( SessionApi::VerifyFromIdentifier( $_COOKIE['UserIdentifier'] ), true );


			if ( $result['result']['type'] == '' && $result['result']['code'] == 'success' ) 
			{
				$GLOBALS['PAMFAX_API_USERTOKEN'] = $result['UserToken']['token'];

				$_SESSION['UserIdentifier'] = $_COOKIE['UserIdentifier'];

				if(isset($_SESSION['UserToken']) == false)
					$_SESSION['UserToken'] = $result['UserToken']['token'];

				setcookie('UserToken', $result['UserToken']['token'], time()+60*60);

				$User = isset($result['User']) ? $result['User'] : NULL;
				$Currency = isset($result['Currency']) ? $result['Currency'] : NULL;

				$GLOBALS['User'] = $User;
				$GLOBALS['Currency'] = $Currency;			

				$result = json_decode( UserInfoApi::ListProfiles(), true );
				if(isset($result['UserProfile']))
				{
					if(isset($result['UserProfile']['name']))
						$GLOBALS['User']['name'] = $result['UserProfile']['name'];
					else
						$GLOBALS['User']['name'] = $GLOBALS['User']['username'];
				}
				else
				{
					unset($GLOBALS['User']);
					unset($GLOBALS['Currency']);

					setcookie('UserToken', null, -1, '/');

					unset($_SESSION['UserToken']);
					unset($GLOBALS['PAMFAX_API_USERTOKEN']);
				}
			}else
			{
				setcookie('UserToken', null, -1, '/');
				setcookie('UserIdentifier', null, -1, '/');

				unset($_SESSION['UserToken']);
				unset($_SESSION['UserIdentifier']);

				unset($GLOBALS['PAMFAX_API_USERTOKEN']);
			}
		}

	}
}

if(is_array($page_get) && count($page_get))
{
	$page_lang = strtolower($page_get[0]);       
	unset($page_get[0]);

}
else
{
	if(PortalRedirect() == true)
		return;

	if(isset($_COOKIE['LANGUAGE']))
		$GLOBALS['CURR_LANG'] = $_COOKIE['LANGUAGE'];
	else
		$GLOBALS['CURR_LANG'] = LanguageIP($ip);

	$GLOBALS['CURR_LANG'] = IncludeLanguage($GLOBALS['CURR_LANG']);

	setcookie("LANGUAGE", $GLOBALS['CURR_LANG'], time()+10*24*60*60,'/');

	renderPage('index');
	
	return;
}

if(isLanguage($page_lang) == false)                //if false - default language EN
{
	if(isset($_COOKIE['LANGUAGE']))
		$t_lanfDef = $_COOKIE['LANGUAGE'];
	else
		$t_lanfDef = LanguageIP($ip);
	
	$t_link = $page_lang;
	if(count($page_get) > 0)
		$t_link .= '/'.implode("/", $page_get);

	if(IsLink($t_link))
	{
		$page_lang = IncludeLanguage($t_lanfDef);

		$page_get = explode('/', $t_link);
	}else
	{
		$t_sNewLangLocation = "http://".$_SERVER['SERVER_NAME']."/".$t_lanfDef."/";

		if($page_lang != null && $page_lang != "")
			$t_sNewLangLocation .= $page_lang."/";

		if(count($page_get) > 0)
			$t_sNewLangLocation .= implode("/", $page_get);
		
		header("HTTP/1.1 302 Found");
		header("Location: ".$t_sNewLangLocation);

		return;
	}
}
else
{

		$page_lang = IncludeLanguage($page_lang);
}

$GLOBALS['CURR_LANG'] = $page_lang;

setcookie("LANGUAGE", $GLOBALS['CURR_LANG'], time()+10*24*60*60,'/');

if(is_array($page_get) && count($page_get))
{
	$page_request = implode("/", $page_get);
}else
{
	if(PortalRedirect() == true)
		return;
}

if($page_request == null || $page_request == '')

	renderPage('index');
else
	renderPage($page_request);






	