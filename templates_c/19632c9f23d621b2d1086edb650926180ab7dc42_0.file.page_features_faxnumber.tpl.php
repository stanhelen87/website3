<?php
/* Smarty version 3.1.29, created on 2016-05-06 02:50:36
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_features_faxnumber.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c3ebc030151_32250541',
  'file_dependency' => 
  array (
    '19632c9f23d621b2d1086edb650926180ab7dc42' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_features_faxnumber.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c3ebc030151_32250541 ($_smarty_tpl) {
?>
	
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="features_fax_number">
				<div class="container">
					<div class="row">
						<h1><img src="/assets/img/faxnumber_check.png" alt="" /><?php echo t('SITE_FEATURES_FAXNUMBER_HEAD');?>
</h1>
						<small><?php echo t('SITE_FEATURES_FAXNUMBER_SUBHEAD');?>
</small>

						<h2><?php echo t('SITE_FEATURES_SELECT_NUMBER',array('[span:countries]'=>'<span id="count_all_countries">'));?>
:</h2>

						<div class="fax_number_mobile_container">
							<strong><?php echo t('TXT_COUNTRY');?>
</strong>
							<div class="country_mobile-select">
								<select id="country_mobile"></select>
							</div>
                               
							<div class="states-mobile">
								<strong><?php echo t('TXT_STATE');?>
:</strong><div class="country_mobile-select"><select id="states_usa_mobile"></select></div>
							</div>

							<strong>City:</strong>
							<div id="cities_mobile">	
								<input type="submit" id="search_sity_mobile" value="&#128269;">
								<input type="search" id="search_city_mobile" placeholder="<?php echo t('TXT_CITY');?>
">
								<ul class="city_fax_number"></ul>
							</div>
						</div>

						<div class="fax_number row" id="country_number">
			
						<ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						</ul>
						<ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						</ul>
						<ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						</ul>
						<ul class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
						</ul>
						</div>

					</div>
				</div>
			</section>
			<section class="buy_now">
				<div class="container">
					<div class="row">
						<ul>
							<li>
								<span><?php echo t('SITE_TXT_MONTHLY_COST');?>
:<br> <strong><?php echo $_smarty_tpl->tpl_vars['price_pro_plan']->value;?>
</strong></span>
								<h3><?php echo t('TXT_PLAN_PRO');?>
</h3>
							</li>
							<li>
<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?>
								<a class="main_btn" href="<?php echo $_smarty_tpl->tpl_vars['url_buy_proplan']->value;?>
"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php } else { ?>
								<a class="main_btn" href="#" data-target="#registrationModal" data-toggle="modal"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php }?>
							</li>
							<li>
								<p><?php echo t('SITE_FEATURES_PRO_COST_HIGH');?>
 <?php echo $_smarty_tpl->tpl_vars['price_basic_plan']->value;?>
 <?php echo t('SITE_FEATURES_PRO_COST_HIGH_AFTER');?>
. <a href="<?php echo $_smarty_tpl->tpl_vars['action_rates_plans']->value;?>
"><?php echo t('SITE_BTN_LEARN_MORE');?>
</a></p>
							</li>
						</ul>
					</div>
				</div>
			</section>

			
        <div id="faxNumberModal" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<div class="item_fax_number"></div>
							 <div class="states" >
								<p><?php echo t('TXT_STATE');?>
:</p>
								<div class="states-select"><select id="states_usa"></select></div>
							 </div>
							<input type="search" id="autocomplete"/><input type="submit" value="&#128269;" id = "search_city"/><a href="#" data-dismiss="modal" data-dismiss="modal" class="close_form"></a>
						</div>
	
						<div id="codes_country" class="modal-body">
							<h3><?php echo t('TXT_NUMBER_INFO_1');?>
</h3>
								<ul class="fax_number">
								</ul>
						</div>
						<div class="modal-footer">
							<?php echo t('TXT_NUMBER_INFO_2');?>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div><?php }
}
