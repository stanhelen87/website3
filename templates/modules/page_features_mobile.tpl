<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="features_WM features_mobile bg_gradient">	
				<h1>{t('SITE_FEATURES_MOBILE_HEAD')}</h1>
				<small>{t('SITE_FEATURES_MOBILE_SUBHEAD')}</small>

				<p>{t('SITE_FEATURES_WINDOWS_TEXT')}</p>
				<div class="row">
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
						<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						  <!-- Indicators -->
						  <ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
							<li data-target="#carousel-example-generic" data-slide-to="3"></li>
						  </ol>

						  <!-- Wrapper for slides -->
						  <div class="carousel-inner">
							<div class="item active">
				    			<img src="/assets/img/for_mobile/mobile_preview_01.png" alt="" />
				    			<div class="carousel-caption">
				    				<h3>{t('SITE_FEATURES_MOBILE_SLIDE_HEAD_1')}</h3>
									<p>{t('SITE_FEATURES_MOBILE_SLIDE_TEXT_1')}</p>
				      			</div>
							</div>
							<div class="item">
				      			<img src="/assets/img/for_mobile/mobile_preview_02.png" alt="" />
				      			<div class="carousel-caption">
				    				<h3>{t('SITE_FEATURES_MOBILE_SLIDE_HEAD_2')}</h3>
									<p>{t('SITE_FEATURES_MOBILE_SLIDE_TEXT_2')}</p>
				      			</div>
							</div>
							<div class="item">
				      			<img src="/assets/img/for_mobile/mobile_preview_03.png" alt="" />
				      			<div class="carousel-caption">
				    				<h3>{t('SITE_FEATURES_MOBILE_SLIDE_HEAD_3')}</h3>
									<p>{t('SITE_FEATURES_MOBILE_SLIDE_TEXT_3')}</p>
				      			</div>
							</div>
							<div class="item">
				      			<img src="/assets/img/for_mobile/mobile_preview_04.png" alt="" />
				      			<div class="carousel-caption">
				    				<h3>{t('SITE_FEATURES_MOBILE_SLIDE_HEAD_4')}</h3>
									<p>{t('SITE_FEATURES_MOBILE_SLIDE_TEXT_4')}</p>
				      			</div>
							</div>				    
						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
					</div>

					</div>
					<div class="features_WM_info col-lg-5 col-md-6 col-sm-7 col-xs-12">
						<h4>{t('SITE_FEATURES_WINDOWS_TIPS_HEAD')}:</h4>
						<ul class="ul_marker">
							<li>{t(SITE_FEATURES_WINDOWS_TIPS_1)}</li>
							<li>{t(SITE_FEATURES_WINDOWS_TIPS_2)}</li>
							<li>{t(SITE_FEATURES_WINDOWS_TIPS_3)}</li>
							<li>{t(SITE_FEATURES_WINDOWS_TIPS_4)}</li>
							<li>{t(SITE_FEATURES_WINDOWS_TIPS_5)}</li>
						</ul>
{if !isset($User)}
						<a class="main_btn rose" href="#" data-target="#registrationModal" data-toggle="modal">{t('BTN_SIGN_UP')}</a>
{/if}
					</div>

					<div class="for_mobile_download col-lg-12 col-md-6 col-sm-5 col-xs-12">
						<div class="container">	
							<div class="row">	
								<ul>
									<li>
										<i class="sprite_mobile sprite-for_mobile_WinPhone"></i>
										<h5>WinPhone</h5>
										<p>{t('SITE_PAGE_FEATURES_MOBILE_GET_WINPHONE')}</p>
										<a class="main_btn" href="http://www.windowsphone.com/en-us/store/app/pamfax/7a1be699-1bd6-4993-9f72-429fe5e3f51e" target="_blank">{t('BTN_DOWNLOAD')}</a>
									</li>
									<li>
										<i class="sprite_mobile sprite-for_mobile_android"></i>
										<h5>Android</h5>
										<p>{t('SITE_PAGE_FEATURES_MOBILE_GET_GOOGLEPLAY')}</p>
										<a class="main_btn" href="https://play.google.com/store/apps/details?id=com.scendix.pamfax" target="_blank">{t('BTN_DOWNLOAD')}</a>
									</li>
									<li>
										<i class="sprite_mobile sprite-for_mobile_iPhoneiPad"></i>
										<h5> iPhone/iPad</h5>
										<p>{t('SITE_PAGE_FEATURES_MOBILE_GET_ITUNES')}</p>
										<a class="main_btn" href="http://itunes.apple.com/us/app/pamfax/id420653683" target="_blank">{t('BTN_DOWNLOAD')}</a>
									</li>
									<li>
										<i class="sprite_mobile sprite-for_mobile_AmazonKindle"></i>
										<h5>AmazonKindle</h5>
										<p>{t('SITE_PAGE_FEATURES_MOBILE_GET_AMAZON')}</p>
										<a class="main_btn" href="http://www.amazon.com/PamFax-receive-faxes-wordwide-attractive/dp/B004VS52GE/ref=sr_1_1?s=mobile-apps&#038;ie=UTF8&#038;qid=1359355843&#038;sr=1-1" target="_blank">{t('BTN_DOWNLOAD')}</a>
									</li>
									<li>
										<i class="sprite_mobile sprite-for_mobile_Blackberry"></i>
										<h5>Blackberry</h5>
										<p>{t('SITE_PAGE_FEATURES_MOBILE_GET_BLACKBERRY')}</p>
										<a class="main_btn" href="http://appworld.blackberry.com/webstore/content/18560987/" target="_blank">{t('BTN_DOWNLOAD')}</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content -->