<?php
/* Smarty version 3.1.29, created on 2016-04-25 04:30:02
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_developers_intro.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571dd58a636998_24836400',
  'file_dependency' => 
  array (
    'fee4a3dec6c524d8c3d02f5e7cfc6643a67213c3' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_developers_intro.tpl',
      1 => 1460017299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571dd58a636998_24836400 ($_smarty_tpl) {
?>

<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="text_block bg_gradient introduction">
				<div class="container">
					<div class="row">
						<h1><?php echo t('SITE_DEVELOPER_INTRO_HEAD',null,'en');?>
</h1>
						<small><?php echo t('SITE_DEVELOPER_INTRO_SUBHEAD',null,'en');?>
</small>
			
						<h2><?php echo t('SITE_DEVELOPER_INTRO_BLOCK_HEAD_1',null,'en');?>
</h2>
						<?php echo t('SITE_DEVELOPER_INTRO_BLOCK_TEXT_1',null,'en');?>


						<h2><?php echo t('SITE_DEVELOPER_INTRO_BLOCK_HEAD_2',null,'en');?>
</h2>
						<?php echo t('SITE_DEVELOPER_INTRO_BLOCK_TEXT_2',null,'en');?>


						<!--<p><strong>Examples</strong></p>-->
						<ul class="ul_marker">
							<li><p><?php echo t('SITE_DEVELOPER_INTRO_BLOCK_TEXT_2_TIP_1',null,'en');?>
</p></li>
							<li><p><?php echo t('SITE_DEVELOPER_INTRO_BLOCK_TEXT_2_TIP_2',null,'en');?>
</p></li>
							<li><p><?php echo t('SITE_DEVELOPER_INTRO_BLOCK_TEXT_2_TIP_3',null,'en');?>
</p></li>
							<li><p><?php echo t('SITE_DEVELOPER_INTRO_BLOCK_TEXT_2_TIP_4',null,'en');?>
</p></li>
						</ul>

						<h2><?php echo t('SITE_DEVELOPER_INTRO_BLOCK_HEAD_3',null,'en');?>
</h2>
						<?php echo t('SITE_DEVELOPER_INTRO_BLOCK_TEXT_3',array('[BTN_START_API]'=>t('SITE_BTN_SIGNUP_NOW')),'en');?>

			
						<div class="container_main_btn">
							<a href="<?php echo $_smarty_tpl->tpl_vars['action_developers_signup']->value;?>
" class="main_btn"><?php echo t('SITE_BTN_SIGNUP_NOW',null,'en');?>
</a>
						</div>


						<h2><?php echo t('SITE_DEVELOPER_INTRO_BLOCK_HEAD_4',null,'en');?>
</h2>
						<?php echo t('SITE_DEVELOPER_INTRO_BLOCK_TEXT_4',array('[a:google]'=>'<a target="_blank" href="https://code.google.com/p/pamfax/issues/list">','[a:mashape]'=>'<a href="https://www.mashape.com/" target="blank">'),'en');?>


						<a class="rose_btn" target="blank" href="http://www.mashape.com/pamfax/pamfax?utm_campaign=embed&amp;utm_medium=button&amp;utm_source=pamfax&amp;utm_content=jslink">Mashape | Consume API
						</a>	
					</div>
				</div>
			</section>												
		</div>
	</div>
</div> <!-- #content --><?php }
}
