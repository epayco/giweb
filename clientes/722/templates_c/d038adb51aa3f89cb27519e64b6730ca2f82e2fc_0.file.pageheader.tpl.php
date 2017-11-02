<?php
/* Smarty version 3.1.29, created on 2017-08-28 01:00:36
  from "/var/www/vhosts/colombiaredes.net/httpdocs/new/clientes/templates/iconhostwhmcs/includes/pageheader.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59a36b34bbb845_97602184',
  'file_dependency' => 
  array (
    'd038adb51aa3f89cb27519e64b6730ca2f82e2fc' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/new/clientes/templates/iconhostwhmcs/includes/pageheader.tpl',
      1 => 1499127447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59a36b34bbb845_97602184 ($_smarty_tpl) {
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
