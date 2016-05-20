	

<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="features_online_fax bg_gradient">
				<div class="container">
					<div class="row">	
						<h1>{t('SITE_FEATURES_PORTAL_HEAD')}</h1>
						<small>{t('SITE_FEATURES_PORTAL_SUBHEAD')}</small>
						<h2>{t('SITE_PAGE_FEATURES_PORTAL_TEXT_HEAD')}</h2>

						<img src="/assets/img/bg_online_fax.png" alt="online_fax" />

						<div class="text">
							<div class="container">
{if !isset($User)}
							{t(SITE_PAGE_FEATURES_PORTAL_TEXT_MAIN, ['[a:windows]' => '<a href="'|cat:$action_features_win7app|cat:'">', '[a:mac]' => '<a href="'|cat:$action_features_macos|cat:'">', '[a:mobile]' => '<a href="'|cat:$action_features_mobile|cat:'">', '[a:formats]' => '<a href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/53" target="blank">', '[a:portal]' => '<a href="'|cat:$url_portal|cat:'">'])}
{else}
							{t(SITE_PAGE_FEATURES_PORTAL_TEXT_MAIN, ['[a:windows]' => '<a href="'|cat:$action_features_win7app|cat:'">', '[a:mac]' => '<a href="'|cat:$action_features_macos|cat:'">', '[a:mobile]' => '<a href="'|cat:$action_features_mobile|cat:'">', '[a:formats]' => '<a href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/53" target="blank">', '[a:portal]' => '<a href="'|cat:$url_portal|cat:'" name="user_dashboard_redirect">'])}
{/if}
							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content -->