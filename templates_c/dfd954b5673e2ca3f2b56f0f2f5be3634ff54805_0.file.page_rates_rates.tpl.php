<?php
/* Smarty version 3.1.29, created on 2016-05-06 04:03:08
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_rates_rates.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c4fbcc5d233_27770862',
  'file_dependency' => 
  array (
    'dfd954b5673e2ca3f2b56f0f2f5be3634ff54805' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_rates_rates.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c4fbcc5d233_27770862 ($_smarty_tpl) {
?>
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="rates_section bg_gradient">

				<div class="container">
					<h1><?php echo t('SITE_RATES_RATES_HEAD');?>
</h1>
					<small><?php echo t('SITE_RATES_RATES_SUBHEAD');?>
</small>

					<div class="rates">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="price price_based">
									<span><?php echo t('SITE_RATES_RATES_NO_MONTHLY_FEE');?>
</span>
								</div>
								<div class="plan basic_plan based">
									<h2><?php echo t('SITE_RATES_RATES_TITLE_ONDEMAND');?>
</h2>
									<a class="read_more_btn" href="#"><?php echo t('SITE_BTN_READ_MORE');?>
<span class="glyphicon glyphicon-arrow-down"></span></a>
  									<div class="read_more">
										<p><?php echo t('SITE_RATES_RATES_HEAD_ONDEMAND');?>
</p>
										<ul>
											<li><?php echo t('SITE_RATES_RATES_TIP_ONDEMAND_1');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_ONDEMAND_2');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_ONDEMAND_3');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_ONDEMAND_4');
echo $_smarty_tpl->tpl_vars['page_cost_higher']->value;
echo t('SITE_RATES_RATES_TIP_ONDEMAND_4_AFTER');?>
</li>
										</ul>
									</div>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
									<a class="rose_btn" data-target="#registrationModal" data-toggle="modal" href="#"><?php if ($_smarty_tpl->tpl_vars['curr_lang']->value == 'ru') {
echo t('BTN_START_NOW');
} else {
echo t('BTN_SIGNUP_NOW');
}?></a>
									<a class="green_btn" data-target="#registrationModal" data-toggle="modal" href="#"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php } else { ?>
									<a class="green_btn" href="<?php echo $_smarty_tpl->tpl_vars['url_buy_credit']->value;?>
"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php }?>
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="price price_prof">
									<span><strong><?php echo $_smarty_tpl->tpl_vars['price_pro_plan']->value;?>
</strong><?php echo t('SITE_TXT_MONTHLY_SHORT');?>
</span>
									<p><?php echo t('SITE_TXT_MOST_POPULAR');?>
</p>
								</div>
								<div class="plan prof_plan">
									<h2><?php echo t('TXT_PLAN_PRO_SHORT');?>
</h2>
									<a class="read_more_btn" href="#"><?php echo t('SITE_BTN_READ_MORE');?>
<span class="glyphicon glyphicon-arrow-down"></span></a>
  									<div class="read_more">
										<p><?php echo t('SITE_RATES_RATES_HEAD_PLAN_PRO');?>
</p>
										<ul>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANPRO_1');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANPRO_2');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANPRO_3');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANPRO_4');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANPRO_5');
echo $_smarty_tpl->tpl_vars['page_cost']->value;
echo t('SITE_RATES_RATES_TIP_PLANPRO_5_AFTER');?>
</li>
										</ul>
									</div>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
									<a class="rose_btn" data-target="#registrationModal" data-toggle="modal" href="#"><?php if ($_smarty_tpl->tpl_vars['curr_lang']->value == 'ru') {
echo t('BTN_START_NOW');
} else {
echo t('BTN_SIGNUP_NOW');
}?></a>
									<a class="green_btn" href="#" data-target="#registrationModal" data-toggle="modal"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php } else { ?>
									<a class="green_btn" href="<?php echo $_smarty_tpl->tpl_vars['url_buy_proplan']->value;?>
"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php }?>

								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="price price_basic">
									<span><strong><?php echo $_smarty_tpl->tpl_vars['price_basic_plan']->value;?>
</strong><?php echo t('SITE_TXT_MONTHLY_SHORT');?>
</span>
								</div>
								<div class="plan basic_plan">
									<h2><?php echo t('TXT_PLAN_BASIC_SHORT');?>
</h2>
									<a class="read_more_btn" href="#"><?php echo t('SITE_BTN_READ_MORE');?>
<span class="glyphicon glyphicon-arrow-down"></span></a>
  									<div class="read_more">
										<p><?php echo t('SITE_RATES_RATES_HEAD_PLAN_BASIC');?>
</p>
										<ul>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANBASIC_1');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANBASIC_2');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANBASIC_3');?>
</li>
											<li><?php echo t('SITE_RATES_RATES_TIP_PLANBASIC_4');
echo $_smarty_tpl->tpl_vars['page_cost_higher']->value;
echo t('SITE_RATES_RATES_TIP_PLANBASIC_4_AFTER');?>
</li>
										</ul>
									</div>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
									<a class="rose_btn" data-target="#registrationModal" data-toggle="modal" href="#"><?php if ($_smarty_tpl->tpl_vars['curr_lang']->value == 'ru') {
echo t('BTN_START_NOW');
} else {
echo t('BTN_SIGNUP_NOW');
}?></a>
									<a class="green_btn" href="#" data-target="#registrationModal" data-toggle="modal"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php } else { ?>
									<a class="green_btn" href="<?php echo $_smarty_tpl->tpl_vars['url_buy_basicplan']->value;?>
"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php }?>
									
								</div>				
							</div>
						</div>	
					</div>
					<p class="text-center"><?php echo t('SITE_RATES_RATES_DEDICATED_NUMBER_TIP',array('[a]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_features_faxnumber']->value)).('">')));?>
</p>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content --><?php }
}
