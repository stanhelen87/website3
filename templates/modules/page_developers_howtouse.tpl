<div id="content" class="site-content">		
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="text_block bg_gradient">
				<div class="container">
					<div class="row">
						<h1>{t('SITE_DEVELOPER_HOWTO_HEAD',null,'en')}</h1>
						<small>{t('SITE_DEVELOPER_HOWTO_SUBHEAD',null,'en')}</small>
						<h2>{t('SITE_DEVELOPER_HOWTO_BLOCK_GETSTART_HEAD',null,'en')}</h2>

						{t('SITE_DEVELOPER_HOWTO_BLOCK_GETSTART_TEXT', ['[BTN_SIGNUP]' => t('SITE_BTN_SIGNUP_NOW')],'en')}

						<h2>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_HEAD',null,'en')}</h2>
						<h3>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_APPSTACK',null,'en')}</h3>
						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_TEXT',null,'en')}:</p>
						<ul class="ul_marker">
							<li><p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_TEXT_TIP_1',null,'en')}</p></li>
							<li><p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_TEXT_TIP_2',null,'en')}</p></li>
						</ul>

						<h3>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES',null,'en')}</h3>
						<ul class="ul_marker">
							<li>
								<strong>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_1_HEAD',null,'en')}</strong>
								<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_1_TEXT',null,'en')}</p>
							</li>
							<li>
								<strong>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_2_HEAD',null,'en')}</strong>
								<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_2_TEXT',null,'en')}</p>
							</li>
							<li>
								<strong>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_3_HEAD',null,'en')}</strong>
								<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_3_TEXT',null,'en')}</p>
							</li>
							<li>
								<strong>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_4_HEAD',null,'en')}</strong>
								<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_4_TEXT',null,'en')}</p>
							</li>
							<li>
								<strong>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_5_HEAD',null,'en')}</strong>
								<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_5_TEXT',null,'en')}</p>
							</li>
							<li>
								<strong>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_6_HEAD',null,'en')}</strong>
								<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_6_TEXT',null,'en')}</p>
							</li>
							<li>
								<strong>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_7_HEAD',null,'en')}</strong>
								<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_OVERVIEW_FEATURES_7_TEXT',null,'en')}</p>
							</li>							
						</ul>

						<h2>{t('SITE_DEVELOPER_HOWTO_BLOCK_USEAPI_HEAD',null,'en')}</h2>
						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_USEAPI_TEXT_1',null,'en')}:</p>

						<ul class="ul_marker">
							<li><p>{t('SITE_DEVELOPER_HOWTO_BLOCK_USEAPI_TIP_1',null,'en')}</p></li>
							<li><p>{t('SITE_DEVELOPER_HOWTO_BLOCK_USEAPI_TIP_2',null,'en')}</p></li>
							<li><p>{t('SITE_DEVELOPER_HOWTO_BLOCK_USEAPI_TIP_3',null,'en')}</p></li>
							<li><p>{t('SITE_DEVELOPER_HOWTO_BLOCK_USEAPI_TIP_4',null,'en')}</p></li>
							<li><p>{t('SITE_DEVELOPER_HOWTO_BLOCK_USEAPI_TIP_5',null,'en')}</p></li>
							<li><p>BASH</p></li>
						</ul>

						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_USEAPI_TEXT_2', ['[a]' => '<a href="'|cat:$action_developers_samples|cat:'">'],'en')}</p>

						<h2>{t('SITE_DEVELOPER_HOWTO_BLOCK_DIRECTAPI_HEAD',null,'en')}</h2>
						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_DIRECTAPI_TEXT_1',null,'en')}</p>
						<p>{t('SITE_TXT_EXAMPLE_CALL',null,'en')}: <br />
						URL: Session/VerifyUser/ <br />
						POST: apikey=yourapikey&#038;apicheck=81c5c66566a60c8805e9739564e5dac5&#038;username=testuser&#038;password=somepass</p>

						<p>{t('SITE_TXT_RESULT',null,'en')}:</p>

						<script type="text/javascript">
							SyntaxHighlighter.all();
						</script>

						<pre class="brush: js;">
										<?xml version="1.0" encoding="UTF-8"?>
							<Session>
							<result>
								<code>success</code>
							</result>
							<User uuid="ab3549119c0dcb035f12863bdce456b5" username="somepamfaxusername" created="2008-04-30 11:49:33" credit="1.25" free_credit="1.2" inactive_credit="0" reactivated_credit="0" email="ericsmith@somepamfaxemailaddress.com" is_member="0" name="Eric Smith"/>
							<UserToken token="ip6d6rdv3t3bsesai2npkkantee1vpm3"/>
							<UserRights type="list">
							<UserRight name="see_credit" allowed="1"/>
							<UserRight name="buy_credit" allowed="1"/>
							<UserRight name="buy_number" allowed="1"/>
							<UserRight name="transfer_credit" allowed="1"/>
							<UserRight name="receive_messages" allowed="1"/>

							<UserRight name="buy_credit" allowed="1"/>
							<UserRight name="buy_number" allowed="1"/>
							<UserRight name="transfer_credit" allowed="1"/>
							<UserRight name="receive_messages" allowed="1"/>
							</UserRights>
							</Session>
						</pre>

						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_DIRECTAPI_TEXT_2',null,'en')}</p>

						<br />
						<h2>{t('SITE_DEVELOPER_HOWTO_BLOCK_SECUREAPI_HEAD',null,'en')}</h2>
						{t('SITE_DEVELOPER_HOWTO_BLOCK_SECUREAPI_TEXT_1',null,'en')}

						<ol>
							<li>data := [{t('SITE_TXT_ASSOC_ARRAY',null,'en')}]</li>
							<li>data := [{t('SITE_TXT_ASSOC_SORT_ASC_KEY',null,'en')}]</li>
							<li>checksum := [{t('SITE_TXT_ASSOC_EMPTY_STRING',null,'en')}]</li>
							<li>{t('SITE_TXT_ASSOC_FORECH_KEYVAL',null,'en')} <br />checksum := [{t('SITE_TXT_ASSOC_APPEND_VALUE',null,'en')}]</li>
							<li>checksum := [{t('SITE_TXT_ASSOC_APPEND_SECRET',null,'en')}]</li>
							<li>checksum := [{t('SITE_TXT_ASSOC_CALC_MD5',null,'en')}]</li>
						</ol>

						<p>{t('SITE_TXT_SOME_NOTES')}:</p>
						<ul class="ul_marker">
							<li><p>[{t('SITE_TXT_ASSOC_ARRAY',null,'en')}] {t('SITE_DEVELOPER_HOWTO_BLOCK_SECUREAPI_TIP_1',null,'en')}</p></li>
							<li><p>[{t('SITE_TXT_ASSOC_ARRAY',null,'en')}] {t('SITE_DEVELOPER_HOWTO_BLOCK_SECUREAPI_TIP_2',null,'en')}</p></li>
							<li><p>[{t('SITE_TXT_ASSOC_CONCAT_CHECKSUM',null,'en')}] {t('SITE_DEVELOPER_HOWTO_BLOCK_SECUREAPI_TIP_3',null,'en')}</p></li>
							<li><p>[{t('SITE_TXT_ASSOC_CONCAT_CHECKSUM',null,'en')}] {t('SITE_DEVELOPER_HOWTO_BLOCK_SECUREAPI_TIP_4',null,'en')}</p></li>
						</ul>

						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_SECUREAPI_TEXT_2',null,'en')}</p>

						<h2>{t('SITE_DEVELOPER_HOWTO_BLOCK_CURRENCIES_HEAD',null,'en')}</h2>
						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_CURRENCIES_TEXT',null,'en')}</p>

						<h2>{t('SITE_DEVELOPER_HOWTO_BLOCK_DATES_HEAD',null,'en')}</h2>
						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_DATES_TEXT',null,'en')}</p>

						<h2>{t('SITE_DEVELOPER_HOWTO_BLOCK_DISTRIBUTE_HEAD',null,'en')}</h2>
						<p>{t('SITE_DEVELOPER_HOWTO_BLOCK_DISTRIBUTE_TEXT',null,'en')}</p>


						<br /><div class="text-center big_text">{t('SITE_DEVELOPER_HOWTO_FOOTER',null,'en')}</div>
			
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 container_main_btn">
							<a href="{$action_developers_signup}" class="main_btn" >{t('SITE_BTN_SIGNUP_NOW',null,'en')}</a>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
</div> <!-- #content -->