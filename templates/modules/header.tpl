<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title>{$page['title']}</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="{$page['description']}" />
		<meta name="robots" content="index, follow" />
		
		<link rel="alternate" type="application/rss+xml" title="PamFax &raquo; Home Comments Feed" href="{$url_site}/sample-page/feed/" />
		<link rel='stylesheet' id='fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:200,400,300,600,700,800&#038;subset=cyrillic,latin' type='text/css' media='all' />
		<link rel='stylesheet' id='bootstrap-min-css'  href='/assets/plugins/bootstrap/css/bootstrap.css' type='text/css' media='all' />
		<link rel='stylesheet' id='jquery-ui-css'  href='http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css' type='text/css' media='all' />
		<link rel='stylesheet' id='pamfax-style-css'  href='/assets/css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' id='pamfax-media-css'  href='/assets/css/style_media.css' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-css'  href='/assets/plugins/font-awesome/css/font-awesome.css' type='text/css' media='all' />
{if $page['page_tpl'] eq 'page_developers_howtouse' or $page['page_tpl'] eq 'page_developers_samples'}
		<link rel='stylesheet' id='pamfax-shcore-css-css'  href='/assets/plugins/shCorePamfax.css' type='text/css' media='all' />
{/if}

		<script type='text/javascript' src='/assets/plugins/jquery/jquery.js'></script>
		<script type='text/javascript' src='/assets/plugins/jquery/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='http://code.jquery.com/ui/1.11.4/jquery-ui.js?ver=4.0.1'></script>
		<script type='text/javascript' src='/assets/plugins/bootstrap/js/bootstrap.js'></script>
{IF $is_live}
		<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"></script>
{/IF}
		<script type='text/javascript'>
			/* <![CDATA[ */
			var aaParams = {
				"asShopUrl": "{GetUrlJs($url_shop)}",

				{if $smarty.session.VISITOR_COUNTRY_ALPHA2}
					"asCountryCode": "{$smarty.session.VISITOR_COUNTRY_ALPHA2}",
				{else}
					"asCountryCode": "{GetVisitorCountry()}",
				{/if}

				"asPlansUrl": "{GetUrlJs($url_site|cat:$action_rates_plans)}",

				"asEmptyData": "{t('BYFAX_TXT_REQUIRED_FIELDS')}",
				"asShortDescription": "{t('SITE_WARNING_TOO_SHORT_DESCRIPTION')}",
				"asTermsAccept": "{t('SITE_WARNING_NOT_ACCEPTED_TERMS')}",
				"asRecaptha": "{t('ERR_OCT_CAPTCHA')}"}
			/* ]]> */
		</script>
		<script type='text/javascript' src='/assets/js/pamfax.js'></script>
		<script type='text/javascript' src='/assets/js/pc_func.js'></script>


{if $page['page_tpl'] eq 'page_developers_howtouse' or $page['page_tpl'] eq 'page_developers_samples'}
		<script type='text/javascript' src='/assets/js/shCore.js'></script>
		<script type='text/javascript' src='/assets/js/shBrushJScript.js'></script>
{/if}

		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="{$url_site}/xmlrpc.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="{$url_site}/wp-includes/wlwmanifest.xml" /> 

		<link rel='shortlink' href='{$url_site}/' />
		<link rel="canonical" href="{$page['link_canonical']}" />
		
		
		<link href="{$url_site}/favicon.ico"  type="image/x-icon" rel="shortcut icon" >
{if $is_captcha eq true}
		<script src="https://www.google.com/recaptcha/api.js?hl={$curr_lang}"></script>
{/if}



		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
		<script type="text/javascript">
		    window.cookieconsent_options = {
		        "message":"<div class='cc-txt-hide'><p>{t('TXT_SITE_COOKIES_HIDDEN')}</p><span>&times;</span></div><p class='cc_txt'>{t('TXT_SITE_COOKIES')}</p><a class='cc_btn cc_ok cc_btn_accept_all' target='_blank' data-cc-event='click:dismiss' href='#null'>Ok</a>",
		        "dismiss":false,
		        'learnMore': '{t('TXT_BUTTON_COOKIES')}',
		        'link': '#',
		        "theme":"/assets/css/style-cc.css"
		    }
		</script>
		<script type="text/javascript" src="/assets/js/cookieconsent.min.js"></script>
		<script src="/assets/js/cc.js"></script>
		<!-- End Cookie Consent plugin -->


</head>

<body>
<div class="{IF isset($User)}private-header{else}public-header{/IF}">
	<header>
	  	<div class="container">
	    	<a class="logo" href="{$action_index}"></a>

	    	<a class="btn-view-nav hidden-lg hidden-md" href="#"></a>

			<!-- ================= START panel for registered  user    (plus class private-header )   ====================  -->
{IF isset($User)}
	    	<div class="row">
				<div class="header-person-welcome">
					<p>
						<span class="hidden-lg hidden-md hidden-sm m-block">{t('SITE_TXT_PORTAL_INDEX')},</span>
						<span class="hidden-xs">{t('TXT_WELCOME')}, </span>
						<a href="{$url_portal}" name="user_dashboard_redirect">{$User['name']}</a>
					</p>
				</div>

				<div class="header-top-info header-info-green">

					<span class="hidden-sm hidden-xs">{t('CMN_YOUR_BALANCE')}:</span>
					<span class="header-money">P</span>
					<mark><strong>{$Currency['raw_symbol']}</strong>{$User['credit']}</mark>
					<a href="{$url_buy_credit}" class="header-btn">{t('SITE_TXT_BUY_CREDIT')}</a>

					<div class="language">
						<a href="#" data-toggle="dropdown">
							<span class="hidden-sm hidden-md hidden-lg">{$languages[$curr_lang]['title_short']}</span>
							<span class="hidden-xs">{$languages[$curr_lang]['title_long']}</span>
						</a> 
						<ul class="dropdown-menu">
						{foreach from=$languages key=k item=v}
							<li>
								<a href="/{$k}{$page['curr_page']}">
									<span class="hidden-sm hidden-md hidden-lg">{$v.title_short}</span>
									<span class="hidden-xs">{$v.title_long}</span>
								</a>
							</li>
						{/foreach}
						</ul>
					</div>

					<a href="#" name="user_logout" class="btn-exit"></a> 
				</div>
			</div>
			<!-- ================= END panel for registered  user ====================  -->
{else}
			<div class="row header-top-content">
				<a href="#" class="header-btn header-btn-green" data-toggle="modal" data-target="#loginModal">{t('BTN_LOGIN')}</a>
				{IF $page['page_tpl'] != 'page_developers_signup' and $page['page_tpl'] != 'page_signup'}
				<a href="#" class="header-btn header-btn-orange" data-toggle="modal" data-target="#registrationModal">{t('BTN_SIGN_UP')}</a>
				{/IF}

				
				<div class="language">
					<a href="#" data-toggle="dropdown">
						<span class="hidden-sm hidden-md hidden-lg">{$languages[$curr_lang]['title_short']}</span>
						<span class="hidden-xs">{$languages[$curr_lang]['title_long']}</span>
					</a> 
					<ul class="dropdown-menu">
					{foreach from=$languages key=k item=v}
						<li>
							<a href="/{$k}{$page['curr_page']}">
								<span class="hidden-sm hidden-md hidden-lg">{$v.title_short}</span>
								<span class="hidden-xs">{$v.title_long}</span>
							</a>
						</li>
					{/foreach}
					</ul>
				</div>      
			</div><!-- end row   header-top-content   -->
{/IF}


			<div class="row">     
			  <nav class="nav">
			    <button class="btn-close-nav hidden-lg hidden-md"></button>
			    <ul class="nav navbar-nav">
					<li class="{if $page['section'] eq 'download'}active{/if}">
						<a href="{$action_download}">{t('SITE_MENU_DOWNLOAD')}</a>
					</li>
			      

					<li class="{if $page['section'] eq 'features'}active{/if}">
						<a href="#" data-toggle="dropdown">{t('SITE_MENU_FEATURES')}</a>
						<ul class="dropdown-menu">
							<li><a href="{$action_features}">{t('SITE_MENU_FEATURES')}</a></li>
							<li><a href="{$action_features_faxnumber}">{t('SITE_MENU_FAX_NUMBER')}</a></li>
							<li><a href="{$action_features_win7app}">{t('SITE_MENU_WIN_APP')}</a></li>
							<li><a href="{$action_features_macos}">{t('SITE_MENU_MAC_APP')}</a></li>
							<li><a href="{$action_features_mobile}">{t('SITE_MENU_MOBILE_APP')}</a></li>
							<li><a href="{$action_features_portal}">{t('SITE_MENU_ONLINE_FAX')}</a></li>
						</ul>
					</li>


					<li class="{if $page['section'] eq 'rates'}active{/if}">
						<a href="#" data-toggle="dropdown">{t('TXT_RATES')}</a>
						<ul class="dropdown-menu">
							<li><a href="{$action_rates_rates}">{t('TXT_RATES')}</a></li>
							<li><a href="{$action_rates_creditpacks}">{t('ITEM_CREDPACK')}</a></li>
							<li><a href="{$action_rates_plans}">{t('SITE_MENU_PLANS')}</a></li>
							<li><a href="{$action_rates_pagecost}">{t('SITE_MENU_PAGE_COST')}</a></li>
							<li><a href="{$action_rates_costcalc}">{t('SITE_MENU_COST_CALC')}</a></li>
						</ul>
					</li>

					<li class="{if $page['section'] eq 'addons'}active{/if}">
						<a href="{$action_addons}" data-toggle="dropdown">{t('SITE_MENU_ADDONS')}</a>
						<ul class="dropdown-menu">
							<li><a href="{$action_addons_addons}">{t('SITE_MENU_ADDONS')}</a></li>
							<li><a href="{$action_addons_facebook}">Facebook</a></li>
							<li><a href="{$action_addons_salesforce}">Salesforce</a></li>
							<li><a href="{$action_addons_companyman}">{t('SITE_MENU_COMPANY_MANAGER')}</a></li>
						</ul>
					</li>

					<li class="{if $page['section'] eq 'developers'}active{/if}">
						<a href="{$action_developers}" data-toggle="dropdown">{t('SITE_MENU_DEVELOPERS')}</a>
						<ul class="dropdown-menu">
							<li><a href="{$action_developers_intro}">{t('SITE_MENU_INTRODUCTION')}</a></li>
							<li><a href="{$action_developers_howtouse}">{t('SITE_MENU_HOW_TO')}</a></li>
							<li><a href="{$action_developers_samples}">{t('SITE_MENU_SAMPLES')}</a></li>
							<li><a href="{$action_developers_references}">{t('SITE_MENU_REFERENCES')}</a></li>
							<li><a href="{$action_developers_signup}">{t('SITE_MENU_FREE_SIGNUP')}</a></li>
						</ul>
					</li>    
			    </ul>
			  </nav>
			</div><!-- end row  -->

		</div><!-- end container  -->
	</header>
</div>	


{IF !isset($User)}	
	{*<!--============================== MODAL WINDOW   РЕГИСТРАЦИЯ  ==========================================-->*}
    {IF $page['page_tpl'] != 'page_developers_signup' and $page['page_tpl'] != 'page_signup' }
	<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" name="modal_form_register">
				<div class="modal-header">
					<h4 class="modal-title">{t('TITLE_SIGN_UP')}</h4>
					<a href="#" data-dismiss="modal" class="close_form"></a>
				</div>
				
				<div class="modal-body">
					<form id="form_register" class="pamfax_form" {*method="post" action="{$form_action_register}"*} onsubmit="return false;">

                        <div class="error_enter_message" style="display: none;">
                            <b>1</b>
                            <p>2</p>
                            <a href="#" class="close_form"></a>
                        </div>

						<label for="UserName">{t('CMN_FULL_NAME')}</label>
						<input type="text" id="UserName" name="name" autofocus>
						<input id="nick_name" type="hidden" value="" name="nick_name">

						<label for="email">{t('CMN_EMAIL_ADDRESS')}</label>
						<input type="text" id="email" name="email" >

						<label for="password">{t('TXT_REGISTER_PASSWORD')}</label>
						<input type="{if $is_passwords eq false}text{else}password{/if}" id="password" name="password">
						<div class="help_text">
							<span class="glyphicon glyphicon-question-sign"></span>
							<p>{t('TXT_HINT_EMAIL_USERNAME')}</p>
						</div>

						<label for="password_repeat_field">{t('TXT_PORTAL_PASSWORD_REPEAT')}</label>
						<input type="{if $is_passwords eq false}text{else}password{/if}" id="password_repeat_field" name="password2">
						<div class="help_text">
							<span class="glyphicon glyphicon-question-sign"></span>
							<p>{t('TXT_HINT_PASSWORD')}</p>
						</div>

{if $is_captcha eq true}
                        <div class="margin-top-30">
                            <div class="g-recaptcha" data-sitekey="{$RecaptchaSiteKey}"></div>
                        </div>
{/if}

						<input type="button" value="{t('BTN_SIGN_UP')}" id="btn_register" {*data-dismiss="modal"*}>
					</form>
				</div>
				
				<div class="modal-footer">
					<p>{t(SITE_TERMS_TIP, ['[BTN_NAME]' => t('BTN_SIGN_UP'), '[a:terms]' => '<a href="'|cat:$action_terms|cat:'">', '[a:privacy]' => '<a href="'|cat:$action_privacy|cat:'">'])}</p>
					<p>{t('SITE_SIGNUP_HAVE_ACCOUNT')} <button type="button"> {t('BTN_LOGIN')} </button></p>
				</div>
			</div>
		</div>
	</div>
    {/IF}
	
	{*<!--============================== MODAL WINDOW   ВОЙТИ  ==========================================-->*}
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" name="modal_form_login">
				<div class="modal-header">
					<h4 class="modal-title">{t('TXT_LOGIN_TITLE')}</h4>
					<a href="#" data-dismiss="modal" class="close_form"></a>
				</div>
				<div class="modal-body">
					<form id="form_login" {*method="POST"*} class="pamfax_form" {*action="{$form_action_login}"*} onsubmit="return false;">
						<div class="error_enter_message" style="display: none;">
							<b></b>
							<p></p>
							<a href="#" class="close_form"></a>
						</div>
						<label for="UserName">{t('TXT_USERNAME_OR_EMAIL')}</label>
						<input type="text" id="UserLogin" autofocus {IF $is_dev }value="alexander.ilyin@pamconsult.by"{/IF}>

						<label for="UserPassword">{t('TXT_REGISTER_PASSWORD')}</label>
						<input type="{if $is_passwords eq false}text{else}password{/if}" id="UserPassword" {IF $is_dev }value="f68b26efd1c26ad834d9cc4e498509d9"{/IF}>

						<input type="checkbox" id="remember_pass">
						<label for="remember_pass" class="form_checkbox">{t('TXT_LOGIN_STAYLOGGEDIN')}</label>

						<input type="button" id="btn_login" value="{t('BTN_LOGIN')}">
					</form>
				</div>
				<div class="modal-footer">
					<p>
						<p>{t(SITE_TERMS_TIP, ['[BTN_NAME]' => t('BTN_LOGIN'), '[a:terms]' => '<a href="'|cat:$action_terms|cat:'">', '[a:privacy]' => '<a href="'|cat:$action_privacy|cat:'">'])}</p>
					</p>
					<p>{t('TXT_LOST_MY_PASSWORD')} <a {*href="{$action_restore_password}"*} class="button">{t('SITE_BTN_RESTORE')}</a></p>
				</div>
			</div>
		</div>
	</div>
	
	{*<!--============================== MODAL WINDOW   restore password  ==========================================-->*}
	<div class="modal fade" id="restorePassModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">{t('SITE_PASSWORD_RESTORE_TITLE')}</h4>
					<a href="#" data-dismiss="modal" class="close_form"></a>
				</div>
				
				<div class="modal-body">
					<form id="form_restore" {*action="{$form_action_restore_page}" method="post"*} class="pamfax_form" onsubmit="return false;">
                        <div class="error_enter_message" style="display: none;">
                            <b></b>
                            <p></p>
                            <a href="#" class="close_form"></a>
                        </div>

                        <label for="UserRestore">{t('TXT_USERNAME_OR_EMAIL')}</label>
						<input type="text" name="email" id="UserRestore" autofocus>

						<input type="button" id="btn_restore" value="{t(SITE_BTN_RESTORE)}" {*data-dismiss="modal"*}>
					</form>
				</div>
				
				<div class="modal-footer">
					<p>{t('SITE_PASSWORD_RESTORE_TIP')}</p>
				</div>
			</div>
		</div>
	</div>
{/IF}
	


