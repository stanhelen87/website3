<?php
/* Smarty version 3.1.29, created on 2016-05-06 04:24:11
  from "C:\OpenServer\domains\PHP\website3\templates\modules\footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c54abbdd296_24227734',
  'file_dependency' => 
  array (
    'ec7aa46498748ee2080b0e805d15582830dd1699' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\footer.tpl',
      1 => 1461139926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c54abbdd296_24227734 ($_smarty_tpl) {
?>
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
												<a href="<?php echo $_smarty_tpl->tpl_vars['action_index']->value;?>
" class="logo_in_footer"></a>
											</div>
											<div class="col-lg-10 col-md-8 col-sm-7 col-xs-12">
												<p><?php echo t('SITE_FOOTER_TIP');?>
</p>
											</div>
										</div>
									</div>
								</div>
							</aside>
						</div>
					</div>
					<div class="col-lg-7 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
						<a role="button" href="#" class="only_mobile touch_footermenu" id="touch-footer-menu"><?php echo t('SITE_MENU_PRODUCTS');?>
<span class="arrow_footer_menu"></span></a>
						<ul class="footer-menu">
							<li id="linkcat-4" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><h5><?php echo t('SITE_MENU_PRODUCTS');?>
</h5>
								<ul class='xoxo blogroll'>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_index']->value;?>
" target="_blank">PamFax</a></li>
									<li><a href="http://www.pamela.biz/" target="_blank">Pamela for Skype</a></li>
									<li><a href="http://www.pamconsult.com/" target="_blank">PamConsult</a></li>
									<li><a href="https://www.pambill.com/" target="_blank">PamBill</a></li>
								</ul>
							</li>
							<li id="linkcat-5" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><h5><?php echo t('SITE_MENU_COMPANY');?>
</h5>
								<ul class='xoxo blogroll'>
									<li><a href="http://www.pamnews.com/" target="_blank"><?php echo t('SITE_MENU_BLOG');?>
</a></li>
									<li><a href="http://www.pamfax.biz/affiliate"><?php echo t('SITE_MENU_AFFILIATE');?>
</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_developers_intro']->value;?>
"><?php echo t('SITE_MENU_DEVELOPERS');?>
</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_privacy']->value;?>
"><?php echo t('TXT_PRIVACY');?>
</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_terms']->value;?>
"><?php echo t('TXT_TERMS');?>
</a></li>
									<li><a href="<?php echo $_smarty_tpl->tpl_vars['action_imprint']->value;?>
"><?php echo t('SITE_MENU_IMPRINT');?>
</a></li>
								</ul>
							</li>
							<li id="linkcat-6" class="col-lg-4 col-md-4 col-sm-4 col-xs-12"><h5><?php echo t('TXT_SUPPORT');?>
</h5>
								<ul class='xoxo blogroll'>
									<li><a href="http://www.pamhelp.com/?/pamfax/Tickets/Submit" target="_blank"><?php echo t('TXT_CONTACT');?>
</a></li>
									<li><a href="http://www.pamhelp.com/?/pamfax/Knowledgebase/List" target="_blank"><?php echo t('TXT_KNOWLEDGEBASE');?>
</a></li>
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
			<div class="copyright"><p>&copy; Copyright PamConsult GmbH 2000-<?php echo date('Y',time());?>
</p></div>
		</footer>

<?php if ($_smarty_tpl->tpl_vars['is_live']->value) {?>
		<?php echo '<script'; ?>
 type="text/javascript">
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
		<?php echo '</script'; ?>
>
<?php }?>
	</body>
</html>

<?php }
}
