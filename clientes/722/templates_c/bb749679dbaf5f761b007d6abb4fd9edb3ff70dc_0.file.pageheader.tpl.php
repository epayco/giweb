<?php
/* Smarty version 3.1.29, created on 2017-06-20 04:18:22
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/six/includes/pageheader.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5948a20e312db7_98897812',
  'file_dependency' => 
  array (
    'bb749679dbaf5f761b007d6abb4fd9edb3ff70dc' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/six/includes/pageheader.tpl',
      1 => 1496207348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5948a20e312db7_98897812 ($_smarty_tpl) {
?>
<div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
</div>
<?php }
}
