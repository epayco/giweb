<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:27:14
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/includes/verifyemail.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae0e2788164_95831888',
  'file_dependency' => 
  array (
    'd8f41c4a52a94828d6acfcd6bcfeef8b45556564' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/includes/verifyemail.tpl',
      1 => 1499127450,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ae0e2788164_95831888 ($_smarty_tpl) {
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
