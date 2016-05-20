<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="rates_section bg_gradient">
				<div class="container">
					<div class="row">	
						<h1>{t('SITE_RATES_PACKS_HEAD')}</h1>
						<small>{t('SITE_RATES_PACKS_SUBHEAD')}</small>
						<p class="text-center">{t('SITE_RATES_PACKS_TEXT')}</p>
			
						<div class="credit_packs_table">
							<ul class="credit_packs_table_caption">
								<li><div>{t('SITE_TXT_CREDIT_PACK_TYPE')}</div></li>
								<li><div>{t('SITE_TXT_PRICE')}</div></li>
								<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
								<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
								<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
								<li><div>{t('SITE_TXT_BUY_CREDIT')}</div></li>
							</ul>
							<div id="carousel-credit-packs" class="carousel slide" data-ride="carousel">
								<div class="credit">
									<div class="item active">
										<ul class="credit_packs_table_content">
											<li><div>{t('TXT_ANDROID_CREDIT_PACK')} 1</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div>{t('SITE_TXT_PRICE')}</div></li>
													<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
													<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
													<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
												</ul>
											</li>
											<li><div>{$price_credit_pack_1}</div></li>
											<li><div>&nbsp;</div></li>
											<li><div>{$price_credit_added_1}<p>{t('SHOP_CATEGORY_CREDIT')}</p></div></li>
											<li><div>{$page_cost_1}</div></li>
{if !isset($User)}
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a></div></li>
{else}
											<li><div><a href="{$url_buy_pack1}" class="green_btn">{t('BTN_BUY_NOW')}</a></div></li>
{/if}
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div>{t('TXT_ANDROID_CREDIT_PACK')} 2</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div>{t('SITE_TXT_PRICE')}</div></li>
													<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
													<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
													<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
												</ul>
											</li>
											<li><div>{$price_credit_pack_2}</div></li>
											<li><div>&nbsp;</div></li>
											<li><div>{$price_credit_added_2}<p>{t('SHOP_CATEGORY_CREDIT')}</p></div></li>
											<li><div>{$page_cost_2}</div></li>
{if !isset($User)}
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a></div></li>
{else}
											<li><div><a href="{$url_buy_pack2}" class="green_btn">{t('BTN_BUY_NOW')}</a></div></li>
{/if}											
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div>{t('TXT_ANDROID_CREDIT_PACK')} 3</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div>{t('SITE_TXT_PRICE')}</div></li>
													<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
													<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
													<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div>{$price_credit_pack_3}</div></li>
											<li><div>5%</div></li>
											<li><div>{$price_credit_added_3}<p>{t('SHOP_CATEGORY_CREDIT')}</p></div></li>
											<li><div>{$page_cost_3}</div></li>
{if !isset($User)}
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a></div></li>
{else}
											<li><div><a href="{$url_buy_pack3}" class="green_btn">{t('BTN_BUY_NOW')}</a></div></li>
{/if}																					
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div>{t('TXT_ANDROID_CREDIT_PACK')} 4</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div>{t('SITE_TXT_PRICE')}</div></li>
													<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
													<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
													<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div>{$price_credit_pack_4}</div></li>
											<li><div>10%</div></li>
											<li><div>{$price_credit_added_4}<p>{t('SHOP_CATEGORY_CREDIT')}</p></div></li>
											<li><div>{$page_cost_4}</div></li>
{if !isset($User)}
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a></div></li>
{else}
											<li><div><a href="{$url_buy_pack4}" class="green_btn">{t('BTN_BUY_NOW')}</a></div></li>
{/if}																					
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div>{t('TXT_ANDROID_CREDIT_PACK')} 5</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div>{t('SITE_TXT_PRICE')}</div></li>
													<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
													<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
													<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><p><a target="blank" href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/226">{t('SITE_BTN_SEE_HERE')}</a></p></div></li>
											<li><div>15%</div></li>
											<li><div>{$price_credit_added_5}<p>{t('SHOP_CATEGORY_CREDIT')}</p></div></li>
											<li><div>{$page_cost_5}</div></li>
{if !isset($User)}
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a></div></li>
{else}
											<li><div><a href="{$url_buy_pack5}" class="green_btn">{t('BTN_BUY_NOW')}</a></div></li>
{/if}																					
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div>{t('TXT_ANDROID_CREDIT_PACK')} 6</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div>{t('SITE_TXT_PRICE')}</div></li>
													<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
													<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
													<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><p><a target="blank" href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/226">{t('SITE_BTN_SEE_HERE')}</a></p></div></li>
											<li><div>20%</div></li>
											<li><div>{$price_credit_added_6}<p>{t('SHOP_CATEGORY_CREDIT')}</p></div></li>
											<li><div>{$page_cost_6}</div></li>
{if !isset($User)}
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a></div></li>
{else}
											<li><div><a href="{$url_buy_pack6}" class="green_btn">{t('BTN_BUY_NOW')}</a></div></li>
{/if}																					
										</ul>
									</div>
									<div class="item">
			    						<ul class="credit_packs_table_content">
											<li><div>{t('TXT_ANDROID_CREDIT_PACK')} 7</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div>{t('SITE_TXT_PRICE')}</div></li>
													<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
													<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
													<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><p><a target="blank" href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/226">{t('SITE_BTN_SEE_HERE')}</a></p></div></li>
											<li><div>25%</div></li>
											<li><div>{$price_credit_added_7}<p>{t('SHOP_CATEGORY_CREDIT')}</p></div></li>
											<li><div>{$page_cost_7}</div></li>
{if !isset($User)}
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a></div></li>
{else}
											<li><div><a href="{$url_buy_pack7}" class="green_btn">{t('BTN_BUY_NOW')}</a></div></li>
{/if}																					
										</ul>
									</div>
									<div class="item">				
										<ul class="credit_packs_table_content">
											<li><div>{t('TXT_ANDROID_CREDIT_PACK')} 8</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div>{t('SITE_TXT_PRICE')}</div></li>
													<li><div>{t('SITE_TXT_BONUS_CREDIT')}</div></li>
													<li><div>{t('SITE_TXT_CREDIT_ADDED')}</div></li>
													<li><div>{t('SITE_TXT_COST_PAGE')}<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><p><a target="blank" href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/226">{t('SITE_BTN_SEE_HERE')}</a></p></div></li>
											<li><div>33%</div></li>
											<li><div>{$price_credit_added_8}<p>{t('SHOP_CATEGORY_CREDIT')}</p></div></li>
											<li><div>{$page_cost_8}</div></li>
{if !isset($User)}
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal">{t('BTN_BUY_NOW')}</a></div></li>
{else}
											<li><div><a href="{$url_buy_pack8}" class="green_btn">{t('BTN_BUY_NOW')}</a></div></li>
{/if}																					
										</ul>
									</div>
								</div><!-- ___________ end carousel-inner / credit  ___________-->

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-credit-packs" data-slide="prev"></a>
								<a class="right carousel-control" href="#carousel-credit-packs" data-slide="next"></a>
							</div><!-- ___________end #carousel-credit-packs ___________-->
						</div><!-- ___________end credit_packs_table___________ -->
			
						<p class="table_signature"><sup>(1)</sup> {t('SITE_RATES_PACKS_PRICE_TIP')}</p>
					</div>
				</div>
			</section>
		</div>
	 </div>
</div> <!-- #content -->