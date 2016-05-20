<?php
/* Smarty version 3.1.29, created on 2016-05-02 05:38:36
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_addons_facebook.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5727201ca9c5d4_09940726',
  'file_dependency' => 
  array (
    'b29706113cc12af42f476494cbde0d750e372d64' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_addons_facebook.tpl',
      1 => 1455546670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5727201ca9c5d4_09940726 ($_smarty_tpl) {
?>
<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="text_block bg_gradient">
				<div class="container">
					<div class="row">
						<h1><?php echo t('SITE_ADDONS_FACEBOOK_HEAD');?>
</h1>
						<small><?php echo t('SITE_ADDONS_FACEBOOK_SUBHEAD');?>
</small>

						<?php echo t('SITE_ADDONS_FACEBOOK_TEXT',array('[BTN_INSTALL]'=>t('SITE_BTN_ADD_FACEBOOK')));?>


						<div class="text-center"><img src="/assets/img/pamfax_facebook_history.jpg" alt="Screenshot"></div>
					
						<div class="text-center">
							<iframe src="https://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpamfax&#038;colorscheme=light&#038;show_faces=true&#038;border_color&#038;stream=false&#038;header=true" scrolling="no" frameborder="0" allowtransparency="true"></iframe></div>
					
						<div class="container_main_btn">
							<a href="https://apps.facebook.com/pamfax_addon/" class="main_btn" target="blank"><?php echo t('SITE_BTN_ADD_FACEBOOK');?>
</a>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content --><?php }
}
