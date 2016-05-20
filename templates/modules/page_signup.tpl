

<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="form_on_page sign-up-for-free">
				<h1>{t('TITLE_SIGN_UP')}</h1>

				<form id="form_register" class="pamfax_form" {*method="post" action="{$form_action_register}*}" onsubmit="return false;">

					<div class="error_enter_message" style="display: none;">
						<b>1</b>
						<p>2</p>
						<a href="#" class="close_form"></a>
					</div>

					<label for="UserName">{t('CMN_FULL_NAME')}</label>
					<input type="text" id="UserName" name="name" autofocus="">
					<input id="nick_name" type="hidden" value="" name="nick_name">

					<label for="email">{t('CMN_EMAIL_ADDRESS')}</label>
					<input type="text" id="email" name="email" >
					<div class="help_text">
						<span class="glyphicon glyphicon-question-sign"></span>
						<p>{t('TXT_HINT_EMAIL_USERNAME')}</p>
					</div>

					<label for="password">{t('TXT_REGISTER_PASSWORD')}</label>
					<input type="{if $is_passwords eq false}text{else}password{/if}" id="password" name="password">
					<div class="help_text">
						<span class="glyphicon glyphicon-question-sign"></span>
						<p>{t('TXT_HINT_PASSWORD')}</p>
					</div>

					<label for="password_repeat_field">{t('TXT_PORTAL_PASSWORD_REPEAT')}</label>
					<input type="{if $is_passwords eq false}text{else}password{/if}" id="password_repeat_field" name="password2">

{if $is_captcha eq true}
					<div class="margin-top-30">
						<div class="g-recaptcha" data-sitekey="{$RecaptchaSiteKey}"></div>
					</div>
{/if}						
					
					<input type="button" value="{t('BTN_SIGN_UP')}" id="btn_register" {*data-dismiss="modal"*}>
				</form>

				<div class="modal-footer">
					<p>{t(SITE_TERMS_TIP, ['[BTN_NAME]' => t('BTN_SIGN_UP'), '[a:terms]' => '<a href="'|cat:$action_terms|cat:'">', '[a:privacy]' => '<a href="'|cat:$action_privacy|cat:'">'])}</p>
					<p>{t('SITE_SIGNUP_HAVE_ACCOUNT')} <button type="button" {*onclick="document.location.href='{$action_login}'"*} data-login="show-login"> {t('BTN_LOGIN')} </button></p>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content -->

