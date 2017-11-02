<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:38:01
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/clientareahome.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae369ea36b4_28850596',
  'file_dependency' => 
  array (
    '4648a1e8ed88108670c4ceba36987aacf784dd51' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/clientareahome.tpl',
      1 => 1499127374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
  'tpl_function' => 
  array (
    'outputHomePanels' => 
    array (
      'called_functions' => 
      array (
      ),
      'compiled_filepath' => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates_c/4648a1e8ed88108670c4ceba36987aacf784dd51_0.file.clientareahome.tpl.php',
      'uid' => '4648a1e8ed88108670c4ceba36987aacf784dd51',
      'call_name' => 'smarty_template_function_outputHomePanels_1370363680595ae369e82360_17314327',
    ),
  ),
),false)) {
function content_595ae369ea36b4_28850596 ($_smarty_tpl) {
?>
<div class="tiles clearfix">
    <div class="row">
<section class="statistics">

        <div class="row">

            <div class="col-sm-3">
                    <a href="clientarea.php?action=services"><p id="myStat1" data-dimension="175" data-animationstep="0.5" data-text="<?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['productsnumactive'];?>
" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#9ec028" data-bgcolor="#E1E3E4" data-fill="#fff"></p></a>
                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navservices'];?>
</span>
            </div>
 <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
            <div class="col-sm-3">
                    <a href="clientarea.php?action=domains"><p id="myStat2" data-dimension="175" data-animationstep="1" data-text="<?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numactivedomains'];?>
" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#DE6262" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navdomains'];?>
</span>
            </div>
<?php } elseif ($_smarty_tpl->tpl_vars['condlinks']->value['affiliates'] && $_smarty_tpl->tpl_vars['clientsstats']->value['isAffiliate']) {?>
             <div class="col-sm-3">
                    <a href="affiliates.php"><p id="myStat2" data-dimension="175" data-animationstep="1" data-text="<?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numaffiliatesignups'];?>
" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#DE6262" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['affiliatessignups'];?>
</span>
            </div>
 <?php } else { ?>
 <div class="col-sm-3">
                    <a href="clientarea.php?action=quotes"><p id="myStat2" data-dimension="175" data-animationstep="1" data-text="<?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numquotes'];?>
" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#DE6262" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['quotes'];?>
</span>
            </div>
 <?php }?>
            <div class="col-sm-3">
                    <a href="supporttickets.php"><p id="myStat3" data-dimension="175" data-animationstep="1" data-text="<?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numactivetickets'];?>
" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#2A8DE7" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navtickets'];?>
</span>
            </div>

            <div class="col-sm-3">
                    <a href="clientarea.php?action=invoices"><p id="myStat4" data-dimension="175" data-animationstep="1" data-text="<?php echo $_smarty_tpl->tpl_vars['clientsstats']->value['numunpaidinvoices'];?>
" data-width="1" data-fontsize="29" data-percent="100" data-fgcolor="#A66BBE" data-bgcolor="#ECECEC" data-fill="#fff"></p></a>
                    <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navinvoices'];?>
</span>
            </div>

        </div>
    </section>
 </div>

        </div>


<form role="form" method="post" action="clientarea.php?action=kbsearch">
    <div class="row">
        <div class="col-md-12 home-kb-search">
            <input type="text" name="search" class="form-control input-lg" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientHomeSearchKb'];?>
" />
            <i class="fa fa-search"></i>
        </div>
    </div>
</form>

<?php
$_from = $_smarty_tpl->tpl_vars['addons_html']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_addon_html_0_saved_item = isset($_smarty_tpl->tpl_vars['addon_html']) ? $_smarty_tpl->tpl_vars['addon_html'] : false;
$_smarty_tpl->tpl_vars['addon_html'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['addon_html']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['addon_html']->value) {
$_smarty_tpl->tpl_vars['addon_html']->_loop = true;
$__foreach_addon_html_0_saved_local_item = $_smarty_tpl->tpl_vars['addon_html'];
?>
    <div>
        <?php echo $_smarty_tpl->tpl_vars['addon_html']->value;?>

    </div>
<?php
$_smarty_tpl->tpl_vars['addon_html'] = $__foreach_addon_html_0_saved_local_item;
}
if ($__foreach_addon_html_0_saved_item) {
$_smarty_tpl->tpl_vars['addon_html'] = $__foreach_addon_html_0_saved_item;
}
?>

<div class="client-home-panels">
    <div class="row">
        <div class="col-sm-6">

            

            <?php
$_from = $_smarty_tpl->tpl_vars['panels']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_2_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->iteration=0;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_2_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <?php if ((1 & $_smarty_tpl->tpl_vars['item']->iteration)) {?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'outputHomePanels', array(), true);?>

                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_local_item;
}
if ($__foreach_item_2_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_2_saved_item;
}
?>

        </div>
        <div class="col-sm-6">

            <?php
$_from = $_smarty_tpl->tpl_vars['panels']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_item_3_saved_item = isset($_smarty_tpl->tpl_vars['item']) ? $_smarty_tpl->tpl_vars['item'] : false;
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['item']->iteration=0;
$_smarty_tpl->tpl_vars['item']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$_smarty_tpl->tpl_vars['item']->iteration++;
$__foreach_item_3_saved_local_item = $_smarty_tpl->tpl_vars['item'];
?>
                <?php if (!(1 & $_smarty_tpl->tpl_vars['item']->iteration)) {?>
                    <?php $_smarty_tpl->smarty->ext->_tplFunction->callTemplateFunction($_smarty_tpl, 'outputHomePanels', array(), true);?>

                <?php }?>
            <?php
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_local_item;
}
if ($__foreach_item_3_saved_item) {
$_smarty_tpl->tpl_vars['item'] = $__foreach_item_3_saved_item;
}
?>

        </div>
    </div>
</div>
<?php }
/* smarty_template_function_outputHomePanels_1370363680595ae369e82360_17314327 */
if (!function_exists('smarty_template_function_outputHomePanels_1370363680595ae369e82360_17314327')) {
function smarty_template_function_outputHomePanels_1370363680595ae369e82360_17314327($_smarty_tpl,$params) {
$saved_tpl_vars = $_smarty_tpl->tpl_vars;
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value);
}?>
                <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['item']->value->getName();?>
" class="panel panel-default panel-accent-<?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('color');
if ($_smarty_tpl->tpl_vars['item']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getClass();
}?>"<?php if ($_smarty_tpl->tpl_vars['item']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['item']->value->getAttribute('id');?>
"<?php }?>>
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->getExtra('btn-link') && $_smarty_tpl->tpl_vars['item']->value->getExtra('btn-text')) {?>
                                <div class="pull-right">
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('btn-link');?>
" class="btn btn-default bg-color-<?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('color');?>
 btn-xs">
                                        <?php if ($_smarty_tpl->tpl_vars['item']->value->getExtra('btn-icon')) {?><i class="fa <?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('btn-icon');?>
"></i><?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['item']->value->getExtra('btn-text');?>

                                    </a>
                                </div>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['item']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->getLabel();?>

                            <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['item']->value->getBadge();?>
</span><?php }?>
                        </h3>
                    </div>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->hasBodyHtml()) {?>
                        <div class="panel-body">
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->getBodyHtml();?>

                        </div>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['item']->value->hasChildren()) {?>
                        <div class="list-group<?php if ($_smarty_tpl->tpl_vars['item']->value->getChildrenAttribute('class')) {?> <?php echo $_smarty_tpl->tpl_vars['item']->value->getChildrenAttribute('class');
}?>">
                            <?php
$_from = $_smarty_tpl->tpl_vars['item']->value->getChildren();
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_childItem_1_saved_item = isset($_smarty_tpl->tpl_vars['childItem']) ? $_smarty_tpl->tpl_vars['childItem'] : false;
$_smarty_tpl->tpl_vars['childItem'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['childItem']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['childItem']->value) {
$_smarty_tpl->tpl_vars['childItem']->_loop = true;
$__foreach_childItem_1_saved_local_item = $_smarty_tpl->tpl_vars['childItem'];
?>
                                <?php if ($_smarty_tpl->tpl_vars['childItem']->value->getUri()) {?>
                                    <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getUri();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['childItem']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
                                    </a>
                                <?php } else { ?>
                                    <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getName();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['childItem']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getId();?>
">
                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasIcon()) {?><i class="<?php echo $_smarty_tpl->tpl_vars['childItem']->value->getIcon();?>
"></i>&nbsp;<?php }?>
                                        <?php echo $_smarty_tpl->tpl_vars['childItem']->value->getLabel();?>

                                        <?php if ($_smarty_tpl->tpl_vars['childItem']->value->hasBadge()) {?>&nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['childItem']->value->getBadge();?>
</span><?php }?>
                                    </div>
                                <?php }?>
                            <?php
$_smarty_tpl->tpl_vars['childItem'] = $__foreach_childItem_1_saved_local_item;
}
if ($__foreach_childItem_1_saved_item) {
$_smarty_tpl->tpl_vars['childItem'] = $__foreach_childItem_1_saved_item;
}
?>
                        </div>
                    <?php }?>
                    <div class="panel-footer">
                        <?php if ($_smarty_tpl->tpl_vars['item']->value->hasFooterHtml()) {?>
                            <?php echo $_smarty_tpl->tpl_vars['item']->value->getFooterHtml();?>

                        <?php }?>
                    </div>
                </div>
            <?php foreach (Smarty::$global_tpl_vars as $key => $value){
if (!isset($_smarty_tpl->tpl_vars[$key]) || $_smarty_tpl->tpl_vars[$key] === $value) $saved_tpl_vars[$key] = $value;
}
$_smarty_tpl->tpl_vars = $saved_tpl_vars;
}
}
/*/ smarty_template_function_outputHomePanels_1370363680595ae369e82360_17314327 */
}
