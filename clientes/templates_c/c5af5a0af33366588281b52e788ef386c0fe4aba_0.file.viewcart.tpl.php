<?php
/* Smarty version 3.1.29, created on 2017-10-31 14:41:04
  from "/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/viewcart.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f8d1d03c95d8_19430408',
  'file_dependency' => 
  array (
    'c5af5a0af33366588281b52e788ef386c0fe4aba' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/orderforms/boxes/viewcart.tpl',
      1 => 1500283716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:six/includes/pwstrength.tpl' => 1,
  ),
),false)) {
function content_59f8d1d03c95d8_19430408 ($_smarty_tpl) {
?>
<link rel="stylesheet" type="text/css" href="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/style.css" />

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/StatesDropdown.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/PasswordStrength.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH_JS']->value;?>
/CreditCardValidation.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/checkout.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
// Used by the JS function removeItem confirm box.
var removeItemText = '<?php echo preg_replace("%(?<!\\\\)'%", "\'",$_smarty_tpl->tpl_vars['LANG']->value['cartremoveitemconfirm']);?>
';

<?php echo '</script'; ?>
>

<div id="order-boxes">

    <?php if (!$_smarty_tpl->tpl_vars['checkout']->value) {?>

        <div class="header-lined">
            <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttitle'];?>
</h1>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['bundlewarnings']->value) {?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bundlereqsnotmet'];?>
</strong><br />
                <ul>
                    <?php
$_from = $_smarty_tpl->tpl_vars['bundlewarnings']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_warning_0_saved_item = isset($_smarty_tpl->tpl_vars['warning']) ? $_smarty_tpl->tpl_vars['warning'] : false;
$_smarty_tpl->tpl_vars['warning'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['warning']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
$_smarty_tpl->tpl_vars['warning']->_loop = true;
$__foreach_warning_0_saved_local_item = $_smarty_tpl->tpl_vars['warning'];
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
</li>
                    <?php
$_smarty_tpl->tpl_vars['warning'] = $__foreach_warning_0_saved_local_item;
}
if ($__foreach_warning_0_saved_item) {
$_smarty_tpl->tpl_vars['warning'] = $__foreach_warning_0_saved_item;
}
?>
                </ul>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</strong>
                <ul>
                    <?php echo $_smarty_tpl->tpl_vars['errormessage']->value;?>

                </ul>
            </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['promotioncode']->value && $_smarty_tpl->tpl_vars['rawdiscount']->value == "0.00") {?>
            <div class="errorbox"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['promoappliedbutnodiscount'];?>
</div>
        <?php }?>

        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>
?a=view">

            <table class="styled">
                <tr>
                    <th width="55%"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdesc'];?>
</td>
                    <th width="45%"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprice'];?>
</td>
                </tr>
                <?php
$_from = $_smarty_tpl->tpl_vars['products']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_product_1_saved_item = isset($_smarty_tpl->tpl_vars['product']) ? $_smarty_tpl->tpl_vars['product'] : false;
$__foreach_product_1_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['product'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['product']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->_loop = true;
$__foreach_product_1_saved_local_item = $_smarty_tpl->tpl_vars['product'];
?>
                    <tr>
                        <td>
                            <strong><em><?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo']['groupname'];?>
</em> - <?php echo $_smarty_tpl->tpl_vars['product']->value['productinfo']['name'];?>
</strong><?php if ($_smarty_tpl->tpl_vars['product']->value['domain']) {?> (<?php echo $_smarty_tpl->tpl_vars['product']->value['domain'];?>
)<?php }?><br />
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['configoptions']) {?>
                                <?php
$_from = $_smarty_tpl->tpl_vars['product']->value['configoptions'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_configoption_2_saved_item = isset($_smarty_tpl->tpl_vars['configoption']) ? $_smarty_tpl->tpl_vars['configoption'] : false;
$__foreach_configoption_2_saved_key = isset($_smarty_tpl->tpl_vars['confnum']) ? $_smarty_tpl->tpl_vars['confnum'] : false;
$_smarty_tpl->tpl_vars['configoption'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['confnum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['configoption']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['confnum']->value => $_smarty_tpl->tpl_vars['configoption']->value) {
$_smarty_tpl->tpl_vars['configoption']->_loop = true;
$__foreach_configoption_2_saved_local_item = $_smarty_tpl->tpl_vars['configoption'];
?>
                                    &nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['configoption']->value['name'];?>
: <?php if ($_smarty_tpl->tpl_vars['configoption']->value['type'] == 1 || $_smarty_tpl->tpl_vars['configoption']->value['type'] == 2) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['configoption']->value['option'];?>

                                    <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['type'] == 3) {?>
                                        <?php if ($_smarty_tpl->tpl_vars['configoption']->value['qty']) {
echo $_smarty_tpl->tpl_vars['LANG']->value['yes'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['no'];
}?>
                                    <?php } elseif ($_smarty_tpl->tpl_vars['configoption']->value['type'] == 4) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['configoption']->value['qty'];?>
 x <?php echo $_smarty_tpl->tpl_vars['configoption']->value['option'];?>

                                    <?php }?><br />
                                <?php
$_smarty_tpl->tpl_vars['configoption'] = $__foreach_configoption_2_saved_local_item;
}
if ($__foreach_configoption_2_saved_item) {
$_smarty_tpl->tpl_vars['configoption'] = $__foreach_configoption_2_saved_item;
}
if ($__foreach_configoption_2_saved_key) {
$_smarty_tpl->tpl_vars['confnum'] = $__foreach_configoption_2_saved_key;
}
?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['allowqty']) {?>
                                <br /><br />
                                <div class="text-right">
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartqtyenterquantity'];?>
 <input type="text" name="qty[<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
]" size="3" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['qty'];?>
" /> <input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartqtyupdate'];?>
" />
                                </div>
                            <?php }?>
                            <div class="text-right">
                                <a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=confproduct&i=<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
" class="btn btn-default btn-xs"><i class="fa fa-pencil"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['carteditproductconfig'];?>
</a>
                                <a href="#" onclick="removeItem('p','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremove'];?>
</a>
                            </div>
                        </td>
                        <td class="text-center">
                            <strong>
                                <?php echo $_smarty_tpl->tpl_vars['product']->value['pricingtext'];?>

                                <?php if ($_smarty_tpl->tpl_vars['product']->value['proratadate']) {?><br />(<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderprorata'];?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['proratadate'];?>
)<?php }?>
                            </strong>
                        </td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->tpl_vars['product']->value['addons'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_addon_3_saved_item = isset($_smarty_tpl->tpl_vars['addon']) ? $_smarty_tpl->tpl_vars['addon'] : false;
$__foreach_addon_3_saved_key = isset($_smarty_tpl->tpl_vars['addonnum']) ? $_smarty_tpl->tpl_vars['addonnum'] : false;
$_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addonnum'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addon']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['addonnum']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
$__foreach_addon_3_saved_local_item = $_smarty_tpl->tpl_vars['addon'];
?>
                        <tr class="carttableproduct">
                            <td>
                                <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderaddon'];?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>

                            </td>
                            <td class="text-center">
                                <strong><?php echo $_smarty_tpl->tpl_vars['addon']->value['pricingtext'];?>
</strong>
                            </td>
                        </tr>
                    <?php
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_3_saved_local_item;
}
if ($__foreach_addon_3_saved_item) {
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_3_saved_item;
}
if ($__foreach_addon_3_saved_key) {
$_smarty_tpl->tpl_vars['addonnum'] = $__foreach_addon_3_saved_key;
}
?>
                <?php
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_local_item;
}
if ($__foreach_product_1_saved_item) {
$_smarty_tpl->tpl_vars['product'] = $__foreach_product_1_saved_item;
}
if ($__foreach_product_1_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_product_1_saved_key;
}
?>
                <?php
$_from = $_smarty_tpl->tpl_vars['addons']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_addon_4_saved_item = isset($_smarty_tpl->tpl_vars['addon']) ? $_smarty_tpl->tpl_vars['addon'] : false;
$__foreach_addon_4_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['addon'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addon']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['addon']->value) {
$_smarty_tpl->tpl_vars['addon']->_loop = true;
$__foreach_addon_4_saved_local_item = $_smarty_tpl->tpl_vars['addon'];
?>
                    <tr>
                        <td>
                            <strong><?php echo $_smarty_tpl->tpl_vars['addon']->value['name'];?>
</strong><br />
                            <?php echo $_smarty_tpl->tpl_vars['addon']->value['productname'];
if ($_smarty_tpl->tpl_vars['addon']->value['domainname']) {?> - <?php echo $_smarty_tpl->tpl_vars['addon']->value['domainname'];
}?>
                        </td>
                        <td class="text-center">
                            <strong><?php echo $_smarty_tpl->tpl_vars['addon']->value['pricingtext'];?>
</strong>
                        </td>
                    </tr>
                    <tr class="carttableconfig">
                        <td>
                            <a href="#" onclick="removeItem('a','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false"class="textred">[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremove'];?>
]</a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_4_saved_local_item;
}
if ($__foreach_addon_4_saved_item) {
$_smarty_tpl->tpl_vars['addon'] = $__foreach_addon_4_saved_item;
}
if ($__foreach_addon_4_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_addon_4_saved_key;
}
?>
                <?php
$_from = $_smarty_tpl->tpl_vars['domains']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_domain_5_saved_item = isset($_smarty_tpl->tpl_vars['domain']) ? $_smarty_tpl->tpl_vars['domain'] : false;
$__foreach_domain_5_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['domain']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
$__foreach_domain_5_saved_local_item = $_smarty_tpl->tpl_vars['domain'];
?>
                    <tr>
                        <td>
                            <strong><?php if ($_smarty_tpl->tpl_vars['domain']->value['type'] == "register") {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomainregistration'];
} else {
echo $_smarty_tpl->tpl_vars['LANG']->value['orderdomaintransfer'];
}?></strong> - <?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
 - <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
<br />
                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwarding']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>
<br /><?php }?>
                        </td>
                        <td class="text-center">
                            <strong><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
</strong>
                        </td>
                    </tr>
                    <tr class="carttableconfig">
                        <td>
                            <a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=confdomains" class="textgreen">[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartconfigdomainextras'];?>
]</a>
                            <a href="#" onclick="removeItem('d','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false" class="textred">[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremove'];?>
]</a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['domain'] = $__foreach_domain_5_saved_local_item;
}
if ($__foreach_domain_5_saved_item) {
$_smarty_tpl->tpl_vars['domain'] = $__foreach_domain_5_saved_item;
}
if ($__foreach_domain_5_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_domain_5_saved_key;
}
?>
                <?php
$_from = $_smarty_tpl->tpl_vars['renewals']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_domain_6_saved_item = isset($_smarty_tpl->tpl_vars['domain']) ? $_smarty_tpl->tpl_vars['domain'] : false;
$__foreach_domain_6_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['domain'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['domain']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['domain']->value) {
$_smarty_tpl->tpl_vars['domain']->_loop = true;
$__foreach_domain_6_saved_local_item = $_smarty_tpl->tpl_vars['domain'];
?>
                    <tr>
                        <td>
                            <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewal'];?>
</strong> - <?php echo $_smarty_tpl->tpl_vars['domain']->value['domain'];?>
 - <?php echo $_smarty_tpl->tpl_vars['domain']->value['regperiod'];?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderyears'];?>
<br />
                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['dnsmanagement']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domaindnsmanagement'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['emailforwarding']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainemailforwarding'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['domain']->value['idprotection']) {?>&nbsp;&raquo; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainidprotection'];?>
<br /><?php }?>
                        </td>
                        <td class="text-center">
                            <strong><?php echo $_smarty_tpl->tpl_vars['domain']->value['price'];?>
</strong>
                        </td>
                    </tr>
                    <tr class="carttableconfig">
                        <td>
                            <a href="#" onclick="removeItem('r','<?php echo $_smarty_tpl->tpl_vars['num']->value;?>
');return false" class="textred">[<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartremove'];?>
]</a>
                        </td>
                        <td>&nbsp;</td>
                    </tr>
                <?php
$_smarty_tpl->tpl_vars['domain'] = $__foreach_domain_6_saved_local_item;
}
if ($__foreach_domain_6_saved_item) {
$_smarty_tpl->tpl_vars['domain'] = $__foreach_domain_6_saved_item;
}
if ($__foreach_domain_6_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_domain_6_saved_key;
}
?>
                <?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?>
                    <tr>
                        <td colspan="2" class="text-center">
                            <br />
                            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartempty'];?>

                            <br /><br />
                        </td>
                    </tr>
                <?php }?>
                <tr class="carttablesummary">
                    <td class="left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersubtotal'];?>
: &nbsp;</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['subtotal']->value;?>
</td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['promotioncode']->value) {?>
                    <tr class="carttablesummary">
                        <td class="left"><?php echo $_smarty_tpl->tpl_vars['promotiondescription']->value;?>
: &nbsp;</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['discount']->value;?>
</td>
                    </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['taxrate']->value) {?>
                    <tr class="carttablesummary">
                        <td class="left"><?php echo $_smarty_tpl->tpl_vars['taxname']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate']->value;?>
%: &nbsp;</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['taxtotal']->value;?>
</td>
                    </tr>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['taxrate2']->value) {?>
                    <tr class="carttablesummary">
                        <td class="left"><?php echo $_smarty_tpl->tpl_vars['taxname2']->value;?>
 @ <?php echo $_smarty_tpl->tpl_vars['taxrate2']->value;?>
%: &nbsp;</td>
                        <td align="center"><?php echo $_smarty_tpl->tpl_vars['taxtotal2']->value;?>
</td>
                    </tr>
                <?php }?>
                <tr class="carttablesummary">
                    <td class="left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
: &nbsp;</td>
                    <td align="center"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['totalrecurringmonthly']->value || $_smarty_tpl->tpl_vars['totalrecurringquarterly']->value || $_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value || $_smarty_tpl->tpl_vars['totalrecurringannually']->value || $_smarty_tpl->tpl_vars['totalrecurringbiennially']->value || $_smarty_tpl->tpl_vars['totalrecurringtriennially']->value) {?>
                    <tr class="carttablesummary">
                        <td class="left"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalrecurring'];?>
: &nbsp;</td>
                        <td align="center">
                            <?php if ($_smarty_tpl->tpl_vars['totalrecurringmonthly']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringmonthly']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermmonthly'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['totalrecurringquarterly']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringquarterly']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermquarterly'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringsemiannually']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermsemiannually'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['totalrecurringannually']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringannually']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermannually'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['totalrecurringbiennially']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringbiennially']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermbiennially'];?>
<br /><?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['totalrecurringtriennially']->value) {
echo $_smarty_tpl->tpl_vars['totalrecurringtriennially']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymenttermtriennially'];?>
<br /><?php }?>
                        </td>
                    </tr>
                <?php }?>
            </table>

        </form>

        <div class="row line-padded">
            <div class="col-sm-7 text-center">
                <div id="promoAddText">
                    <span class="text-muted">Have a promotion code? <a href="#" onclick="showPromoInput();return false">Click here to add it</a></span>
                </div>
                <div id="promoInput" class="hidden">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="cart.php?a=view">
                            <div class="input-group">
                                <input type="text" name="promocode" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartenterpromo'];?>
" />
                                <div class="input-group-btn">
                                    <input type="submit" name="validatepromo" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpromovalidatebutton'];?>
" class="btn btn-warning" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['promotioncode']->value) {
echo $_smarty_tpl->tpl_vars['promotioncode']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['promotiondescription']->value;?>
<br /><a href="<?php echo $_SERVER['PHP_SELF'];?>
?a=removepromo"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderdontusepromo'];?>
</a><?php } else {
}?>
            </div>
            <div class="col-sm-5 text-center">
                <?php
$_from = $_smarty_tpl->tpl_vars['gatewaysoutput']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_gatewayoutput_7_saved_item = isset($_smarty_tpl->tpl_vars['gatewayoutput']) ? $_smarty_tpl->tpl_vars['gatewayoutput'] : false;
$_smarty_tpl->tpl_vars['gatewayoutput'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['gatewayoutput']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['gatewayoutput']->value) {
$_smarty_tpl->tpl_vars['gatewayoutput']->_loop = true;
$__foreach_gatewayoutput_7_saved_local_item = $_smarty_tpl->tpl_vars['gatewayoutput'];
?>
                    <div><?php echo $_smarty_tpl->tpl_vars['gatewayoutput']->value;?>
</div>
                <?php
$_smarty_tpl->tpl_vars['gatewayoutput'] = $__foreach_gatewayoutput_7_saved_local_item;
}
if ($__foreach_gatewayoutput_7_saved_item) {
$_smarty_tpl->tpl_vars['gatewayoutput'] = $__foreach_gatewayoutput_7_saved_item;
}
?>
                <form method="post" action="cart.php?a=checkout">
                    <a href="cart.php" class="btn btn-default"><i class="fa fa-shopping-cart"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['continueshopping'];?>
</a>
                    <button type="submit" class="btn btn-primary btn-lg"<?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?> disabled="disabled"<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout'];?>
 &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                </form>
            </div>
        </div>

    <?php } else { ?>

        <div class="header-lined">
            <h1><?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout'];?>
</h1>
        </div>

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
?a=checkout" name="orderfrm" id="frmCheckout">
            <input type="hidden" name="submit" value="true" />
            <input type="hidden" name="custtype" id="inputCustType" value="<?php echo $_smarty_tpl->tpl_vars['custtype']->value;?>
" />

            <div id="signupContainer"<?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['custtype']->value == "existing") {?> class="hidden"<?php }?>>

            <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <div class="alert alert-warning" role="alert">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['alreadyregistered'];?>
</strong> <a href="#" onclick="showLogin();return false" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clickheretologin'];?>
</a>
                </div>
            <?php }?>

            <div class="row">
                <div class="col-sm-6 form-horizontal">
                    <div class="form-group">
                        <label for="inputFirstName" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="firstname" id="inputFirstName" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['firstname'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLastName" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="lastname" id="inputLastName" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['lastname'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCompanyName" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="companyname" id="inputCompanyName" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['companyname'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                        <div class="col-md-8">
                            <input type="email" name="email" id="inputEmail" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['email'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPhone" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="phonenumber" id="inputPhone" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['phonenumber'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 form-horizontal">
                    <div class="form-group">
                        <label for="inputAddress1" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="address1" id="inputAddress1" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address1'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="address2" id="inputAddress2" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['address2'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCity" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="city" id="inputCity" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['city'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputState" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="state" id="inputState" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['state'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPostcode" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
                        <div class="col-md-8">
                            <input type="text" name="postcode" id="inputPostcode" value="<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['postcode'];?>
" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?> />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputCountry" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
                        <div class="col-md-8">
                            <select name="country" id="inputCountry" class="form-control"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?> disabled="disabled"<?php }?>>
                            <?php
$_from = $_smarty_tpl->tpl_vars['countries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_countrylabel_8_saved_item = isset($_smarty_tpl->tpl_vars['countrylabel']) ? $_smarty_tpl->tpl_vars['countrylabel'] : false;
$__foreach_countrylabel_8_saved_key = isset($_smarty_tpl->tpl_vars['countrycode']) ? $_smarty_tpl->tpl_vars['countrycode'] : false;
$_smarty_tpl->tpl_vars['countrylabel'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countrycode'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countrylabel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
$_smarty_tpl->tpl_vars['countrylabel']->_loop = true;
$__foreach_countrylabel_8_saved_local_item = $_smarty_tpl->tpl_vars['countrylabel'];
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['country']->value && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['country']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['countrylabel'] = $__foreach_countrylabel_8_saved_local_item;
}
if ($__foreach_countrylabel_8_saved_item) {
$_smarty_tpl->tpl_vars['countrylabel'] = $__foreach_countrylabel_8_saved_item;
}
if ($__foreach_countrylabel_8_saved_key) {
$_smarty_tpl->tpl_vars['countrycode'] = $__foreach_countrylabel_8_saved_key;
}
?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['taxenabled']->value && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <div class="line-padded text-center">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselections'];?>

                    <button type="submit" name="updateonly" class="btn btn-info btn-sm" /><i class="fa fa-refresh"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['carttaxupdateselectionsupdate'];?>
</button>
                </div>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['customfields']->value) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderadditionalrequiredinfo'];?>
</h2>
                <div class="row">
                    <?php
$_from = $_smarty_tpl->tpl_vars['customfields']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_customfield_9_saved_item = isset($_smarty_tpl->tpl_vars['customfield']) ? $_smarty_tpl->tpl_vars['customfield'] : false;
$_smarty_tpl->tpl_vars['customfield'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['customfield']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['customfield']->value) {
$_smarty_tpl->tpl_vars['customfield']->_loop = true;
$__foreach_customfield_9_saved_local_item = $_smarty_tpl->tpl_vars['customfield'];
?>
                        <div class="form-horizontal">
                            <label class="col-sm-5 control-label" for="customfield<?php echo $_smarty_tpl->tpl_vars['customfield']->value['id'];?>
">
                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['name'];?>

                            </label>
                            <div class="col-sm-6 col-md-5">
                                <?php echo $_smarty_tpl->tpl_vars['customfield']->value['input'];?>

                                <?php if ($_smarty_tpl->tpl_vars['customfield']->value['description']) {?>
                                    <span id="helpBlock" class="help-block">
                                        <?php echo $_smarty_tpl->tpl_vars['customfield']->value['description'];?>

                                    </span>
                                <?php }?>
                            </div>
                        </div>
                    <?php
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_9_saved_local_item;
}
if ($__foreach_customfield_9_saved_item) {
$_smarty_tpl->tpl_vars['customfield'] = $__foreach_customfield_9_saved_item;
}
?>
                </div>
            <?php }?>

            <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <h2>Choose a Password</h2>
                <div class="form-horizontal">
                    <div id="newPassword1" class="form-group has-feedback">
                        <label for="inputNewPassword1" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
</label>
                        <div class="col-sm-6 col-md-5">
                            <input type="password" name="password" id="inputNewPassword1" value="<?php echo $_smarty_tpl->tpl_vars['password']->value;?>
" class="form-control" />
                            <span class="form-control-feedback glyphicon"></span>
                            <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl")) {?>
                                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                            <?php } elseif (file_exists("templates/six/includes/pwstrength.tpl")) {?>
                                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:six/includes/pwstrength.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

                            <?php }?>
                        </div>
                    </div>
                    <div id="newPassword2" class="form-group has-feedback">
                        <label for="inputNewPassword2" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaconfirmpassword'];?>
</label>
                        <div class="col-sm-6 col-md-5">
                            <input type="password" name="password2" id="inputNewPassword2" value="<?php echo $_smarty_tpl->tpl_vars['password2']->value;?>
" class="form-control" />
                            <span class="form-control-feedback glyphicon"></span>
                            <div id="inputNewPassword2Msg">
                            </div>
                        </div>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['securityquestions']->value) {?>
                        <div class="form-group">
                            <label for="inputSecurityQId" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityquestion'];?>
</label>
                            <div class="col-sm-7">
                                <select name="securityqid" id="inputSecurityQId" class="form-control select-autowidth">
                                <?php
$_from = $_smarty_tpl->tpl_vars['securityquestions']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_question_10_saved_item = isset($_smarty_tpl->tpl_vars['question']) ? $_smarty_tpl->tpl_vars['question'] : false;
$_smarty_tpl->tpl_vars['question'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['question']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['question']->value) {
$_smarty_tpl->tpl_vars['question']->_loop = true;
$__foreach_question_10_saved_local_item = $_smarty_tpl->tpl_vars['question'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['question']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['question']->value['id'] == $_smarty_tpl->tpl_vars['securityqid']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['question']->value['question'];?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_10_saved_local_item;
}
if ($__foreach_question_10_saved_item) {
$_smarty_tpl->tpl_vars['question'] = $__foreach_question_10_saved_item;
}
?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSecurityQAns" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareasecurityanswer'];?>
</label>
                            <div class="col-sm-6 col-md-5">
                                <input type="password" name="securityqans" id="inputSecurityQAns" value="<?php echo $_smarty_tpl->tpl_vars['securityqans']->value;?>
" class="form-control" />
                            </div>
                        </div>
                    <?php }?>
                </div>
            <?php }?>

            </div>

            <div id="loginContainer"<?php if ($_smarty_tpl->tpl_vars['loggedin']->value || $_smarty_tpl->tpl_vars['custtype']->value != "existing") {?> class="hidden"<?php }?>>

                <div class="alert alert-warning" role="alert">
                    <strong>Not Registered?</strong> <a href="#" onclick="showSignup();return false" class="alert-link">Click here to signup as a new user</a>
                </div>

                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="inputLoginEmail" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
</label>
                        <div class="col-sm-6">
                            <input type="text" name="loginemail" id="inputLoginEmail" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputLoginPassword" class="col-sm-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginpassword'];?>
</label>
                        <div class="col-sm-6">
                            <input type="password" name="loginpw" id="inputLoginPassword" class="form-control" />
                        </div>
                    </div>
                </div>

                <div class="line-padded text-center">
                    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginforgotten'];?>
</strong> <a href="pwreset.php" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginforgotteninstructions'];?>
</a>
                </div>

            </div>

            <?php if ($_smarty_tpl->tpl_vars['domainsinorder']->value) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainregistrantinfo'];?>
</h2>

                <div class="form-horizontal">
                    <div class="form-group">
                        <label for="inputDomainContact" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainregistrantchoose'];?>
</label>
                        <div class="col-sm-6">
                            <select name="contact" id="inputDomainContact" onchange="domainContactChange()" class="form-control">
                                <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['usedefaultcontact'];?>
</option>
                                <?php
$_from = $_smarty_tpl->tpl_vars['domaincontacts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_domcontact_11_saved_item = isset($_smarty_tpl->tpl_vars['domcontact']) ? $_smarty_tpl->tpl_vars['domcontact'] : false;
$_smarty_tpl->tpl_vars['domcontact'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['domcontact']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['domcontact']->value) {
$_smarty_tpl->tpl_vars['domcontact']->_loop = true;
$__foreach_domcontact_11_saved_local_item = $_smarty_tpl->tpl_vars['domcontact'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['domcontact']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['contact']->value == $_smarty_tpl->tpl_vars['domcontact']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['domcontact']->value['name'];?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['domcontact'] = $__foreach_domcontact_11_saved_local_item;
}
if ($__foreach_domcontact_11_saved_item) {
$_smarty_tpl->tpl_vars['domcontact'] = $__foreach_domcontact_11_saved_item;
}
?>
                                <option value="addingnew"<?php if ($_smarty_tpl->tpl_vars['contact']->value == "addingnew") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareanavaddcontact'];?>
...</option>
                        </select>
                        </div>
                    </div>
                </div>

                <div id="domainContactContainer" class="row<?php if ($_smarty_tpl->tpl_vars['contact']->value != "addingnew") {?> hidden<?php }?>">
                    <div class="col-sm-6 form-horizontal">
                        <div class="form-group">
                            <label for="inputDCFirstName" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareafirstname'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactfirstname" id="inputDCFirstName" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['firstname'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCLastName" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientarealastname'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactlastname" id="inputDCLastName" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['lastname'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCCompanyName" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacompanyname'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactcompanyname" id="inputDCCompanyName" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['companyname'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCEmail" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
</label>
                            <div class="col-md-8">
                                <input type="email" name="domaincontactemail" id="inputDCEmail" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['email'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCPhone" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaphonenumber'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactphonenumber" id="inputDCPhone" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['phonenumber'];?>
" class="form-control" />
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 form-horizontal">
                        <div class="form-group">
                            <label for="inputDCAddress1" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress1'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactaddress1" id="inputDCAddress1" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address1'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCAddress2" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaaddress2'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactaddress2" id="inputDCAddress2" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['address2'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCCity" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacity'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactcity" id="inputDCCity" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['city'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCState" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareastate'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactstate" id="inputDCState" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['state'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCPostcode" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapostcode'];?>
</label>
                            <div class="col-md-8">
                                <input type="text" name="domaincontactpostcode" id="inputDCPostcode" value="<?php echo $_smarty_tpl->tpl_vars['domaincontact']->value['postcode'];?>
" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputDCCountry" class="col-md-4 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareacountry'];?>
</label>
                            <div class="col-md-8">
                                <select name="domaincontactcountry" id="inputDCCountry" class="form-control">
                                <?php
$_from = $_smarty_tpl->tpl_vars['countries']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_countrylabel_12_saved_item = isset($_smarty_tpl->tpl_vars['countrylabel']) ? $_smarty_tpl->tpl_vars['countrylabel'] : false;
$__foreach_countrylabel_12_saved_key = isset($_smarty_tpl->tpl_vars['countrycode']) ? $_smarty_tpl->tpl_vars['countrycode'] : false;
$_smarty_tpl->tpl_vars['countrylabel'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countrycode'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['countrylabel']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['countrycode']->value => $_smarty_tpl->tpl_vars['countrylabel']->value) {
$_smarty_tpl->tpl_vars['countrylabel']->_loop = true;
$__foreach_countrylabel_12_saved_local_item = $_smarty_tpl->tpl_vars['countrylabel'];
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['countrycode']->value;?>
"<?php if ((!$_smarty_tpl->tpl_vars['domaincontact']->value['country'] && $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['defaultcountry']->value) || $_smarty_tpl->tpl_vars['countrycode']->value == $_smarty_tpl->tpl_vars['domaincontact']->value['country']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['countrylabel']->value;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['countrylabel'] = $__foreach_countrylabel_12_saved_local_item;
}
if ($__foreach_countrylabel_12_saved_item) {
$_smarty_tpl->tpl_vars['countrylabel'] = $__foreach_countrylabel_12_saved_item;
}
if ($__foreach_countrylabel_12_saved_key) {
$_smarty_tpl->tpl_vars['countrycode'] = $__foreach_countrylabel_12_saved_key;
}
?>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }?>

            <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderpaymentmethod'];?>
</h2>

            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                    <div class="alert alert-success text-center large-text" role="alert">
                        <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertotalduetoday'];?>
: &nbsp; <strong><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</strong>
                    </div>
                </div>
            </div>

            <div class="alert alert-danger text-center gateway-errors hidden"></div>

            <div class="line-padded text-center">
                <?php
$_from = $_smarty_tpl->tpl_vars['gateways']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_gateway_13_saved_item = isset($_smarty_tpl->tpl_vars['gateway']) ? $_smarty_tpl->tpl_vars['gateway'] : false;
$__foreach_gateway_13_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['gateway'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['gateway']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['gateway']->value) {
$_smarty_tpl->tpl_vars['gateway']->_loop = true;
$__foreach_gateway_13_saved_local_item = $_smarty_tpl->tpl_vars['gateway'];
?>
                    <label class="radio-inline">
                        <input type="radio" name="paymentmethod" value="<?php echo $_smarty_tpl->tpl_vars['gateway']->value['sysname'];?>
" onclick="<?php if ($_smarty_tpl->tpl_vars['gateway']->value['type'] == "CC") {?>showCCForm()<?php } else { ?>hideCCForm()<?php }?>"<?php if ($_smarty_tpl->tpl_vars['selectedgateway']->value == $_smarty_tpl->tpl_vars['gateway']->value['sysname']) {?> checked<?php }?> />
                        <?php echo $_smarty_tpl->tpl_vars['gateway']->value['name'];?>

                    </label>
                <?php
$_smarty_tpl->tpl_vars['gateway'] = $__foreach_gateway_13_saved_local_item;
}
if ($__foreach_gateway_13_saved_item) {
$_smarty_tpl->tpl_vars['gateway'] = $__foreach_gateway_13_saved_item;
}
if ($__foreach_gateway_13_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_gateway_13_saved_key;
}
?>
            </div>

            <div id="ccinputform" class="form-horizontal<?php if ($_smarty_tpl->tpl_vars['selectedgatewaytype']->value != "CC") {?> hidden<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?>
                    <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-5">
                            <label class="radio-inline"><input type="radio" name="ccinfo" value="useexisting" id="useexisting" onclick="useExistingCC()"<?php if ($_smarty_tpl->tpl_vars['ccinfo']->value == "useexisting") {?> checked<?php } elseif (!$_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?> disabled="disabled"<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcarduseexisting'];
if ($_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour']) {?> (<?php echo $_smarty_tpl->tpl_vars['clientsdetails']->value['cclastfour'];?>
)<?php }?></label><br />
                            <label class="radio-inline"><input type="radio" name="ccinfo" value="new" id="new" onclick="enterNewCC()"<?php if ($_smarty_tpl->tpl_vars['ccinfo']->value == "new") {?> checked<?php }?> /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardenternewcard'];?>
</label>
                        </div>
                    </div>
                <?php } else { ?>
                    <input type="hidden" name="ccinfo" value="new" />
                <?php }?>
                <div class="form-group new-card-info<?php if ($_smarty_tpl->tpl_vars['ccinfo']->value == "useexisting") {?> hidden<?php }?>">
                    <label for="inputCardType" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardtype'];?>
</label>
                    <div class="col-sm-7">
                        <select name="cctype" id="cctype" class="form-control select-autowidth">
                        <?php
$_from = $_smarty_tpl->tpl_vars['acceptedcctypes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cardtype_14_saved_item = isset($_smarty_tpl->tpl_vars['cardtype']) ? $_smarty_tpl->tpl_vars['cardtype'] : false;
$_smarty_tpl->tpl_vars['cardtype'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['cardtype']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cardtype']->value) {
$_smarty_tpl->tpl_vars['cardtype']->_loop = true;
$__foreach_cardtype_14_saved_local_item = $_smarty_tpl->tpl_vars['cardtype'];
?>
                            <option<?php if ($_smarty_tpl->tpl_vars['cctype']->value == $_smarty_tpl->tpl_vars['cardtype']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['cardtype']->value;?>
</option>
                        <?php
$_smarty_tpl->tpl_vars['cardtype'] = $__foreach_cardtype_14_saved_local_item;
}
if ($__foreach_cardtype_14_saved_item) {
$_smarty_tpl->tpl_vars['cardtype'] = $__foreach_cardtype_14_saved_item;
}
?>
                        </select>
                    </div>
                </div>
                <div class="form-group new-card-info<?php if ($_smarty_tpl->tpl_vars['ccinfo']->value == "useexisting") {?> hidden<?php }?>">
                    <label for="inputCardNumber" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardnumber'];?>
</label>
                    <div class="col-sm-5">
                        <input type="text" name="ccnumber" id="inputCardNumber" value="<?php echo $_smarty_tpl->tpl_vars['ccnumber']->value;?>
" autocomplete="off" class="form-control" />
                    </div>
                </div>
                <div class="form-group new-card-info<?php if ($_smarty_tpl->tpl_vars['ccinfo']->value == "useexisting") {?> hidden<?php }?>">
                    <label for="inputCardExpiry" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardexpires'];?>
</label>
                    <div class="col-sm-7 form-inline-always">
                        <select name="ccexpirymonth" id="inputCardExpiry" class="form-control select-inline">
                            <?php
$_from = $_smarty_tpl->tpl_vars['months']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_month_15_saved_item = isset($_smarty_tpl->tpl_vars['month']) ? $_smarty_tpl->tpl_vars['month'] : false;
$_smarty_tpl->tpl_vars['month'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['month']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
$__foreach_month_15_saved_local_item = $_smarty_tpl->tpl_vars['month'];
?>
                                <option<?php if ($_smarty_tpl->tpl_vars['ccexpirymonth']->value == $_smarty_tpl->tpl_vars['month']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['month'] = $__foreach_month_15_saved_local_item;
}
if ($__foreach_month_15_saved_item) {
$_smarty_tpl->tpl_vars['month'] = $__foreach_month_15_saved_item;
}
?>
                        </select> /
                        <select name="ccexpiryyear" class="form-control select-inline">
                            <?php
$_from = $_smarty_tpl->tpl_vars['expiryyears']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_year_16_saved_item = isset($_smarty_tpl->tpl_vars['year']) ? $_smarty_tpl->tpl_vars['year'] : false;
$_smarty_tpl->tpl_vars['year'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['year']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->_loop = true;
$__foreach_year_16_saved_local_item = $_smarty_tpl->tpl_vars['year'];
?>
                                <option<?php if ($_smarty_tpl->tpl_vars['ccexpiryyear']->value == $_smarty_tpl->tpl_vars['year']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                            <?php
$_smarty_tpl->tpl_vars['year'] = $__foreach_year_16_saved_local_item;
}
if ($__foreach_year_16_saved_item) {
$_smarty_tpl->tpl_vars['year'] = $__foreach_year_16_saved_item;
}
?>
                        </select>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['showccissuestart']->value) {?>
                    <div class="form-group new-card-info<?php if ($_smarty_tpl->tpl_vars['ccinfo']->value == "useexisting") {?> hidden<?php }?>">
                        <label for="inputCardStart" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardstart'];?>
</label>
                        <div class="col-sm-7 form-inline-always">
                            <select name="ccstartmonth" id="inputCardStart" class="form-control select-inline">
                                <?php
$_from = $_smarty_tpl->tpl_vars['months']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_month_17_saved_item = isset($_smarty_tpl->tpl_vars['month']) ? $_smarty_tpl->tpl_vars['month'] : false;
$_smarty_tpl->tpl_vars['month'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['month']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['month']->value) {
$_smarty_tpl->tpl_vars['month']->_loop = true;
$__foreach_month_17_saved_local_item = $_smarty_tpl->tpl_vars['month'];
?>
                                    <option<?php if ($_smarty_tpl->tpl_vars['ccstartmonth']->value == $_smarty_tpl->tpl_vars['month']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['month']->value;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['month'] = $__foreach_month_17_saved_local_item;
}
if ($__foreach_month_17_saved_item) {
$_smarty_tpl->tpl_vars['month'] = $__foreach_month_17_saved_item;
}
?>
                            </select> /
                            <select name="ccstartyear" class="form-control select-inline">
                                <?php
$_from = $_smarty_tpl->tpl_vars['startyears']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_year_18_saved_item = isset($_smarty_tpl->tpl_vars['year']) ? $_smarty_tpl->tpl_vars['year'] : false;
$_smarty_tpl->tpl_vars['year'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['year']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['year']->value) {
$_smarty_tpl->tpl_vars['year']->_loop = true;
$__foreach_year_18_saved_local_item = $_smarty_tpl->tpl_vars['year'];
?>
                                    <option<?php if ($_smarty_tpl->tpl_vars['ccstartyear']->value == $_smarty_tpl->tpl_vars['year']->value) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['year']->value;?>
</option>
                                <?php
$_smarty_tpl->tpl_vars['year'] = $__foreach_year_18_saved_local_item;
}
if ($__foreach_year_18_saved_item) {
$_smarty_tpl->tpl_vars['year'] = $__foreach_year_18_saved_item;
}
?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group new-card-info<?php if ($_smarty_tpl->tpl_vars['ccinfo']->value == "useexisting") {?> hidden<?php }?>">
                        <label for="inputCardIssueNum" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcardissuenum'];?>
</label>
                        <div class="col-sm-7 row">
                            <div class="col-xs-4 col-sm-3">
                                <input type="text" name="ccissuenum" id="inputCardIssueNum" value="<?php echo $_smarty_tpl->tpl_vars['ccissuenum']->value;?>
" autocomplete="off" class="form-control" />
                            </div>
                        </div>
                    </div>
                <?php }?>
                <div class="form-group">
                    <label for="inputCardCvv" class="col-sm-5 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcvvnumber'];?>
</label>
                    <div class="col-sm-7 row">
                        <div class="col-md-6 col-lg-5">
                            <div class="input-group">
                                <input type="text" name="cccvv" id="inputCardCvv" value="<?php echo $_smarty_tpl->tpl_vars['cccvv']->value;?>
" autocomplete="off" class="form-control input-mini" />
                                <span class="input-group-addon"><a href="#" onclick="window.open('assets/img/ccv.gif','','width=280,height=200,scrollbars=no,top=100,left=100');return false"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardcvvwhere'];?>
</a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['shownostore']->value) {?>
                    <div class="form-group">
                        <div class="col-sm-7 col-sm-offset-5">
                            <label class="checkbox-inline"><input type="checkbox" name="nostore" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['creditcardnostore'];?>
</label>
                        </div>
                    </div>
                <?php }?>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['shownotesfield']->value) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernotes'];?>
</h2>
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <textarea name="notes" rows="4" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordernotesdescription'];?>
"><?php echo $_smarty_tpl->tpl_vars['orderNotes']->value;?>
</textarea>
                    </div>
                </div>
            <?php }?>

            <div class="text-center">

                <?php if ($_smarty_tpl->tpl_vars['accepttos']->value) {?>
                    <div class="line-padded">
                        <label class="checkbox-inline"><input type="checkbox" name="accepttos" id="accepttos" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertosagreement'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['tosurl']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordertos'];?>
</a></label>
                    </div>
                <?php }?>

                <div class="line-padded">
                    <button type="submit" id="btnCompleteOrder" class="btn btn-primary btn-lg"<?php if ($_smarty_tpl->tpl_vars['cartitems']->value == 0) {?> disabled="disabled"<?php }?> onclick="this.value='<?php echo $_smarty_tpl->tpl_vars['LANG']->value['pleasewait'];?>
'"<?php if ($_smarty_tpl->tpl_vars['custtype']->value == "existing" && !$_smarty_tpl->tpl_vars['loggedin']->value) {?> formnovalidate<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['completeorder'];?>
 &nbsp;<i class="fa fa-arrow-circle-right"></i></button>
                </div>

            </div>

        </form>

    <?php }?>

    <div class="secure-warning">
        <img src="assets/img/padlock.gif" align="absmiddle" border="0" alt="Secure Transaction" /> &nbsp;<?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure'];?>
 (<strong><?php echo $_smarty_tpl->tpl_vars['ipaddress']->value;?>
</strong>) <?php echo $_smarty_tpl->tpl_vars['LANG']->value['ordersecure2'];?>

    </div>

</div>
<?php }
}
