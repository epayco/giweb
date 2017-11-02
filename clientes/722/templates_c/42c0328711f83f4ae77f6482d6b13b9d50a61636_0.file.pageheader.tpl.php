<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:27:15
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/includes/pageheader.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae0e37a9a09_21150345',
  'file_dependency' => 
  array (
    '42c0328711f83f4ae77f6482d6b13b9d50a61636' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/includes/pageheader.tpl',
      1 => 1499127447,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ae0e37a9a09_21150345 ($_smarty_tpl) {
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
