<?php
/* Smarty version 3.1.29, created on 2017-10-31 08:45:14
  from "/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/configureproductdomain.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f87e6a0e4ce3_55197939',
  'file_dependency' => 
  array (
    '0e2cf4002f43cb56e6dd5b700066478841801bc1' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/configureproductdomain.tpl',
      1 => 1500283716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f87e6a0e4ce3_55197939 ($_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/style.css" />

<?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/checkout.js"><?php echo '</script'; ?>
>

<div id="order-boxes">

    <div class="header-lined">
        <h1><?php echo $_smarty_tpl->tpl_vars['productinfo']->value['name'];?>
</h1>
    </div>

    <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductdomaindesc'];?>
</p>

    <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
        <div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</strong>
            <ul>
                <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

            </ul>
        </div>
    <?php }?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=add&pid=<?php echo $_smarty_tpl->tpl_vars['pid']->value;?>
">

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="fields-container">

                    <?php if ($_smarty_tpl->tpl_vars['incartdomains']->value) {?>
                        <div class="field-row clearfix">
                            <label class="radio-inline product-radio"><input type="radio" name="domainoption" value="incart" onclick="chooseDomainReg('incart')"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "incart") {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductdomainuseincart'];?>
</label>
                            <div class="row domain-option line-padded<?php if ($_smarty_tpl->tpl_vars['domainoption']->value != "incart") {?> hidden<?php }?>" id="domopt-incart">
                                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                                    <select name="incartdomain" class="form-control">
                                        <?php
$_from = $_smarty_tpl->tpl_vars['incartdomains']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_incartdomain_0_saved_item = isset($_smarty_tpl->tpl_vars['incartdomain']) ? $_smarty_tpl->tpl_vars['incartdomain'] : false;
$__foreach_incartdomain_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['incartdomain'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['incartdomain']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['incartdomain']->value) {
$_smarty_tpl->tpl_vars['incartdomain']->_loop = true;
$__foreach_incartdomain_0_saved_local_item = $_smarty_tpl->tpl_vars['incartdomain'];
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['incartdomain']->value;?>
</option>
                                        <?php
$_smarty_tpl->tpl_vars['incartdomain'] = $__foreach_incartdomain_0_saved_local_item;
}
if ($__foreach_incartdomain_0_saved_item) {
$_smarty_tpl->tpl_vars['incartdomain'] = $__foreach_incartdomain_0_saved_item;
}
if ($__foreach_incartdomain_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_incartdomain_0_saved_key;
}
?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                        <div class="field-row clearfix">
                            <label class="radio-inline product-radio"><input type="radio" name="domainoption" value="register"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "register") {?> checked<?php }?> onclick="chooseDomainReg('register')" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainoption1part1'];?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainoption1part2'];?>
</label>
                            <div class="row domain-option line-padded<?php if ($_smarty_tpl->tpl_vars['domainoption']->value != "register") {?> hidden<?php }?>" id="domopt-register">
                                <div class="col-sm-1 col-sm-offset-2 col-xs-3"><p class="form-control-static text-right">www.</p></div>
                                <div class="col-sm-5 col-xs-6"><input type="text" name="sld[0]" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" /></div>
                                <div class="col-sm-2 col-xs-3"><select name="tld[0]" class="form-control">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['registertlds']->value;
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
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <div class="field-row clearfix">
                            <label class="radio-inline product-radio"><input type="radio" name="domainoption" value="transfer"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "transfer") {?> checked<?php }?> onclick="chooseDomainReg('transfer')" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainoption3'];?>
 <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</label>
                            <div class="row domain-option line-padded<?php if ($_smarty_tpl->tpl_vars['domainoption']->value != "transfer") {?> hidden<?php }?>" id="domopt-transfer">
                                <div class="col-sm-1 col-sm-offset-2 col-xs-3"><p class="form-control-static text-right">www.</p></div>
                                <div class="col-sm-5 col-xs-6"><input type="text" name="sld[1]" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" /></div>
                                <div class="col-sm-2 col-xs-3"><select name="tld[1]" class="form-control">
                                    <?php
$_from = $_smarty_tpl->tpl_vars['transfertlds']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_listtld_2_saved_item = isset($_smarty_tpl->tpl_vars['listtld']) ? $_smarty_tpl->tpl_vars['listtld'] : false;
$_smarty_tpl->tpl_vars['listtld'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['listtld']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['listtld']->value) {
$_smarty_tpl->tpl_vars['listtld']->_loop = true;
$__foreach_listtld_2_saved_local_item = $_smarty_tpl->tpl_vars['listtld'];
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['listtld']->value == $_smarty_tpl->tpl_vars['tld']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['listtld']->value;?>
</option>
                                    <?php
$_smarty_tpl->tpl_vars['listtld'] = $__foreach_listtld_2_saved_local_item;
}
if ($__foreach_listtld_2_saved_item) {
$_smarty_tpl->tpl_vars['listtld'] = $__foreach_listtld_2_saved_item;
}
?>
                                </select></div>
                            </div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['owndomainenabled']->value) {?>
                        <div class="field-row clearfix">
                            <label class="radio-inline product-radio"><input type="radio" name="domainoption" value="owndomain"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "owndomain") {?> checked<?php }?> onclick="chooseDomainReg('owndomain')" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainoption2'];?>
</label>
                            <div class="row domain-option line-padded<?php if ($_smarty_tpl->tpl_vars['domainoption']->value != "owndomain") {?> hidden<?php }?>" id="domopt-owndomain">
                                <div class="col-sm-1 col-sm-offset-2 col-xs-3"><p class="form-control-static text-right">www.</p></div>
                                <div class="col-sm-5 col-xs-6"><input type="text" name="sld[2]" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" /></div>
                                <div class="col-sm-2 col-xs-3"><input type="text" name="tld[2]" value="<?php echo substr($_smarty_tpl->tpl_vars['tld']->value,1);?>
" class="form-control" autocapitalize="none" /></div>
                            </div>
                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['subdomains']->value) {?>
                        <div class="field-row clearfix">
                            <div class="col-sm-12">
                                <label class="radio-inline product-radio"><input type="radio" name="domainoption" value="subdomain"<?php if ($_smarty_tpl->tpl_vars['domainoption']->value == "subdomain") {?> checked<?php }?> onclick="chooseDomainReg('subdomain')" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainoption4'];?>
</label>
                                <div class="domain-option line-padded<?php if ($_smarty_tpl->tpl_vars['domainoption']->value != "subdomain") {?> hidden<?php }?>" id="domopt-subdomain">
                                    <div class="col-sm-1 col-sm-offset-2 col-xs-3"><p class="form-control-static text-right">http://</p></div>
                                    <div class="col-sm-3 col-xs-3"><input type="text" name="sld[3]" value="<?php echo $_smarty_tpl->tpl_vars['sld']->value;?>
" class="form-control" autocapitalize="none" /></div>
                                    <div class="col-sm-4 col-xs-6">
                                        <select name="tld[3]" class="form-control">
                                            <?php
$_from = $_smarty_tpl->tpl_vars['subdomains']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_subdomain_3_saved_item = isset($_smarty_tpl->tpl_vars['subdomain']) ? $_smarty_tpl->tpl_vars['subdomain'] : false;
$__foreach_subdomain_3_saved_key = isset($_smarty_tpl->tpl_vars['subid']) ? $_smarty_tpl->tpl_vars['subid'] : false;
$_smarty_tpl->tpl_vars['subdomain'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['subid'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['subdomain']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['subid']->value => $_smarty_tpl->tpl_vars['subdomain']->value) {
$_smarty_tpl->tpl_vars['subdomain']->_loop = true;
$__foreach_subdomain_3_saved_local_item = $_smarty_tpl->tpl_vars['subdomain'];
?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['subid']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['subdomain']->value;?>
</option>
                                            <?php
$_smarty_tpl->tpl_vars['subdomain'] = $__foreach_subdomain_3_saved_local_item;
}
if ($__foreach_subdomain_3_saved_item) {
$_smarty_tpl->tpl_vars['subdomain'] = $__foreach_subdomain_3_saved_item;
}
if ($__foreach_subdomain_3_saved_key) {
$_smarty_tpl->tpl_vars['subid'] = $__foreach_subdomain_3_saved_key;
}
?>
                                        </select>
                                    </div>
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
$__foreach_result_4_saved_item = isset($_smarty_tpl->tpl_vars['result']) ? $_smarty_tpl->tpl_vars['result'] : false;
$__foreach_result_4_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['result'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['result']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['result']->value) {
$_smarty_tpl->tpl_vars['result']->_loop = true;
$__foreach_result_4_saved_local_item = $_smarty_tpl->tpl_vars['result'];
?>
                            <tr class="text-center"><td><?php echo $_smarty_tpl->tpl_vars['result']->value['domain'];?>
</td><td class="<?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == $_smarty_tpl->tpl_vars['searchvar']->value) {?>textgreen<?php } else { ?>textred<?php }?>"><?php if ($_smarty_tpl->tpl_vars['result']->value['status'] == $_smarty_tpl->tpl_vars['searchvar']->value) {?><input type="checkbox" name="domains[]" value="<?php echo $_smarty_tpl->tpl_vars['result']->value['domain'];?>
"<?php if ($_smarty_tpl->tpl_vars['num']->value == 0) {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainavailable'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['domainunavailable'];
}?></td><td><?php if ($_smarty_tpl->tpl_vars['result']->value['regoptions']) {?><select name="domainsregperiod[<?php echo $_smarty_tpl->tpl_vars['result']->value['domain'];?>
]"><?php
$_from = $_smarty_tpl->tpl_vars['result']->value['regoptions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_regoption_5_saved_item = isset($_smarty_tpl->tpl_vars['regoption']) ? $_smarty_tpl->tpl_vars['regoption'] : false;
$__foreach_regoption_5_saved_key = isset($_smarty_tpl->tpl_vars['period']) ? $_smarty_tpl->tpl_vars['period'] : false;
$_smarty_tpl->tpl_vars['regoption'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['period'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['regoption']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['period']->value => $_smarty_tpl->tpl_vars['regoption']->value) {
$_smarty_tpl->tpl_vars['regoption']->_loop = true;
$__foreach_regoption_5_saved_local_item = $_smarty_tpl->tpl_vars['regoption'];
if ($_smarty_tpl->tpl_vars['regoption']->value[$_smarty_tpl->tpl_vars['domainoption']->value]) {?><option value="<?php echo $_smarty_tpl->tpl_vars['period']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['period']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
 @ <?php echo $_smarty_tpl->tpl_vars['regoption']->value[$_smarty_tpl->tpl_vars['domainoption']->value];?>
</option><?php }
$_smarty_tpl->tpl_vars['regoption'] = $__foreach_regoption_5_saved_local_item;
}
if ($__foreach_regoption_5_saved_item) {
$_smarty_tpl->tpl_vars['regoption'] = $__foreach_regoption_5_saved_item;
}
if ($__foreach_regoption_5_saved_key) {
$_smarty_tpl->tpl_vars['period'] = $__foreach_regoption_5_saved_key;
}
?></select><?php }?></td></tr>
                        <?php
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_4_saved_local_item;
}
if ($__foreach_result_4_saved_item) {
$_smarty_tpl->tpl_vars['result'] = $__foreach_result_4_saved_item;
}
if ($__foreach_result_4_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_result_4_saved_key;
}
?>
                    </table>

                <?php }?>

                <?php if ($_smarty_tpl->tpl_vars['freedomaintlds']->value) {?>
                    <p>* <em><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainregistration'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderfreedomainappliesto'];?>
: <?php echo $_smarty_tpl->tpl_vars['freedomaintlds']->value;?>
</em></p>
                <?php }?>

            </div>

            <div class="clearfix"></div>

        </div>

        <div class="line-padded text-center">
            <button type="submit" class="btn btn-primary btn-lg"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['continue'];?>
 &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
        </div>

    </form>

    <div class="secure-warning">
        <img src="assets/img/padlock.gif" align="absmiddle" border="0" alt="Secure Transaction" /> &nbsp;<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure'];?>
 (<strong><?php echo $_smarty_tpl->tpl_vars['ipaddress']->value;?>
</strong>) <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure2'];?>

    </div>

</div>
<?php }
}
