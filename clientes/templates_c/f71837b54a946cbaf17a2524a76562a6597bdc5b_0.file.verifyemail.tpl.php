<?php
/* Smarty version 3.1.29, created on 2017-10-31 00:36:31
  from "/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/includes/verifyemail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f80bdf105460_30873270',
  'file_dependency' => 
  array (
    'f71837b54a946cbaf17a2524a76562a6597bdc5b' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/includes/verifyemail.tpl',
      1 => 1503883326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f80bdf105460_30873270 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value) {?>
    <div class="email-verification alert-success">
        <div class="container">
            <i class="fa fa-check"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailAddressVerified'];?>

        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationIdValid']->value === false) {?>
    <div class="email-verification alert-danger">
        <div class="container">
            <i class="fa fa-times-circle"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailKeyExpired'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['emailVerificationPending']->value && !$_smarty_tpl->tpl_vars['showingLoginPage']->value) {?>
    <div class="email-verification alert-warning">
        <div class="container">
            <i class="fa fa-warning"></i>
            <?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>

            <div class="pull-right">
                <button id="btnResendVerificationEmail" class="btn btn-default btn-sm">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>

                </button>
            </div>
        </div>
    </div>
<?php }
}
}
