<?php
global $VAT_COUNTRIES, $VAT_PERCENTAGE_COUNTRIES;
$VAT_COUNTRIES = array("AT", "BE", "BG", "CY", "CZ", "DE", "DK", "EE", "ES", "FI", "FR", "GB", "GR", "HU", "IE", "IT", "LT", "LU", "LV", "MT", "NL", "PL", "PT", "RO", "SE", "SI", "SK", "HR", 'UK');
$VAT_PERCENTAGE_COUNTRIES = array(
	"BE" => 21.0,
	"BG" => 20.0,
	"CZ" => 21.0,
	"DK" => 25.0,
	"DE" => 19.0,
	"EE" => 20.0,
	"EL" => 23.0,
	"ES" => 21.0,
	"FR" => 20.0,
	"HR" => 25.0,
	"IE" => 23.0,
	"IT" => 22.0,
	"CY" => 19.0,
	"LV" => 21.0,
	"LT" => 21.0,
	"LU" => 15.0,
	"HU" => 27.0,
	"MT" => 18.0,
	"NL" => 21.0,
	"AT" => 20.0,
	"PL" => 23.0,
	"PT" => 23.0,
	"RO" => 24.0,
	"SI" => 22.0,
	"SK" => 20.0,
	"FI" => 24.0,
	"SE" => 25.0,
	"UK" => 20.0,
	"GB" => 20.0,
);


define("RECAPTCHA_SECRET_KEY", "6LfhxRoTAAAAAHTOcWtsPFzOINNM7VD0Ee9PQcuo");
define("RECAPTCHA_SITE_KEY", "6LfhxRoTAAAAAKP3GOf-nDVgVGUsFvsvDpGePQ8r");

$GLOBALS['IS_CAPTCHA'] = true;
$GLOBALS['IS_PASSWORDS'] = true;

$DEV_IP	= array( '127.0.0.1', '127.0.1.1', '192.168.0.11', '192.168.0.18', '192.168.0.20', '192.168.0.22', '192.168.0.103', '192.168.0.128', '::1' );

if (in_array( $_SERVER['SERVER_ADDR'], $DEV_IP))
{
	$GLOBALS['IS_DEV'] = true;
	$GLOBALS['IS_LIVE'] = false;	

	//$GLOBALS['IS_CAPTCHA'] = false;
	$GLOBALS['IS_PASSWORDS'] = false;

	if( $_SERVER['SERVER_NAME'] == 'pamfax.localhost')
		$GLOBALS['URL_SITE'] = "http://pamfax.localhost";
	else if( $_SERVER['SERVER_NAME'] == 'new-pamfax.localhost')
		$GLOBALS['URL_SITE'] = "http://new-pamfax.localhost";
	
	$GLOBALS['URL_PORTAL'] = "http://dev-portal.pamfax.biz";
	$GLOBALS['URL_SHOP'] = "http://dev.pamfax.biz/shop";

	//$GLOBALS['URL_PORTAL'] = "https://sandbox-portal.pamfax.biz";
	//$GLOBALS['URL_SHOP'] = "https://sandbox.pamfax.biz/shop";
}
else
{
	$GLOBALS['IS_DEV'] = false;

	if( $_SERVER['SERVER_NAME'] == 'pamfax.biz' || $_SERVER['SERVER_NAME'] == 'www.pamfax.biz')
	{
		$GLOBALS['IS_LIVE'] = true;

		$GLOBALS['URL_SITE'] = "https://pamfax.biz";
		$GLOBALS['URL_PORTAL'] = "https://portal.pamfax.biz";
		$GLOBALS['URL_SHOP'] = "https://pamfax.biz/shop";
	}
	else if( $_SERVER['SERVER_NAME'] == 'pamfax.by' || $_SERVER['SERVER_NAME'] == 'www.pamfax.by')
	{
		$GLOBALS['IS_LIVE'] = true;
		//$GLOBALS['IS_CAPTCHA'] = false;

		$GLOBALS['URL_SITE'] = "http://pamfax.by";
		$GLOBALS['URL_PORTAL'] = "https://portal.pamfax.biz";
		$GLOBALS['URL_SHOP'] = "https://pamfax.biz/shop";

		//$GLOBALS['IS_LIVE'] = false;
		////$GLOBALS['IS_CAPTCHA'] = false;

		//$GLOBALS['URL_SITE'] = "http://pamfax.by";
		//$GLOBALS['URL_PORTAL'] = "https://sandbox-portal.pamfax.biz";
		//$GLOBALS['URL_SHOP'] = "https://sandbox.pamfax.biz/shop";
	}
	else if( $_SERVER['SERVER_NAME'] == 'pamfax.pamconsult.by')
	{
	    $GLOBALS['IS_LIVE'] = false;
	    //$GLOBALS['IS_CAPTCHA'] = false;

	    $GLOBALS['URL_SITE'] = "http://pamfax.pamconsult.by";
	    $GLOBALS['URL_PORTAL'] = "https://sandbox-portal.pamfax.biz";
	    $GLOBALS['URL_SHOP'] = "https://sandbox.pamfax.biz/shop";
	}
	else
	{
		$GLOBALS['IS_LIVE'] = false;

		$GLOBALS['URL_SITE'] = "https://beta.pamfax.biz";
		$GLOBALS['URL_PORTAL'] = "https://beta-portal.pamfax.biz";
		$GLOBALS['URL_SHOP'] = "https://beta.pamfax.biz/shop";
	}
}
//if ( $_SERVER['SERVER_NAME'] == 'pamfax.biz' )
//    define("IS_DEV", FALSE);
//else
//    define("IS_DEV", TRUE);

//if( $IS_DEVELOPSERVER || ( stripos($_SERVER['SERVER_NAME'], 'dev-') === 0 ) || ( stripos($_SERVER['SERVER_NAME'], 'dev.') === 0 ))
//    $subsystem = 'dev';
//elseif( stripos($_SERVER['SERVER_NAME'], 'beta') === 0 )
//    $subsystem = 'beta';
//elseif( stripos($_SERVER['SERVER_NAME'], 'sandbox-') === 0 ) // will only match sandbox-apifrontend
//    $subsystem = 'sandbox';
//else
//    $subsystem = 'live';