<?php
/* Smarty version 3.1.29, created on 2016-05-02 05:38:44
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_addons_companyman.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_57272024984e38_66037562',
  'file_dependency' => 
  array (
    'b1f73056eb90a1c09af580743798e08da372294f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_addons_companyman.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_57272024984e38_66037562 ($_smarty_tpl) {
?>

<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="text_block bg_gradient">
				<div class="container">
					<div class="row">
						<h1><?php echo t('SITE_ADDONS_COMPANY_HEAD');?>
</h1>
						<small><?php echo t('SITE_ADDONS_COMPANY_SUBHEAD');?>
</small>
						
						<?php echo t('SITE_ADDONS_COMPANY_TEXT',array('[BTN_INSTALL]'=>t('SITE_BTN_START_COMPANY')));?>


						<div class="text-center">
							<img src="/assets/img/pamfax_preview_manager.jpg" alt="pamfax_preview_manager" class="img-thumbnail" />
						</div>

						<div class="container_main_btn">
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
							<a href="#" class="main_btn" data-target="#registrationModal" data-toggle="modal"><?php echo t('SITE_BTN_START_COMPANY');?>
</a>
<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['url_company_manager']->value;?>
" class="main_btn"><?php echo t('SITE_BTN_START_COMPANY');?>
</a>							
<?php }?>
						</div>
					</div>
				</div>
			</section>												
		</div>
	</div>
</div> <!-- #content --><?php }
}
