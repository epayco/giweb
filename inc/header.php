<!-- Global Fullpage Loader-->
<!-- <div id="global-loader"></div> -->
<!-- Top MiniBar-->
<style>
.menuh1 {
    margin: 0;
    border-radius: 0;
}

.yamm .dropdown.yamm-fw .menuh1 {
    background: #e8e8e8;
}

.yamm .dropdown.yamm-fw .menuh1 h2 {
    color: #444444 !important;
}

.yamm .dropdown.yamm-fw .menuh1 h3 {
    color: #444444 !important;
}

.yamm .dropdown.yamm-fw .menuh1 p {
    color: #444444;
}

.margin-left-5 {
    margin-left: 5px
}
</style>
<section class="topminibar" style="position: relative">
    <div class="row positioninitial">
        <div class="col-sm-12 col-md-5 col-xs-12 positioninitial">
            <ul class="list-inline " style="font-size: 12px">
                <li class="logo ">
                    <a href="index.php"><img src="images/logo.png"  alt="" />
              </a>
                </li>
                <li>
                    <div class="select-language">
                        <ul class="nav navbar-nav">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="font-weight: 400 !important">
                   <img src="images/flags/<?php echo getISOPais(); ?>.png"/> <?php echo getPais(); ?> <b class="caret"></b>
                 </a>
                                <ul class="dropdown-menu" id="country_currencies">
                                    <li><a data-currency="USD" data-iso_country="AR" href="#"><img src="images/flags/AR.png"/> Argentina</a></li>
                                    <li><a data-currency="COP" data-iso_country="CO" href="#"><img src="images/flags/CO.png"/> Colombia</a></li>
                                    <li><a data-currency="USD" data-iso_country="US" href="#"><img src="images/flags/US.png"/> Estados Unidos</a></li>
                                    <li><a data-currency="USD" data-iso_country="ES" href="#"><img src="images/flags/ES.png"/> España</a></li>
                                    <li><a data-currency="USD" data-iso_country="PE" href="#"><img src="images/flags/PE.png"/> Peru</a></li>
                                    <li><a data-currency="USD" data-iso_country="ME" href="#"><img src="images/flags/MX.png"/> Mexico</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="col-sm-12 col-md-7 col-xs-12 positioninitial">
            <div class="text-right loginbuttons positioninitial yamm">
                <ul class="list-inline " style="font-size: 12px;  display: inline-block;">
                    <li class="dropdown yamm-fw  noborder">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span><b>Atención al cliente:</b> +57 (4) 444 8910 <b class="caret"></b></span></a>
                        <ul class="dropdown-menu menuh1">
                            <li class="full-width">
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-12 padding-10">
                                            <h2> ¿Tienes preguntas? Llámanos. </h2>
                                        </div>

                                      </div>

                                      <div class="row">
                                        <div class="col-lg-3 numbers">
                                            <h3><img src="images/flags/CO.png"/> Colombia</h3>
                                            <p><b>Medellín:</b> +57(4) 444 8910
                                                <br>
                                                <b>Bogotá:</b> +57(1) 390 7149
                                                <br>
                                                <b>Barranquilla:</b> +57(5) 385 9138</p>
                                        </div>
                                        <div class="col-lg-3 numbers">
                                            <h3><img src="images/flags/US.png"/> Estados Unidos</h3>
                                            <p><b>Medellín:</b> +57(4) 444 8910 </p>
                                        </div>
                                        <div class="col-lg-3 numbers">
                                            <h3><img src="images/flags/ES.png"/> España</h3>
                                            <p><b>Medellín:</b> +57(4) 444 8910</p>
                                        </div>
                                        <div class="col-lg-3 numbers">
                                            <h3><img src="images/flags/AR.png"/> Argentina</h3>
                                            <p><b>Medellín:</b> +57(4) 444 8910</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-3 numbers">
                                            <h3><img src="images/flags/PE.png"/> Peru</h3>
                                            <p><b>Medellín:</b> +57(4) 444 8910</p>
                                        </div>
                                        <div class="col-lg-3 numbers">
                                            <h3><img src="images/flags/MX.png"/> Mexico</h3>
                                            <p><b>Medellín:</b> +57(4) 444 8910</p>
                                        </div>
                                    </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="https://blog.giweb.com"><span> Blog </span></a></li>
                    <li><a href="https://giweb.io/clientes/supporttickets.php"><i class="fa fa-headphones"></i><span> Soporte </span></a></li>
                    <!--  <a class="btn waves-effect waves-light btn-sm btn-success" href="limited-offers.html" title=""><i class="fa fa-gift"></i> Oferta limitada</a> -->
                    <li class="dropdown yamm-fw nomargin">
                        <a class="btn waves-effect waves-light btn-sm  btn-default dropdown-toggle nomargin margin-left-5" data-toggle="dropdown" href="#" title="">Crear cuenta </a>
                        <ul class="dropdown-menu menuh1">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-7 padding-10" style="overflow: hidden; word-wrap: break-word;">
                                            <h2 style="word-wrap: break-word !important"> Productos destacados </h2>
                                            <div class="itemmenu">
                                                <i class="fa fa-server  fa-5x "></i>
                                                <p>CLOUD VPS</p>
                                            </div>
                                            <div class="itemmenu">
                                                <i class="fa fa-globe  fa-5x" aria-hidden="true"></i>
                                                <p>DOMIMIOS</p>
                                            </div>
                                            <div class="itemmenu">
                                                <i class="fa fa-shield  fa-5x" aria-hidden="true"></i>
                                                <p>CERTIFICADOS SSL</p>
                                            </div>
                                            <div class="itemmenu">
                                                <img src="images/ox-logo.png" width="90px" style="    margin-bottom: 15px;
    margin-top: 25px;" alt="">
                                                <p>BUSINESS EMAIL</p>
                                            </div>
                                            <div class="col-xs-12 nomargin nopadding ">
                                                <p style="margin-top: 10px;
    margin-bottom: 15px;">Encuentra en <b>giweb</b> un completo stock de productos para empezar tu presencia en la web.</p>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 border_left_menu2" style="margin-top: 30px">
                                            <div class="nomargin blockdisplay" href="dedicated.php">
                                                <h2>Clientes nuevos</h2>
                                                <p>Empieza tu carrera en la web, utiliza el cupón:
                                                    <br> <b class="cupon">GOWEB</b> y obten <b>20% de descuento</b>.</p>
                                                <a class="btn waves-effect waves-light btn-sm margin-bottom-15  btn-secondary2 dropdown-toggle nomargin margin-left-5" data-toggle="dropdown" href="#" title=""> Empezar ahora </a>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                        </ul>
                    </li>
                    <a class="btn waves-effect waves-light btn-sm btn-blue nomargin" href="https://giweb.io/clientes/clientarea.php" title="">Iniciar sesión</a>
                </ul>
                </div>
                </div>
            </div>
</section>
<!-- End of Top MiniBar-->
<!-- Header-->
<section class="menu-header top">
    <div class="row">
        <div class="col-sm-12 col-xs-12 col-md-12 visible-xs">
            <nav id="desktop-menu">
                <ul class="sf-menu" id="navigation">
                    <li class="current">
                        <a href="#"><i class="fa fa-home"></i>Home</a>
                        <ul>
                            <li><a href="index-with-tabs.html">Tab Slider</a></li>
                            <li><a href="index-without-tabs.html">Plain Banner</a></li>
                            <li><a href="index-video.html">Video Banner</a></li>
                            <li><a href="index-image-slider.html">Multiple Image Slider Banner</a></li>
                            <li><a href="index-domains.html">Domain Search</a></li>
                            <li><a href="index-sticky.html">Sticky Header</a></li>
                            <li><a href="index-templates.html">Sample Template Gallery</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-server"></i>Hosting</a>
                        <ul>
                            <li><a href="shared.html">Shared Hosting</a></li>
                            <li><a href="vps.html">Cloud VPS</a></li>
                            <li><a href="servers.html">Dedicated Servers</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-globe"></i>Domain Pricing</a>
                        <ul>
                            <li><a href="single-year-pricing.html">Single Year Pricing</a></li>
                            <li><a href="single-year-pricing2.html">Single Year Pricing 2</a></li>
                            <li><a href="multi-year-pricing.html">Multiple Year Pricing</a></li>
                        </ul>
                    </li>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-list"></i>Pages</a>
                        <ul>
                            <li><a href="about.html">About</a></li>
                            <li><a href="affiliate.html">Affiliate</a></li>
                            <li><a href="choose-language.html">Choose Language</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="login.html">Login</a></li>
                            <li><a href="login2.html">Login2</a></li>
                            <li><a href="datacenter.html">Datacenter</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="pages-404.html">404 Page Classic</a></li>
                            <li><a href="pages-404-dark.html">404 Page Dark</a></li>
                            <li><a href="under-maintenance.html">Under Maintenance</a></li>
                            <li><a href="template-gallery.html">Gallery</a></li>
                            <li><a href="domain-for-sale.html">Domains For Sale</a></li>
                            <li>
                                <a href="#">Blog</a>
                                <ul>
                                    <li><a href="blog1-category.html">Category 1</a></li>
                                    <li><a href="blog2-category.html">Category 2</a></li>
                                    <li><a href="blog1-single.html">Single 1</a></li>
                                    <li><a href="blog2-single.html">Single 2</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-cog fa-fw"></i>Icons</a>
                        <ul>
                            <li><a href="icons-fontawesome.html">FontAwesome Icons</a></li>
                            <li><a href="icons-ionicons.html">Ionicons Icons</a></li>
                            <li><a href="icons-materialdesign.html">MaterialDesign Icons</a></li>
                            <li><a href="icons-pe7.html">pe7 Icons</a></li>
                            <li><a href="icons-simple-line.html">Simple Line Icons</a></li>
                            <li><a href="icons-themify.html">Themify Icons</a></li>
                            <li><a href="icons-typicons.html">Typicons Icons</a></li>
                            <li><a href="icons-weather.html">Weather Icons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-envelope fa-fw"></i>Contact</a>
                        <ul>
                            <li><a href="contact1.html">Contact 1</a></li>
                            <li><a href="contact2.html">Contact 2</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-tags fa-fw"></i>Offers</a>
                        <ul>
                            <li><a href="index-offer.html">Coupon Offer</a></li>
                            <li><a href="combo-offers.html">Combo Offers</a></li>
                            <li><a href="limited-offers.html">Limited Offers Classic</a></li>
                            <li><a href="limited-offers2.html">Limited Offers New</a></li>
                            <li><a href="index-pop-offer.html">Offer Popup</a></li>
                            <li><a href="index-pop-subscribe.html">Subscribe To Offer</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 col-md-12 positioninitial hidden-xs">
            <nav style="margin-bottom: 0;
    margin-top: 10px;" id="desktop-menu" class=" yamm positioninitial navbar" role="navigation">
                <ul class="nav navbar-nav">
                    <li class=" yamm-fw">
                        <a href="index.php" style="padding-left: 0 !important; padding-right: 5px !important;"> <i class="fa fa-home" aria-hidden="true"></i> </a>
                    </li>
                   <li class="dropdown yamm-fw">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Dominios </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h2>¿Qué es un dominio?</h2>
                                            <p>Dominio es el nombre único que distinguira tu sitio web de los demás, y lo volvera accesible. 
                                                <br> En <b>giweb</b> ofrecemos más de 400 extensiones de dominio.</p>
                                        </div>
                                        <div class="col-lg-8 border_left_menu">
                                            <a href="dominios.php">
                                                <div class="col-lg-6">
                                                    <h3>Registrar</h3>
                                                    <p>Inscribe ya el nombre de tu proyecto y obtén visibilidad en internet.</p>
                                                </div>
                                            </a>
                                            <a href="hosting_reseller.php">
                                                <div class="col-lg-6">
                                                    <h3>Transferir</h3>
                                                    <p>¿Inconformidades con tu proveedor? transfiere tu dominio con nosotros en pocos pasos.</p>
                                                </div>
                                            </a>

                                              <a href="hosting_reseller.php">
                                                <div class="col-lg-6">
                                                    <h3>Hacer  WhoIs</h3>
                                                    <p> Observa la información pública de cualquier dominio.</p>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Hosting </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h2>Hosting</h2>
                                            <p>Hosting o alojamiento web es el servicio mediante el cual se hace realidad la visibilidad de tu sitio o aplicativo web.
                                                <br> En <b>giweb</b> ofrecemos hosting a corde de las necesidades de tu negocio o perfil.</p>
                                        </div>
                                        <div class="col-lg-8 border_left_menu">
                                            <a href="hosting.php">
                                                <div class="col-lg-6">
                                                    <h3>Hosting compartido</h3>
                                                    <p>El hosting económico para tu sitio web con todos los requerimientos.</p>
                                                </div>
                                            </a>
                                            <a href="hosting_reseller.php">
                                                <div class="col-lg-6">
                                                    <h3>Hosting reseller</h3>
                                                    <p>Conviértete en revendedor de hosting y genera ingresos extra.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="site_builder.php"> Creador de sitios </a>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> Streaming </a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <h2>Transmite audio en vivo</h2>
                                            <p>El <b>streaming de audio</b> es una excelente vía para la conexión, difusión, acercamiento y contacto con clientes, amigos y aliados. Con el servicio de <b>streaming de audio</b> de <b>giweb</b> pdrás transmitir fácilmente audio y obtener ingresos extra.</p>
                                        </div>
                                        <div class="col-lg-8 border_left_menu">
                                            <a href="streaming.php">
                                                <div class="col-lg-6">
                                                    <h3>Streaming de radio</h3>
                                                    <p> Todo lo que necesitas para tener tu emisora online y empezar a transmitir.</p>
                                                </div>
                                            </a>
                                            <a href="streaming_reseller.php">
                                                <div class="col-lg-6">
                                                    <h3>Streaming de radio reseller</h3>
                                                    <p> Genera ingresos extra vendiendo planes de Streaming.</p>
                                                </div>
                                            </a>
                                        </div>
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
                                            <h2 style="word-wrap: break-word !important"> Más rápido, escalable y seguro </h2>
                                            <p> Perfecto para los que piensan fortalecer o mejorar su aplicación web.
                                                <br> Disponibílidad garantizada, acceso root y completa personalización.</p>
                                        </div>
                                        <div class="col-lg-8 border_left_menu">
                                            <a href="dedicated.php">
                                                <div class="col-lg-6">
                                                    <h3>Servidores dedicados</h3>
                                                    <p>Aloja tu proyecto en un servidor exclusivo.</p>
                                                </div>
                                            </a>
                                            <a href="vps.php">
                                                <div class="col-lg-6">
                                                    <h3>Servidores virtuales (VPS)</h3>
                                                    <p> Más espacio y potencia para tu sitio.</p>
                                                </div>
                                            </a>
                                        </div>
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
                                            <h2 style="word-wrap: break-word !important">Asegura tu información</h2>
                                            <p>En <b>giweb</b> nos preocupamos por ofrecer la seguridad que tu proyecto necesita, así no necesitarás buscar más proovedores.</p>
                                        </div>
                                        <div class="col-lg-8 border_left_menu">
                                            <a href="codeguard.php">
                                                <div class="col-lg-6">
                                                    <img src="images/codeguard_1.png" height="30px" alt="">
                                                    <h3>CodeGuard</h3>
                                                    <p>Asegura tu sitio web en solo unos minutos. La copia de seguridad en la nube de CodeGuard te permite recuperar los datos de su sitio web al instante.
                                                    </p>
                                                </div>
                                            </a>
                                            <a href="sitelock.php">
                                                <div class="col-lg-6">
                                                    <img src="images/sitelock_1.png" height="30px" alt="">
                                                    <h3 class="margin-top-10">Sitelock</h3>
                                                    <p>Más de 5000 sitios web son atacados todos los días. Obtén SiteLock y protege tu sitio web de piratas informáticos, virus y malware. </p>
                                                </div>
                                            </a>
                                            <a href="ssl.php">
                                                <div class="col-lg-6">
                                                    <h3 class="margin-top-10">Certificados Digitales </h3>
                                                    <p>Nuestros certificados protegen tus datos personales, incluidas contraseñas, tarjetas de crédito e información de identidad.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown yamm-fw">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Email y Gsuite</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="yamm-content">
                                    <div class="row">
                                        <div class="col-lg-4 padding-10" style="overflow: auto; word-wrap: break-word;">
                                            <h2 style="word-wrap: break-word !important"> Personaliza tus e-mails</h2>
                                            <p>En <b>giweb</b> nos preocupamos por ofrecer todo lo que tu proyecto necesita, así no tienes que buscar más proovedores.</p>
                                        </div>
                                        <div class="col-lg-8 border_left_menu">
                                            <a href="email_pymes.php">
                                                <div class="col-lg-6">
                                                    <img src="images/ox-logo.png" height="25px" alt="">
                                                    <h3>Email de Negocios</h3>
                                                    <p> Correo electrónico simple y potente para pequeñas empresas. Dale a tu negocio un cambio de imagen profesional con direcciones de correo electrónico personalizadas.</p>
                                                </div>
                                            </a>
                                            <a href="email_corporative.php">
                                                <div class="col-lg-6">
                                                    <img src="images/ox-logo.png" height="25px" alt="">
                                                    <h3>Email Corporativo</h3>
                                                    <p>Adquiere una suite de correo electrónico repleta de energía para tu empresa. Comparte contactos, tareas, calendarios y archivos. Accede a tu correo en tu dispositivo móvil o tableta.</p>
                                                </div>
                                            </a>
                                            <a href="g_suite.php">
                                                <div class="col-lg-6">
                                                    <img src="images/gsuite-logo.png" height="25px" alt="">
                                                    <h3>G Suite<span> by Google Cloud</span></h3>
                                                    <p> Adquiere correo electrónico, almacenamiento en la nube, herramientas de colaboración y otras aplicaciones comerciales con G Suite.</p>
                                                </div>
                                            </a>
                                            <a href="mail_marketing.php">
                                                <div class="col-lg-6    ">
                                                    <h3>Email marketing</h3>
                                                    <p>Potente herramienta para realizar tus campañas de email marketing.</p>
                                                </div>
                                            </a>
                                        </div>
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
                                            <p>En <b>giweb</b> nos preocupamos por ofrecer todo lo que tu proyecto necesita, así no tienes que buscar más proovedores.</p>
                                        </div>
                                        <div class="col-lg-8 border_left_menu">
                                            <a href="pagos_online.php">
                                                <div class="col-lg-6">
                                                    <h3>ePayco <span>(Pagos en línea para tu web o app)</span></h3>
                                                    <p>Integra todos los medios de pago fácilmente.</p>
                                                </div>
                                            </a>
                                            <div class="col-lg-6">
                                                <h3>Ordenes de trabajo</h3>
                                                <p> ¿Necesitas ayuda con tu proyecto? en <b>giweb</b> contamos con expertos que puedes contratar por horas.</p>
                                            </div>
                                            <a href="mail_marketing.php">
                                                <div class="col-lg-6">
                                                    <h3>Email marketing</h3>
                                                    <p>Potente herramienta para realizar tus campañas de email marketing.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <a class="btn waves-effect waves-light btn-md btn-pink pull-right" href="combo_oferta.php" title="">Combos en oferta </a>
                </ul>
            </nav>
        </div>
    </div>
</section>
<!-- End of Header-->