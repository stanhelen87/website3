
<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="bg_gradient">
				<div class="container">
					<h1>{t('SITE_DEVELOPER_SIGNUP_HEAD',null,'en')}</h1>
					<small>{t('SITE_DEVELOPER_SIGNUP_SUBHEAD',null,'en')}</small>
		
					<div class="text_block">
						<h2>{t('SITE_DEVELOPER_SIGNUP_TEXT_INTRO_HEAD',null,'en')}</h2>
						<p>{t('SITE_DEVELOPER_SIGNUP_TEXT_INTRO_TEXT',null,'en')}</p>

{if !isset($User)}
						<p><strong>{t('SITE_DEVELOPER_SIGNUP_TEXT_INTRO_WARNING', ['[a]' => '<a href="'|cat:$action_signup|cat:'">'],null,'en')}</strong></p>
{else}
						<p><strong>{t('SITE_DEVELOPER_SIGNUP_TEXT_INTRO_WARNING', ['[a]' => '<a name="user_dashboard_redirect" href="'|cat:$url_portal|cat:'">'],null,'en')}</strong></p>
{/if}
					</div>

					<div class="form_on_page">
						<form class="pamfax_form" onsubmit="return false;" {*method="post" action="/register-api.php"*}>

							<label for="firstname_api"><b>*</b> {t('TXT_FIRSTNAME',null,'en')}</label>
							<input type="text" id="firstname_api" name="firstname" autofocus {IF $IS_DEV }value="Yuri"{/IF}>

							<label for="lastname_api"><b>*</b> {t('TXT_LASTNAME',null,'en')}</label>
							<input type="text" id="lastname_api" name="lastname" {IF $IS_DEV }value="Yuri"{/IF}>

							<label for="company_api"><b>*</b> {t('TXT_COMPANY',null,'en')}:</label>
							<input type="text" id="company_api" name="company" {IF $IS_DEV }value="yuri"{/IF}>

							<label><b>*</b> {t('TXT_COMPANY_SIZE',null,'en')}:</label>
							<div class="select">
								<select name="companysize">
									<option>1-9</option>
									<option>10-19</option>
									<option>20-49</option>
									<option>50-99</option>
									<option>100+</option>
								</select>
							</div>

							<label for="email_api"><b>*</b> {t('TXT_EMAIL',null,'en')}:</label>
							<input type="text" id="email_api" name="email" {IF $IS_DEV }value="yuri@pamconsult.com"{/IF}>

							<label for="address_api"><b>*</b> {t('TXT_ADDRESS',null,'en')}:</label>
							<input type="text" id="address_api" name="address1" {IF $IS_DEV }value="Minsk 123"{/IF}>

							<label for="zip_api"><b>*</b>{t('TXT_ZIP',null,'en')}:</label>
							<input type="text" id="zip_api" name="zip" {IF $IS_DEV }value="220000"{/IF}>

							<label for="city_api"><b>*</b> {t('TXT_CITY',null,'en')}:</label>
							<input type="text" id="city_api" name="city" {IF $IS_DEV }value="Minsk"{/IF}>

							<div class="api_register_states">
								<label><b>*</b> {t('TXT_STATE_2',null,'en')}:</label>
								<div class="select">
                                     <select name="state">
                                     </select>
								</div>
							</div>

							<label><b>*</b> {t('TXT_COUNTRY',null,'en')}</label>
							<div class="select">
								<select name="region">
								</select>
							</div>

							<p><strong>{t('SITE_DEVELOPER_SIGNUP_TEXT_TELL_MORE',null,'en')}:</strong></p>
							
							<label for="productname_api"><b>*</b>{t('TXT_PRODUCT_NAME',null,'en')}:</label>
							<input type="text" id="productname_api" name="productname" {IF $IS_DEV }value="YuriPro"{/IF}>

							<label><b>*</b> {t('SITE_DEVELOPER_SIGNUP_TEXT_PRODUCT_DESC',null,'en')}:</label>
							<textarea cols="80" rows="4" name="description" id="description_api">{IF $IS_DEV }free text free text free text free text free text free text free text free text free text free text free text free text free text{/IF}</textarea>

							<label><b>*</b> {t('SITE_DEVELOPER_SIGNUP_TEXT_AVERAGE_PAGES',null,'en')}:</label>
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
							<label class="form_checkbox" for="terms_api"><p>{t('SITE_DEVELOPER_SIGNUP_ACCEPT_TERMS', ['[a]' => '<a href="'|cat:$action_terms_dev|cat:'" target="_blank">'],'en')}</p></label>

{if $is_captcha eq true}
							<div class="g-recaptcha" data-sitekey="{$RecaptchaSiteKey}"></div>
{/if}								

							<div class="text-center margin-top-30">
                                <input id="btn_register_api_user" type="submit" value="{t('BTN_SIGN_UP',null,'en')}">
                                <p>{t('TXT_EXPLAIN_REQUIRED', ['*' => '<b>*</b>'],'en')}</p>
                            </div>
						</form>											
						
						<div id="modal_empty_data"></div>
					</div>
				</div>
			</section>												
		</div>
	</div>
</div> <!-- #content -->