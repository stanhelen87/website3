<?php
/* Smarty version 3.1.29, created on 2016-05-06 02:51:11
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_rates_packs.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c3edfde0339_00030799',
  'file_dependency' => 
  array (
    '8e1ce0ec47d697c75fbd4e6c32e36a76fa1ee06f' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_rates_packs.tpl',
      1 => 1460723906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c3edfde0339_00030799 ($_smarty_tpl) {
?>
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="rates_section bg_gradient">
				<div class="container">
					<div class="row">	
						<h1><?php echo t('SITE_RATES_PACKS_HEAD');?>
</h1>
						<small><?php echo t('SITE_RATES_PACKS_SUBHEAD');?>
</small>
						<p class="text-center"><?php echo t('SITE_RATES_PACKS_TEXT');?>
</p>
			
						<div class="credit_packs_table">
							<ul class="credit_packs_table_caption">
								<li><div><?php echo t('SITE_TXT_CREDIT_PACK_TYPE');?>
</div></li>
								<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
								<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
								<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
								<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
								<li><div><?php echo t('SITE_TXT_BUY_CREDIT');?>
</div></li>
							</ul>
							<div id="carousel-credit-packs" class="carousel slide" data-ride="carousel">
								<div class="credit">
									<div class="item active">
										<ul class="credit_packs_table_content">
											<li><div><?php echo t('TXT_ANDROID_CREDIT_PACK');?>
 1</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
												</ul>
											</li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_pack_1']->value;?>
</div></li>
											<li><div>&nbsp;</div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_added_1']->value;?>
<p><?php echo t('SHOP_CATEGORY_CREDIT');?>
</p></div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['page_cost_1']->value;?>
</div></li>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php } else { ?>
											<li><div><a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_pack1']->value;?>
" class="green_btn"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php }?>
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div><?php echo t('TXT_ANDROID_CREDIT_PACK');?>
 2</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
												</ul>
											</li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_pack_2']->value;?>
</div></li>
											<li><div>&nbsp;</div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_added_2']->value;?>
<p><?php echo t('SHOP_CATEGORY_CREDIT');?>
</p></div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['page_cost_2']->value;?>
</div></li>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php } else { ?>
											<li><div><a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_pack2']->value;?>
" class="green_btn"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php }?>											
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div><?php echo t('TXT_ANDROID_CREDIT_PACK');?>
 3</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_pack_3']->value;?>
</div></li>
											<li><div>5%</div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_added_3']->value;?>
<p><?php echo t('SHOP_CATEGORY_CREDIT');?>
</p></div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['page_cost_3']->value;?>
</div></li>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php } else { ?>
											<li><div><a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_pack3']->value;?>
" class="green_btn"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php }?>																					
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div><?php echo t('TXT_ANDROID_CREDIT_PACK');?>
 4</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_pack_4']->value;?>
</div></li>
											<li><div>10%</div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_added_4']->value;?>
<p><?php echo t('SHOP_CATEGORY_CREDIT');?>
</p></div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['page_cost_4']->value;?>
</div></li>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php } else { ?>
											<li><div><a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_pack4']->value;?>
" class="green_btn"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php }?>																					
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div><?php echo t('TXT_ANDROID_CREDIT_PACK');?>
 5</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><p><a target="blank" href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/226"><?php echo t('SITE_BTN_SEE_HERE');?>
</a></p></div></li>
											<li><div>15%</div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_added_5']->value;?>
<p><?php echo t('SHOP_CATEGORY_CREDIT');?>
</p></div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['page_cost_5']->value;?>
</div></li>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php } else { ?>
											<li><div><a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_pack5']->value;?>
" class="green_btn"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php }?>																					
										</ul>
									</div>
									<div class="item">
										<ul class="credit_packs_table_content">
											<li><div><?php echo t('TXT_ANDROID_CREDIT_PACK');?>
 6</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><p><a target="blank" href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/226"><?php echo t('SITE_BTN_SEE_HERE');?>
</a></p></div></li>
											<li><div>20%</div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_added_6']->value;?>
<p><?php echo t('SHOP_CATEGORY_CREDIT');?>
</p></div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['page_cost_6']->value;?>
</div></li>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php } else { ?>
											<li><div><a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_pack6']->value;?>
" class="green_btn"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php }?>																					
										</ul>
									</div>
									<div class="item">
			    						<ul class="credit_packs_table_content">
											<li><div><?php echo t('TXT_ANDROID_CREDIT_PACK');?>
 7</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><p><a target="blank" href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/226"><?php echo t('SITE_BTN_SEE_HERE');?>
</a></p></div></li>
											<li><div>25%</div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_added_7']->value;?>
<p><?php echo t('SHOP_CATEGORY_CREDIT');?>
</p></div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['page_cost_7']->value;?>
</div></li>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php } else { ?>
											<li><div><a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_pack7']->value;?>
" class="green_btn"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php }?>																					
										</ul>
									</div>
									<div class="item">				
										<ul class="credit_packs_table_content">
											<li><div><?php echo t('TXT_ANDROID_CREDIT_PACK');?>
 8</div></li>
											<li class="credit_packs_table_name">
												<ul>
													<li><div><?php echo t('SITE_TXT_PRICE');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_BONUS_CREDIT');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_CREDIT_ADDED');?>
</div></li>
													<li><div><?php echo t('SITE_TXT_COST_PAGE');?>
<sup>(1)</sup></div></li>
												</ul>
											</li>					
											<li><div><p><a target="blank" href="http://www.pamhelp.com/?/pamfax/Knowledgebase/Article/View/226"><?php echo t('SITE_BTN_SEE_HERE');?>
</a></p></div></li>
											<li><div>33%</div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['price_credit_added_8']->value;?>
<p><?php echo t('SHOP_CATEGORY_CREDIT');?>
</p></div></li>
											<li><div><?php echo $_smarty_tpl->tpl_vars['page_cost_8']->value;?>
</div></li>
<?php if (!isset($_smarty_tpl->tpl_vars['User']->value)) {?>
											<li><div><a href="#" class="green_btn" data-toggle="modal" data-target="#registrationModal"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php } else { ?>
											<li><div><a href="<?php echo $_smarty_tpl->tpl_vars['url_buy_pack8']->value;?>
" class="green_btn"><?php echo t('BTN_BUY_NOW');?>
</a></div></li>
<?php }?>																					
										</ul>
									</div>
								</div><!-- ___________ end carousel-inner / credit  ___________-->

								<!-- Controls -->
								<a class="left carousel-control" href="#carousel-credit-packs" data-slide="prev"></a>
								<a class="right carousel-control" href="#carousel-credit-packs" data-slide="next"></a>
							</div><!-- ___________end #carousel-credit-packs ___________-->
						</div><!-- ___________end credit_packs_table___________ -->
			
						<p class="table_signature"><sup>(1)</sup> <?php echo t('SITE_RATES_PACKS_PRICE_TIP');?>
</p>
					</div>
				</div>
			</section>
		</div>
	 </div>
</div> <!-- #content --><?php }
}
