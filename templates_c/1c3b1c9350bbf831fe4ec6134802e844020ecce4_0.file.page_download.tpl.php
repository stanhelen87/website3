<?php
/* Smarty version 3.1.29, created on 2016-05-06 02:50:31
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_download.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c3eb7543d30_44480984',
  'file_dependency' => 
  array (
    '1c3b1c9350bbf831fe4ec6134802e844020ecce4' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_download.tpl',
      1 => 1461595524,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c3eb7543d30_44480984 ($_smarty_tpl) {
?>

<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="download">
				<div class="container">
					<div class="row">
						<h1><?php echo t('SITE_DOWNLOADS_HEAD');?>
</h1>
						<small><?php echo t('SITE_DOWNLOADS_SUBHEAD');?>
</small>

						<p class="text-center">
<?php if (isset($_smarty_tpl->tpl_vars['User']->value)) {?>
							<?php echo t('SITE_DOWNLOADS_TEXT',array('[a]'=>''));?>

<?php } else { ?>
							<?php echo t('SITE_DOWNLOADS_TEXT',array('[a]'=>'<a href="#" class="pink_btn" data-toggle="modal" data-target="#registrationModal">'));?>

<?php }?>
						</p>

						<ul>
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<a class="download_btn" href="<?php echo $_smarty_tpl->tpl_vars['action_download_windows']->value;?>
" target="blank">
									<i class="sprite_download sprite-windows"></i>
									<h5>Windows</h5>
								</a>
								<h6>Windows XP/Vista/7/8.x/10</h6> 
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<a href="https://login.salesforce.com/?startURL=%2Fpackaging%2FinstallPackage.apexp%3Fp0%3D04t30000000mnbl" class="download_btn" target="blank">
									<i class="sprite_download sprite-salesforce"></i>
									<h5>salesforce</h5>
								</a>
								<h6><?php echo t('SITE_DOWNLOADS_TIP_SALESFORCE');?>
</h6>
							</li>

							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<a href="http://www.facebook.com/apps/application.php?id=19672435627" class="download_btn" target="blank">
									<i class="sprite_download sprite-Facebook"></i>
									<h5>Facebook</h5>
								</a>
								<h6><?php echo t('SITE_DOWNLOADS_TIP_FACEBOOK');?>
</h6>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<a href="http://apps.microsoft.com/windows/en-us/app/pamfax/7e086b4c-f046-4510-a560-b599550ad750" class="download_btn" target="blank">
									<i class="sprite_download sprite-Windows_Modern_app"></i>
									<h5>Windows 8</h5>
								</a>
								<h6><?php echo t('SITE_DOWNLOADS_TIP_WIN8');?>
</h6>
							</li>
				

							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<a href="http://download.pamfax.biz/PamFaxInstaller.dmg" class="download_btn">
									<i class="sprite_download sprite-Mac_OSX"></i>
									<h5>Mac OSX</h5>
								</a>
								<h6>Mac OSX</h6>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<a href="http://www.amazon.com/PamFax-receive-faxes-wordwide-attractive/dp/B004VS52GE/ref=sr_1_1?s=mobile-apps&#038;ie=UTF8&#038;qid=1359355843&#038;sr=1-1" class="download_btn" target="blank">
									<i class="sprite_download sprite-android"></i>
									<h5>Amazon Kindle</h5>
								</a>
								<h6><?php echo t('SITE_DOWNLOADS_TIP_ANDROID');?>
</h6>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<a href="https://play.google.com/store/apps/details?id=com.scendix.pamfax" class="download_btn" target="blank">
									<i class="sprite_download sprite-android"></i>
									<h5>Android</h5>
								</a>
								<h6><?php echo t('SITE_DOWNLOADS_TIP_ANDROID');?>
</h6>
							</li>
							<li class="col-lg-3 col-md-3 col-sm-4 col-xs-6">
								<a href="http://itunes.apple.com/us/app/pamfax/id420653683" class="download_btn" target="blank">
									<i class="sprite_download sprite-Mac_OSX"></i>
									<h5>iPhone and iPad</h5>
								</a>
								<h6><?php echo t('SITE_DOWNLOADS_TIP_IPHONE_IPAD');?>
</h6>
							</li>

							<li class="col-lg-3 col-lg-offset-3 col-md-3 col-md-offset-3 col-sm-4 col-xs-6">
								<a href="http://appworld.blackberry.com/webstore/content/18560987/" class="download_btn" target="blank">
									<i class="sprite_download sprite-Blackberry"></i>
									<h5>Blackberry</h5>
								</a>
								<h6><?php echo t('SITE_DOWNLOADS_TIP_BLACKBERRY');?>
</h6>
							</li>
	 						<li class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-0 col-sm-4 col-sm-offset-4 col-xs-6">
								<a href="http://www.windowsphone.com/en-us/store/app/pamfax/7a1be699-1bd6-4993-9f72-429fe5e3f51e" class="download_btn" target="blank">
									<i class="sprite_download sprite-Windows_Modern_app"></i>
									<h5>Windows Phone</h5>
								</a>
								<h6>Windows Phone</h6>
							</li>
						</ul>
					</div>
				</div>
			</section>
		</div>
	 </div>
</div> <!-- #content --><?php }
}
