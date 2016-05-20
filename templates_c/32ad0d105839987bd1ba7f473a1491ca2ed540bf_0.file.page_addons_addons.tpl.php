<?php
/* Smarty version 3.1.29, created on 2016-05-02 05:38:31
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_addons_addons.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572720179d7ec3_79948473',
  'file_dependency' => 
  array (
    '32ad0d105839987bd1ba7f473a1491ca2ed540bf' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_addons_addons.tpl',
      1 => 1455546670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572720179d7ec3_79948473 ($_smarty_tpl) {
?>
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="add_ons">
				<h1><?php echo t('SITE_ADDONS_ADDONS_HEAD');?>
</h1>
				<small><?php echo t('SITE_ADDONS_ADDONS_SUBHEAD');?>
</small>

				<div id="carousel-addOns" class="carousel slide" data-ride="carousel">
					<div class="carousel-add">

						<div class="item active">
							<div class="container">
								<div class="row">
									<div class="add_ons_td add_ons_td_1">
										<p class="integration"><i class="sprite_addons sprite-world"></i><strong>Word</strong></p>
										<p class="integration"><i class="sprite_addons sprite-excel"></i><strong>Excel</strong></p>
										<p class="integration"><i class="sprite_addons sprite-PowerPoint"></i><strong>PowerPoint</strong></p>
										<p class="integration"><i class="sprite_addons sprite-outlook"></i><strong>Outlook</strong></p>

									</div>
									<div class="add_ons_td add_ons_td_2">
										<h2><?php echo t('SITE_ADDONS_ADDONS_HEAD_OFFICE');?>
</h2>
					
										<?php echo t('SITE_ADDONS_ADDONS_TEXT_OFFICE');?>


										<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
" class="green_btn"><?php echo t('BTN_DOWNLOAD_CLIENT');?>
</a>
									</div>
								</div>
							</div>
						</div>
		
						<div class="item">
								<div class="container">
									<div class="row">	
										<div class="add_ons_td add_ons_td_1">
											<p class="integration"><i class="sprite_addons sprite-zimbra"></i><strong>Zimbra</strong></p>
										</div>
										<div class="add_ons_td add_ons_td_2">
											<h2><?php echo t('SITE_ADDONS_ADDONS_HEAD_ZIMBRA');?>
</h2>
						
											<p><?php echo t('SITE_ADDONS_ADDONS_TEXT_ZIMBRA');?>
</p>

											<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
" class="green_btn"><?php echo t('BTN_DOWNLOAD_CLIENT');?>
</a>
										</div>
									</div>
								</div>
						</div>

						<div class="item">
							<div class="container">
								<div class="row">
									<div class="add_ons_td add_ons_td_1">
										<p class="integration"><i class="sprite_addons sprite-salesforce_2"></i><strong>Salesforce</strong></p>
									</div>
									<div class="add_ons_td add_ons_td_2">
										<h2><?php echo t('SITE_ADDONS_ADDONS_HEAD_SALESFORCE');?>
</h2>
					
										<p><?php echo t('SITE_ADDONS_ADDONS_TEXT_SALESFORCE');?>
</p>

										<a href="<?php echo $_smarty_tpl->tpl_vars['action_addons_salesforce']->value;?>
" class="green_btn"><?php echo t('SITE_BTN_LEARN_MORE');?>
</a>
									</div>
								</div>
							</div>
						</div>

						<div class="item">
								<div class="container">
									<div class="row">	
										<div class="add_ons_td add_ons_td_1">
											<p class="integration"><i class="sprite_addons sprite-manager"></i><strong>PamFax<br />Manager</strong></p>
										</div>
										<div class="add_ons_td add_ons_td_2">
											<h2><?php echo t('TXT_INTEGRATION_BCP');?>
</h2>
						
											<p><?php echo t('SITE_ADDONS_ADDONS_TEXT_COMPANY_MANAGER');?>
</p>

											<a href="<?php echo $_smarty_tpl->tpl_vars['action_addons_companyman']->value;?>
" class="green_btn"><?php echo t('SITE_BTN_LEARN_MORE');?>
</a>
										</div>	
									</div>
								</div>
						</div>

						<div class="item">
							<div class="container">
								<div class="row">
									<div class="add_ons_td add_ons_td_1">	
										<p class="integration"><i class="sprite_addons sprite-facebook_2"></i><strong>Facebook</strong></p>
									</div>
									<div class="add_ons_td add_ons_td_2">
										<h2><?php echo t('SITE_ADDONS_ADDONS_HEAD_FACEBOOK');?>
</h2>
					
										<p><?php echo t('SITE_ADDONS_ADDONS_TEXT_FACEBOOK');?>
</p>

										<a href="<?php echo $_smarty_tpl->tpl_vars['action_addons_facebook']->value;?>
" class="green_btn"><?php echo t('SITE_BTN_LEARN_MORE');?>
</a>
									</div>
								</div>
							</div>
						</div>
					</div><!-- ___________ end carousel-inner / carousel-add  ___________-->

					<!-- Controls -->
					<div class="control_carusel_plans">
						<a class="left carousel-control only_mobile" href="#carousel-addOns" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span><?php echo t('SITE_BTN_PREV_OPTION_SHORT');?>
</a>
						<a class="right carousel-control only_mobile" href="#carousel-addOns" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span><?php echo t('SITE_BTN_NEXT_OPTION_SHORT');?>
</a>
					</div>
				</div><!-- ___________end #carousel-credit-packs ___________-->
			</section>
		</div>
	</div>
</div> <!-- #content --><?php }
}
