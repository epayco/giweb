<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:31:53
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/login.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae1f9bb11d8_87080822',
  'file_dependency' => 
  array (
    'aeb9371c696789a0ce2915e11b3de5ef03fb5319' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/login.tpl',
      1 => 1499127389,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ae1f9bb11d8_87080822 ($_smarty_tpl) {
?>
<div class="col-sm-12 col-md-5 center-block">

    <?php if ($_smarty_tpl->tpl_vars['incorrect']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['loginincorrect'],'textcenter'=>true), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['verificationId']->value && empty($_smarty_tpl->tpl_vars['transientDataName']->value)) {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['verificationKeyExpired'],'textcenter'=>true), 0, true);
?>

    <?php } elseif ($_smarty_tpl->tpl_vars['ssoredirect']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['sso']['redirectafterlogin'],'textcenter'=>true), 0, true);
?>

    <?php }?>

    
    <!-- Login -->
    <section class="login">
        <div class="row">
                <div class="login-form-panel margin-bottom-40">
                    <div class="row">
                            <div class="login-form">
                                <h2 class="title text-center"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</h2>
                                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
dologin.php">
                                    <label class="control-label">Email</label>
                                     <input type="email" name="username" class="form-control" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
" autofocus>
                                    <label class="control-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="inputPassword" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareapassword'];?>
" autocomplete="off" >
                                    <div class="checkbox"><label><input type="checkbox" name="rememberme" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>
</label></div>
                                    <p class="btn waves-effect waves-light btn-default btn-block"><a href="pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a></p>
                                    <input class="btn waves-effect waves-light btn-warning btn-block" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginbutton'];?>
" />
                                </form>
                            </div>
                            <div class="bg_gray">
                                <div class="form-footer-content">
                                    <h3>Don't have an account?</h3>
                                        <div class="row">
                                            <div class="col-sm-8 col-sm-offset-2">
                                                <a class="btn-link" tabindex="4" href="#">Create an account</a>
                                            </div>
                                        </div>
                                </div>
                            </div>
                    </div>
                </div>
        </div>
    </section>
    <!-- End of Login -->

</div>
<?php }
}
