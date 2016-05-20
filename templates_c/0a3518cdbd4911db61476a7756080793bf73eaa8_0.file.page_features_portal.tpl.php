<?php
/* Smarty version 3.1.29, created on 2016-05-02 05:37:45
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_features_portal.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57271fe9a083e8_19348061',
  'file_dependency' => 
  array (
    '0a3518cdbd4911db61476a7756080793bf73eaa8' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_features_portal.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57271fe9a083e8_19348061 ($_smarty_tpl) {
?>
	

<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="features_online_fax bg_gradient">
				<div class="container">
					<div class="row">	
						<h1><?php echo t('SITE_FEATURES_PORTAL_HEAD');?>
</h1>
						<small><?php echo t('SITE_FEATURES_PORTAL_SUBHEAD');?>
</small>
						<h2><?php echo t('SITE_PAGE_FEATURES_PORTAL_TEXT_HEAD');?>
</h2>

						<img src="/assets/img/bg_online_fax.png" alt="online_fax" />

						<div class="text">
							<div class="container">
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
							<?php echo t('SITE_PAGE_FEATURES_PORTAL_TEXT_MAIN',array('[a:windows]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_features_win7app']->value)).('">'),'[a:mac]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_features_macos']->value)).('">'),'[a:mobile]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_features_mobile']->value)).('">'),'[a:formats]'=>'<a href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/53" target="blank">','[a:portal]'=>(('<a href="').($_smarty_tpl->tpl_vars['url_portal']->value)).('">')));?>

<?php } else { ?>
							<?php echo t('SITE_PAGE_FEATURES_PORTAL_TEXT_MAIN',array('[a:windows]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_features_win7app']->value)).('">'),'[a:mac]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_features_macos']->value)).('">'),'[a:mobile]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_features_mobile']->value)).('">'),'[a:formats]'=>'<a href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/53" target="blank">','[a:portal]'=>(('<a href="').($_smarty_tpl->tpl_vars['url_portal']->value)).('" name="user_dashboard_redirect">')));?>

<?php }?>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content --><?php }
}
