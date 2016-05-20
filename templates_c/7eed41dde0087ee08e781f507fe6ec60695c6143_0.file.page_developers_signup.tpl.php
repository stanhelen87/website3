<?php
/* Smarty version 3.1.29, created on 2016-04-25 04:30:08
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_developers_signup.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_571dd590a5a974_78156524',
  'file_dependency' => 
  array (
    '7eed41dde0087ee08e781f507fe6ec60695c6143' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_developers_signup.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_571dd590a5a974_78156524 ($_smarty_tpl) {
?>

<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="bg_gradient">
				<div class="container">
					<h1><?php echo t('SITE_DEVELOPER_SIGNUP_HEAD',null,'en');?>
</h1>
					<small><?php echo t('SITE_DEVELOPER_SIGNUP_SUBHEAD',null,'en');?>
</small>
		
					<div class="text_block">
						<h2><?php echo t('SITE_DEVELOPER_SIGNUP_TEXT_INTRO_HEAD',null,'en');?>
</h2>
						<p><?php echo t('SITE_DEVELOPER_SIGNUP_TEXT_INTRO_TEXT',null,'en');?>
</p>

<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
						<p><strong><?php echo t('SITE_DEVELOPER_SIGNUP_TEXT_INTRO_WARNING',array('[a]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_signup']->value)).('">')),null,'en');?>
</strong></p>
<?php } else { ?>
						<p><strong><?php echo t('SITE_DEVELOPER_SIGNUP_TEXT_INTRO_WARNING',array('[a]'=>(('<a name="user_dashboard_redirect" href="').($_smarty_tpl->tpl_vars['url_portal']->value)).('">')),null,'en');?>
</strong></p>
<?php }?>
					</div>

					<div class="form_on_page">
						<form class="pamfax_form" onsubmit="return false;" >

							<label for="firstname_api"><b>*</b> <?php echo t('TXT_FIRSTNAME',null,'en');?>
</label>
							<input type="text" id="firstname_api" name="firstname" autofocus <?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>value="Yuri"<?php }?>>

							<label for="lastname_api"><b>*</b> <?php echo t('TXT_LASTNAME',null,'en');?>
</label>
							<input type="text" id="lastname_api" name="lastname" <?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>value="Yuri"<?php }?>>

							<label for="company_api"><b>*</b> <?php echo t('TXT_COMPANY',null,'en');?>
:</label>
							<input type="text" id="company_api" name="company" <?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>value="yuri"<?php }?>>

							<label><b>*</b> <?php echo t('TXT_COMPANY_SIZE',null,'en');?>
:</label>
							<div class="select">
								<select name="companysize">
									<option>1-9</option>
									<option>10-19</option>
									<option>20-49</option>
									<option>50-99</option>
									<option>100+</option>
								</select>
							</div>

							<label for="email_api"><b>*</b> <?php echo t('TXT_EMAIL',null,'en');?>
:</label>
							<input type="text" id="email_api" name="email" <?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>value="yuri@pamconsult.com"<?php }?>>

							<label for="address_api"><b>*</b> <?php echo t('TXT_ADDRESS',null,'en');?>
:</label>
							<input type="text" id="address_api" name="address1" <?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>value="Minsk 123"<?php }?>>

							<label for="zip_api"><b>*</b><?php echo t('TXT_ZIP',null,'en');?>
:</label>
							<input type="text" id="zip_api" name="zip" <?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>value="220000"<?php }?>>

							<label for="city_api"><b>*</b> <?php echo t('TXT_CITY',null,'en');?>
:</label>
							<input type="text" id="city_api" name="city" <?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>value="Minsk"<?php }?>>

							<div class="api_register_states">
								<label><b>*</b> <?php echo t('TXT_STATE_2',null,'en');?>
:</label>
								<div class="select">
                                     <select name="state">
                                     </select>
								</div>
							</div>

							<label><b>*</b> <?php echo t('TXT_COUNTRY',null,'en');?>
</label>
							<div class="select">
								<select name="region">
								</select>
							</div>

							<p><strong><?php echo t('SITE_DEVELOPER_SIGNUP_TEXT_TELL_MORE',null,'en');?>
:</strong></p>
							
							<label for="productname_api"><b>*</b><?php echo t('TXT_PRODUCT_NAME',null,'en');?>
:</label>
							<input type="text" id="productname_api" name="productname" <?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>value="YuriPro"<?php }?>>

							<label><b>*</b> <?php echo t('SITE_DEVELOPER_SIGNUP_TEXT_PRODUCT_DESC',null,'en');?>
:</label>
							<textarea cols="80" rows="4" name="description" id="description_api"><?php if ($_smarty_tpl->tpl_vars['IS_DEV']->value) {?>free text free text free text free text free text free text free text free text free text free text free text free text free text<?php }?></textarea>

							<label><b>*</b> <?php echo t('SITE_DEVELOPER_SIGNUP_TEXT_AVERAGE_PAGES',null,'en');?>
:</label>
							<div class="select">
								<select name="volume">
									<option>0 - 1,000</option>
									<option>1,000 - 5,000</option>
									<option>5,000 - 10,000</option>
									<option>10,000 - 100,000</option>
									<option>100,000+</option>
								</select>
							</div>

							<input id="terms_api" type="checkbox" name="terms">
							<label class="form_checkbox" for="terms_api"><p><?php echo t('SITE_DEVELOPER_SIGNUP_ACCEPT_TERMS',array('[a]'=>(('<a href="').($_smarty_tpl->tpl_vars['action_terms_dev']->value)).('" target="_blank">')),'en');?>
</p></label>

<?php if ($_smarty_tpl->tpl_vars['is_captcha']->value == true) {?>
							<div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['RecaptchaSiteKey']->value;?>
"></div>
<?php }?>								

							<div class="text-center margin-top-30">
                                <input id="btn_register_api_user" type="submit" value="<?php echo t('BTN_SIGN_UP',null,'en');?>
">
                                <p><?php echo t('TXT_EXPLAIN_REQUIRED',array('*'=>'<b>*</b>'),'en');?>
</p>
                            </div>
						</form>											
						
						<div id="modal_empty_data"></div>
					</div>
				</div>
			</section>												
		</div>
	</div>
</div> <!-- #content --><?php }
}
