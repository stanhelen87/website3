<?

require 'libs/Smarty.class.php';

$GLOBALS['DEF_LANG'] = "en";
$GLOBALS['CURR_LANG'] = $GLOBALS['DEF_LANG'];

//$GLOBALS['LANGUAGES']['ar']		= array('title_long' => 'Arabic',	'title_short' => 'ara', 'file' => 'ar.inc.php');
//$GLOBALS['LANGUAGES']['bg']		= array('title_long' => 'Bulgarian','title_short' => 'bul', 'file' => 'bg.inc.php');
//$GLOBALS['LANGUAGES']['cs']		= array('title_long' => 'Czech',	'title_short' => 'ces', 'file' => 'cs.inc.php');
//$GLOBALS['LANGUAGES']['da']		= array('title_long' => 'Danish',	'title_short' => 'dan', 'file' => 'da.inc.php');
$GLOBALS['LANGUAGES']['de']		= array('title_long' => 'Deutsch',	'title_short' => 'deu', 'file' => 'de.inc.php');
//$GLOBALS['LANGUAGES']['el']		= array('title_long' => 'Greek',	'title_short' => 'grc', 'file' => 'el.inc.php');
$GLOBALS['LANGUAGES']['en']		= array('title_long' => 'English',	'title_short' => 'eng', 'file' => 'en.inc.php');
$GLOBALS['LANGUAGES']['es']		= array('title_long' => 'Español',	'title_short' => 'spa', 'file' => 'es.inc.php');
//$GLOBALS['LANGUAGES']['et']		= array('title_long' => 'Eesti',	'title_short' => 'est', 'file' => 'et.inc.php');
//$GLOBALS['LANGUAGES']['fi']		= array('title_long' => 'Finnish',	'title_short' => 'fin', 'file' => 'fi.inc.php');
$GLOBALS['LANGUAGES']['fr']		= array('title_long' => 'Français',	'title_short' => 'fra', 'file' => 'fr.inc.php');
//$GLOBALS['LANGUAGES']['he']		= array('title_long' => 'עברית',	'title_short' => 'heb', 'file' => 'he.inc.php');
//$GLOBALS['LANGUAGES']['hu']		= array('title_long' => 'Hungarian','title_short' => 'hun', 'file' => 'hu.inc.php');
$GLOBALS['LANGUAGES']['it']		= array('title_long' => 'Italiano',	'title_short' => 'ita', 'file' => 'it.inc.php');
$GLOBALS['LANGUAGES']['ja']		= array('title_long' => '日本語',	'title_short' => 'jpn', 'file' => 'ja.inc.php');
//$GLOBALS['LANGUAGES']['ko']		= array('title_long' => 'Korean',	'title_short' => 'kor', 'file' => 'ko.inc.php');
//$GLOBALS['LANGUAGES']['lt']		= array('title_long' => 'Lietuvių',	'title_short' => 'lit', 'file' => 'lt.inc.php');
//$GLOBALS['LANGUAGES']['lv']		= array('title_long' => 'Latvian',	'title_short' => 'lav', 'file' => 'lv.inc.php');
//$GLOBALS['LANGUAGES']['nl']		= array('title_long' => 'Dutch',	'title_short' => 'nld', 'file' => 'nl.inc.php');
//$GLOBALS['LANGUAGES']['no']		= array('title_long' => 'Norwegian','title_short' => 'nor', 'file' => 'no.inc.php');
$GLOBALS['LANGUAGES']['pl']		= array('title_long' => 'Polski',	'title_short' => 'pol', 'file' => 'pl.inc.php');
//$GLOBALS['LANGUAGES']['pt']		= array('title_long' => 'Português','title_short' => 'por', 'file' => 'pt.inc.php');
//$GLOBALS['LANGUAGES']['pt-br']	= array('title_long' => 'Brazilian','title_short' => 'brz','file' => 'pt-BR.inc.php');
//$GLOBALS['LANGUAGES']['ro']		= array('title_long' => 'Romanian',	'title_short' => 'ron','file' => 'ro.inc.php');
$GLOBALS['LANGUAGES']['ru']		= array('title_long' => 'Русский',	'title_short' => 'rus', 'file' => 'ru.inc.php');
//$GLOBALS['LANGUAGES']['sl']		= array('title_long' => 'Slovenian','title_short' => 'slv', 'file' => 'sl.inc.php');
$GLOBALS['LANGUAGES']['sv']		= array('title_long' => 'Svenska',	'title_short' => 'swe', 'file' => 'sv.inc.php');
//$GLOBALS['LANGUAGES']['tr']		= array('title_long' => 'Turkish',	'title_short' => 'tur', 'file' => 'tr.inc.php');
$GLOBALS['LANGUAGES']['zh-hans']= array('title_long' => '中文（简体）',	'title_short' => 'zhs', 'file' => 'zh-CHS.inc.php');
$GLOBALS['LANGUAGES']['zh-hant']= array('title_long' => '中文（繁体）',	'title_short' => 'zht', 'file' => 'zh-CHT.inc.php');

$GLOBALS['LINKS'] = array(	"index" => "/",
							"download" => "/downloads/",
							"download_windows" => "/downloads/windows/",			
							"features" => "/introduction/",
							"features_faxnumber" => "/introduction/fax-number/",
							"features_win7app" => "/introduction/windows7-xp/",
							"features_macos" => "/introduction/fax-mac/",
							"features_mobile" => "/introduction/mobile/",
							"features_portal" => "/introduction/online-fax/",		
							"rates" => "/rates/",
							"rates_rates" => "/rates/",
							"rates_creditpacks" => "/rates/credit-packs/",
							"rates_plans" => "/rates/feature-details/",
							"rates_pagecost" => "/rates/costs/",
							"rates_costcalc" => "/rates/cost-calculator/",		
							"addons" => "/extensions/",
							"addons_addons" => "/extensions/",
							"addons_facebook" => "/extensions/facebook/",
							"addons_salesforce" => "/extensions/salesforce/",
							"addons_companyman" => "/extensions/business-fax/",
							"developers" => "/developers/introduction/",
							"developers_intro" => "/developers/introduction/",
							"developers_howtouse" => "/developers/how-to-use-the-api/",
							"developers_samples" => "/developers/samples/",
							"developers_references" => "/developers/references/",
							"developers_signup" => "/developers/signup/",		
							"login" => "/login/",
							"signup" => "/signup/",
							"restore_password" => "/restore-password/",
							"terms" => "/terms-of-use/",
							"terms_dev" => "/developers/terms/",
							"privacy" => "/policy/",
							"imprint" => "/imprint/");

$GLOBALS['PARAMS_TPL']['PAGE_COST']=0.06;
$GLOBALS['PARAMS_TPL']['PAGE_COST_HIGHER']=0.09;
$GLOBALS['PARAMS_TPL']['PRICE_PRO_PLAN']=5.95;
$GLOBALS['PARAMS_TPL']['PRICE_BASIC_PLAN']=3.95;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_PACK_1']=10;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_PACK_2']=30;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_PACK_3']=50;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_PACK_4']=110;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_1']=10;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_2']=30;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_3']=52.5;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_4']=110;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_5']=287.5;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_6']=600;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_7']=937.5;
$GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_8']=1330;
$GLOBALS['PARAMS_TPL']['PAGE_COST_1']=0.09;
$GLOBALS['PARAMS_TPL']['PAGE_COST_2']=0.09;
$GLOBALS['PARAMS_TPL']['PAGE_COST_3']=0.09;
$GLOBALS['PARAMS_TPL']['PAGE_COST_4']=0.08;
$GLOBALS['PARAMS_TPL']['PAGE_COST_5']=0.08;
$GLOBALS['PARAMS_TPL']['PAGE_COST_6']=0.07;
$GLOBALS['PARAMS_TPL']['PAGE_COST_7']=0.07;
$GLOBALS['PARAMS_TPL']['PAGE_COST_8']=0.06;
// get visitor country and save it to $_SESSION for prevent call in all pages for visitor
function GetVisitorCountry($a_sIP = null)
{
	if (!$a_sIP)
		$a_sIP = $_SERVER['REMOTE_ADDR'];

	if (!isset($GLOBALS['VISITOR_COUNTRY_ALPHA2']))
	{
		if(isset($GLOBALS['IS_DEV']) && $GLOBALS['IS_DEV'] == true)
		{
			$country_code = 'BY';
		} else
		{
			$details = json_decode(file_get_contents("http://ipinfo.io/{$a_sIP}"));

			if ($details && is_object($details) && isset($details->country))
				$country_code = strtoupper($details->country);
			else
				$country_code = 'US'; //default country, any country with english language
		}

		$_SESSION['VISITOR_COUNTRY_ALPHA2'] = $country_code;
		return $country_code;
	} else
	{
		$GLOBALS['VISITOR_COUNTRY_ALPHA2'] = $_SESSION['VISITOR_COUNTRY_ALPHA2'];
		return $GLOBALS['VISITOR_COUNTRY_ALPHA2'];
	}
}

function GetUrlJs($a_url)
{
	$t_url = $a_url;
	$t_url = str_replace("/", "\/", $t_url);
	return $t_url;
}



function LanguageIP($a_sIP)
{
	$t_lang = $GLOBALS['DEF_LANG'];
	
//	if($GLOBALS['IS_DEV'] == false) {
		$country_code = GetVisitorCountry($a_sIP);

		switch ($country_code) {
			case "RU":
			case "BY":
			case "UA": {
				$t_lang = "ru";
				break;
			}
			case "AT":
			case "DE":
			case "LI":
			case "CH": {
				$t_lang = "de";
				break;
			}
			case "FR": {
				$t_lang = "fr";
				break;
			}
			case "ES": {
				$t_lang = "es";
				break;
			}
			case "PL": {
				$t_lang = "pl";
				break;
			}
			case "SV": {
				$t_lang = "sv";
				break;
			}
			case "JP": {
				$t_lang = "ja";
				break;
			}
			case "IT": {
				$t_lang = "it";
				break;
			}
			case "CN": {
				$t_lang = "zh-Hans";
				break;
			}
			//default: $t_lang = $GLOBALS['DEF_LANG']	;
		}
//	}
	
    return $t_lang; 
	
}

function IncludeLanguage($a_langCode)
{
	$t_langCode = $a_langCode;
	$t_langCode = strtolower($t_langCode);

	$t_path = "messages/";

	if( isset($GLOBALS['LANGUAGES'][$t_langCode]) )
	{
		if( file_exists($t_path.$GLOBALS['LANGUAGES'][$t_langCode]['file']) )
		{
			require $t_path.$GLOBALS['LANGUAGES'][$t_langCode]['file'];
			return $t_langCode;
		}
		else
		{
			require $t_path.'en.inc.php';
			return 'en';
		}
	}
	else
	{
		require $t_path.'en.inc.php';
		return 'en';
	}
}

function prepareSmarty()
{	
	$smarty = new Smarty;
	
	//$smarty->force_compile = true;
	$smarty->debugging = false;
	$smarty->caching = false;
	$smarty->force_compile = true;
	$smarty->cache_lifetime = 120;
	
	return $smarty;
}

function IsLink($a_link)
{
	if(strlen($a_link) == 0)
		return true;

	if($a_link == '/')
		return true;

	$t_link = strtolower($a_link);

	if(substr($t_link, 0, 1) != '/')
		$t_link = '/'.$t_link;

	if(substr($t_link, strlen($t_link)-1) != '/')
		$t_link = $t_link.'/';

	if(in_array($t_link, $GLOBALS['LINKS']))
		return true;
	else
		return false;
}

function GetLink($a_section, $a_attachLang=true)
{
	$t_result = "";
	$t_section = strtolower($a_section);


	switch(strtolower($t_section))
	{
		case null: $t_result = "/"; break;
		case "": $t_result = "/"; break;
		default: 
		{
			if(isset($GLOBALS['LINKS'][$t_section]))
				$t_result = $GLOBALS['LINKS'][$t_section];
			//else
			//    $t_result = "/";

			break;
		}
	}	
	
	if($t_result != '' && $a_attachLang == true)
		$t_result = "/".$GLOBALS['CURR_LANG'].$t_result;
		
	return $t_result;
}

function sanitize_array($a = array())
{
	if (!$a)
		return array();
	
	$sanitized_array = array();
	
	foreach($a as $k=>$v)
	{
		$cv = strip_tags(trim($v));
		if ($cv == "")
			$cv = null;
		
		$sanitized_array[$k] = $cv;
	}
	
	return $sanitized_array;
}

function prepareSmartyVars($a_aSmartyVars = array())
{

    $t_aSmartyParams = array();   
 
	$t_aSmartyParams['action_index'] = GetLink('index');

	$t_aSmartyParams['action_download'] = GetLink('download');
	$t_aSmartyParams['action_download_windows'] = GetLink('download_windows');	

	$t_aSmartyParams['action_features'] = GetLink('features');
	$t_aSmartyParams['action_features_faxnumber'] = GetLink('features_faxnumber');
	$t_aSmartyParams['action_features_win7app'] = GetLink('features_win7app');
	$t_aSmartyParams['action_features_macos'] = GetLink('features_macos');
	$t_aSmartyParams['action_features_mobile'] = GetLink('features_mobile');
	$t_aSmartyParams['action_features_portal'] = GetLink('features_portal');
	
	$t_aSmartyParams['action_rates'] = GetLink('rates');
	$t_aSmartyParams['action_rates_rates'] = GetLink('rates_rates');
	$t_aSmartyParams['action_rates_creditpacks'] = GetLink('rates_creditpacks');
	$t_aSmartyParams['action_rates_plans'] = GetLink('rates_plans');
	$t_aSmartyParams['action_rates_pagecost'] = GetLink('rates_pagecost');
	$t_aSmartyParams['action_rates_costcalc'] = GetLink('rates_costcalc');
	
	$t_aSmartyParams['action_addons'] = GetLink('addons');
	$t_aSmartyParams['action_addons_addons'] = GetLink('addons_addons');
	$t_aSmartyParams['action_addons_facebook'] = GetLink('addons_facebook');
	$t_aSmartyParams['action_addons_salesforce'] = GetLink('addons_salesforce');
	$t_aSmartyParams['action_addons_companyman'] = GetLink('addons_companyman');
	
	$t_aSmartyParams['action_developers'] = GetLink('developers');
	$t_aSmartyParams['action_developers_intro'] = GetLink('developers_intro');
	$t_aSmartyParams['action_developers_howtouse'] = GetLink('developers_howtouse');	
	$t_aSmartyParams['action_developers_samples'] = GetLink('developers_samples');
	$t_aSmartyParams['action_developers_references'] = GetLink('developers_references');
	$t_aSmartyParams['action_developers_signup'] = GetLink('developers_signup');

	$t_aSmartyParams['action_login'] = GetLink('login');
	$t_aSmartyParams['action_signup'] = GetLink('signup');
	$t_aSmartyParams['action_restore_password'] = GetLink('restore_password');
	
	$t_aSmartyParams['action_terms'] = GetLink('terms');
	$t_aSmartyParams['action_terms_dev'] = GetLink('terms_dev');
	$t_aSmartyParams['action_privacy'] = GetLink('privacy');
	$t_aSmartyParams['action_imprint'] = GetLink('imprint');

	$t_aSmartyParams['form_action_login'] = $GLOBALS['URL_PORTAL']."/PortalLogin/Verify?from_website=1";
	$t_aSmartyParams['form_action_register'] = $GLOBALS['URL_PORTAL']."/portallogin/PerformRegistration";
	$t_aSmartyParams['form_action_login_page'] = $GLOBALS['URL_PORTAL']."/PortalLogin/Verify?from_website=1";
	$t_aSmartyParams['form_action_restore_page'] = $GLOBALS['URL_PORTAL']."/recover/perform/";

	$t_aSmartyParams['url_site'] = $GLOBALS['URL_SITE'];
	$t_aSmartyParams['url_portal'] = $GLOBALS['URL_PORTAL'].(isset($_COOKIE['UserIdentifier']) ? "/dashboad/?_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_shop'] = $GLOBALS['URL_SHOP'].(isset($_COOKIE['UserIdentifier']) ? "/?_id=".$_COOKIE['UserIdentifier'] : '');

	$t_aSmartyParams['url_company_manager'] = $GLOBALS['URL_PORTAL'].'/mycompany/'.(isset($_COOKIE['UserIdentifier']) ? "?_id=".$_COOKIE['UserIdentifier'] : '');	

	$t_aSmartyParams['url_buy_credit'] = $GLOBALS['URL_PORTAL'].'/payment/buycredit/'.(isset($_COOKIE['UserIdentifier']) ? "?_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_send_fax'] = $GLOBALS['URL_PORTAL'].'/myfaxes/newfax/'.(isset($_COOKIE['UserIdentifier']) ? "?_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_proplan'] = $GLOBALS['URL_SHOP'].'/pamfax_professional_fax_plan?category_id=1&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_basicplan'] = $GLOBALS['URL_SHOP'].'/pamfax_basic_plan?category_id=1&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');

	$t_aSmartyParams['url_buy_pack1'] = $GLOBALS['URL_SHOP'].'/10_credit_pack?category_id=2&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_pack2'] = $GLOBALS['URL_SHOP'].'/30_credit_pack?category_id=2&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_pack3'] = $GLOBALS['URL_SHOP'].'/50_credit_pack?category_id=2&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_pack4'] = $GLOBALS['URL_SHOP'].'/100_credit_pack?category_id=2&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_pack5'] = $GLOBALS['URL_SHOP'].'/250_credit_pack?category_id=2&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_pack6'] = $GLOBALS['URL_SHOP'].'/500_credit_pack?category_id=2&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_pack7'] = $GLOBALS['URL_SHOP'].'/750_credit_pack?category_id=2&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');
	$t_aSmartyParams['url_buy_pack8'] = $GLOBALS['URL_SHOP'].'/1000_credit_pack?category_id=2&language_code='.$GLOBALS['CURR_LANG'].(isset($GLOBALS['Currency'])?'&currency_code='.$GLOBALS['Currency']['code'] : '').(isset($_COOKIE['UserIdentifier']) ? "&_id=".$_COOKIE['UserIdentifier'] : '');

	$t_aSmartyParams['is_dev'] = $GLOBALS['IS_DEV'];
	$t_aSmartyParams['is_live'] = $GLOBALS['IS_LIVE'];
	$t_aSmartyParams['is_captcha'] = $GLOBALS['IS_CAPTCHA'];
	$t_aSmartyParams['is_passwords'] = $GLOBALS['IS_PASSWORDS'];

	$t_aSmartyParams['curr_lang'] = $GLOBALS['CURR_LANG'];
	$t_aSmartyParams['languages'] = $GLOBALS['LANGUAGES'];

	If ($a_aSmartyVars['page']['page_tpl']=='page_index'||$a_aSmartyVars['page']['page_tpl']=='page_features')
	{


		$res = json_decode(CommonApi::GetFormattedPrice());

		$t_aSmartyParams['page_cost']=get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_HIGHER'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);

	}

	If ($a_aSmartyVars['page']['page_tpl']=='page_rates_rates')
	{
		$res=json_decode(CommonApi::GetFormattedPrice());

		$t_aSmartyParams['price_pro_plan']=get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_PRO_PLAN'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_basic_plan']=get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_BASIC_PLAN'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_higher']=get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_HIGHER'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost'] = get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);

	}

	If ($a_aSmartyVars['page']['page_tpl']=='page_rates_packs')
	{
		$res=json_decode(CommonApi::GetFormattedPrice());

		$t_aSmartyParams['price_credit_pack_1'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_PACK_1'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_pack_2'] = get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_PACK_2'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_pack_3'] = get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_PACK_3'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_pack_4'] = get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_PACK_4'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_added_1'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_1'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_added_2'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_2'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_added_3'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_3'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_added_4'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_4'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_added_5'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_5'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_added_6'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_6'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_added_7'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_7'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_credit_added_8'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_CREDIT_ADDED_8'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_1'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_1'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_2'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_2'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_3'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_3'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_4'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_4'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_5'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_5'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_6'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_6'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_7'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_7'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_8'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_8'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);

	}

	If ($a_aSmartyVars['page']['page_tpl']=='page_rates_plans')
	{
		$res=json_decode(CommonApi::GetFormattedPrice());

		$t_aSmartyParams['price_pro_plan'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_PRO_PLAN'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_basic_plan'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_BASIC_PLAN'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost_higher'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST_HIGHER'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['page_cost'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PAGE_COST'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);

	}

	If ($a_aSmartyVars['page']['page_tpl']=='page_features_faxnumber')
	{
		$res=json_decode(CommonApi::GetFormattedPrice());
		$t_aSmartyParams['price_pro_plan'] =get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_PRO_PLAN'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);
		$t_aSmartyParams['price_basic_plan']=get_formatted_price($GLOBALS['PARAMS_TPL']['PRICE_PRO_PLAN'],$res->CurCode->format,$res->CurCode->decimal_separator,$res->CurCode->decimal_digits,$res->CurCode->rate_to_eur);

	}

	if(isset($GLOBALS['User']))
	{
		If (!isset($res)) 	$res=json_decode(CommonApi::GetFormattedPrice());

		$t_aSmartyParams['User'] = $GLOBALS['User'];

		$t_aSmartyParams['User']['credit']=str_replace('.',$res->CurCode->decimal_separator,$t_aSmartyParams['User']['credit']);
	}


	if(isset($GLOBALS['Currency']))
		$t_aSmartyParams['Currency'] = $GLOBALS['Currency'];

	$t_aSmartyParams['RecaptchaSiteKey'] = RECAPTCHA_SITE_KEY;

	if(!is_array($a_aSmartyVars))                               
        return $t_aSmartyParams;
                                	
    return array_merge($a_aSmartyVars, $t_aSmartyParams);
}
	
function htmlencode($str)
{
	$str = mb_convert_encoding($str , 'UTF-32', 'UTF-8');
	$t = unpack("N*", $str);
	$t = array_map(function($n) { return "&#$n;"; }, $t);
	return implode("", $t);
}


function getRequestParam($a_paramName, $a_sParamValue = null)
{
	if(isset($_POST[$a_paramName]) && strlen($_POST[$a_paramName]))
		return filter_var($_POST[$a_paramName], FILTER_SANITIZE_STRING);
	else if(isset($_GET[$a_paramName]) && strlen($_GET[$a_paramName]))
		return filter_var($_GET[$a_paramName], FILTER_SANITIZE_STRING);
	else
		return $a_sParamValue;
}

function PortalRedirect()
{
	if(isset($_SESSION['UserIdentifier']))
	{
		//$res = json_decode( SessionApi::CreateLoginIdentifier( false, 600 ), true );

		//if ( $res['result']['type'] == '' && $res['result']['code'] == 'success' )
		//{
			$link = $GLOBALS['URL_PORTAL']."/dashboad/?_id=".$_SESSION['UserIdentifier'];

			header("HTTP/1.1 302 Found");
			header("Location: $link");

			return true;
		//}
	}

	return false;
}

function t($a_sStringKey, $a_aParams = null, $a_sLangCode = null)
{

	$rezerv=$GLOBALS['translation']['strings'];

If ((!empty($a_sLangCode))&(!isset($GLOBALS['translation']['strings'][$a_sLangCode])))
{
	$GLOBALS['translation']['strings']=[];
	IncludeLanguage($a_sLangCode);
	$GLOBALS['translation']['strings'][$a_sLangCode]=$GLOBALS['translation']['strings'];
}
	$t_sStringKey   = strtoupper($a_sStringKey);
	If ((!empty($a_sLangCode)))
		$t_sResult      = $GLOBALS['translation']['strings'][$a_sLangCode][$t_sStringKey];
	else $t_sResult = $GLOBALS['translation']['strings'][$t_sStringKey];


	if($t_sResult == "")
		$t_sResult = $t_sStringKey;
	else
	{
		$t_sResult = str_replace("[strong]", "<strong>", $t_sResult);
		$t_sResult = str_replace("[/strong]", "</strong>", $t_sResult);

		$t_sResult = str_replace("[b]", "<b>", $t_sResult);
		$t_sResult = str_replace("[/b]", "</b>", $t_sResult);

		$t_sResult = str_replace("[p]", "<p>", $t_sResult);
		$t_sResult = str_replace("[/p]", "</p>", $t_sResult);

		$t_sResult = str_replace("[LF]", "<br/>", $t_sResult);

		$t_sResult = str_replace("[/a]", "</a>", $t_sResult);

		$t_sResult = str_replace("[span]", "<span>", $t_sResult);
		$t_sResult = str_replace("[/span]", "</span>", $t_sResult);

		if($a_aParams != null)
		{
			foreach($a_aParams as $k=>$v)
			{
				$t_sResult = str_replace($k, $v, $t_sResult);
			}			
		}
	}

	$GLOBALS['translation']['strings']=[];
	$GLOBALS['translation']['strings']=$rezerv;

	return $t_sResult;
}

function isLanguage($a_sLangCode)
{
	if($a_sLangCode == null || $a_sLangCode == "" || isSupportedLang($a_sLangCode) == false/*strlen($a_sLangCode) > 2*/)
		return false;
	
	return true;
}

function isSupportedLang($a_sLangCode)
{
	$t_sLangCode = strtolower($a_sLangCode);
	
	foreach($GLOBALS['LANGUAGES'] as $k=>$v)
	{
		if($k == $t_sLangCode)
			return true;
	}
	
	return false;
}

function renderPage($a_sPageRequest, $params_array = null) /////////////////
{
	$smarty = prepareSmarty();
	$page = array();

	$t_sPageRequest = $a_sPageRequest;
	if($t_sPageRequest[strlen($t_sPageRequest)-1] == '/')
		$t_sPageRequest = substr($t_sPageRequest, 0, $t_sPageRequest-1);

	switch($t_sPageRequest)
	{
		case 'index':
		{
			$page['title'] = t('SITE_PAGE_MAIN_TITLE');
			$page['page_tpl'] = 'page_index';
			$page['section'] = 'index';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_MAIN_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_INDEX');
			
			$page['curr_page'] = "";	
			$page['link_canonical'] = $GLOBALS['URL_SITE'].'/';
			
			break;
		}
		case 'downloads':
		{
		    $page['title'] = t('SITE_PAGE_DOWNLOADS_TITLE');
		    $page['page_tpl'] = 'page_download';
		    $page['section'] = 'download';
		    $page['author'] = "PamConsult";
		    $page['description'] = t('SITE_PAGE_DOWNLOADS_DESCRIPTION');
		    //$page['keywords'] = t('TXT_PAGE_KEYWORDS_WHATWEDO');
			
			$page['curr_page'] = GetLink("download", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("download", false);			

		    break;
		}
		case 'downloads/windows':
		{
			$page['title'] = t('SITE_PAGE_DOWNLOAD_WINDOWS_TITLE');
			$page['page_tpl'] = 'page_download_windows';
			$page['section'] = 'download';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_DOWNLOAD_WINDOWS_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_CONTACT');
				
			$page['curr_page'] = GetLink("download_windows", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("download_windows", false);			

			break;
		}
		case 'introduction':
		case 'einfuehrung':
		{
		    $page['title'] = t('SITE_PAGE_FEATURES_TITLE');
		    $page['page_tpl'] = 'page_features';
		    $page['section'] = 'features';
		    $page['author'] = "PamConsult";
		    $page['description'] = ('SITE_PAGE_FEATURES_DESCRIPTION');
		    //$page['keywords'] = t('TXT_PAGE_KEYWORDS_KNOWHOW');
			
			$page['curr_page'] = GetLink("features", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("features", false);			

		    break;
		}
		case 'introduction/windows7-xp':
		case 'einfuehrung/windows7-xp':
		{
			$page['title'] = t('SITE_PAGE_FEATURES_WINDOWS_TITLE');
			$page['page_tpl'] = 'page_features_win7app';
			$page['section'] = 'features';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_FEATURES_WINDOWS_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_BLOG');
				
			$page['curr_page'] = GetLink("features_win7app", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("features_win7app", false);			

			break;
		}
		case 'introduction/fax-mac':
		case 'einfuehrung/fax-mac':
		{
		    $page['title'] = t('SITE_PAGE_FEATURES_MACOS_TITLE');
		    $page['page_tpl'] = 'page_features_macos';
		    $page['section'] = 'features';
		    $page['author'] = "PamConsult";
		    $page['description'] = t('SITE_PAGE_FEATURES_MACOS_DESCRIPTION');
		    //$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
		
			$page['curr_page'] = GetLink("features_macos", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("features_macos", false);			

		    break;
		}
		case 'introduction/mobile':
		case 'einfuehrung/mobile':
		{
			$page['title'] = t('SITE_PAGE_FEATURES_MOBILE_TITLE');
			$page['page_tpl'] = 'page_features_mobile';
			$page['section'] = 'features';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_FEATURES_MOBILE_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
				
			$page['curr_page'] = GetLink("features_mobile", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("features_mobile", false);

			break;
		}
		case 'introduction/online-fax':
		case 'einfuehrung/online-fax':
		{
			$page['title'] = t('SITE_PAGE_FEATURES_PORTAL_TITLE');
			$page['page_tpl'] = 'page_features_portal';
			$page['section'] = 'features';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_FEATURES_PORTAL_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
				
			$page['curr_page'] = GetLink("features_portal", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("features_portal", false);			

			break;
		}
		case 'introduction/fax-number':
		case 'einfuehrung/faxnummer':
		{
			$page['title'] = t('SITE_PAGE_FEATURES_FAXNUMBER_TITLE');
			$page['page_tpl'] = 'page_features_faxnumber';
			$page['section'] = 'features';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_FEATURES_FAXNUMBER_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("features_faxnumber", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("features_faxnumber", false);			

			break;			
		}
		case 'rates':
		case 'kosten':
		{
			$page['title'] = t('SITE_PAGE_RATES_RATES_TITLE');
			$page['page_tpl'] = 'page_rates_rates';
			$page['section'] = 'rates';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_RATES_RATES_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("rates_rates", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("rates_rates", false);			

			break;			
		}
		case 'rates/credit-packs':
		case 'kosten/guthabenpakete':
		{
			$page['title'] = t('SITE_PAGE_RATES_PACKS_TITLE');
			$page['page_tpl'] = 'page_rates_packs';
			$page['section'] = 'rates';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_RATES_PACKS_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("rates_creditpacks", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("rates_creditpacks", false);			

			break;			
		}
		case 'rates/feature-details':
		case 'kosten/funktions-details':
		{
			$page['title'] = t('SITE_PAGE_RATES_PACKS_TITLE');
			$page['page_tpl'] = 'page_rates_plans';
			$page['section'] = 'rates';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_RATES_PACKS_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("rates_plans", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("rates_plans", false);			

			break;			
		}
		case 'rates/costs':
		case 'kosten/gebuehren':
		{
			$page['title'] = t('SITE_PAGE_RATES_PAGECOST_TITLE');
			$page['page_tpl'] = 'page_rates_pagecost';
			$page['section'] = 'rates';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_RATES_PAGECOST_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("rates_pagecost", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("rates_pagecost", false);			

			break;			
		}
		case 'rates/cost-calculator':
		case 'kosten/kostenrechner':
		{
			$page['title'] = t('SITE_PAGE_RATES_COSTCALC_TITLE');
			$page['page_tpl'] = 'page_rates_costcalc';
			$page['section'] = 'rates';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_RATES_COSTCALC_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("rates_costcalc", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("rates_costcalc", false);			

			break;			
		}
		case 'extensions':
		case 'erweiterungen':
		{
			$page['title'] = t('SITE_PAGE_ADDONS_ADDONS_TITLE');
			$page['page_tpl'] = 'page_addons_addons';
			$page['section'] = 'addons';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_ADDONS_ADDONS_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("addons_addons", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("addons_addons", false);			

			break; 
		}
		case 'extensions/facebook':
		case 'erweiterungen/facebook':
		{
			$page['title'] = t('SITE_PAGE_ADDONS_FACEBOOK_TITLE');
			$page['page_tpl'] = 'page_addons_facebook';
			$page['section'] = 'addons';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_ADDONS_FACEBOOK_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("addons_facebook", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("addons_facebook", false);			

			break;
		}
		case 'extensions/salesforce':
		case 'erweiterungen/salesforce':
		{
			$page['title'] = t('SITE_PAGE_ADDONS_SALESFORCE_TITLE');
			$page['page_tpl'] = 'page_addons_salesforce';
			$page['section'] = 'addons';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_ADDONS_SALESFORCE_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("addons_salesforce", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("addons_salesforce", false);			

			break;
		}
		case 'extensions/business-fax':
		case 'erweiterungen/business-fax':
		{
			$page['title'] = t('SITE_PAGE_ADDONS_COMPANY_TITLE');
			$page['page_tpl'] = 'page_addons_companyman';
			$page['section'] = 'addons';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_ADDONS_COMPANY_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("addons_companyman", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("addons_companyman", false);			

			break;
		}
		case 'developers/introduction':
		{
			$page['title'] = t('SITE_PAGE_DEVELOPER_INTRO_TITLE');
			$page['page_tpl'] = 'page_developers_intro';
			$page['section'] = 'developers';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_DEVELOPER_INTRO_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("developers_intro", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("developers_intro", false);			

			break;
		}
		case 'developers/how-to-use-the-api':
		{
			$page['title'] = "How to use - PamFax";
			$page['page_tpl'] = 'page_developers_howtouse';
			$page['section'] = 'developers';
			$page['author'] = "PamConsult";
			$page['description'] = "Free PamFax API The PamFax API is completely free for developers. Deploy fax services easily and at no cost.";
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("developers_howtouse", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("developers_howtouse", false);			

			break;
		}
		case 'developers/samples':
		{
			$page['title'] = t('SITE_PAGE_DEVELOPER_SAMPLES_TITLE');
			$page['page_tpl'] = 'page_developers_samples';
			$page['section'] = 'developers';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_DEVELOPER_SAMPLES_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("developers_samples", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("developers_samples", false);			

			break;

		}
		case 'developers/references':
		{
			$page['title'] = t('SITE_PAGE_DEVELOPER_REFERENCES_TITLE');
			$page['page_tpl'] = 'page_developers_references';
			$page['section'] = 'developers';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_DEVELOPER_REFERENCES_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');
			
			$page['curr_page'] = GetLink("developers_references", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("developers_references", false);			

			break;
		}
		case 'developers/signup':
		{
			$page['title'] = t('SITE_PAGE_DEVELOPER_SIGNUP_TITLE');
			$page['page_tpl'] = 'page_developers_signup';
			$page['section'] = 'developers';
			$page['author'] = "PamConsult";
			$page['description'] = t('SITE_PAGE_DEVELOPER_SIGNUP_DESCRIPTION');
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_STARTPROJECT');

			$page['curr_page'] = GetLink("developers_signup", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("developers_signup", false);			

			break;
		}
		case 'policy':
		case 'datenschutz':
		{
		    $page['title'] = t('SITE_PAGE_PRIVACY_TITLE');
		    $page['page_tpl'] = 'page_privacy';
		    $page['section'] = 'privacy';
		    $page['author'] = "PamConsult";
		    $page['description'] = t('SITE_PAGE_PRIVACY_DESCRIPTION');
		    //$page['keywords'] = t('TXT_PAGE_KEYWORDS_PRIVACY');
			
			$page['curr_page'] = GetLink("privacy", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("privacy", false);			

		    break;
		}		
		case 'terms-of-use':
		case 'nutzungsbedingungen':
		{
		    $page['title'] = t('SITE_PAGE_TERMS_TITLE');
		    $page['page_tpl'] = 'page_terms';
		    $page['section'] = 'terms';
		    $page['author'] = "PamConsult";
		    $page['description'] = t('SITE_PAGE_TERMS_DESCRIPTION');
		    //$page['keywords'] = t('TXT_PAGE_KEYWORDS_TERMS');
			
			$page['curr_page'] = GetLink("terms", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("terms", false);			

		    break;
		}		
		case 'developers/terms':
		{
		    $page['title'] = t('SITE_PAGE_TERMS_DEV_TITLE');
		    $page['page_tpl'] = 'page_dev_terms';
		    $page['section'] = 'terms_dev';
		    $page['author'] = "PamConsult";
		    $page['description'] = t('SITE_PAGE_TERMS_DEV_DESCRIPTION');
		    //$page['keywords'] = t('TXT_PAGE_KEYWORDS_TERMS');
			
			$page['curr_page'] = GetLink("terms_dev", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("terms_dev", false);			

			break;
		}
		case 'imprint':
		case 'impressum':
		{
		    $page['title'] = t('SITE_PAGE_IMPRINT_TITLE');
		    $page['page_tpl'] = 'page_imprint';
		    $page['section'] = 'imprint';
		    $page['author'] = "PamConsult";
		    $page['description'] = t('SITE_PAGE_IMPRINT_DESCRIPTION');
		    //$page['keywords'] = t('TXT_PAGE_KEYWORDS_IMPRINT');
			
			$page['curr_page'] = GetLink("imprint", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("imprint", false);			

		    break;
		}
		case 'signup':
		{
			$page['title'] = t('WINDOW_REGISTER');
			$page['page_tpl'] = 'page_signup';
			$page['section'] = 'index';
			$page['author'] = "PamConsult";
			$page['description'] = "Signup description";
			//$page['keywords'] = t('TXT_PAGE_KEYWORDS_INDEX');
				
			$page['curr_page'] = GetLink("signup", false);
			$page['link_canonical'] = $GLOBALS['URL_SITE'].GetLink("signup", false);			
			
			break;
		}

		default:
		{
			header("HTTP/1.1 404 Not Found");
			return;
		}
	}
	
	$t_aSmartyPage = array("page" => $page);
	
	if(is_array($params_array))   //емейл параметры
		$smarty->assign( prepareSmartyVars( array_merge($t_aSmartyPage, $params_array) ) );
	else
		$smarty->assign( prepareSmartyVars( $t_aSmartyPage ) );
	
	$smarty->display('page.tpl');
	
}  

function parseRequestHeaders()
{
    $headers = array();
    
    foreach($_SERVER as $key => $value)
    {
        if (substr($key, 0, 5) <> 'HTTP_')
        {
            continue;
        }
        $header = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
        $headers[$header] = $value;
    }
    
    return $headers;
}


function get_formatted_price($number,$format,$separator,$digits,$rate)
{
	$vat=vat_country();

	$zero_cut='';

	For ($i=0;$i<$digits;$i++)
	$zero_cut.='0';

	$zero_cut='1'.$separator.$zero_cut;

	$number=str_replace(".", ",",(string)(get_value_price($vat,$number,$rate,$digits)));

	$number=str_replace(",",$separator,$number);
	$formatted_price=str_replace($zero_cut,$number,$format);

	If ($vat) $formatted_price=$formatted_price."<span class=\"vatinfo\"> (".t("TXT_INCLVAT").")</span>";

	return $formatted_price;

}

function get_value_price($vat,$number,$rate,$digits)
{
	If ($vat) $number=round($number*1.19/$rate,$digits);

	else $number=round($number/$rate,$digits);

	return $number;
}

function web_format_currencyvalue($eurvalorig, $addvat = true)
{
	//global $arConverted;
	$eurval = str_replace(",", ".", $eurvalorig);
	$eurval = floatval($eurval);
	//  $addVAT = $addvat && (isset($GLOBALS['visitor_vat']) && ($GLOBALS['visitor_vat'] > 0)) && ($eurval != 0);
	//$currency_rate = $GLOBALS['visitor_currency_rate'];

//	log_debug("$eurval * $currency_rate = ".($eurval * $currency_rate));
	if($eurval != 0)
	{
		//  if($currency_rate != 1)
		//   $eurval = $eurval * $currency_rate;
		// if($addVAT)
		$eurval = $eurval * 1.19;
	}

	 //$curval = Localization::format_currency($eurval, $GLOBALS['visitor_culture']);

	// $arConverted["c".$curval] = $curval;
	//$ret = $curval.($addVAT ? "<div class=\"vatinfo\">(".getString("TXT_INCLVAT").")</div>" : ""); //."($eurval ".$GLOBALS['visitor_culture'].")";
	$DecimalDigits=2;
	$val = number_format(abs($eurval),$DecimalDigits,",",".");
	$ret = $val." € <span class=\"vatinfo\">(".t("TXT_INCLVAT").")</span>";
	return $ret;
}

function vat_country()
{
	global $VAT_COUNTRIES;

	$ip = $_SERVER['REMOTE_ADDR'];
	$countrycode=GetVisitorCountry($ip);
	$GLOBALS['visitor_countrycode'] = $countrycode;
	$isvatcountry = in_array($countrycode, $VAT_COUNTRIES);

	return $isvatcountry;
}
?>