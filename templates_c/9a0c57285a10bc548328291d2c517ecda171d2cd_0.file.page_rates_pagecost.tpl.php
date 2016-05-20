<?php
/* Smarty version 3.1.29, created on 2016-05-06 03:50:02
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_rates_pagecost.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c4caad5f222_99044648',
  'file_dependency' => 
  array (
    '9a0c57285a10bc548328291d2c517ecda171d2cd' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_rates_pagecost.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c4caad5f222_99044648 ($_smarty_tpl) {
?>

<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="cost">
					<h1><?php echo t('SITE_RATES_PAGECOST_HEAD');?>
</h1>
					<small><?php echo t('SITE_RATES_PAGECOST_SUBHEAD');?>
</small>

					<div class="separate_block cost_your_country hidden">
					    <div class="container">
					      <p><?php echo t('SITE_RATES_PAGECOST_YOUR_COUNTRY');?>
: <strong>XXX</strong>. <br class="only_mobile"><?php echo t('SITE_RATES_PAGECOST_PAGE_PRICE');?>
 <span><strong>€0.06</strong></span></p>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
							<a class="main_btn" data-target="#registrationModal" data-toggle="modal" href="#"><?php echo t('BTN_SND_NOW');?>
</a>
<?php } else { ?>
							<a class="main_btn" href="<?php echo $_smarty_tpl->tpl_vars['url_send_fax']->value;?>
"><?php echo t('BTN_PORTAL_MENU_SEND_FAX_NOW');?>
</a>
<?php }?>
					    </div>
					</div>
										
					<div class="container">
							<div class="row">
								<div class="cost_td cost_td-1">
									<p class="big_text"><?php echo t('TXT_RATES_PER_PAGE');?>
</p>
								</div>	
								<div class="cost_td cost_td-2">
									<ul class="cost_plan">
										<li><?php echo t('SITE_RATES_PAGECOST_ON_DEMAND');?>
</li>
										<li><?php echo t('SITE_RATES_PAGECOST_BASIC_PLAN');?>
</li>
										<li><?php echo t('SITE_RATES_PAGECOST_PRO_PLAN');?>
</li>
									</ul>
								</div>
							</div>

							<div class="page-cost-content">
								
							</div>

							<div class="row text-after-rates b-hide">
						    <p><?php echo t('SITE_RATES_PAGECOST_NOTE_1',array('[a]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_terms']->value)).('">')));?>
</p>
						    <p class="table_signature"><?php echo t('SITE_RATES_PAGECOST_NOTE_2');?>
</p>
						  </div>
					</div><!-- "container" -->
			</section>
		</div>
	</div>
</div> <!-- #content --><?php }
}
