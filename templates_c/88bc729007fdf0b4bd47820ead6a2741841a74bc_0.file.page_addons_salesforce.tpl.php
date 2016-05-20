<?php
/* Smarty version 3.1.29, created on 2016-05-02 05:38:39
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_addons_salesforce.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5727201f10bad2_59144443',
  'file_dependency' => 
  array (
    '88bc729007fdf0b4bd47820ead6a2741841a74bc' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_addons_salesforce.tpl',
      1 => 1455546670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5727201f10bad2_59144443 ($_smarty_tpl) {
?>
<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="text_block bg_gradient">
				<div class="container">
					<div class="row">
						<h1><?php echo t('SITE_ADDONS_SALESFORCE_HEAD');?>
</h1>

						<?php echo t('SITE_ADDONS_SALESFORCE_TEXT',array('[BTN_INSTALL]'=>t('SITE_BTN_ADD_SALESFORCE')));?>


						<div class="text-center"><img src="/assets/img/pamfax_preview_salesforce.jpg" alt="pamfax_preview_salesforce"/></div>
			
						<div class="container_main_btn">
							<a href="https://login.salesforce.com/?startURL=%2Fpackaging%2FinstallPackage.apexp%3Fp0%3D04t30000000mnbl" class="main_btn" target="blank"><?php echo t('SITE_BTN_ADD_SALESFORCE');?>
</a>
						</div>
					</div>
				</div>
			</section>												
		</div>
	</div>
</div> <!-- #content --><?php }
}
