<?php
/* Smarty version 3.1.29, created on 2016-05-06 04:24:11
  from "C:\OpenServer\domains\PHP\website3\templates\modules\header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c54aba95044_84034183',
  'file_dependency' => 
  array (
    '05aa9e6132ba1c4c93000a51d3c4aaa1f45d6148' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\header.tpl',
      1 => 1462271069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c54aba95044_84034183 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title><?php echo $_smarty_tpl->tpl_vars['page']->value['title'];?>
</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['page']->value['description'];?>
" />
		<meta name="robots" content="index, follow" />
		
		<link rel="alternate" type="application/rss+xml" title="PamFax &raquo; Home Comments Feed" href="<?php echo $_smarty_tpl->tpl_vars['url_site']->value;?>
/sample-page/feed/" />
		<link rel='stylesheet' id='fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:200,400,300,600,700,800&#038;subset=cyrillic,latin' type='text/css' media='all' />
		<link rel='stylesheet' id='bootstrap-min-css'  href='/assets/plugins/bootstrap/css/bootstrap.css' type='text/css' media='all' />
		<link rel='stylesheet' id='jquery-ui-css'  href='http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css' type='text/css' media='all' />
		<link rel='stylesheet' id='pamfax-style-css'  href='/assets/css/style.css' type='text/css' media='all' />
		<link rel='stylesheet' id='pamfax-media-css'  href='/assets/css/style_media.css' type='text/css' media='all' />
		<link rel='stylesheet' id='font-awesome-css'  href='/assets/plugins/font-awesome/css/font-awesome.css' type='text/css' media='all' />
<?php if ($_smarty_tpl->tpl_vars['page']->value['page_tpl'] == 'page_developers_howtouse' || $_smarty_tpl->tpl_vars['page']->value['page_tpl'] == 'page_developers_samples') {?>
		<link rel='stylesheet' id='pamfax-shcore-css-css'  href='/assets/plugins/shCorePamfax.css' type='text/css' media='all' />
<?php }?>

		<?php echo '<script'; ?>
 type='text/javascript' src='/assets/plugins/jquery/jquery.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type='text/javascript' src='/assets/plugins/jquery/jquery-migrate.min.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type='text/javascript' src='http://code.jquery.com/ui/1.11.4/jquery-ui.js?ver=4.0.1'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type='text/javascript' src='/assets/plugins/bootstrap/js/bootstrap.js'><?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['is_live']->value) {?>
		<?php echo '<script'; ?>
 type="text/javascript" async="" src="http://www.google-analytics.com/ga.js"><?php echo '</script'; ?>
>
<?php }?>
		<?php echo '<script'; ?>
 type='text/javascript'>
			/* <![CDATA[ */
			var aaParams = {
				"asShopUrl": "<?php echo GetUrlJs($_smarty_tpl->tpl_vars['url_shop']->value);?>
",

				<?php if ($_SESSION['VISITOR_COUNTRY_ALPHA2']) {?>
					"asCountryCode": "<?php echo $_SESSION['VISITOR_COUNTRY_ALPHA2'];?>
",
				<?php } else { ?>
					"asCountryCode": "<?php echo GetVisitorCountry();?>
",
				<?php }?>

				"asPlansUrl": "<?php echo GetUrlJs(($_smarty_tpl->tpl_vars['url_site']->value).($_smarty_tpl->tpl_vars['action_rates_plans']->value));?>
",

				"asEmptyData": "<?php echo t('BYFAX_TXT_REQUIRED_FIELDS');?>
",
				"asShortDescription": "<?php echo t('SITE_WARNING_TOO_SHORT_DESCRIPTION');?>
",
				"asTermsAccept": "<?php echo t('SITE_WARNING_NOT_ACCEPTED_TERMS');?>
",
				"asRecaptha": "<?php echo t('ERR_OCT_CAPTCHA');?>
"}
			/* ]]> */
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type='text/javascript' src='/assets/js/pamfax.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type='text/javascript' src='/assets/js/pc_func.js'><?php echo '</script'; ?>
>


<?php if ($_smarty_tpl->tpl_vars['page']->value['page_tpl'] == 'page_developers_howtouse' || $_smarty_tpl->tpl_vars['page']->value['page_tpl'] == 'page_developers_samples') {?>
		<?php echo '<script'; ?>
 type='text/javascript' src='/assets/js/shCore.js'><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type='text/javascript' src='/assets/js/shBrushJScript.js'><?php echo '</script'; ?>
>
<?php }?>

		<link rel="EditURI" type="application/rsd+xml" title="RSD" href="<?php echo $_smarty_tpl->tpl_vars['url_site']->value;?>
/xmlrpc.php?rsd" />
		<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="<?php echo $_smarty_tpl->tpl_vars['url_site']->value;?>
/wp-includes/wlwmanifest.xml" /> 

		<link rel='shortlink' href='<?php echo $_smarty_tpl->tpl_vars['url_site']->value;?>
/' />
		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['page']->value['link_canonical'];?>
" />
		
		
		<link href="<?php echo $_smarty_tpl->tpl_vars['url_site']->value;?>
/favicon.ico"  type="image/x-icon" rel="shortcut icon" >
<?php if ($_smarty_tpl->tpl_vars['is_captcha']->value == true) {?>
		<?php echo '<script'; ?>
 src="https://www.google.com/recaptcha/api.js?hl=<?php echo $_smarty_tpl->tpl_vars['curr_lang']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>



		<!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
		<?php echo '<script'; ?>
 type="text/javascript">
		    window.cookieconsent_options = {
		        "message":"<div class='cc-txt-hide'><p><?php echo t('TXT_SITE_COOKIES_HIDDEN');?>
</p><span>&times;</span></div><p class='cc_txt'><?php echo t('TXT_SITE_COOKIES');?>
</p><a class='cc_btn cc_ok cc_btn_accept_all' target='_blank' data-cc-event='click:dismiss' href='#null'>Ok</a>",
		        "dismiss":false,
		        'learnMore': '<?php echo t('TXT_BUTTON_COOKIES');?>
',
		        'link': '#',
		        "theme":"/assets/css/style-cc.css"
		    }
		<?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/cookieconsent.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="/assets/js/cc.js"><?php echo '</script'; ?>
>
		<!-- End Cookie Consent plugin -->


</head>

<body>
<div class="<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?>private-header<?php } else { ?>public-header<?php }?>">
	<header>
	  	<div class="container">
	    	<a class="logo" href="<?php echo $_smarty_tpl->tpl_vars['action_index']->value;?>
"></a>

	    	<a class="btn-view-nav hidden-lg hidden-md" href="#"></a>

			<!-- ================= START panel for registered  user    (plus class private-header )   ====================  -->
<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?>
	    	<div class="row">
				<div class="header-person-welcome">
					<p>
						<span class="hidden-lg hidden-md hidden-sm m-block"><?php echo t('SITE_TXT_PORTAL_INDEX');?>
,</span>
						<span class="hidden-xs"><?php echo t('TXT_WELCOME');?>
, </span>
						<a href="<?php echo $_smarty_tpl->tpl_vars['url_portal']->value;?>
" name="user_dashboard_redirect"><?php echo $_smarty_tpl->tpl_vars['User']->value['name'];?>
</a>
					</p>
				</div>

				<div class="header-top-info header-info-green">

					<span class="hidden-sm hidden-xs"><?php echo t('CMN_YOUR_BALANCE');?>
:</span>
					<span class="header-money">P</span>
					<mark><strong><?php echo $_smarty_tpl->tpl_vars['Currency']->value['raw_symbol'];?>
</strong><?php echo $_smarty_tpl->tpl_vars['User']->value['credit'];?>
</mark>
					<a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_credit']->value;?>
" class="header-btn"><?php echo t('SITE_TXT_BUY_CREDIT');?>
</a>

					<div class="language">
						<a href="#" data-toggle="dropdown">
							<span class="hidden-sm hidden-md hidden-lg"><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['curr_lang']->value]['title_short'];?>
</span>
							<span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['curr_lang']->value]['title_long'];?>
</span>
						</a> 
						<ul class="dropdown-menu">
						<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_0_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_0_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_0_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
							<li>
								<a href="/<?php echo $_smarty_tpl->tpl_vars['k']->value;
echo $_smarty_tpl->tpl_vars['page']->value['curr_page'];?>
">
									<span class="hidden-sm hidden-md hidden-lg"><?php echo $_smarty_tpl->tpl_vars['v']->value['title_short'];?>
</span>
									<span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['v']->value['title_long'];?>
</span>
								</a>
							</li>
						<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_local_item;
}
if ($__foreach_v_0_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_0_saved_item;
}
if ($__foreach_v_0_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_0_saved_key;
}
?>
						</ul>
					</div>

					<a href="#" name="user_logout" class="btn-exit"></a> 
				</div>
			</div>
			<!-- ================= END panel for registered  user ====================  -->
<?php } else { ?>
			<div class="row header-top-content">
				<a href="#" class="header-btn header-btn-green" data-toggle="modal" data-target="#loginModal"><?php echo t('BTN_LOGIN');?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['page']->value['page_tpl'] != 'page_developers_signup' && $_smarty_tpl->tpl_vars['page']->value['page_tpl'] != 'page_signup') {?>
				<a href="#" class="header-btn header-btn-orange" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_SIGN_UP');?>
</a>
				<?php }?>

				
				<div class="language">
					<a href="#" data-toggle="dropdown">
						<span class="hidden-sm hidden-md hidden-lg"><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['curr_lang']->value]['title_short'];?>
</span>
						<span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['languages']->value[$_smarty_tpl->tpl_vars['curr_lang']->value]['title_long'];?>
</span>
					</a> 
					<ul class="dropdown-menu">
					<?php
$_from = $_smarty_tpl->tpl_vars['languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_v_1_saved_item = isset($_smarty_tpl->tpl_vars['v']) ? $_smarty_tpl->tpl_vars['v'] : false;
$__foreach_v_1_saved_key = isset($_smarty_tpl->tpl_vars['k']) ? $_smarty_tpl->tpl_vars['k'] : false;
$_smarty_tpl->tpl_vars['v'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['k'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['v']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
$__foreach_v_1_saved_local_item = $_smarty_tpl->tpl_vars['v'];
?>
						<li>
							<a href="/<?php echo $_smarty_tpl->tpl_vars['k']->value;
echo $_smarty_tpl->tpl_vars['page']->value['curr_page'];?>
">
								<span class="hidden-sm hidden-md hidden-lg"><?php echo $_smarty_tpl->tpl_vars['v']->value['title_short'];?>
</span>
								<span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['v']->value['title_long'];?>
</span>
							</a>
						</li>
					<?php
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_local_item;
}
if ($__foreach_v_1_saved_item) {
$_smarty_tpl->tpl_vars['v'] = $__foreach_v_1_saved_item;
}
if ($__foreach_v_1_saved_key) {
$_smarty_tpl->tpl_vars['k'] = $__foreach_v_1_saved_key;
}
?>
					</ul>
				</div>      
			</div><!-- end row   header-top-content   -->
<?php }?>


			<div class="row">     
			  <nav class="nav">
			    <button class="btn-close-nav hidden-lg hidden-md"></button>
			    <ul class="nav navbar-nav">
					<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['section'] == 'download') {?>active<?php }?>">
						<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
"><?php echo t('SITE_MENU_DOWNLOAD');?>
</a>
					</li>
			      

					<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['section'] == 'features') {?>active<?php }?>">
						<a href="#" data-toggle="dropdown"><?php echo t('SITE_MENU_FEATURES');?>
</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_features']->value;?>
"><?php echo t('SITE_MENU_FEATURES');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_features_faxnumber']->value;?>
"><?php echo t('SITE_MENU_FAX_NUMBER');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_features_win7app']->value;?>
"><?php echo t('SITE_MENU_WIN_APP');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_features_macos']->value;?>
"><?php echo t('SITE_MENU_MAC_APP');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_features_mobile']->value;?>
"><?php echo t('SITE_MENU_MOBILE_APP');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_features_portal']->value;?>
"><?php echo t('SITE_MENU_ONLINE_FAX');?>
</a></li>
						</ul>
					</li>


					<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['section'] == 'rates') {?>active<?php }?>">
						<a href="#" data-toggle="dropdown"><?php echo t('TXT_RATES');?>
</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_rates_rates']->value;?>
"><?php echo t('TXT_RATES');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_rates_creditpacks']->value;?>
"><?php echo t('ITEM_CREDPACK');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_rates_plans']->value;?>
"><?php echo t('SITE_MENU_PLANS');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_rates_pagecost']->value;?>
"><?php echo t('SITE_MENU_PAGE_COST');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_rates_costcalc']->value;?>
"><?php echo t('SITE_MENU_COST_CALC');?>
</a></li>
						</ul>
					</li>

					<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['section'] == 'addons') {?>active<?php }?>">
						<a href="<?php echo $_smarty_tpl->tpl_vars['action_addons']->value;?>
" data-toggle="dropdown"><?php echo t('SITE_MENU_ADDONS');?>
</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_addons_addons']->value;?>
"><?php echo t('SITE_MENU_ADDONS');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_addons_facebook']->value;?>
">Facebook</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_addons_salesforce']->value;?>
">Salesforce</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_addons_companyman']->value;?>
"><?php echo t('SITE_MENU_COMPANY_MANAGER');?>
</a></li>
						</ul>
					</li>

					<li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['section'] == 'developers') {?>active<?php }?>">
						<a href="<?php echo $_smarty_tpl->tpl_vars['action_developers']->value;?>
" data-toggle="dropdown"><?php echo t('SITE_MENU_DEVELOPERS');?>
</a>
						<ul class="dropdown-menu">
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_developers_intro']->value;?>
"><?php echo t('SITE_MENU_INTRODUCTION');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_developers_howtouse']->value;?>
"><?php echo t('SITE_MENU_HOW_TO');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_developers_samples']->value;?>
"><?php echo t('SITE_MENU_SAMPLES');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_developers_references']->value;?>
"><?php echo t('SITE_MENU_REFERENCES');?>
</a></li>
							<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_developers_signup']->value;?>
"><?php echo t('SITE_MENU_FREE_SIGNUP');?>
</a></li>
						</ul>
					</li>    
			    </ul>
			  </nav>
			</div><!-- end row  -->

		</div><!-- end container  -->
	</header>
</div>	


<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>	
	
    <?php if ($_smarty_tpl->tpl_vars['page']->value['page_tpl'] != 'page_developers_signup' && $_smarty_tpl->tpl_vars['page']->value['page_tpl'] != 'page_signup') {?>
	<div class="modal fade" id="registrationModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" name="modal_form_register">
				<div class="modal-header">
					<h4 class="modal-title"><?php echo t('TITLE_SIGN_UP');?>
</h4>
					<a href="#" data-dismiss="modal" class="close_form"></a>
				</div>
				
				<div class="modal-body">
					<form id="form_register" class="pamfax_form"  onsubmit="return false;">

                        <div class="error_enter_message" style="display: none;">
                            <b>1</b>
                            <p>2</p>
                            <a href="#" class="close_form"></a>
                        </div>

						<label for="UserName"><?php echo t('CMN_FULL_NAME');?>
</label>
						<input type="text" id="UserName" name="name" autofocus>
						<input id="nick_name" type="hidden" value="" name="nick_name">

						<label for="email"><?php echo t('CMN_EMAIL_ADDRESS');?>
</label>
						<input type="text" id="email" name="email" >

						<label for="password"><?php echo t('TXT_REGISTER_PASSWORD');?>
</label>
						<input type="<?php if ($_smarty_tpl->tpl_vars['is_passwords']->value == false) {?>text<?php } else { ?>password<?php }?>" id="password" name="password">
						<div class="help_text">
							<span class="glyphicon glyphicon-question-sign"></span>
							<p><?php echo t('TXT_HINT_EMAIL_USERNAME');?>
</p>
						</div>

						<label for="password_repeat_field"><?php echo t('TXT_PORTAL_PASSWORD_REPEAT');?>
</label>
						<input type="<?php if ($_smarty_tpl->tpl_vars['is_passwords']->value == false) {?>text<?php } else { ?>password<?php }?>" id="password_repeat_field" name="password2">
						<div class="help_text">
							<span class="glyphicon glyphicon-question-sign"></span>
							<p><?php echo t('TXT_HINT_PASSWORD');?>
</p>
						</div>

<?php if ($_smarty_tpl->tpl_vars['is_captcha']->value == true) {?>
                        <div class="margin-top-30">
                            <div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['RecaptchaSiteKey']->value;?>
"></div>
                        </div>
<?php }?>

						<input type="button" value="<?php echo t('BTN_SIGN_UP');?>
" id="btn_register" >
					</form>
				</div>
				
				<div class="modal-footer">
					<p><?php echo t('SITE_TERMS_TIP',array('[BTN_NAME]'=>t('BTN_SIGN_UP'),'[a:terms]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_terms']->value)).('">'),'[a:privacy]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_privacy']->value)).('">')));?>
</p>
					<p><?php echo t('SITE_SIGNUP_HAVE_ACCOUNT');?>
 <button type="button"> <?php echo t('BTN_LOGIN');?>
 </button></p>
				</div>
			</div>
		</div>
	</div>
    <?php }?>
	
	
	<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content" name="modal_form_login">
				<div class="modal-header">
					<h4 class="modal-title"><?php echo t('TXT_LOGIN_TITLE');?>
</h4>
					<a href="#" data-dismiss="modal" class="close_form"></a>
				</div>
				<div class="modal-body">
					<form id="form_login"  class="pamfax_form"  onsubmit="return false;">
						<div class="error_enter_message" style="display: none;">
							<b></b>
							<p></p>
							<a href="#" class="close_form"></a>
						</div>
						<label for="UserName"><?php echo t('TXT_USERNAME_OR_EMAIL');?>
</label>
						<input type="text" id="UserLogin" autofocus <?php if ($_smarty_tpl->tpl_vars['is_dev']->value) {?>value="alexander.ilyin@pamconsult.by"<?php }?>>

						<label for="UserPassword"><?php echo t('TXT_REGISTER_PASSWORD');?>
</label>
						<input type="<?php if ($_smarty_tpl->tpl_vars['is_passwords']->value == false) {?>text<?php } else { ?>password<?php }?>" id="UserPassword" <?php if ($_smarty_tpl->tpl_vars['is_dev']->value) {?>value="f68b26efd1c26ad834d9cc4e498509d9"<?php }?>>

						<input type="checkbox" id="remember_pass">
						<label for="remember_pass" class="form_checkbox"><?php echo t('TXT_LOGIN_STAYLOGGEDIN');?>
</label>

						<input type="button" id="btn_login" value="<?php echo t('BTN_LOGIN');?>
">
					</form>
				</div>
				<div class="modal-footer">
					<p>
						<p><?php echo t('SITE_TERMS_TIP',array('[BTN_NAME]'=>t('BTN_LOGIN'),'[a:terms]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_terms']->value)).('">'),'[a:privacy]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_privacy']->value)).('">')));?>
</p>
					</p>
					<p><?php echo t('TXT_LOST_MY_PASSWORD');?>
 <a  class="button"><?php echo t('SITE_BTN_RESTORE');?>
</a></p>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="modal fade" id="restorePassModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title"><?php echo t('SITE_PASSWORD_RESTORE_TITLE');?>
</h4>
					<a href="#" data-dismiss="modal" class="close_form"></a>
				</div>
				
				<div class="modal-body">
					<form id="form_restore"  class="pamfax_form" onsubmit="return false;">
                        <div class="error_enter_message" style="display: none;">
                            <b></b>
                            <p></p>
                            <a href="#" class="close_form"></a>
                        </div>

                        <label for="UserRestore"><?php echo t('TXT_USERNAME_OR_EMAIL');?>
</label>
						<input type="text" name="email" id="UserRestore" autofocus>

						<input type="button" id="btn_restore" value="<?php echo t('SITE_BTN_RESTORE');?>
" >
					</form>
				</div>
				
				<div class="modal-footer">
					<p><?php echo t('SITE_PASSWORD_RESTORE_TIP');?>
</p>
				</div>
			</div>
		</div>
	</div>
<?php }?>
	


<?php }
}
