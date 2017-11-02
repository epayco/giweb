<?php
/* Smarty version 3.1.29, created on 2017-10-31 00:36:31
  from "/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/includes/pageheader.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f80bdf1083e5_52062724',
  'file_dependency' => 
  array (
    '62e5098d064dd052d997e7e7694cf39129a43960' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/includes/pageheader.tpl',
      1 => 1503883323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f80bdf1083e5_52062724 ($_smarty_tpl) {
?>
<div class="header-lined text-center">
    <h2 class="title"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <?php if ($_smarty_tpl->tpl_vars['desc']->value) {?> <p><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</p><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
</div>
<?php }
}
