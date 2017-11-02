<?php
/* Smarty version 3.1.29, created on 2017-10-31 00:33:43
  from "/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/adddomain.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f80b37ea2278_03367901',
  'file_dependency' => 
  array (
    '89db7bdd6196036022573668b010b353a856a90b' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/adddomain.tpl',
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
function content_59f80b37ea2278_03367901 ($_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/style.css" />

<?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/checkout.js"><?php echo '</script'; ?>
>

<div id="order-boxes">

    <div class="pull-md-right col-md-9">

        <?php if ($_smarty_tpl->tpl_vars['domain']->value == "register") {?>
            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navregisterdomain'];?>
</h1>
            </div>
        <?php } else { ?>
            <div class="header-lined">
                <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferinadomain'];?>
</h1>
            </div>
        <?php }?>

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
                <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                    <div class="field-row clearfix">
                        <div class="col-sm-12">
                            <label class="radio-inline product-radio"><input type="radio" name="domain" value="register"<?php if ($_smarty_tpl->tpl_vars['domain']->value == "register") {?> checked<?php }?> onclick="chooseDomainReg('register')" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainoption1part1'];?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainoption1part2'];?>
</label>
                            <div class="domain-option line-padded<?php if ($_smarty_tpl->tpl_vars['domain']->value != "register") {?> hidden<?php }?>" id="domopt-register">
                                <div class="col-sm-1 col-sm-offset-2 col-xs-3"><p class="form-control-static text-right">www.</p></div>
                                <div class="col-sm-5 col-xs-6"><input type="text" name="sld" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" /></div>
                                <div class="col-sm-2 col-xs-3"><select name="tld" class="form-control">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['registertlds']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_listtld_0_saved_item = isset($_smarty_tpl->tpl_vars['listtld']) ? $_smarty_tpl->tpl_vars['listtld'] : false;
$_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['listtld']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
$__foreach_listtld_0_saved_local_item = $_smarty_tpl->tpl_vars['listtld'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value == $_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['listtld'] = $__foreach_listtld_0_saved_local_item;
}
if ($__foreach_listtld_0_saved_item) {
$_smarty_tpl->tpl_vars['listtld'] = $__foreach_listtld_0_saved_item;
}
?>
                                </select></div>
                            </div>
                        </div>
                    </div>
                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                    <div class="field-row clearfix">
                        <div class="col-sm-12">
                            <label class="radio-inline product-radio"><input type="radio" name="domain" value="transfer"<?php if ($_smarty_tpl->tpl_vars['domain']->value == "transfer") {?> checked<?php }?> onclick="chooseDomainReg('transfer')" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainoption3'];?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</label>
                            <div class="domain-option line-padded<?php if ($_smarty_tpl->tpl_vars['domain']->value != "transfer") {?> hidden<?php }?>" id="domopt-transfer">
                                <div class="col-sm-1 col-sm-offset-2 col-xs-3"><p class="form-control-static text-right">www.</p></div>
                                <div class="col-sm-5 col-xs-6"><input type="text" name="sld_transfer" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" /></div>
                                <div class="col-sm-2 col-xs-3"><select name="tld_transfer" class="form-control">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['transfertlds']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_listtld_1_saved_item = isset($_smarty_tpl->tpl_vars['listtld']) ? $_smarty_tpl->tpl_vars['listtld'] : false;
$_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['listtld']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
$__foreach_listtld_1_saved_local_item = $_smarty_tpl->tpl_vars['listtld'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value == $_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['listtld'] = $__foreach_listtld_1_saved_local_item;
}
if ($__foreach_listtld_1_saved_item) {
$_smarty_tpl->tpl_vars['listtld'] = $__foreach_listtld_1_saved_item;
}
?>
                                </select></div>
                            </div>
                        </div>
                    </div>
                <?php }?>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['availabilityresults']->value) {?>

                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosedomains'];?>
</h2>

                <table class="styled">
                    <tr><th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainname'];?>
</th><th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstatus'];?>
</th><th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainmoreinfo'];?>
</th></tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['availabilityresults']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_result_2_saved_item = isset($_smarty_tpl->tpl_vars['result']) ? $_smarty_tpl->tpl_vars['result'] : false;
$__foreach_result_2_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['result'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['result']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$__foreach_result_2_saved_local_item = $_smarty_tpl->tpl_vars['result'];
?>
                        <tr class="text-center">
                            <td><?php echo $_smarty_tpl->tpl_vars['result']->value['domain'];?>
</td>
                            <td class="<?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == $_smarty_tpl->tpl_vars['searchvar']->value) {?>textgreen<?php } else { ?>textred<?php }?>"><label class="checkbox-inline"><?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == $_smarty_tpl->tpl_vars['searchvar']->value) {?><input type="checkbox" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['domain'];?>
"<?php if (in_array($_smarty_tpl->tpl_vars['result']->value['domain'],$_smarty_tpl->tpl_vars['domains']->value)) {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainunavailable'];
}?></label></td>
                            <td><?php if ($_smarty_tpl->tpl_vars['result']->value['regoptions']) {?><select name="domainsregperiod[<?php echo $_smarty_tpl->tpl_vars['result']->value['domain'];?>
]"><?php
$_from = $_smarty_tpl->tpl_vars['result']->value['regoptions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_regoption_3_saved_item = isset($_smarty_tpl->tpl_vars['regoption']) ? $_smarty_tpl->tpl_vars['regoption'] : false;
$__foreach_regoption_3_saved_key = isset($_smarty_tpl->tpl_vars['period']) ? $_smarty_tpl->tpl_vars['period'] : false;
$_smarty_tpl->tpl_vars['regoption'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['period'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['regoption']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['period']->value => $_smarty_tpl->tpl_vars['regoption']->value) {
$_smarty_tpl->tpl_vars['regoption']->_loop = true;
$__foreach_regoption_3_saved_local_item = $_smarty_tpl->tpl_vars['regoption'];
if ($_smarty_tpl->tpl_vars['regoption']->value[$_smarty_tpl->tpl_vars['domain']->value]) {?><option value="<?php echo $_smarty_tpl->tpl_vars['period']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['regoption']->value[$_smarty_tpl->tpl_vars['domain']->value];?>
</option><?php }
$_smarty_tpl->tpl_vars['regoption'] = $__foreach_regoption_3_saved_local_item;
}
if ($__foreach_regoption_3_saved_item) {
$_smarty_tpl->tpl_vars['regoption'] = $__foreach_regoption_3_saved_item;
}
if ($__foreach_regoption_3_saved_key) {
$_smarty_tpl->tpl_vars['period'] = $__foreach_regoption_3_saved_key;
}
?></select><?php }?></td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_2_saved_local_item;
}
if ($__foreach_result_2_saved_item) {
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_2_saved_item;
}
if ($__foreach_result_2_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_result_2_saved_key;
}
?>
                </table>

            <?php }?>

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
