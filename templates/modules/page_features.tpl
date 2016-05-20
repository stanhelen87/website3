
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="features bg_gradient">
				<div class="container">
					<h1>{t('SITE_FEATURES_HEAD')}</h1>
					<small>{t('SITE_FEATURES_SUBHEAD')}</small>
					<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
						<h2>{t('SITE_FEATURES_TIPS_HEAD')}:</h2>
				
						<ul>
							<li class="col-lg-12 col-md-6 col-sm-6 col-xs-12">	
								<ul class="ul_marker">
									<li>{t('SITE_FEATURES_TIPS_TEXT_1', ['[a]' => '<a href="'|cat:$action_rates_rates|cat:'">'])}{$page_cost}</li>
									<li>{t('SITE_FEATURES_TIPS_TEXT_2')}</li>
									<li>{t('SITE_FEATURES_TIPS_TEXT_3')}</li>
								</ul>
							</li>
							<li class="col-lg-12 col-md-6 col-sm-6 col-xs-12">
								<ul class="ul_marker">									
									<li>{t('SITE_FEATURES_TIPS_TEXT_4', ['[a]' => '<a href="'|cat:$action_features_faxnumber|cat:'">'])}</li>
									<li>{t('SITE_FEATURES_TIPS_TEXT_5')}</li>
									<li>{t('SITE_FEATURES_TIPS_TEXT_6', ['[a]' => '<a href="http://www.pamhelp.com/?/pamfaxja/Knowledgebase/Article/View/368">'])}</li>
								</ul>
							</li>
						</ul>
				
						<div class="try row">
							<p class="col-lg-12 col-md-8 col-sm-8 col-xs-12">{IF $User}{t('SITE_FEATURES_TIPS_FOOTER_SHORT')}{else}{t('SITE_FEATURES_TIPS_FOOTER')}{/if}</p>
{IF isset($User)}
							<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"><a href="{$url_send_fax}" class="main_btn">{t('BTN_PORTAL_MENU_SEND_FAX_NOW')}</a></div>
{else}
							<div class="col-lg-12 col-md-4 col-sm-4 col-xs-12"><a href="#" class="main_btn" data-toggle="modal" data-target="#registrationModal">{t('SITE_BTN_SIGNUP_NOW')}</a></div>
{/IF}
						</div>
					</div>
				</div>
			</section>

			<section class="mainpage platforms">
				<div class="container">
					<div class="row">
						<h2>{t('SITE_TIP_MULTIPLE_PLATFORMS')}:</h2>
        		<figure>
							<img src="/assets/img/logo-windows.png" alt="logo-windows" />
							<figcaption>Windows</figcaption>
						</figure>
						<figure>
							<img src="/assets/img/logo-macos.png" alt="logo-macos" />
							<figcaption>Mac OS X</figcaption> 
						</figure>
						<figure>
							<img src="/assets/img/logo-android.png" alt="logo-android" />
							<figcaption>Android</figcaption>  
						</figure>
						<figure>
							<img src="/assets/img/logo-ios.png" alt="logo-ios" />
							<figcaption>iPhone/iPad</figcaption> 
						</figure>
						<figure>
							<img src="/assets/img/logo-windows-metro.png" alt="logo-windows-metro" /> 
							<figcaption>Windows Phone</figcaption> 
						</figure>
						<br class="only_mobile">
						<figure>
							<img src="/assets/img/logo-blackberry.png" alt="logo-blackberry" />
							<figcaption>Blackberry</figcaption>  
						</figure>
					</div>
				</div>
			</section>
		</div>
	 </div>
</div> <!-- #content -->