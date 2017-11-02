<?php
/* Smarty version 3.1.29, created on 2017-10-31 10:01:34
  from "/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/pwreset.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f8904e5df4b4_94907233',
  'file_dependency' => 
  array (
    '87cbc9f562c4a950385a67b09cec451b8697ced0' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/pwreset.tpl',
      1 => 1503883257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f8904e5df4b4_94907233 ($_smarty_tpl) {
?>
<div class="row">
<div class="col-md-8 col-sm-12 center-block">
<div class="logincontainer">


    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['noPasswordResetWhenLoggedIn'],'textcenter'=>true), 0, true);
?>

    <?php } else { ?>
        <?php if ($_smarty_tpl->tpl_vars['success']->value) {?>

            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationsent'],'textcenter'=>true), 0, true);
?>


            <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetvalidationcheckemail'];?>
</p>

        <?php } else { ?>

            <?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'msg'=>$_smarty_tpl->tpl_vars['errormessage']->value,'textcenter'=>true), 0, true);
?>

            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['securityquestion']->value) {?>

                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsecurityquestionrequired'];?>
</p>

                <form method="post" action="pwreset.php"  class="form-stacked">
                    <input type="hidden" name="action" value="reset" />
                    <input type="hidden" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />

                    <div class="form-group">
                        <label for="inputAnswer"><?php echo $_smarty_tpl->tpl_vars['securityquestion']->value;?>
</label>
                        <input type="text" name="answer" class="form-control" id="inputAnswer" autofocus>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
</button>
                    </div>

                </form>

            <?php } else { ?>

                <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetemailneeded'];?>
</p>

                <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['systemsslurl']->value;?>
pwreset.php" role="form">
                    <input type="hidden" name="action" value="reset" />

                    <div class="form-group">
                        <label for="inputEmail"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginemail'];?>
</label>
                        <input type="email" name="email" class="form-control" id="inputEmail" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enteremail'];?>
" autofocus>
                    </div>

                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['pwresetsubmit'];?>
</button>
                    </div>

                </form>

            <?php }?>

        <?php }?>
    <?php }?>

</div>

</div>

</div>
<?php }
}
