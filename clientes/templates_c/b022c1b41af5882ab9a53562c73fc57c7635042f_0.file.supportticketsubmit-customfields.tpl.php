<?php
/* Smarty version 3.1.29, created on 2017-10-31 08:20:13
  from "/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/supportticketsubmit-customfields.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f8788dd1b0c1_90198304',
  'file_dependency' => 
  array (
    'b022c1b41af5882ab9a53562c73fc57c7635042f' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/supportticketsubmit-customfields.tpl',
      1 => 1503883259,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f8788dd1b0c1_90198304 ($_smarty_tpl) {
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_0_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_0_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
    <div class="form-group">
        <label for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>
</label>
        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

        <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
            <p class="help-block"><?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>
</p>
        <?php }?>
    </div>
<?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_0_saved_local_item;
}
if ($__foreach_customfield_0_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_0_saved_item;
}
}
}
