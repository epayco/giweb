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
              <li><a href="#"><b>Llamanos:</b> +57 (4) 444 8910</a></li>
              <li><a href="#"><i class="fa fa-headphones"></i><span> Soporte</span></a></li>
           </ul>
        </div>
        <div class="col-sm-12 col-md-6 col-xs-12">
           <div class="text-right loginbuttons">
              <a class="btn waves-effect waves-light btn-sm btn-success" href="http://demo.trewsoft.com/iconhost/themes/default/limited-offers.html" title=""><i class="fa fa-gift"></i> Oferta limitada</a>
              <a class="btn waves-effect waves-light btn-sm btn-pink" href="http://demo.trewsoft.com/iconhost/themes/default/combo-offers.html" title=""><i class="fa fa-gift"></i> Combos </a>
           </div>
        </div>
     </div>
  </section>
  <!-- End of Top MiniBar-->
  
<section class="menu-header top">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-2">
            <div class="logo">
                <a href="index.php"><img src="../images/logo.png"  alt="" />
              </a>
            </div>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-10 positioninitial hidden-xs">

            <nav style="margin-bottom: 0;
    margin-top: 20px;" id="desktop-menu" class=" yamm positioninitial navbar" role="navigation">
                <ul class="nav navbar-nav">
                    <li class=" yamm-fw">
                        <a href="../index.php"> <i class="fa fa-home" aria-hidden="true"></i> </a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="../domains.php">  Dominios </a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hosting </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h2>Hosting</h2>
                                            <p>Hosting o alojamiento web es el servicio mediante el cual se hace realidad la visibilidad de tu sitio o aplicativo web. <br>
                                                En ColombiaRedes ofrecemos hosting a corde de las necesidades de tu negocio o perfil.</p>
                                        </div>
                                        <a href="../hosting.php">
                                            <div class="col-lg-4">
                                                <h3>Hosting compartido</h3>
                                                <p>El hosting económico para tu sitio web con todos los requerimientos.</p>
                                            </div>
                                        </a>
                                        <a href="../hosting_reseller.php">
                                            <div class="col-lg-4">
                                                <h3>Hosting reseller</h3>
                                                <p>Conviértete en revendedor de hosting y genera ingresos extra.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../site_builder.php"> Creador de sitios </a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Streaming </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h2>Transmite audio en vivo</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                        <a href="../streaming.php">
                                            <div class="col-lg-4">
                                                <h3>Streaming de radio</h3>
                                                <p> Todo lo que necesitas para tener tu emisora online y empezar a transmitir.</p>
                                            </div>
                                        </a>
                                        <a href="../streaming_reseller.php">
                                            <div class="col-lg-4">
                                                <h3>Streaming de radio reseller</h3>
                                                <p> Genera ingresos extra vendiendo planes de Streaming.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dedicado y VPS
</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4 padding-10" style="overflow: auto; word-wrap: break-word;">
                                            <h2 style="word-wrap: break-word !important"> Más rápido, escalable y seguro. </h2>
                                            <p> Perfecto para los que piensan fortalecer o mejorar su aplicación web. <br> Disponibílidad garantizada, acceso root y completa personalización.</p>
                                        </div>
                                        <a href="../dedicated.php">
                                            <div class="col-lg-4">
                                                <h3>Servidores dedicados</h3>
                                                <p>Aloja tu proyecto en un servidor exclusivo.</p>
                                            </div>
                                        </a>
                                        <a href="../vps.php">
                                            <div class="col-lg-4">
                                                <h3>Servidores virtuales (VPS)</h3>
                                                <p> Más espacio y potencia para tu sitio.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Seguridad</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4 padding-10" style="overflow: auto; word-wrap: break-word;">
                                            <h2 style="word-wrap: break-word !important">Manten tu información <br>siempre segura</h2>
                                            <p>En ColombiaRedes nos preocupamos por ofrecer la seguridad que tu proyecto necesita, así no necesitarás buscar más proovedores.</p>
                                        </div>
                                        <a href="../ssl.php">
                                            <div class="col-lg-4">
                                                <h3>Certificados digitales </h3>
                                                <p>Asegura tu sitio web generando confidencialidad en las transacciones.</p>
                                            </div>
                                        </a>
                                        <a href="../sitelock.php">
                                            <div class="col-lg-4">
                                                <h3>Sitelock</h3>
                                                <p>Protege tu sitio web de hackers, malware, spammers y otras amenazas. SiteLock permitene mantener tus archivos y sitio Web seguros. </p>
                                            </div>
                                        </a>
                                        <a href="../codeguard.php">
                                            <div class="col-lg-4">
                                                <h3>CodeGuard</h3>
                                                <p>Crea copias de seguridad de tu información y recupera tus datos en pocos pasos.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Correo electrónico</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4 padding-10" style="overflow: auto; word-wrap: break-word;">
                                            <h2 style="word-wrap: break-word !important"> Personaliza las direcciones de tus e-mails</h2>
                                            <p>En Colombia Redes nos preocupamos por ofrecer todo lo que tu proyecto necesita, así no tienes que buscar más proovedores.</p>
                                        </div>
                                        <a href="../email_pymes.php">
                                            <div class="col-lg-4">
                                                <h3>Correo electrónico para pequeñas empresas</h3>
                                                <p> Ideal para pymes y emprendedores que quieran solidificar su imagen.</p>
                                            </div>
                                        </a>
                                        <a href="../email_corporative.php">
                                            <div class="col-lg-4">
                                                <h3>Correo electrónico corporativo</h3>
                                                <p>Correo avanzado con gran siporte para grandes organizaciones.</p>
                                            </div>
                                        </a>
                                        <a href="../g_suite.php">
                                            <div class="col-lg-4">
                                                <h3>G Suite <span>Anteriormente Google Apps for Work</span></h3>
                                                <p> Correo electrónico, calendario y almacenamiento en cualquier dispositivo.</p>
                                            </div>
                                        </a>
                                        <a href="../mail_marketing.php">
                                            <div class="col-lg-4">
                                                <h3>Email marketing</h3>
                                                <p>Potente herramienta para realizar tus campañas de email marketing.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Más</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4 padding-10" style="overflow: auto; word-wrap: break-word;">
                                            <h2 style="word-wrap: break-word !important"> Todo lo que necesitas</h2>
                                            <p>En Colombia Redes nos preocupamos por ofrecer todo lo que tu proyecto necesita, así no tienes que buscar más proovedores.</p>
                                        </div>
                                        <a href="pagos_online.php">
                                            <div class="col-lg-4">
                                                <h3>ePayco</h3>
                                                <p>Integra todos los medios de pago en tu web o app.</p>
                                            </div>
                                        </a>
                                        <div class="col-lg-4">
                                            <h3>Ordenes de trabajo</h3>
                                            <p> ¿Necesitas ayuda con tu proyecto? en ColombiaRedes contamos con expertos que puedes contratar por horas.</p>
                                        </div>
                                        <a href="../mail_marketing.php">
                                            <div class="col-lg-4">
                                                <h3>Email marketing</h3>
                                                <p>Potente herramienta para realizar tus campañas de email marketing.</p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
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
            
                    <ul>
                     {if $registerdomainenabled || $transferdomainenabled}
                      <div class="col-sm-3 text-center">
                        <li>
                            <a id="btnBuyADomain" href="domainchecker.php">
                                <i class="fa fa-globe"></i>
                                <p>
                                    {$LANG.buyadomain}
                                </p>
                            </a>
                        </li>
                        </div>
                      {/if}
                       <div class="col-sm-3 text-center">
                        <li>
                            <a id="btnOrderHosting" href="cart.php">
                                <i class="fa fa-hdd-o"></i>
                                <p>
                                    {$LANG.orderhosting}
                                </p>
                            </a>
                        </li>
                        </div>
                         <div class="col-sm-3 text-center">
                        <li>
                            <a id="btnMakePayment" href="clientarea.php">
                                <i class="fa fa-credit-card"></i>
                                <p>
                                    {$LANG.makepayment}
                                </p>
                            </a>
                        </li>
                        </div>
                         <div class="col-sm-3 text-center">
                        <li>
                            <a id="btnGetSupport" href="submitticket.php">
                                <i class="fa fa-envelope-o"></i>
                                <p>
                                    {$LANG.getsupport}
                                </p>
                            </a>
                        </li>
                      </div>
                    </ul>
               
           
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
