<?php
/* Smarty version 3.1.29, created on 2016-05-06 03:42:29
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_rates_plans.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c4ae5db56e3_33652486',
  'file_dependency' => 
  array (
    'a1e0d5bfd677e44763c7d2fbe5db303d0e00341c' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_rates_plans.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c4ae5db56e3_33652486 ($_smarty_tpl) {
?>
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="plans_container bg_gradient">
				<h1><?php echo t('SITE_RATES_PLANS_HEAD');?>
</h1>
				<small><?php echo t('SITE_RATES_PLANS_SUBHEAD');?>
</small>
				<div class="container">
					<div class="row">				
						<div class="plans">
							<div class="plans_caption via">
								<?php echo t('SITE_RATES_PLANS_USE_FAX_VIA');?>
…
							</div>
							<div class="plans_feature col-lg-5 col-md-4 col-sm-5 col-xs-7 no-padding">
								<div class="plans_caption feature"><?php echo t('SITE_TXT_FEATURE');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_01');?>
<sup>(1)</sup></div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_02',array('[a]'=>('<a href="').($_smarty_tpl->tpl_vars['action_rates_pagecost']->value).('">')));?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_03');?>

<!--									<div class="help_text">
										<span class="glyphicon glyphicon-info-sign"></span>
										<p>Overview of monthly rates and features of our different strong <b>Plans</b></p>
									</div>-->
								</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_04');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_05');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_06');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_07');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_08',array('[a]'=>('<a href="').($_smarty_tpl->tpl_vars['action_features_faxnumber']->value).('">')));?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_09');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_10');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_11',array('[a]'=>('<a href="').($_smarty_tpl->tpl_vars['action_developers_intro']->value).('">'),'[LF:mobile]'=>'<br class="only_mobile">'));?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_12');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_13');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_14');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_15');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_16');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_17');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_18');?>
</div>
								<div><?php echo t('SITE_RATES_PLANS_FEATURE_19');?>
</div>
					
								<div class="plans_table_separator"></div>
					
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_pamfax"></i>
									<a href="#" data-target="#registrationModal" data-toggle="modal"><?php echo t('SITE_RATES_PLANS_FOR_PORTAL',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_windows"></i>
									<a target="blank" href="<?php echo $_smarty_tpl->tpl_vars['action_download_windows']->value;?>
"><?php echo t('SITE_RATES_PLANS_FOR_WINDOWS',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
								<div class="use_pamfax_via">	
									<i class="plans_logo plans_logo_windows-metro"></i>
									<a target="blank" href="http://apps.microsoft.com/windows/en-us/app/pamfax/7e086b4c-f046-4510-a560-b599550ad750"><?php echo t('SITE_RATES_PLANS_FOR_WINDOWS8',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_ios"></i>
									<a href="http://download.pamfax.biz/PamFaxInstaller.dmg"><?php echo t('SITE_RATES_PLANS_FOR_MAC',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_ios"></i>
									<a href="http://download.pamfax.biz/PamFaxInstaller.dmg"><?php echo t('SITE_RATES_PLANS_FOR_IPAD',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_android"></i>
									<a target="blank" href="https://play.google.com/store/apps/details?id=com.scendix.pamfax"><?php echo t('SITE_RATES_PLANS_FOR_ANDROID',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_blackberry"></i>
									<a target="blank" href="http://appworld.blackberry.com/webstore/content/18560987/"><?php echo t('SITE_RATES_PLANS_FOR_BLACKBERRY',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_salesforce"></i>
									<a target="blank" href="https://login.salesforce.com/?startURL=%2Fpackaging%2FinstallPackage.apexp%3Fp0%3D04t30000000mnbl"><?php echo t('SITE_RATES_PLANS_FOR_SALESFORCE',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_facebook"></i>
									<a target="blank" href="http://www.facebook.com/apps/application.php?id=19672435627"><?php echo t('SITE_RATES_PLANS_FOR_FACEBOOK',array('[span:nomobile]'=>'<span class="except_mobile">'));?>
</a>
								</div>
							</div>
				

							<div class="col-lg-7 col-md-8 col-sm-7 col-xs-5 no-padding">
								<div id="carousel-table-plans" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active"><!-- ____________  plans table content _______________ -->

											<div class="plans_feature col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding" data-type="product-table-cell" >
												<div class="plans_caption demand"><?php echo t('SITE_TXT_PLAN_ON_DEMAND');?>
</div>
												<div>&nbsp;</div>
												<div><?php echo $_smarty_tpl->tpl_vars['page_cost_higher']->value;?>
</div>
												<div><p><?php echo t('SITE_RATES_PLANS_STORAGE_DAYS');?>
</p></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div class="plans_table_separator"></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>	
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>									
											</div>
											<div class="plans_feature col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding" data-type="product-table-cell" >
												<div class="plans_caption basic"><?php echo t('TXT_PLAN_BASIC_SHORT');?>
</div>
												<div><?php echo $_smarty_tpl->tpl_vars['price_basic_plan']->value;?>
</div>
												<div><?php echo $_smarty_tpl->tpl_vars['page_cost_higher']->value;?>
</div>
												<div><p><?php echo t('SITE_RATES_PLANS_STORAGE_DAYS');?>
</p></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div class="plans_table_separator"></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
											</div>
											<div class="plans_feature col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding" data-type="product-table-cell" >
												<div class="plans_caption prof"><?php echo t('TXT_PLAN_PRO_SHORT');?>
</div>
												<div><?php echo $_smarty_tpl->tpl_vars['price_pro_plan']->value;?>
</div>
												<div><?php echo $_smarty_tpl->tpl_vars['page_cost']->value;?>
</div>
												<div><?php echo t('SITE_RATES_PLANS_STORAGE_UNLIMITED');?>
</div>
												<div><span class="glyphicon glyphicon-minus"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>									
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div class="plans_table_separator"></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
												<div><span class="glyphicon glyphicon-ok"></span></div>
											</div>

										</div><!-- ____________  end plans table content _______________ -->




									</div><!-- ____________  end carousel-inner _______________ -->	
								</div><!-- ____________  end #carousel-example-generic _______________ -->
							</div>


							<div class="plans_buy col-lg-12 col-md-12 col-sm-12 col-xs-12 no-padding">
								<div class="col-lg-5 col-md-4 col-sm-5 col-xs-12 no-padding">
									<p><?php echo t('SITE_RATES_PLANS_START_WITH_PAMFAX');?>
</p>
								</div>
								<div class="col-lg-7 col-md-8 col-sm-7 col-xs-12 no-padding">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding text-center">
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
										<a class="rose_btn except_mobile" href="#" data-toggle="modal" data-target="#registrationModal"><?php if ($_smarty_tpl->tpl_vars['curr_lang']->value == 'ru') {
echo t('BTN_START_NOW');
} else {
echo t('BTN_SIGNUP_NOW');
}?></a>
<?php } else { ?>
										<a class="rose_btn except_mobile" href="<?php echo $_smarty_tpl->tpl_vars['url_buy_credit']->value;?>
" ><?php echo t('BTN_BUY_NOW');?>
</a>
<?php }?>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding text-center">
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
										<a class="green_btn" href="#" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php } else { ?>
										<a class="green_btn" href="<?php echo $_smarty_tpl->tpl_vars['url_buy_basicplan']->value;?>
"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php }?>
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding text-center">
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
										<a class="green_btn except_mobile" href="#" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a>
<?php } else { ?>
										<a class="green_btn except_mobile" href="<?php echo $_smarty_tpl->tpl_vars['url_buy_proplan']->value;?>
" ><?php echo t('BTN_BUY_NOW');?>
</a>
<?php }?>
									</div>
								</div>
							</div>

						</div><!-- ____________  end plans _______________ -->

						<p class="table_signature"><sup>(1)</sup><?php echo t('SITE_RATES_PLANS_PRICE_TIP');?>
</p>

						<div class="control_carusel_plans">
							<a data-slide="prev" href="#carousel-table-plans" class="left carousel-control only_mobile"><span class="glyphicon glyphicon-chevron-left"></span><?php echo t('SITE_BTN_PREV_PLAN_SHORT');?>
</a>
							<a data-slide="next" href="#carousel-table-plans" class="right carousel-control only_mobile"><span class="glyphicon glyphicon-chevron-right"></span><?php echo t('SITE_BTN_NEXT_PLAN_SHORT');?>
</a>
						</div>
						<div class="caption_plans_mobile">
							<div class="plans">
								<div class="plans_feature col-lg-5 col-md-4 col-sm-5 col-xs-7 no-padding">
									<div class="plans_caption feature"><?php echo t('SITE_TXT_FEATURE');?>
</div>
								</div>
								<div class="col-lg-7 col-md-8 col-sm-7 col-xs-5 no-padding">
									<div class="plans_caption plans_caption_change"><?php echo t('TXT_PLAN');?>
</div>
								</div>				
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content --><?php }
}
