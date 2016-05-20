
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="download">
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1 col-sm-12 col-xs-12">
						<h1>{t('SITE_DOWNLOAD_WINDOWS_HEAD')}</h1>
						<small>{t('SITE_DOWNLOAD_WINDOWS_SUBHEAD')}</small>

						<p class="text-center">
							{t(SITE_DOWNLOAD_WINDOWS_MANUAL_DOWNLOAD, ['[a]' => '<a class="pink_btn" id="a_download_for_windows" href="http://download.pamfax.biz/PamFaxInstaller.exe">'])}
						</p> 
						</div>  
					</div>
				</div>

				<div class="separate_block">
					<mark>{t('SITE_DOWNLOAD_WINDOWS_TAKE_ADVANTAGE')}</mark>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-lg-offset-1 col-md-5 col-md-offset-1 col-sm-6 col-xs-12 text-right">
							<div class="download_wind_block">
								<h2>{t('SITE_DOWNLOAD_WINDOWS_ONDEMAND_HEAD')}</h2>
								<div class="download_wind_block_1">
									<p>
										{t(SITE_DOWNLOAD_WINDOWS_ONDEMAND_TEXT, ['[a]' => '<a href="'|cat:$action_rates_pagecost|cat:'">'])}
									</p>
									<a href="{$action_rates_pagecost}" class="rose_btn">{t('SITE_BTN_SHOW_PRICING')}</a>
								</div>
							</div>
						</div>
						<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
							<div class="download_wind_block">
								<h2>{t('SITE_DOWNLOAD_WINDOWS_MONTHLY_HEAD')}</h2>
								<div class="download_wind_block_2">
									<p>{t('SITE_DOWNLOAD_WINDOWS_MONTHLY_TEXT')}</p>
									<a href="{$action_rates_plans}" class="green_btn">{t('SITE_BTN_SHOW_PLANS')}</a>
								</div>
							</div>
						</div>        
					</div>

					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
							<ul class="download_wind_steps">
								<li><span>1</span><p>{t('SITE_DOWNLOAD_WINDOWS_TIP_1')}</p></li>
								<li><span>2</span><p>{t('SITE_DOWNLOAD_WINDOWS_TIP_2')}</p></li>
								<li><span>3</span><p>{t('SITE_DOWNLOAD_WINDOWS_TIP_3')}</p></li>
							</ul>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12 except_mobile">
							<ul class="download_wind_steps_img">
								<li><img src="/assets/img/download_wind_preview_1.png" alt="download_windows_preview" /></li>
								<li><img src="/assets/img/download_wind_preview_2.png" alt="download_windows_preview"></li>
								<li><img src="/assets/img/download_wind_preview_3.jpg" alt="download_windows_preview"></li>
							</ul>
						</div>        
					</div>
				</div>
			</section>
		</div>
	 </div>
</div> <!-- #content -->