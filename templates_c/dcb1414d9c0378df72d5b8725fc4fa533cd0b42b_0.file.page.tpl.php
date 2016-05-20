<?php
/* Smarty version 3.1.29, created on 2016-05-06 04:24:11
  from "C:\OpenServer\domains\PHP\website3\templates\page.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_572c54ab6c07e1_30461100',
  'file_dependency' => 
  array (
    'dcb1414d9c0378df72d5b8725fc4fa533cd0b42b' => 
    array (
      0 => 'C:\\OpenServer\\domains\\PHP\\website3\\templates\\page.tpl',
      1 => 1455546670,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/header.tpl' => 1,
    'file:modules/".((string)$_smarty_tpl->tpl_vars[\'tpl_name\']->value).".tpl' => 1,
    'file:modules/footer.tpl' => 1,
  ),
),false)) {
function content_572c54ab6c07e1_30461100 ($_smarty_tpl) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->tpl_vars['tpl_name'] = new Smarty_Variable($_smarty_tpl->tpl_vars['page']->value['page_tpl'], null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'tpl_name', 0);?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/".((string)$_smarty_tpl->tpl_vars['tpl_name']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:modules/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php }
}
