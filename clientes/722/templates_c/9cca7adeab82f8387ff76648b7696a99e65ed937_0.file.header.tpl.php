<?php
/* Smarty version 3.1.29, created on 2017-07-04 00:27:14
  from "/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_595ae0e2767d58_99263915',
  'file_dependency' => 
  array (
    '9cca7adeab82f8387ff76648b7696a99e65ed937' => 
    array (
      0 => '/var/www/vhosts/colombiaredes.net/httpdocs/web2/clientes/templates/iconhostwhmcs/header.tpl',
      1 => 1499127387,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_595ae0e2767d58_99263915 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php echo $_smarty_tpl->tpl_vars['charset']->value;?>
" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php if ($_smarty_tpl->tpl_vars['kbarticle']->value['title']) {
echo $_smarty_tpl->tpl_vars['kbarticle']->value['title'];?>
 - <?php }
echo $_smarty_tpl->tpl_vars['pagetitle']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
</title>

    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


    <?php echo $_smarty_tpl->tpl_vars['headoutput']->value;?>


</head>
<body>

<?php echo $_smarty_tpl->tpl_vars['headeroutput']->value;?>


<section id="thetopbar">
<div class="row">
 <div class="col-xs-12 col-sm-12 text-center ">
     <?php if ($_smarty_tpl->tpl_vars['adminMasqueradingAsClient']->value) {?>
                <!-- Return to admin link -->
                <div class="admin-masquerade-notice">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['adminmasqueradingasclient'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['logoutandreturntoadminarea'];?>
</a>
                </div>
            <?php } elseif ($_smarty_tpl->tpl_vars['adminLoggedIn']->value) {?>
                <!-- Return to admin link -->
                <div class="admin-masquerade-notice">
                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['adminloggedin'];?>
 <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/logout.php?returntoadmin=1" class="alert-link"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['returntoadminarea'];?>
</a>
                </div>
            <?php }?>
    </div>
    </div>
  <div class="languadebar bg_gray">   
 <div class="row">
    <div class="col-xs-6 col-sm-6">
    <!-- Language -->
            <?php if ($_smarty_tpl->tpl_vars['languagechangeenabled']->value && count($_smarty_tpl->tpl_vars['locales']->value) > 1) {?>
                <div class="pull-left nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="languageChooser"><i class="fa fa-globe"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['chooselanguage'];?>
 <span class="caret"></span></a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            <?php
$_from = $_smarty_tpl->tpl_vars['locales']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_locale_0_saved_item = isset($_smarty_tpl->tpl_vars['locale']) ? $_smarty_tpl->tpl_vars['locale'] : false;
$_smarty_tpl->tpl_vars['locale'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['locale']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['locale']->value) {
$_smarty_tpl->tpl_vars['locale']->_loop = true;
$__foreach_locale_0_saved_local_item = $_smarty_tpl->tpl_vars['locale'];
?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['currentpagelinkback']->value;?>
language=<?php echo $_smarty_tpl->tpl_vars['locale']->value['language'];?>
"><?php echo $_smarty_tpl->tpl_vars['locale']->value['localisedName'];?>
</a></li>
                            <?php
$_smarty_tpl->tpl_vars['locale'] = $__foreach_locale_0_saved_local_item;
}
if ($__foreach_locale_0_saved_item) {
$_smarty_tpl->tpl_vars['locale'] = $__foreach_locale_0_saved_item;
}
?>
                        </ul>
                    </div>
                </div>
     <?php }?>
    </div>
    <div class="col-xs-6 col-sm-6 pull-right">
     <!-- Top Bar -->
        <div id="top-nav">
            <!-- Login/Account Notifications -->
            <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="accountNotifications" data-placement="bottom" title="Account Notifications"><i class="fa fa-info"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notifications'];?>
 <span class="badge"><?php echo count($_smarty_tpl->tpl_vars['clientAlerts']->value);?>
</span></a>
                    <div id="accountNotificationsContent" class="hidden">
                        <?php
$_from = $_smarty_tpl->tpl_vars['clientAlerts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_alert_1_saved_item = isset($_smarty_tpl->tpl_vars['alert']) ? $_smarty_tpl->tpl_vars['alert'] : false;
$_smarty_tpl->tpl_vars['alert'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['alert']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['alert']->value) {
$_smarty_tpl->tpl_vars['alert']->_loop = true;
$__foreach_alert_1_saved_local_item = $_smarty_tpl->tpl_vars['alert'];
?>
                            <div class="clientalert text-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getSeverity();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getMessage();
if ($_smarty_tpl->tpl_vars['alert']->value->getLinkText()) {?> <a href="<?php echo $_smarty_tpl->tpl_vars['alert']->value->getLink();?>
" class="btn btn-xs btn-<?php echo $_smarty_tpl->tpl_vars['alert']->value->getSeverity();?>
"><?php echo $_smarty_tpl->tpl_vars['alert']->value->getLinkText();?>
</a><?php }?></div>
                        <?php
$_smarty_tpl->tpl_vars['alert'] = $__foreach_alert_1_saved_local_item;
}
if (!$_smarty_tpl->tpl_vars['alert']->_loop) {
?>
                            <div class="clientalert text-success"><i class="fa fa-check-square-o"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['notificationsnone'];?>
</div>
                        <?php
}
if ($__foreach_alert_1_saved_item) {
$_smarty_tpl->tpl_vars['alert'] = $__foreach_alert_1_saved_item;
}
?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="loginOrRegister" data-placement="bottom"><i class="fa fa-user"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
</a>
                    <div id="loginOrRegisterContent" class="hidden">
                        <form action="<?php if ($_smarty_tpl->tpl_vars['systemsslurl']->value) {
echo $_smarty_tpl->tpl_vars['systemsslurl']->value;
} else {
echo $_smarty_tpl->tpl_vars['systemurl']->value;
}?>dologin.php" method="post" role="form">
                            <div class="form-group">
                                <input type="email" name="username" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['clientareaemail'];?>
" required />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginpassword'];?>
" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                            <span class="input-group-btn">
                                        <input type="submit" class="btn btn-primary btn-block" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['login'];?>
" />
                                    </span>
                                    </div>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="rememberme" /> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['loginrememberme'];?>
 &bull; <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/pwreset.php"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['forgotpw'];?>
</a>
                            </label>
                        </form>
                        <hr />
                        <?php echo WHMCS\Smarty::sprintf2Modifier($_smarty_tpl->tpl_vars['LANG']->value['newcustomersignup'],"<a href=\"".((string)$_smarty_tpl->tpl_vars['WEB_ROOT']->value)."/register.php\">","</a>");?>

                    </div>
                </div>
            <?php }?>
            <!-- Shopping Cart -->
            <div class="pull-right nav">
                <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view" class="quick-nav"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>
 <span class="badge"><?php echo $_smarty_tpl->tpl_vars['cartitemcount']->value;?>
</span></span></a>
            </div>



        </div>
 </div>
    </div>
    </div>
</section>



  <!-- Top MiniBar-->
  <section class="topminibar">
     <div class="row">
        <div class="col-sm-12 col-md-6 col-xs-12">
           <ul class="list-inline">
              <li><a href="#"><i class="fa fa-phone-square"></i><span>+1-845-180-1530</span></a></li>
              <li><a href="#"><i class="fa fa-headphones"></i><span> Support</span></a></li>
           </ul>
        </div>
        <div class="col-sm-12 col-md-6 col-xs-12">
           <div class="text-right loginbuttons">
              <a class="btn waves-effect waves-light btn-sm btn-success" href="http://demo.trewsoft.com/iconhost/themes/default/limited-offers.html" title=""><i class="fa fa-gift"></i> Limited Offer</a>
              <a class="btn waves-effect waves-light btn-sm btn-pink" href="http://demo.trewsoft.com/iconhost/themes/default/combo-offers.html" title=""><i class="fa fa-gift"></i> Combo Offers </a>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Top MiniBar-->
  
<section id="header">
    <div class="container">

       <!-- Top Bar-->
    <div class="top">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-md-3">
               <div class="logo">
                  <a href="http://demo.trewsoft.com/iconhost/themes/default/index.html"><img src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/<?php echo $_smarty_tpl->tpl_vars['template']->value;?>
/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['companyname']->value;?>
"/>
                  </a>
               </div>
            </div>
        
            <div class="col-sm-12 col-xs-12 col-md-9">
                <nav id="desktop-menu">
                    <ul class="sf-menu" id="navigation">
                 <li class="current">
                    <a href="#"><i class="fa fa-home"></i>Home</a>
                    <ul>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-with-tabs.html">Tab Slider</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-without-tabs.html">Plain Banner</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-video.html">Video Banner</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-image-slider.html">Multiple Image Slider Banner</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-domains.html">Domain Search</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-sticky.html">Sticky Header</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-templates.html">Sample Template Gallery</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-server"></i>Hosting</a>
                    <ul>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/shared.html">Shared Hosting</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/vps.html">Cloud VPS</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/servers.html">Dedicated Servers</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-globe"></i>Domain Pricing</a>
                    <ul>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/single-year-pricing.html">Single Year Pricing</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/single-year-pricing2.html">Single Year Pricing 2</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/multi-year-pricing.html">Multiple Year Pricing</a></li>
                    </ul>
                 </li>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-list"></i>Pages</a>
                    <ul>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/about.html">About</a></li>
					   <li><a href="http://demo.trewsoft.com/iconhost/themes/default/affiliate.html">Affiliate</a></li>
					   <li><a href="http://demo.trewsoft.com/iconhost/themes/default/choose-language.html">Choose Language</a></li>
					   <li><a href="http://demo.trewsoft.com/iconhost/themes/default/testimonials.html">Testimonials</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/faq.html">FAQ</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/login.html">Login</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/login2.html">Login2</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/datacenter.html">Datacenter</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/elements.html">Elements</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/pages-404.html">404 Page Classic</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/pages-404-dark.html">404 Page Dark</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/under-maintenance.html">Under Maintenance</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/template-gallery.html">Gallery</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/domain-for-sale.html">Domains For Sale</a></li>
                       <li>
                          <a href="#">Blog</a>
                          <ul>
                             <li><a href="http://demo.trewsoft.com/iconhost/themes/default/blog1-category.html">Category 1</a></li>
                             <li><a href="http://demo.trewsoft.com/iconhost/themes/default/blog2-category.html">Category 2</a></li>
                             <li><a href="http://demo.trewsoft.com/iconhost/themes/default/blog1-single.html">Single 1</a></li>
                             <li><a href="http://demo.trewsoft.com/iconhost/themes/default/blog2-single.html">Single 2</a></li>
                          </ul>
                       </li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-cog fa-fw"></i>Icons</a>
                    <ul>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/icons-fontawesome.html">FontAwesome Icons</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/icons-ionicons.html">Ionicons Icons</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/icons-materialdesign.html">MaterialDesign Icons</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/icons-pe7.html">pe7 Icons</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/icons-simple-line.html">Simple Line Icons</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/icons-themify.html">Themify Icons</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/icons-typicons.html">Typicons Icons</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/icons-weather.html">Weather Icons</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-envelope fa-fw"></i>Contact</a>
                    <ul>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/contact1.html">Contact 1</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/contact2.html">Contact 2</a></li>
                    </ul>
                 </li>
                 <li>
                    <a href="#"><i class="fa fa-tags fa-fw"></i>Offers</a>
                    <ul>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-offer.html">Coupon Offer</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/combo-offers.html">Combo Offers</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/limited-offers.html">Limited Offers Classic</a></li>
                       <li><a href="http://demo.trewsoft.com/iconhost/themes/default/limited-offers2.html">Limited Offers New</a></li>
					   <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-pop-offer.html">Offer Popup</a></li>
					   <li><a href="http://demo.trewsoft.com/iconhost/themes/default/index-pop-subscribe.html">Subscribe To Offer</a></li>
                    </ul>
                 </li>
              </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- End of Top Bar-->


    </div>
</section>

<section id="main-menu">

    <nav id="nav" class="navbar navbar-default navbar-main" role="navigation">
        <div class="container">
        	<div class="row">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                     <span class="pull-left">MENU</span> <i class="fa fa-bars pull-right" aria-hidden="true"></i>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav">

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value), 0, true);
?>


                </ul>

                <ul class="nav navbar-nav navbar-right">

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['secondaryNavbar']->value), 0, true);
?>


                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
        </div>
    </nav>

</section>

<?php if ($_smarty_tpl->tpl_vars['templatefile']->value == 'homepage') {?>
    <section class="bg_dark section-domian" id="home-banner">
        <div class="container text-center">
           <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['homebegin'];?>
</h2>
                <form method="post" action="domainchecker.php">
                    <div class="row">
                        <div class="col-sm-10 com-md-8 center-block">
                            <div class="input-group domainsearch btn-block">
                            	<div class="col-sm-8">
                                <input type="text" class="form-control" name="domain" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['exampledomain'];?>
" autocapitalize="none" />
                                </div>
                                	<div class="col-sm-2">
                                   <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                                        <input type="submit" class="btn waves-effect waves-light btn-warning search-domain" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search'];?>
" />
                                    <?php }?>
                                    </div>
                                    <div class="col-sm-2">
                                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                                        <input type="submit" name="transfer" class="btn waves-effect waves-light btn-primary search-domain" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainstransfer'];?>
" />
                                    <?php }?>
                                    </div>
                            </div>
                        </div>
                    </div>

                    <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

                </form>
            <?php } else { ?>
                <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['doToday'];?>
</h2>
            <?php }?>
        </div>
    </section>
    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
    <div class="home-shortcuts section_space bg_gray">
    <?php } else { ?>
    <div class="home-shortcuts nodomains">
    <?php }?>
        <div class="container">
            <h2 class="text-center title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['howcanwehelp'];?>
</h2>
            <div class="row">
             <div class="col-sm-12">
                    <ul>
                     <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value || $_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <li>
                            <a id="btnBuyADomain" href="domainchecker.php">
                                <i class="fa fa-globe"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['buyadomain'];?>

                                </p>
                            </a>
                        </li>
                      <?php }?>
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderhosting'];?>

                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['makepayment'];?>

                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    <?php echo $_smarty_tpl->tpl_vars['LANG']->value['getsupport'];?>

                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php }?>

<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<section id="main-body">
<?php if ($_smarty_tpl->tpl_vars['templatefile']->value != 'homepage') {?>
<div class="section_space bg_dark ">
    <div class="container">
        <div class="col-md-12">
            <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/pageheader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>$_smarty_tpl->tpl_vars['displayTitle']->value,'desc'=>$_smarty_tpl->tpl_vars['tagline']->value,'showbreadcrumb'=>true), 0, true);
?>

        </div>
      </div>
</div>  
   <?php }?>
<div class="container section_space">

     <div class="row">
        <?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>
            <div class="col-md-3 pull-md-left sidebar">
                <?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, ((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('sidebar'=>$_smarty_tpl->tpl_vars['primarySidebar']->value), 0, true);
?>

            </div>
        <?php }?>
        <!-- Container for main page display content -->
        <div class="<?php if (!$_smarty_tpl->tpl_vars['inShoppingCart']->value && ($_smarty_tpl->tpl_vars['primarySidebar']->value->hasChildren() || $_smarty_tpl->tpl_vars['secondarySidebar']->value->hasChildren())) {?>col-md-9 pull-md-right<?php } else { ?>col-xs-12<?php }?> main-content">
<?php }
}
