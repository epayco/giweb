<?php
/* Smarty version 3.1.29, created on 2017-10-31 11:58:34
  from "/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/supportticketsubmit-stepone.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_59f8abba756f71_20010652',
  'file_dependency' => 
  array (
    '5d36ad135fb025c0e17bbc90ed9576bc3467bc24' => 
    array (
      0 => '/home/runcloud/webapps/web-giweb/clientes/templates/iconhostwhmcs/supportticketsubmit-stepone.tpl',
      1 => 1503883260,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f8abba756f71_20010652 ($_smarty_tpl) {
?>

<br />

<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['supportticketsheader'];?>
</p>

<br />

<div class="row">
    <div class="col-sm-10 col-sm-offset-1">
        <div class="row">
            <?php
$_from = $_smarty_tpl->tpl_vars['departments']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_department_0_saved_item = isset($_smarty_tpl->tpl_vars['department']) ? $_smarty_tpl->tpl_vars['department'] : false;
$__foreach_department_0_saved_key = isset($_smarty_tpl->tpl_vars['num']) ? $_smarty_tpl->tpl_vars['num'] : false;
$_smarty_tpl->tpl_vars['department'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['num'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['department']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['department']->value) {
$_smarty_tpl->tpl_vars['department']->_loop = true;
$__foreach_department_0_saved_local_item = $_smarty_tpl->tpl_vars['department'];
?>
                <div class="col-md-6 margin-bottom">
                    <p>
                        <strong>
                            <a href="<?php echo $_SERVER['PHP_SELF'];?>
?step=2&amp;deptid=<?php echo $_smarty_tpl->tpl_vars['department']->value['id'];?>
">
                                <i class="fa fa-envelope"></i>
                                &nbsp;<?php echo $_smarty_tpl->tpl_vars['department']->value['name'];?>

                            </a>
                        </strong>
                    </p>
                    <?php if ($_smarty_tpl->tpl_vars['department']->value['description']) {?>
                        <p><?php echo $_smarty_tpl->tpl_vars['department']->value['description'];?>
</p>
                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['num']->value%2 == true) {?>
                    <div class="clearfix"></div>
                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['department'] = $__foreach_department_0_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['department']->_loop) {
?>
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/alert.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('type'=>"info",'msg'=>$_smarty_tpl->tpl_vars['LANG']->value['nosupportdepartments'],'textcenter'=>true), 0, true);
?>

            <?php
}
if ($__foreach_department_0_saved_item) {
$_smarty_tpl->tpl_vars['department'] = $__foreach_department_0_saved_item;
}
if ($__foreach_department_0_saved_key) {
$_smarty_tpl->tpl_vars['num'] = $__foreach_department_0_saved_key;
}
?>
        </div>
    </div>
</div>
<?php }
}
