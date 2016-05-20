<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="features_WM bg_gradient">
				<div class="container">		
					<h1>{t('SITE_FEATURES_WINDOWS_HEAD')}</h1>
					<small>{t('SITE_FEATURES_WINDOWS_SUBHEAD')}</small>

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
								<li data-target="#carousel-example-generic" data-slide-to="4"></li>
							  </ol>

							  <!-- Wrapper for slides -->
							  <div class="carousel-inner">
				  				<img src="/assets/img/monitor.png" alt="monitor" class="bg_screenshots">

								<div class="item active"><img src="/assets/img/windows_new/preview_window_01.jpg" alt="recipients"  /><div class="carousel-caption">
				    					<h3>{t('SITE_FEATURES_WINDOWS_SLIDE_HEAD_1')}</h3>
										<p>{t('SITE_FEATURES_WINDOWS_SLIDE_TEXT_1')}</p>
				      				</div>
								</div>
								<div class="item">
				      				<img src="/assets/img/windows_new/preview_window_02.jpg" alt="files" />
				      				<div class="carousel-caption">
				    					<h3>{t('SITE_FEATURES_WINDOWS_SLIDE_HEAD_2')}</h3>
										<p>{t('SITE_FEATURES_WINDOWS_SLIDE_TEXT_2')}</p>
				      				</div>
								</div>
								<div class="item">
				      				<img src="/assets/img/windows_new/preview_window_03.jpg" alt="cover" />
				      				<div class="carousel-caption">
				    					<h3>{t('SITE_FEATURES_WINDOWS_SLIDE_HEAD_3')}</h3>
										<p>{t('SITE_FEATURES_WINDOWS_SLIDE_TEXT_3')}</p>
				      				</div>
								</div>
								<div class="item">
				      				<img src="/assets/img/windows_new/preview_window_04.jpg" alt="preview" />
				      				<div class="carousel-caption">
				    					<h3>{t('SITE_FEATURES_WINDOWS_SLIDE_HEAD_4')}</h3>
										<p>{t('SITE_FEATURES_WINDOWS_SLIDE_TEXT_4')}</p>
				      				</div>
								</div>
								<div class="item">
				      				<img src="/assets/img/windows_new/preview_window_05.jpg" alt="inbox" />
				      				<div class="carousel-caption">
				    					<h3>{t('SITE_FEATURES_WINDOWS_SLIDE_HEAD_5')}</h3>
										<p>{t('SITE_FEATURES_WINDOWS_SLIDE_TEXT_5')}</p>
				      				</div>
								</div>
							</div>

							  <!-- Controls -->
							  <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"></a>
							  <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"></a>
							</div>
						</div>
						<div class="features_WM_info col-lg-5 col-md-12 col-sm-12 col-xs-12">
				
							<div class="col-lg-12 col-lg-offset-0 col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-1 col-xs-12">	
								<h4>{t('SITE_FEATURES_WINDOWS_TIPS_HEAD')}:</h4>
								<ul class="ul_marker">
									<li>{t(SITE_FEATURES_WINDOWS_TIPS_1)}</li>
									<li>{t(SITE_FEATURES_WINDOWS_TIPS_2)}</li>
									<li>{t(SITE_FEATURES_WINDOWS_TIPS_3)}</li>
									<li>{t(SITE_FEATURES_WINDOWS_TIPS_4)}</li>
									<li>{t(SITE_FEATURES_WINDOWS_TIPS_5)}</li>
								</ul>
							</div>
							<div class="col-lg-12 col-md-5 col-sm-6 col-xs-12">
								<div class="features_WM_btn_container">
									<a class="main_btn" href="{$action_download_windows}">{t('BTN_DOWNLOAD')}</a>
{if !isset($User)}
									<a class="main_btn rose" data-target="#registrationModal" data-toggle="modal" href="#">{t('BTN_SIGN_UP')}</a>
{/if}
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	 </div>
</div> <!-- #content -->