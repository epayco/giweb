<?php
/* Smarty version 3.1.29, created on 2017-07-08 18:56:35
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/logout.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59612ae3ccf841_16231376',
  'file_dependency' => 
  array (
    'f6825d1c3f57059bba3697004fd917f0dd51ef8e' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/logout.tpl',
      1 => 1499127390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59612ae3ccf841_16231376 ($_smarty_tpl) {
?>
<div class="logincontainer">

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['LANG']->value['logouttitle']), 0, true);
?>


    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"success",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['logoutsuccessful'],'textcenter'=>true), 0, true);
?>


    <div class="main-content">
        <p class="text-center">
            <a href="index.php" class="btn btn-default"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutcontinuetext'];?>
</a>
        </p>
    </div>
</div>
<?php }
}
