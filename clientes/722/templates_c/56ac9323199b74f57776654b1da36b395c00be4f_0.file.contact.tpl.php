<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:32:00
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/contact.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae20046ae49_25873109',
  'file_dependency' => 
  array (
    '56ac9323199b74f57776654b1da36b395c00be4f' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/contact.tpl',
      1 => 1499127379,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ae20046ae49_25873109 ($_smarty_tpl) {
?>

      
    <div id="contactform">  
    <div class="col-sm-8 center-block">
    <div class="col-sm-12">
    <?php if ($_smarty_tpl->tpl_vars['sent']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['contactsent'],'textcenter'=>true), 0, true);
?>

<?php }?>

<?php if ($_smarty_tpl->tpl_vars['errormessage']->value) {?>
    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"error",'errorshtml'=>$_smarty_tpl->tpl_vars['errormessage']->value), 0, true);
?>

<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['sent']->value) {?>
</div>


    <form method="post" action="contact.php" role="form">
        <input type="hidden" name="action" value="send" />

            <div class="form-group clearfix">
                <label for="inputName" class="col-sm-12 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientname'];?>
</label>
                <div class="col-sm-12">
                    <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="form-control" id="inputName" />
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="inputEmail" class="col-sm-12 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsclientemail'];?>
</label>
                <div class="col-sm-12">
                    <input type="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" class="form-control" id="inputEmail" />
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="inputSubject" class="col-sm-12 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsticketsubject'];?>
</label>
                <div class="col-sm-12">
                    <input type="subject" name="subject" value="<?php echo $_smarty_tpl->tpl_vars['subject']->value;?>
" class="contact-subject form-control" id="inputSubject" />
                </div>
            </div>
            <div class="form-group clearfix">
                <label for="inputMessage" class="col-sm-12 control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactmessage'];?>
</label>
                <div class="col-sm-12">
                    <textarea name="message" rows="20" class="form-control" id="inputMessage"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</textarea>
                </div>
            </div>

            <div class="text-center margin-bottom">
        <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

            </div>

            <div class="form-group">
                <div class="text-center">
                    <button type="submit" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['contactsend'];?>
</button>
                </div>
            </div>

    </form>
    </div>
    </div>

<?php }
}
}
