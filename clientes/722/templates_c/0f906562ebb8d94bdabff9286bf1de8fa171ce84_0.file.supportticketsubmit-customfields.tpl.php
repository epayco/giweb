<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:28:29
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/supportticketsubmit-customfields.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae12dc89540_63166882',
  'file_dependency' => 
  array (
    '0f906562ebb8d94bdabff9286bf1de8fa171ce84' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/supportticketsubmit-customfields.tpl',
      1 => 1499127394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ae12dc89540_63166882 ($_smarty_tpl) {
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
