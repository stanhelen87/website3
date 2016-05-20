<?php
/* Smarty version 3.1.29, created on 2016-05-06 04:24:11
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_index.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c54abb5c3f3_09636727',
  'file_dependency' => 
  array (
    '85add97684434cf0d9c7c1b27a30ab4f2bdb463a' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_index.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c54abb5c3f3_09636727 ($_smarty_tpl) {
?>




<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			


			<section class="header_mainpage">
				<div class="header_mainpage_light-bg">
					<div class="container">
						<div class="row">

							<h1><?php echo t('SITE_MAIN_ONLINE_FAX');?>
</h1>

							<p class="slogan"><?php echo t('SITE_MAIN_SLOGAN');?>
</p>
							<ul>
								<li><?php echo t('SITE_MAIN_PAGE_TIP1');?>
</li>
								<li><?php echo t('SITE_MAIN_PAGE_TIP2');?>
</li>
								<li><?php echo t('SITE_MAIN_PAGE_TIP3');?>
</li>
							</ul>
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_features']->value;?>
"><?php echo t('SITE_BTN_LEARN_MORE');?>
</a>
						</div>
					</div>
				</div>
			</section>
			

			
			<div class="mainpage_steps">
				<div class="container">
					<div class="row">
						<h2><?php echo t('SITE_MAIN_TIP_LINE_TIP');?>
:</h2>
						
						<div class="steps">
							<ul>
								<li><b>1</b><span><?php echo t('SITE_STEP_SEND_FREE_FAX_1');?>
</span></li>
								<li><b>2</b><span><?php echo t('SITE_STEP_SEND_FREE_FAX_2');?>
</span></li>
								<li><b>3</b><span><?php echo t('SITE_STEP_SEND_FREE_FAX_3');?>
</span></li>
							</ul>
							<div class="send_free_fax">
<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?>
								<a href="<?php echo $_smarty_tpl->tpl_vars['url_send_fax']->value;?>
" class="main_btn"><?php echo t('SITE_BTN_SEND_FREE_FAX');?>
</a>
<?php } else { ?>
								<a href="#" class="main_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('SITE_BTN_SEND_FREE_FAX');?>
</a>
<?php }?>

							</div>
						</div>
					</div>
				</div>
			</div>
			



			<section class="mainpage mainpage_advantages">
				<div class="container">
					<div class="row">
						<h2><?php echo t('SITE_MAIN_WHY_PAMFAX');?>
</h2>
						<p><?php echo t('SITE_MAIN_WHY_PAMFAX_TEXT');?>
</p>
						<p></p>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="sprite-container"><i class="sprite sprite-icon_block1"></i></div>
							<h3><?php echo t('SITE_MAIN_FEATURE_TIP_1');?>
</h3>
							<p><?php echo t('SITE_MAIN_FEATURE_TIP_TEXT_1');?>
</p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="sprite-container"><i class="sprite sprite-icon_block2"></i></div>
							<h3><?php echo t('SITE_MAIN_FEATURE_TIP_2');?>
</h3>
							<p><?php echo t('SITE_MAIN_FEATURE_TIP_TEXT_2');?>
 <?php echo $_smarty_tpl->tpl_vars['page_cost']->value;?>
 <?php echo t('SITE_MAIN_FEATURE_TIP_TEXT_2_AFTER');?>
 </p>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<div class="sprite-container"><i class="sprite sprite-icon_block3"></i></div>
							<h3><?php echo t('SITE_MAIN_FEATURE_TIP_3');?>
</h3>
							<p><?php echo t('SITE_MAIN_FEATURE_TIP_TEXT_3');?>
</p>
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
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
"><img src="/assets/img/logo-windows.png" alt="logo-windows" /></a>
							<figcaption>Windows</figcaption>
						</figure>
						<figure>
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
"><img src="/assets/img/logo-macos.png" alt="logo-macos" /></a>
							<figcaption>Mac OS X</figcaption> 
						</figure>
						<figure>
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
"><img src="/assets/img/logo-android.png" alt="logo-android" /></a>
							<figcaption>Android</figcaption>  
						</figure>
						<figure>
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
"><img src="/assets/img/logo-ios.png" alt="logo-ios" /></a>
							<figcaption>iPhone/iPad</figcaption> 
						</figure>
						<figure>
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
"><img src="/assets/img/logo-windows-metro.png" alt="logo-windows-metro" /></a> 
							<figcaption>Windows Phone</figcaption> 
						</figure>
						<br class="only_mobile">
						<figure>
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_download']->value;?>
"><img src="/assets/img/logo-blackberry.png" alt="logo-blackberry" /></a>
							<figcaption>Blackberry</figcaption>  
						</figure>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content -->
<?php }
}
