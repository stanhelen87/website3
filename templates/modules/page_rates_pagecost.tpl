
<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="cost">
					<h1>{t('SITE_RATES_PAGECOST_HEAD')}</h1>
					<small>{t('SITE_RATES_PAGECOST_SUBHEAD')}</small>

					<div class="separate_block cost_your_country hidden">
					    <div class="container">
					      <p>{t('SITE_RATES_PAGECOST_YOUR_COUNTRY')}: <strong>XXX</strong>. <br class="only_mobile">{t('SITE_RATES_PAGECOST_PAGE_PRICE')} <span><strong>€0.06</strong></span></p>
{if !isset($User)}
							<a class="main_btn" data-target="#registrationModal" data-toggle="modal" href="#">{t('BTN_SND_NOW')}</a>
{else}
							<a class="main_btn" href="{$url_send_fax}">{t('BTN_PORTAL_MENU_SEND_FAX_NOW')}</a>
{/if}
					    </div>
					</div>
										
					<div class="container">
							<div class="row">
								<div class="cost_td cost_td-1">
									<p class="big_text">{t('TXT_RATES_PER_PAGE')}</p>
								</div>	
								<div class="cost_td cost_td-2">
									<ul class="cost_plan">
										<li>{t('SITE_RATES_PAGECOST_ON_DEMAND')}</li>
										<li>{t('SITE_RATES_PAGECOST_BASIC_PLAN')}</li>
										<li>{t('SITE_RATES_PAGECOST_PRO_PLAN')}</li>
									</ul>
								</div>
							</div>

							<div class="page-cost-content">
								{* this block will be filled with js *}
							</div>

							<div class="row text-after-rates b-hide">
						    <p>{t(SITE_RATES_PAGECOST_NOTE_1, ['[a]' => '<a href="'|cat:$action_terms|cat:'">'])}</p>
						    <p class="table_signature">{t('SITE_RATES_PAGECOST_NOTE_2')}</p>
						  </div>
					</div><!-- "container" -->
			</section>
		</div>
	</div>
</div> <!-- #content -->