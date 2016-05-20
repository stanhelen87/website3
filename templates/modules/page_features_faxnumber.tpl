	
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="features_fax_number">
				<div class="container">
					<div class="row">
						<h1><img src="/assets/img/faxnumber_check.png" alt="" />{t('SITE_FEATURES_FAXNUMBER_HEAD')}</h1>
						<small>{t('SITE_FEATURES_FAXNUMBER_SUBHEAD')}</small>

						<h2>{t(SITE_FEATURES_SELECT_NUMBER, ['[span:countries]' => '<span id="count_all_countries">'])}:</h2>

						<div class="fax_number_mobile_container">
							<strong>{t('TXT_COUNTRY')}</strong>
							<div class="country_mobile-select">
								<select id="country_mobile"></select>
							</div>
                               
							<div class="states-mobile">
								<strong>{t('TXT_STATE')}:</strong><div class="country_mobile-select"><select id="states_usa_mobile"></select></div>
							</div>

							<strong>City:</strong>
							<div id="cities_mobile">	
								<input type="submit" id="search_sity_mobile" value="&#128269;">
								<input type="search" id="search_city_mobile" placeholder="{t('TXT_CITY')}">
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
								<span>{t('SITE_TXT_MONTHLY_COST')}:<br> <strong>{$price_pro_plan}</strong></span>
								<h3>{t('TXT_PLAN_PRO')}</h3>
							</li>
							<li>
{IF isset($User)}
								<a class="main_btn" href="{$url_buy_proplan}">{t('BTN_BUY_NOW')}</a>
{else}
								<a class="main_btn" href="#" data-target="#registrationModal" data-toggle="modal">{t('BTN_BUY_NOW')}</a>
{/if}
							</li>
							<li>
								<p>{t('SITE_FEATURES_PRO_COST_HIGH')} {$price_basic_plan} {t('SITE_FEATURES_PRO_COST_HIGH_AFTER')}. <a href="{$action_rates_plans}">{t('SITE_BTN_LEARN_MORE')}</a></p>
							</li>
						</ul>
					</div>
				</div>
			</section>

			{*<!--============================== MODAL WINDOW ==========================================-->*}
        <div id="faxNumberModal" class="modal fade" tabindex="-1">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<div class="item_fax_number"></div>
							 <div class="states" >
								<p>{t('TXT_STATE')}:</p>
								<div class="states-select"><select id="states_usa"></select></div>
							 </div>
							<input type="search" id="autocomplete"/><input type="submit" value="&#128269;" id = "search_city"/><a href="#" data-dismiss="modal" data-dismiss="modal" class="close_form"></a>
						</div>
	
						<div id="codes_country" class="modal-body">
							<h3>{t(TXT_NUMBER_INFO_1)}</h3>
								<ul class="fax_number">
								</ul>
						</div>
						<div class="modal-footer">
							{t('TXT_NUMBER_INFO_2')}
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>