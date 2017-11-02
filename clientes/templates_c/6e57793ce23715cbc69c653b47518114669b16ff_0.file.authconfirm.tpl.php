<?php
/* Smarty version 3.1.29, created on 2017-10-31 00:28:14
  from "/home/runcloud/webapps/web-giweb/clientes/admin/templates/blend/authconfirm.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f809ee3e5be7_51103591',
  'file_dependency' => 
  array (
    '6e57793ce23715cbc69c653b47518114669b16ff' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/admin/templates/blend/authconfirm.tpl',
      1 => 1500283714,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f809ee3e5be7_51103591 ($_smarty_tpl) {
?>
<style>
.contentarea {
    background-color: #f8f8f8;
}
</style>

<div class="auth-container">

    <h2>Confirm password to continue</h2>

    <p>You are entering an administrative area of WHMCS and must confirm your password to continue.</p>

    <?php if ($_smarty_tpl->tpl_vars['incorrect']->value) {?>
        <div class="alert alert-danger text-center" style="padding:5px;margin-bottom:10px;">Password incorrect</div>
    <?php }?>

    <form method="post" action="">
        <input type="hidden" name="authconfirm" value="1">

        <div class="form-group">
            <label for="inputConfirmPassword">Password</label>
            <input type="password" class="form-control" id="inputConfirmPassword" name="confirmpw" placeholder="" autofocus>
        </div>

        <?php
$_from = $_smarty_tpl->tpl_vars['post_fields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_value_0_saved_item = isset($_smarty_tpl->tpl_vars['value']) ? $_smarty_tpl->tpl_vars['value'] : false;
$__foreach_value_0_saved_key = isset($_smarty_tpl->tpl_vars['name']) ? $_smarty_tpl->tpl_vars['name'] : false;
$_smarty_tpl->tpl_vars['value'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['name'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['value']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
$__foreach_value_0_saved_local_item = $_smarty_tpl->tpl_vars['value'];
?>
            <input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" />
        <?php
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_local_item;
}
if ($__foreach_value_0_saved_item) {
$_smarty_tpl->tpl_vars['value'] = $__foreach_value_0_saved_item;
}
if ($__foreach_value_0_saved_key) {
$_smarty_tpl->tpl_vars['name'] = $__foreach_value_0_saved_key;
}
?>

        <button type="submit" class="btn btn-primary btn-block">Confirm password</button>
    </form>

</div>
<?php }
}
