<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="plans_container bg_gradient">
				<h1>{t('SITE_RATES_PLANS_HEAD')}</h1>
				<small>{t('SITE_RATES_PLANS_SUBHEAD')}</small>
				<div class="container">
					<div class="row">				
						<div class="plans">
							<div class="plans_caption via">
								{t('SITE_RATES_PLANS_USE_FAX_VIA')}…
							</div>
							<div class="plans_feature col-lg-5 col-md-4 col-sm-5 col-xs-7 no-padding">
								<div class="plans_caption feature">{t('SITE_TXT_FEATURE')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_01')}<sup>(1)</sup></div>
								<div>{t('SITE_RATES_PLANS_FEATURE_02', ['[a]' => '<a href="'|cat:$action_rates_pagecost:'">'])}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_03')}
<!--									<div class="help_text">
										<span class="glyphicon glyphicon-info-sign"></span>
										<p>Overview of monthly rates and features of our different strong <b>Plans</b></p>
									</div>-->
								</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_04')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_05')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_06')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_07')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_08', ['[a]' => '<a href="'|cat:$action_features_faxnumber:'">'])}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_09')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_10')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_11', ['[a]' => '<a href="'|cat:$action_developers_intro:'">', '[LF:mobile]' => '<br class="only_mobile">'])}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_12')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_13')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_14')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_15')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_16')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_17')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_18')}</div>
								<div>{t('SITE_RATES_PLANS_FEATURE_19')}</div>
					
								<div class="plans_table_separator"></div>
					
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_pamfax"></i>
									<a href="#" data-target="#registrationModal" data-toggle="modal">{t('SITE_RATES_PLANS_FOR_PORTAL', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_windows"></i>
									<a target="blank" href="{$action_download_windows}">{t('SITE_RATES_PLANS_FOR_WINDOWS', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
								<div class="use_pamfax_via">	
									<i class="plans_logo plans_logo_windows-metro"></i>
									<a target="blank" href="http://apps.microsoft.com/windows/en-us/app/pamfax/7e086b4c-f046-4510-a560-b599550ad750">{t('SITE_RATES_PLANS_FOR_WINDOWS8', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_ios"></i>
									<a href="http://download.pamfax.biz/PamFaxInstaller.dmg">{t('SITE_RATES_PLANS_FOR_MAC', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_ios"></i>
									<a href="http://download.pamfax.biz/PamFaxInstaller.dmg">{t('SITE_RATES_PLANS_FOR_IPAD', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_android"></i>
									<a target="blank" href="https://play.google.com/store/apps/details?id=com.scendix.pamfax">{t('SITE_RATES_PLANS_FOR_ANDROID', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_blackberry"></i>
									<a target="blank" href="http://appworld.blackberry.com/webstore/content/18560987/">{t('SITE_RATES_PLANS_FOR_BLACKBERRY', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_salesforce"></i>
									<a target="blank" href="https://login.salesforce.com/?startURL=%2Fpackaging%2FinstallPackage.apexp%3Fp0%3D04t30000000mnbl">{t('SITE_RATES_PLANS_FOR_SALESFORCE', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
								<div class="use_pamfax_via">
									<i class="plans_logo plans_logo_facebook"></i>
									<a target="blank" href="http://www.facebook.com/apps/application.php?id=19672435627">{t('SITE_RATES_PLANS_FOR_FACEBOOK', ['[span:nomobile]' => '<span class="except_mobile">'])}</a>
								</div>
							</div>
				

							<div class="col-lg-7 col-md-8 col-sm-7 col-xs-5 no-padding">
								<div id="carousel-table-plans" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<div class="item active"><!-- ____________  plans table content _______________ -->

											<div class="plans_feature col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding" data-type="product-table-cell" >
												<div class="plans_caption demand">{t('SITE_TXT_PLAN_ON_DEMAND')}</div>
												<div>&nbsp;</div>
												<div>{$page_cost_higher}</div>
												<div><p>{t('SITE_RATES_PLANS_STORAGE_DAYS')}</p></div>
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
												<div class="plans_caption basic">{t('TXT_PLAN_BASIC_SHORT')}</div>
												<div>{$price_basic_plan}</div>
												<div>{$page_cost_higher}</div>
												<div><p>{t('SITE_RATES_PLANS_STORAGE_DAYS')}</p></div>
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
												<div class="plans_caption prof">{t('TXT_PLAN_PRO_SHORT')}</div>
												<div>{$price_pro_plan}</div>
												<div>{$page_cost}</div>
												<div>{t('SITE_RATES_PLANS_STORAGE_UNLIMITED')}</div>
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
									<p>{t('SITE_RATES_PLANS_START_WITH_PAMFAX')}</p>
								</div>
								<div class="col-lg-7 col-md-8 col-sm-7 col-xs-12 no-padding">
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding text-center">
{if !isset($User)}
										<a class="rose_btn except_mobile" href="#" data-toggle="modal" data-target="#registrationModal">{if $curr_lang eq 'ru'}{t('BTN_START_NOW')}{else}{t('BTN_SIGNUP_NOW')}{/if}</a>
{else}
										<a class="rose_btn except_mobile" href="{$url_buy_credit}" >{t('BTN_BUY_NOW')}</a>
{/if}
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding text-center">
{if !isset($User)}
										<a class="green_btn" href="#" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a>
{else}
										<a class="green_btn" href="{$url_buy_basicplan}">{t('BTN_BUY_NOW')}</a>
{/if}
									</div>
									<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 no-padding text-center">
{if !isset($User)}
										<a class="green_btn except_mobile" href="#" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a>
{else}
										<a class="green_btn except_mobile" href="{$url_buy_proplan}" >{t('BTN_BUY_NOW')}</a>
{/if}
									</div>
								</div>
							</div>

						</div><!-- ____________  end plans _______________ -->

						<p class="table_signature"><sup>(1)</sup>{t('SITE_RATES_PLANS_PRICE_TIP')}</p>

						<div class="control_carusel_plans">
							<a data-slide="prev" href="#carousel-table-plans" class="left carousel-control only_mobile"><span class="glyphicon glyphicon-chevron-left"></span>{t('SITE_BTN_PREV_PLAN_SHORT')}</a>
							<a data-slide="next" href="#carousel-table-plans" class="right carousel-control only_mobile"><span class="glyphicon glyphicon-chevron-right"></span>{t('SITE_BTN_NEXT_PLAN_SHORT')}</a>
						</div>
						<div class="caption_plans_mobile">
							<div class="plans">
								<div class="plans_feature col-lg-5 col-md-4 col-sm-5 col-xs-7 no-padding">
									<div class="plans_caption feature">{t('SITE_TXT_FEATURE')}</div>
								</div>
								<div class="col-lg-7 col-md-8 col-sm-7 col-xs-5 no-padding">
									<div class="plans_caption plans_caption_change">{t('TXT_PLAN')}</div>
								</div>				
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content -->