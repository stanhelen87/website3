		<footer>
			<div class="container">
				<div class="row">
					<div id="footer-sidebar" class="secondary">
						<div id="footer-sidebar1">
							<aside id="text-3" class="widget widget_text">			
								<div class="textwidget">
									<div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
										<div class="row">
											<div class="col-lg-12 col-md-4 col-sm-5 col-xs-12">
												<a href="{$action_index}" class="logo_in_footer"></a>
											</div>
											<div class="col-lg-10 col-md-8 col-sm-7 col-xs-12">
												<p>{t('SITE_FOOTER_TIP')}</p>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
					<div class="col-lg-7 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
						<a role="button" href="#" class="only_mobile touch_footermenu" id="touch-footer-menu">{t('SITE_MENU_PRODUCTS')}<span class="arrow_footer_menu"></span></a>
						<ul class="footer-menu">
							<li id="linkcat-4" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><h5>{t('SITE_MENU_PRODUCTS')}</h5>
								<ul class='xoxo blogroll'>
									<li><a href="{$action_index}" target="_blank">PamFax</a></li>
									<li><a href="http://www.pamela.biz/" target="_blank">Pamela for Skype</a></li>
									<li><a href="http://www.pamconsult.com/" target="_blank">PamConsult</a></li>
									<li><a href="https://www.pambill.com/" target="_blank">PamBill</a></li>
								</ul>
							</li>
							<li id="linkcat-5" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><h5>{t('SITE_MENU_COMPANY')}</h5>
								<ul class='xoxo blogroll'>
									<li><a href="http://www.pamnews.com/" target="_blank">{t('SITE_MENU_BLOG')}</a></li>
									<li><a href="http://www.pamfax.biz/affiliate">{t('SITE_MENU_AFFILIATE')}</a></li>
									<li><a href="{$action_developers_intro}">{t('SITE_MENU_DEVELOPERS')}</a></li>
									<li><a href="{$action_privacy}">{t('TXT_PRIVACY')}</a></li>
									<li><a href="{$action_terms}">{t('TXT_TERMS')}</a></li>
									<li><a href="{$action_imprint}">{t('SITE_MENU_IMPRINT')}</a></li>
								</ul>
							</li>
							<li id="linkcat-6" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><h5>{t('TXT_SUPPORT')}</h5>
								<ul class='xoxo blogroll'>
									<li><a href="http://www.pamhelp.com/?/pamfax/Tickets/Submit" target="_blank">{t('TXT_CONTACT')}</a></li>
									<li><a href="http://www.pamhelp.com/?/pamfax/Knowledgebase/List" target="_blank">{t('TXT_KNOWLEDGEBASE')}</a></li>
									<li class="footer-socials list-inline">
										<ul>
											<li>
												<a data-original-title="Facebook" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="http://www.facebook.com/pamfax">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li>
												<a data-original-title="Google Plus" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="https://plus.google.com/107095820683317982086/">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li>
												<a data-original-title="Twitter" title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="http://www.twitter.com/pamfax">
													<i class="fa fa-google-plus"></i>
												</a>
											</li>
										</ul>
									</li>
								</ul>
							</li>
						</ul>
						<div class="socials footer-socials list-inline"></div>
					</div>
				</div>
			</div> 
			<div class="copyright"><p>&copy; Copyright PamConsult GmbH 2000-{date('Y', time())}</p></div>
		</footer>

{IF $is_live}
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-124056-13']);
			_gaq.push(['_gat._anonymizeIp']);
			_gaq.push(['_setDomainName', '.pamfax.biz']);
			_gaq.push(['_setAllowAnchor', true]);
			_gaq.push(['_trackPageview']);
			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();
		</script>
{/IF}
	</body>
</html>

