<?php
/* Smarty version 3.1.29, created on 2017-10-31 00:33:43
  from "/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/sidebar-categories-collapsed.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f80b37ef4c73_92925155',
  'file_dependency' => 
  array (
    'c654b2785ceb731394eff02a29c8c570299ed6b7' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/sidebar-categories-collapsed.tpl',
      1 => 1500283716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f80b37ef4c73_92925155 ($_smarty_tpl) {
?>
<div class="pull-left form-inline">
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>
">
        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordercategories'];?>
:
        <select name="gid" onchange="submit()" class="form-control">
        <?php
$_from = $_smarty_tpl->tpl_vars['productgroups']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_productgroup_0_saved_item = isset($_smarty_tpl->tpl_vars['productgroup']) ? $_smarty_tpl->tpl_vars['productgroup'] : false;
$__foreach_productgroup_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['productgroup'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['productgroup']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['productgroup']->value) {
$_smarty_tpl->tpl_vars['productgroup']->_loop = true;
$__foreach_productgroup_0_saved_local_item = $_smarty_tpl->tpl_vars['productgroup'];
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['productgroup']->value['gid'];?>
"<?php if ($_smarty_tpl->tpl_vars['gid']->value == $_smarty_tpl->tpl_vars['productgroup']->value['gid']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['productgroup']->value['name'];?>
</option>
        <?php
$_smarty_tpl->tpl_vars['productgroup'] = $__foreach_productgroup_0_saved_local_item;
}
if ($__foreach_productgroup_0_saved_item) {
$_smarty_tpl->tpl_vars['productgroup'] = $__foreach_productgroup_0_saved_item;
}
if ($__foreach_productgroup_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_productgroup_0_saved_key;
}
?>
        <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
            <option value="addons"<?php if ($_smarty_tpl->tpl_vars['gid']->value == "addons") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</option>
            <?php if ($_smarty_tpl->tpl_vars['renewalsenabled']->value) {?>
                <option value="renewals"<?php if ($_smarty_tpl->tpl_vars['gid']->value == "renewals") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewals'];?>
</option>
            <?php }?>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
            <option value="domains"<?php if ($_smarty_tpl->tpl_vars['domain']->value == "register") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navregisterdomain'];?>
</option>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
            <option value="domains"<?php if ($_smarty_tpl->tpl_vars['domain']->value == "transfer") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferinadomain'];?>
</option>
        <?php }?>
        </select>
    </form>
</div>

<?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['currencies']->value) {?>
    <div class="pull-right form-inline">
        <form method="post" action="cart.php?gid=<?php echo $_GET['gid'];?>
">
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
:
            <select name="currency" onchange="submit()" class="form-control">
                <?php
$_from = $_smarty_tpl->tpl_vars['currencies']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_curr_1_saved_item = isset($_smarty_tpl->tpl_vars['curr']) ? $_smarty_tpl->tpl_vars['curr'] : false;
$_smarty_tpl->tpl_vars['curr'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['curr']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['curr']->value) {
$_smarty_tpl->tpl_vars['curr']->_loop = true;
$__foreach_curr_1_saved_local_item = $_smarty_tpl->tpl_vars['curr'];
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['curr']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['curr']->value['id'] == $_smarty_tpl->tpl_vars['currency']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['curr']->value['code'];?>
</option>
                <?php
$_smarty_tpl->tpl_vars['curr'] = $__foreach_curr_1_saved_local_item;
}
if ($__foreach_curr_1_saved_item) {
$_smarty_tpl->tpl_vars['curr'] = $__foreach_curr_1_saved_item;
}
?>
            </select>
        </form>
    </div>
<?php }
}
}
