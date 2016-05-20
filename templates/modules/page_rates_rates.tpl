<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="rates_section bg_gradient">

				<div class="container">
					<h1>{t('SITE_RATES_RATES_HEAD')}</h1>
					<small>{t('SITE_RATES_RATES_SUBHEAD')}</small>

					<div class="rates">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="price price_based">
									<span>{t('SITE_RATES_RATES_NO_MONTHLY_FEE')}</span>
								</div>
								<div class="plan basic_plan based">
									<h2>{t('SITE_RATES_RATES_TITLE_ONDEMAND')}</h2>
									<a class="read_more_btn" href="#">{t('SITE_BTN_READ_MORE')}<span class="glyphicon glyphicon-arrow-down"></span></a>
  									<div class="read_more">
										<p>{t('SITE_RATES_RATES_HEAD_ONDEMAND')}</p>
										<ul>
											<li>{t(SITE_RATES_RATES_TIP_ONDEMAND_1)}</li>
											<li>{t(SITE_RATES_RATES_TIP_ONDEMAND_2)}</li>
											<li>{t(SITE_RATES_RATES_TIP_ONDEMAND_3)}</li>
											<li>{t(SITE_RATES_RATES_TIP_ONDEMAND_4)}{$page_cost_higher}{t(SITE_RATES_RATES_TIP_ONDEMAND_4_AFTER)}</li>
										</ul>
									</div>
{if !isset($User)}
									<a class="rose_btn" data-target="#registrationModal" data-toggle="modal" href="#">{if $curr_lang eq 'ru'}{t('BTN_START_NOW')}{else}{t('BTN_SIGNUP_NOW')}{/if}</a>
									<a class="green_btn" data-target="#registrationModal" data-toggle="modal" href="#">{t('BTN_BUY_NOW')}</a>
{else}
									<a class="green_btn" href="{$url_buy_credit}">{t('BTN_BUY_NOW')}</a>
{/if}
								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="price price_prof">
									<span><strong>{$price_pro_plan}</strong>{t('SITE_TXT_MONTHLY_SHORT')}</span>
									<p>{t('SITE_TXT_MOST_POPULAR')}</p>
								</div>
								<div class="plan prof_plan">
									<h2>{t('TXT_PLAN_PRO_SHORT')}</h2>
									<a class="read_more_btn" href="#">{t('SITE_BTN_READ_MORE')}<span class="glyphicon glyphicon-arrow-down"></span></a>
  									<div class="read_more">
										<p>{t('SITE_RATES_RATES_HEAD_PLAN_PRO')}</p>
										<ul>
											<li>{t('SITE_RATES_RATES_TIP_PLANPRO_1')}</li>
											<li>{t('SITE_RATES_RATES_TIP_PLANPRO_2')}</li>
											<li>{t('SITE_RATES_RATES_TIP_PLANPRO_3')}</li>
											<li>{t('SITE_RATES_RATES_TIP_PLANPRO_4')}</li>
											<li>{t('SITE_RATES_RATES_TIP_PLANPRO_5')}{$page_cost}{t('SITE_RATES_RATES_TIP_PLANPRO_5_AFTER')}</li>
										</ul>
									</div>
{if !isset($User)}
									<a class="rose_btn" data-target="#registrationModal" data-toggle="modal" href="#">{if $curr_lang eq 'ru'}{t('BTN_START_NOW')}{else}{t('BTN_SIGNUP_NOW')}{/if}</a>
									<a class="green_btn" href="#" data-target="#registrationModal" data-toggle="modal">{t('BTN_BUY_NOW')}</a>
{else}
									<a class="green_btn" href="{$url_buy_proplan}">{t('BTN_BUY_NOW')}</a>
{/if}

								</div>
							</div>
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
								<div class="price price_basic">
									<span><strong>{$price_basic_plan}</strong>{t('SITE_TXT_MONTHLY_SHORT')}</span>
								</div>
								<div class="plan basic_plan">
									<h2>{t('TXT_PLAN_BASIC_SHORT')}</h2>
									<a class="read_more_btn" href="#">{t('SITE_BTN_READ_MORE')}<span class="glyphicon glyphicon-arrow-down"></span></a>
  									<div class="read_more">
										<p>{t('SITE_RATES_RATES_HEAD_PLAN_BASIC')}</p>
										<ul>
											<li>{t('SITE_RATES_RATES_TIP_PLANBASIC_1')}</li>
											<li>{t('SITE_RATES_RATES_TIP_PLANBASIC_2')}</li>
											<li>{t('SITE_RATES_RATES_TIP_PLANBASIC_3')}</li>
											<li>{t('SITE_RATES_RATES_TIP_PLANBASIC_4')}{$page_cost_higher}{t('SITE_RATES_RATES_TIP_PLANBASIC_4_AFTER')}</li>
										</ul>
									</div>
{if !isset($User)}
									<a class="rose_btn" data-target="#registrationModal" data-toggle="modal" href="#">{if $curr_lang eq 'ru'}{t('BTN_START_NOW')}{else}{t('BTN_SIGNUP_NOW')}{/if}</a>
									<a class="green_btn" href="#" data-target="#registrationModal" data-toggle="modal">{t('BTN_BUY_NOW')}</a>
{else}
									<a class="green_btn" href="{$url_buy_basicplan}">{t('BTN_BUY_NOW')}</a>
{/if}
									
								</div>				
							</div>
						</div>	
					</div>
					<p class="text-center">{t(SITE_RATES_RATES_DEDICATED_NUMBER_TIP, ['[a]' => '<a href="'|cat:$action_features_faxnumber|cat:'">'])}</p>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content -->