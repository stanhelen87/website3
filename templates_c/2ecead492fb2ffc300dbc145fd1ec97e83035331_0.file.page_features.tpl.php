<?php
/* Smarty version 3.1.29, created on 2016-05-06 02:50:33
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_features.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c3eb9ba52d7_41400266',
  'file_dependency' => 
  array (
    '2ecead492fb2ffc300dbc145fd1ec97e83035331' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_features.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c3eb9ba52d7_41400266 ($_smarty_tpl) {
?>

<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="features bg_gradient">
				<div class="container">
					<h1><?php echo t('SITE_FEATURES_HEAD');?>
</h1>
					<small><?php echo t('SITE_FEATURES_SUBHEAD');?>
</small>
					<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
						<h2><?php echo t('SITE_FEATURES_TIPS_HEAD');?>
:</h2>
				
						<ul>
							<li class="col-lg-12 col-md-6 col-sm-6 col-xs-12">	
								<ul class="ul_marker">
									<li><?php echo t('SITE_FEATURES_TIPS_TEXT_1',array('[a]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_rates_rates']->value)).('">')));
echo $_smarty_tpl->tpl_vars['page_cost']->value;?>
</li>
									<li><?php echo t('SITE_FEATURES_TIPS_TEXT_2');?>
</li>
									<li><?php echo t('SITE_FEATURES_TIPS_TEXT_3');?>
</li>
								</ul>
							</li>
							<li class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
								<ul class="ul_marker">									
									<li><?php echo t('SITE_FEATURES_TIPS_TEXT_4',array('[a]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_features_faxnumber']->value)).('">')));?>
</li>
									<li><?php echo t('SITE_FEATURES_TIPS_TEXT_5');?>
</li>
									<li><?php echo t('SITE_FEATURES_TIPS_TEXT_6',array('[a]'=>'<a href="http://www.pamhelp.com/?/pamfaxja/Knowledgebase/Article/View/368">'));?>
</li>
								</ul>
							</li>
						</ul>
				
						<div class="try row">
							<p class="col-lg-12 col-md-8 col-sm-8 col-xs-12"><?php if ($_smarty_tpl->tpl_vars['User']->value) {
echo t('SITE_FEATURES_TIPS_FOOTER_SHORT');
} else {
echo t('SITE_FEATURES_TIPS_FOOTER');
}?></p>
<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?>
							<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"><a href="<?php echo $_smarty_tpl->tpl_vars['url_send_fax']->value;?>
" class="main_btn"><?php echo t('BTN_PORTAL_MENU_SEND_FAX_NOW');?>
</a></div>
<?php } else { ?>
							<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"><a href="#" class="main_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('SITE_BTN_SIGNUP_NOW');?>
</a></div>
<?php }?>
						</div>
					</div>
				</div>
			</section>

			<section class="mainpage platforms">
				<div class="container">
					<div class="row">
						<h2><?php echo t('SITE_TIP_MULTIPLE_PLATFORMS');?>
:</h2>
        		<figure>
							<img src="/assets/img/logo-windows.png" alt="logo-windows" />
							<figcaption>Windows</figcaption>
						</figure>
						<figure>
							<img src="/assets/img/logo-macos.png" alt="logo-macos" />
							<figcaption>Mac OS X</figcaption> 
						</figure>
						<figure>
							<img src="/assets/img/logo-android.png" alt="logo-android" />
							<figcaption>Android</figcaption>  
						</figure>
						<figure>
							<img src="/assets/img/logo-ios.png" alt="logo-ios" />
							<figcaption>iPhone/iPad</figcaption> 
						</figure>
						<figure>
							<img src="/assets/img/logo-windows-metro.png" alt="logo-windows-metro" /> 
							<figcaption>Windows Phone</figcaption> 
						</figure>
						<br class="only_mobile">
						<figure>
							<img src="/assets/img/logo-blackberry.png" alt="logo-blackberry" />
							<figcaption>Blackberry</figcaption>  
						</figure>
					</div>
				</div>
			</section>
		</div>
	 </div>
</div> <!-- #content --><?php }
}
