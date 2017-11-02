<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:32:21
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/includes/alert.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae215af6403_10218792',
  'file_dependency' => 
  array (
    'ee0f7f466a0b79ed6b710e6cfe6307ca2d5af06d' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/includes/alert.tpl',
      1 => 1499127443,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ae215af6403_10218792 ($_smarty_tpl) {
?>
<div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['type']->value == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
} else { ?>info<?php }
if ($_smarty_tpl->tpl_vars['textcenter']->value) {?> text-center<?php }
if ($_smarty_tpl->tpl_vars['hide']->value) {?> hidden<?php }
if ($_smarty_tpl->tpl_vars['additionalClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['additionalClasses']->value;
}?>"<?php if ($_smarty_tpl->tpl_vars['idname']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['errorshtml']->value) {?>
    <strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaerrors'];?>
</strong>
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['errorshtml']->value;?>

    </ul>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
        <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<?php }?>
</div>
<?php }
}
