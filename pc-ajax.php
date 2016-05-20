<?php

session_start();

if(isset($_COOKIE['UserToken']) || isset($_SESSION['UserToken']))
{
	$GLOBALS['PAMFAX_API_USERTOKEN'] = isset($_COOKIE['UserToken']) ? $_COOKIE['UserToken'] : $_SESSION['UserToken'];

	if(isset($_SESSION['UserToken']) == false)
		$_SESSION['UserToken'] = $_COOKIE['UserToken'];
}

require 'page-helper.php';
require 'recaptchalib.php';
require 'configs/config.php';
require 'configs/api_config.php';


if(isset($_COOKIE['LANGUAGE']))
	$GLOBALS['CURR_LANG'] = $_COOKIE['LANGUAGE'];
else
	$GLOBALS['CURR_LANG'] = LanguageIP($ip);

$GLOBALS['CURR_LANG'] = IncludeLanguage($GLOBALS['CURR_LANG']);


if ( isset($_GET['action']) && function_exists($_GET['action']) )
{
   //if($_GET['action'] == "pc_dashboard_link")
   //    $_GET['action']($_GET['href']);
   // else
        $_GET['action']();
}
else
    die('action_error');

die(0);


/**
 * login function
 */
function pc_login_user()
{
    $res = json_decode( SessionApi::VerifyUser( $_POST['LOGIN'], $_POST['PASSWORD'], $_POST['REM_ME'], '', $_POST['REM_ME'] == true ? '-1' : '60' ), true );

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) 
	{
        $GLOBALS['PAMFAX_API_USERTOKEN']	= $res['UserToken']['token'];
        $_SESSION['UserToken']				= $res['UserToken']['token'];		
		
		if(isset($res['UserIdentifier']['identifier']))
		{
			setcookie('UserIdentifier', $res['UserIdentifier']['identifier'], time()+10*24*60*60);

			$_SESSION['UserIdentifier'] = $res['UserIdentifier']['identifier'];
		}

		setcookie('UserToken', $res['UserToken']['token'], time()+60*60);
		
		$link = '';

		if(isset($res['UserIdentifier']['identifier']))
			$link = $GLOBALS['URL_PORTAL']."/dashboad/?_id=".$res['UserIdentifier']['identifier'];
		else
		{
			$res_id = json_decode( SessionApi::CreateLoginIdentifier( false, 60 ), true );

			if ( $res_id['result']['type'] == '' && $res_id['result']['code'] == 'success' ) 
			{
				setcookie('UserIdentifier', $res_id['UserIdentifier']['identifier'], time()+60*60);

				$link = $GLOBALS['URL_PORTAL']."/dashboad/?_id=".$res_id['UserIdentifier']['identifier'];
			}
		}

		echo json_encode( array(
			'result' => 'OK',
			'res' => $res,
			'link' => $link
		));

        die();
    }

    if ( $res['result']['type'] == 'error' ) 
	{
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => $res['result']['message'],
        ) );

        die();
    }

    die('error');
}

/**
 *
 */
function pc_register_user()
{
    if ( $_POST['PASSWORD'] != $_POST['PASSWORD_REPEAT'] ) {
        echo json_encode( array(
            'result'    => 'ERROR',
            'title'     => t('TXT_ERROR'),
            'message'   => t('ERR_PASSWORDS_DONT_MATCH'),
        ) );
        die();
    }

	if($GLOBALS['IS_CAPTCHA'] == true)
	{
		$reCaptcha      = new ReCaptcha( RECAPTCHA_SECRET_KEY );
		$reCaptchaRes   = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST['g_recaptcha']);

		if( empty( $_POST['g_recaptcha'] ) || !$reCaptchaRes->success )
		{
			echo json_encode( array(
				'result' => 'ERROR',
				'title' => t('TXT_ERROR'),
				'message' => t('ERR_OCT_CAPTCHA'),
			));
			die();
		}
	}

    $res = json_decode( UserInfoApi::CreateUser( $_POST['NAME'], $_POST['LOGIN'], $_POST['PASSWORD'], $_POST['LOGIN'], $GLOBALS['CURR_LANG'] ), true );

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) 
	{
		$t_msg = str_replace('{email}', $_POST['LOGIN'], t('TXT_ACCOUNT_CREATED'));

        echo json_encode( array(
            'result'    => 'OK',
            'title'     => t('TXT_INFO'),
            'message'   => $t_msg,
        ));

        die();
    }

    if ( $res['result']['type'] == 'error' ) {
        echo json_encode( array(
            'result'    => 'ERROR',
            'title'     => t('TXT_ERROR'),
            'message'   => $res['result']['message'],
        ) );

        die();
    }

    die('error');
}


/**
 *
 */
function pc_reset_password()
{
    $res = json_decode( UserInfoApi::SendPasswordResetMessage($_POST['LOGIN']), true );

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) {
        echo json_encode( array(
            'result' => 'OK',
            'title' => t('TXT_INFO'),
            'message' => t('BYFAX_TXT_RESET_PASSWORD_SUCCESS'),
        ));

        die();
    }

    if ( $res['result']['type'] == 'error' ) {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => $res['result']['message'],
        ) );

        die();
    }

    die('error');
}

/**
 *
 */
function pc_user_logout()
{
    $res = json_decode( SessionApi::Logout(), true );

	setcookie('UserToken', null, -1, '/');
	setcookie('UserIdentifier', null, -1, '/');

	unset($_SESSION['UserToken']);
	unset($_SESSION['UserIdentifier']);

	unset($GLOBALS['PAMFAX_API_USERTOKEN']);

    echo json_encode( array(
        'result' => 'OK'
    ));

    die();
}


/**
 *
 */
function pc_list_fax_in_countries()
{

    $res = json_decode( ShoppingApi::ListFaxInCountries(), true );

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) {
        echo json_encode( array(
            'result' => 'OK',
            'res' => $res,
        ));
    }
    else
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => $res['result']['message'],
        ) );
    }

    die();
}


/**
 *
 */
function pc_list_fax_in_areacodes()
{
    $res = json_decode( ShoppingApi::ListFaxInAreacodes( $_POST['country_code'], $_POST['state'] ), true );

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) {
        echo json_encode( array(
            'result' => 'OK',
            'res' => $res,
        ));
    }
    else
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => $res['result']['message'],
        ) );
    }

    die();
}


/**
 *
 */
function pc_list_countries_prices()
{
    $res = json_decode( CommonApi::ListCountriesPrices($GLOBALS['CURR_LANG']), true );

    $res2=json_decode(CommonApi::GetFormattedPrice());

    $isvatcountry = vat_country();

    $Mass['result'] =$res['result'];

        Foreach ($res as $group)
        {
            If ($group!==$res['result'])
                {
                $massiv = $group;

                        If (isset($group['on_demand'])) {
                           // $on_demand_formatted = web_format_currencyvalue($group['on_demand']);
                            $on_demand_formatted=get_formatted_price($group['on_demand'],$res2->CurCode->format,$res2->CurCode->decimal_separator,$res2->CurCode->decimal_digits,$res2->CurCode->rate_to_eur);
                            $massiv['on_demand_formatted'] = '';
                            $massiv['on_demand_formatted'] = $on_demand_formatted;

                        }

                        If (isset($group['price_basic'])) {
                            //$price_basic_formatted = web_format_currencyvalue($group['price_basic_formatted']);
                            $price_basic_formatted=get_formatted_price($group['price_basic'],$res2->CurCode->format,$res2->CurCode->decimal_separator,$res2->CurCode->decimal_digits,$res2->CurCode->rate_to_eur);
                            $massiv['price_basic'] = '';
                            $massiv['price_basic_formatted'] = $price_basic_formatted;
                        }

                        If (isset($group['price_pro'])) {
                           //$price_pro_formatted = web_format_currencyvalue($group['price_pro']);
                            $price_pro_formatted=get_formatted_price($group['price_pro'],$res2->CurCode->format,$res2->CurCode->decimal_separator,$res2->CurCode->decimal_digits,$res2->CurCode->rate_to_eur);
                            $massiv['price_pro'] = '';
                            $massiv['price_pro_formatted'] = $price_pro_formatted;
                        }

                $Mass[] = $massiv;
                }
        }
        $res=[];
        $res=$Mass;

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) {

        echo json_encode( array(
            'result' => 'OK',
            'res' => $res,
        ));
    }
    else
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => $res['result']['message'],
        ) );
    }

    die();
}
/**
 *
 */
function pc_get_page_price()
{
    $res = json_decode(NumberInfoApi::GetPagePrice($_POST['fax_number'], $GLOBALS['CURR_LANG']), true);

    $res2=json_decode(CommonApi::GetFormattedPrice());

    $priceperpage =get_formatted_price($res['Price']['priceperpage'],$res2->CurCode->format,$res2->CurCode->decimal_separator,$res2->CurCode->decimal_digits,$res2->CurCode->rate_to_eur);

    $priceperpage_proplan =get_formatted_price($res['Price']['priceperpage_proplan'],$res2->CurCode->format,$res2->CurCode->decimal_separator,$res2->CurCode->decimal_digits,$res2->CurCode->rate_to_eur);
    $new_string=str_replace($res['Price']['priceperpage_formatted'],$priceperpage,$res['PortalStrings']['sending_cost_translated']);
    $new_string_after=str_replace($res['Price']['priceperpage_proplan_formatted'],$priceperpage_proplan,$new_string);
    $res['PortalStrings']['sending_cost_translated']='';
    $res['PortalStrings']['sending_cost_translated']=$new_string_after;

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) {
        echo json_encode( array(
            'result' => 'OK',
            'res' => $res,
        ));
    }
    else
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => $res['result']['message'],
        ) );
    }

    die();
}

/**
 *
 */
function pc_get_list_countries()
{
    $t_sVisitorCountry = GetVisitorCountry();
    $res = json_decode( CommonApi::ListCountries( $t_sVisitorCountry ), true );

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) {
        echo json_encode( array(
            'result' => 'OK',
            'visitor_country' => $t_sVisitorCountry,
            'res' => $res,
        ));
    }
    else
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => $res['result']['message'],
        ) );
    }

    die();
}


/**
 *
 */
function pc_register_new_api_user()
{
    if( empty( $_POST['firstname']) ||
        empty( $_POST['lastname']) ||
        empty( $_POST['companysize']) ||
        empty( $_POST['email']) ||
        empty( $_POST['address1']) ||
        empty( $_POST['zip']) ||
        empty( $_POST['city']) ||
        empty( $_POST['company']) ||
        empty( $_POST['state']) ||
        empty( $_POST['region']) ||
        empty( $_POST['productname']) ||
        empty( $_POST['description']) ||
        empty( $_POST['volume']) )
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => t('BYFAX_TXT_REQUIRED_FIELDS'). print_r($_POST)
        ) );
        die();
    }

    if ( $_POST['terms'] != true )
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => "You do not agree to the Terms of use"
        ) );
        die();
    }

    if( strlen( $_POST['description'] ) < 50 )
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => "Too short text in field 'Short description of how PamFax will be used'(min 50 chars)",
        ) );
        die();
    }

	if($GLOBALS['IS_CAPTCHA'] == true)
	{
		$reCaptcha      = new ReCaptcha( RECAPTCHA_SECRET_KEY );
		$reCaptchaRes   = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST['g_recaptcha']);

		if( empty( $_POST['g_recaptcha'] ) || !$reCaptchaRes->success )
		{
			echo json_encode( array(
				'result' => 'ERROR',
				'title' => t('TXT_ERROR'),
				'message' => t('ERR_OCT_CAPTCHA'),
			));
			die();
		}
	}

    $res = json_decode( AccountApi::Register(
        $_POST["firstname"],
        $_POST["lastname"],
        $_POST["email"],
        $_POST["company"],
        $_POST["address1"],
        $_POST["zip"],
        $_POST["city"],
        $_POST["state"],
        $_POST["region"],
        $_POST["companysize"],
        $_POST["volume"],
        $_POST["productname"],
        $_POST["description"]
    ), true );

    if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) {
        echo json_encode( array(
            'result' => 'OK',
            'res' => $res,
        ));
    }
    else
    {
        echo json_encode( array(
            'result' => 'ERROR',
            'title' => t('TXT_ERROR'),
            'message' => $res['result']['message'],
        ) );
    }

    die();
}


/**
 *
 */

//function pc_dashboard_link($href)
function pc_dashboard_link()
{
	if(isset($_COOKIE['UserIdentifier']))
	{
        echo json_encode( array(
            'result'    => 'OK',
            'link'      => $GLOBALS['URL_PORTAL']."/dashboad/?_id=".$_COOKIE['UserIdentifier']
        ));
		
	}else
	{
		$res = json_decode( SessionApi::CreateLoginIdentifier( false, 600 ), true );

		if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' ) {
			echo json_encode( array(
				'result'    => 'OK',
				'link'      => $GLOBALS['URL_PORTAL']."/dashboad/?_id=".$res['UserIdentifier']['identifier']
			));
		}
		else
		{
			echo json_encode( array(
				'result' => 'ERROR',
				'title' => t('TXT_ERROR'),
				'message' => $res['result']['message'],
			) );
		}
	}

    die();
}

function pc_purchase_number()
{
	$t_link = '';

	if(isset($_COOKIE['UserIdentifier']))
	{
		$t_link = $GLOBALS['URL_SHOP'].'/?checkout=1&addtobasket=ProPlan12&countrycode='.$_POST["CODE"].'&areacode='.$_POST["AREA"];
		if($_POST["STATE"] != 'undefined')
			$t_link .= "&state=".$_POST["STATE"];

		$t_link .= "&_id=".$_COOKIE['UserIdentifier'];
	}else
		$t_link .= GetLink('signup');

	echo json_encode( array(
		'result'    => 'OK',
		'link'      => $t_link
	));

	die;
}





