<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="{$charset}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{if $kbarticle.title}{$kbarticle.title} - {/if}{$pagetitle} - {$companyname}</title>

    {include file="$template/includes/head.tpl"}

    {$headoutput}

</head>
<body>

{$headeroutput}

<section id="thetopbar">
<div class="row">
 <div class="col-xs-12 col-sm-12 text-center ">
     {if $adminMasqueradingAsClient}
                <!-- Return to admin link -->
                <div class="admin-masquerade-notice">
                    {$LANG.adminmasqueradingasclient} <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="alert-link">{$LANG.logoutandreturntoadminarea}</a>
                </div>
            {elseif $adminLoggedIn}
                <!-- Return to admin link -->
                <div class="admin-masquerade-notice">
                    {$LANG.adminloggedin} <a href="{$WEB_ROOT}/logout.php?returntoadmin=1" class="alert-link">{$LANG.returntoadminarea}</a>
                </div>
            {/if}
    </div>
    </div>
  <div class="languadebar bg_gray">   
 <div class="row">
    <div class="col-xs-6 col-sm-6">
    <!-- Language -->
            {if $languagechangeenabled && count($locales) > 1}
                <div class="pull-left nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="languageChooser"><i class="fa fa-globe"></i> {$LANG.chooselanguage} <span class="caret"></span></a>
                    <div id="languageChooserContent" class="hidden">
                        <ul>
                            {foreach from=$locales item=locale}
                                <li><a href="{$currentpagelinkback}language={$locale.language}">{$locale.localisedName}</a></li>
                            {/foreach}
                        </ul>
                    </div>
                </div>
     {/if}
    </div>
    <div class="col-xs-6 col-sm-6 pull-right">
     <!-- Top Bar -->
        <div id="top-nav">
            <!-- Login/Account Notifications -->
            {if $loggedin}
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="accountNotifications" data-placement="bottom" title="Account Notifications"><i class="fa fa-info"></i> {$LANG.notifications} <span class="badge">{$clientAlerts|count}</span></a>
                    <div id="accountNotificationsContent" class="hidden">
                        {foreach $clientAlerts as $alert}
                            <div class="clientalert text-{$alert->getSeverity()}">{$alert->getMessage()}{if $alert->getLinkText()} <a href="{$alert->getLink()}" class="btn btn-xs btn-{$alert->getSeverity()}">{$alert->getLinkText()}</a>{/if}</div>
                        {foreachelse}
                            <div class="clientalert text-success"><i class="fa fa-check-square-o"></i> {$LANG.notificationsnone}</div>
                        {/foreach}
                    </div>
                </div>
            {else}
                <div class="pull-right nav">
                    <a href="#" class="quick-nav" data-toggle="popover" id="loginOrRegister" data-placement="bottom"><i class="fa fa-user"></i> {$LANG.login}</a>
                    <div id="loginOrRegisterContent" class="hidden">
                        <form action="{if $systemsslurl}{$systemsslurl}{else}{$systemurl}{/if}dologin.php" method="post" role="form">
                            <div class="form-group">
                                <input type="email" name="username" class="form-control" placeholder="{$LANG.clientareaemail}" required />
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="{$LANG.loginpassword}" autocomplete="off" required />
                            </div>
                            <div class="form-group">
                            <span class="input-group-btn">
                                        <input type="submit" class="btn btn-primary btn-block" value="{$LANG.login}" />
                                    </span>
                                    </div>
                            <label class="checkbox-inline">
                                <input type="checkbox" name="rememberme" /> {$LANG.loginrememberme} &bull; <a href="{$WEB_ROOT}/pwreset.php">{$LANG.forgotpw}</a>
                            </label>
                        </form>
                        <hr />
                        {$LANG.newcustomersignup|sprintf2:"<a href=\"$WEB_ROOT/register.php\">":"</a>"}
                    </div>
                </div>
            {/if}
            <!-- Shopping Cart -->
            <div class="pull-right nav">
                <a href="{$WEB_ROOT}/cart.php?a=view" class="quick-nav"><i class="fa fa-shopping-cart"></i> <span class="hidden-xs">{$LANG.viewcart} <span class="badge">{$cartitemcount}</span></span></a>
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
                  <a href="http://demo.trewsoft.com/iconhost/themes/default/index.html"><img src="{$WEB_ROOT}/templates/{$template}/images/logo.png" alt="{$companyname}"/>
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

                    {include file="$template/includes/navbar.tpl" navbar=$primaryNavbar}

                </ul>

                <ul class="nav navbar-nav navbar-right">

                    {include file="$template/includes/navbar.tpl" navbar=$secondaryNavbar}

                </ul>

            </div><!-- /.navbar-collapse -->
        </div>
        </div>
    </nav>

</section>

{if $templatefile == 'homepage'}
    <section class="bg_dark section-domian" id="home-banner">
        <div class="container text-center">
           {if $registerdomainenabled || $transferdomainenabled}
                <h2>{$LANG.homebegin}</h2>
                <form method="post" action="domainchecker.php">
                    <div class="row">
                        <div class="col-sm-10 com-md-8 center-block">
                            <div class="input-group domainsearch btn-block">
                            	<div class="col-sm-8">
                                <input type="text" class="form-control" name="domain" placeholder="{$LANG.exampledomain}" autocapitalize="none" />
                                </div>
                                	<div class="col-sm-2">
                                   {if $registerdomainenabled}
                                        <input type="submit" class="btn waves-effect waves-light btn-warning search-domain" value="{$LANG.search}" />
                                    {/if}
                                    </div>
                                    <div class="col-sm-2">
                                    {if $transferdomainenabled}
                                        <input type="submit" name="transfer" class="btn waves-effect waves-light btn-primary search-domain" value="{$LANG.domainstransfer}" />
                                    {/if}
                                    </div>
                            </div>
                        </div>
                    </div>

                    {include file="$template/includes/captcha.tpl"}
                </form>
            {else}
                <h2>{$LANG.doToday}</h2>
            {/if}
        </div>
    </section>
    {if $registerdomainenabled || $transferdomainenabled}
    <div class="home-shortcuts section_space bg_gray">
    {else}
    <div class="home-shortcuts nodomains">
    {/if}
        <div class="container">
            <h2 class="text-center title">{$LANG.howcanwehelp}</h2>
            <div class="row">
             <div class="col-sm-12">
                    <ul>
                     {if $registerdomainenabled || $transferdomainenabled}
                        <li>
                            <a id="btnBuyADomain" href="domainchecker.php">
                                <i class="fa fa-globe"></i>
                                <p>
                                    {$LANG.buyadomain}
                                </p>
                            </a>
                        </li>
                      {/if}
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    {$LANG.orderhosting}
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    {$LANG.makepayment}
                                </p>
                            </a>
                        </li>
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    {$LANG.getsupport}
                                </p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
{/if}

{include file="$template/includes/verifyemail.tpl"}

<section id="main-body">
{if $templatefile != 'homepage'}
<div class="section_space bg_dark ">
    <div class="container">
        <div class="col-md-12">
            {include file="$template/includes/pageheader.tpl" title=$displayTitle desc=$tagline showbreadcrumb=true}
        </div>
      </div>
</div>  
   {/if}
<div class="container section_space">

     <div class="row">
        {if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}
            <div class="col-md-3 pull-md-left sidebar">
                {include file="$template/includes/sidebar.tpl" sidebar=$primarySidebar}
            </div>
        {/if}
        <!-- Container for main page display content -->
        <div class="{if !$inShoppingCart && ($primarySidebar->hasChildren() || $secondarySidebar->hasChildren())}col-md-9 pull-md-right{else}col-xs-12{/if} main-content">
