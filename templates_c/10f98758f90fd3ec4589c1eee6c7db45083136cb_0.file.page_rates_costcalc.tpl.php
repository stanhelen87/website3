<?php
/* Smarty version 3.1.29, created on 2016-05-06 03:58:09
  from "C:\OpenServer\domains\PHP\website3\templates\modules\page_rates_costcalc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c4e91ec9df1_25957934',
  'file_dependency' => 
  array (
    '10f98758f90fd3ec4589c1eee6c7db45083136cb' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\modules\\page_rates_costcalc.tpl',
      1 => 1455546669,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_572c4e91ec9df1_25957934 ($_smarty_tpl) {
?>
<div id="content" class="site-content">
	<div id="primary" class="content-area"> 
		<div class="content">
			<section class="bg_gradient calculate">
				<h1><?php echo t('SITE_RATES_COSTCALC_HEAD');?>
</h1>
				<small><?php echo t('SITE_RATES_COSTCALC_SUBHEAD');?>
</small>

				<div class="separate_block">
					<div class="container">
						<mark><p><?php echo t('SITE_RATES_COSTCALC_HINT');?>
</p></mark>
						<small><?php echo t('SITE_RATES_COSTCALC_NOTE');?>
</small>
						<form id="rates_form" class="pamfax_form"> 
							<label><?php echo t('TXT_FAX_NUMBER');?>
:</label>
							<input type="text" name="fax_number" id="fax_number">
							<input class="rose_btn" type="submit" value="<?php echo t('SITE_BTN_CALCULATE');?>
">
						</form>
					</div>
				</div>
	
				<div class="text-center">
				</div>
			</section>
		</div>
	 </div>
</div> <!-- #content --><?php }
}
