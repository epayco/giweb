<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:27:14
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/includes/head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae0e2771d36_81858986',
  'file_dependency' => 
  array (
    'fb7dd01c426f0130c1e7505185067a7b352f2a6c' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/includes/head.tpl',
      1 => 1499127444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ae0e2771d36_81858986 ($_smarty_tpl) {
?>
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/jquery.circliful.css" rel="stylesheet" />
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/slicknav.css" rel="stylesheet" />
<link href="//fonts.googleapis.com/css?family=Open+Sans:400,600|Raleway:400,700" rel="stylesheet">
<link href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/all.min.css?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
" rel="stylesheet">

<!-- Custom Styling -->
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/css/custom.css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
<![endif]-->

<?php echo '<script'; ?>
 type="text/javascript">
    var csrfToken = '<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
        markdownGuide = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.title"),$_smarty_tpl);?>
',
        locale = '<?php if (!empty($_smarty_tpl->tpl_vars['mdeLocale']->value)) {
echo $_smarty_tpl->tpl_vars['mdeLocale']->value;
} else { ?>en<?php }?>',
        saved = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saved"),$_smarty_tpl);?>
',
        saving = '<?php echo WHMCS\Smarty::langFunction(array('key'=>"markdown.saving"),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/js/scripts.min.js?v=<?php echo $_smarty_tpl->tpl_vars['versionHash']->value;?>
"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == "viewticket" && !$_smarty_tpl->tpl_vars['loggedin']->value) {?>
  <meta name="robots" content="noindex" />
<?php }
}
}
