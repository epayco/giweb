<?php
/* Smarty version 3.1.29, created on 2017-10-31 08:35:13
  from "/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/products.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f87c11e8ae73_59261766',
  'file_dependency' => 
  array (
    '9eedf38ccaea8d452837bff8db86e5a8d71035fc' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/products.tpl',
      1 => 1500283716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories-collapsed.tpl' => 1,
  ),
),false)) {
function content_59f87c11e8ae73_59261766 ($_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/style.css" />

<div id="order-boxes">

    <div class="pull-md-right col-md-9">

        <div class="header-lined">
            <h1><?php echo $_smarty_tpl->tpl_vars['groupname']->value;?>
</h1>
        </div>

    </div>

    <div class="col-md-3 pull-md-left sidebar hidden-xs hidden-sm">

        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    </div>

    <div class="col-md-9 pull-md-right">

        <div class="line-padded visible-xs visible-sm clearfix">

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        </div>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=add">

            <div class="fields-container">
                <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_0_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_0_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                    <div class="field-row clearfix">
                        <div class="col-xs-12">
                            <label class="radio-inline product-radio"><input type="radio" name="pid" id="pid<?php echo $_smarty_tpl->tpl_vars['product']->value['pid'];?>
" value="<?php if ($_smarty_tpl->tpl_vars['product']->value['bid']) {?>b<?php echo $_smarty_tpl->tpl_vars['product']->value['bid'];
} else {
echo $_smarty_tpl->tpl_vars['product']->value['pid'];
}?>"<?php if ($_smarty_tpl->tpl_vars['product']->value['qty'] == "0") {?> disabled<?php }?> /> <strong><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</strong> <?php if ($_smarty_tpl->tpl_vars['product']->value['qty'] != '') {?><em>(<?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderavailable'];?>
)</em><?php }
if ($_smarty_tpl->tpl_vars['product']->value['description']) {?> - <?php echo $_smarty_tpl->tpl_vars['product']->value['description'];
}?></label>
                        </div>
                    </div>
            <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_local_item;
}
if ($__foreach_product_0_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_0_saved_item;
}
?>
            </div>

            <div class="line-padded text-center">
                <button type="submit" class="btn btn-primary btn-lg"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
 &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
            </div>

        </form>

    </div>

    <div class="clearfix"></div>

    <div class="secure-warning">
        <img src="assets/img/padlock.gif" align="absmiddle" border="0" alt="Secure Transaction" /> &nbsp;<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure'];?>
 (<strong><?php echo $_smarty_tpl->tpl_vars['ipaddress']->value;?>
</strong>) <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure2'];?>

    </div>

</div>
<?php }
}
