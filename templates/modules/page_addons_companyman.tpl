
<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="text_block bg_gradient">
				<div class="container">
					<div class="row">
						<h1>{t('SITE_ADDONS_COMPANY_HEAD')}</h1>
						<small>{t('SITE_ADDONS_COMPANY_SUBHEAD')}</small>
						
						{t('SITE_ADDONS_COMPANY_TEXT', ['[BTN_INSTALL]' => t('SITE_BTN_START_COMPANY')])}

						<div class="text-center">
							<img src="/assets/img/pamfax_preview_manager.jpg" alt="pamfax_preview_manager" class="img-thumbnail" />
						</div>

						<div class="container_main_btn">
{if !isset($User)}
							<a href="#" class="main_btn" data-target="#registrationModal" data-toggle="modal">{t('SITE_BTN_START_COMPANY')}</a>
{else}
							<a href="{$url_company_manager}" class="main_btn">{t('SITE_BTN_START_COMPANY')}</a>							
{/if}
						</div>
					</div>
				</div>
			</section>												
		</div>
	</div>
</div> <!-- #content -->