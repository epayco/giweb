<!DOCTYPE html>
<html lang="en">

<head>
    <?php
include 'inc/head.php';
?>
</head>

<body>
    <!-- Global Fullpage Loader-->
    <!-- Top MiniBar-->
    <?php
include 'inc/header.php';
?>
        <!-- End of Header-->
        <!-- Breadcrumps -->
        <section class="breadcrumbs">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Hosting Compartido</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>Estas aquí: </li>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="#">Hosting</a>
                        </li>
                        <li class="active">Hosting compartido</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumps -->
        <!-- sub-banner -->
        <section id="sub-banner" class="bg_dark" style="background: url('images/slides/slide_3.png'); background-size: cover;">
            <div class="row info-text wow fadeIn">
                <div class="col-sm-5">
                    <div class="card">
                        <div>
                            <h2><b>Alojamiento web</b> <br>a tu medida</h2>
                            <h3>
                 <p>En <b>giweb</b>  tenemos la solución de hosting <br>  que tu negocio necesita.</p>
              </h3>
                            <p class="price "><span>Desde</span>

                                <br> <b class="price"><?php echo getCurrencyPrefix(); ?><?php echo getPrecioProducto(1,"annually",0,false);?> <?php echo getCurrencyCode();?>/Mes</b></p>
                            <p><a class="btn waves-effect waves-light btn-info btn-lg margin-top-10" href="#"> Comenzar ahora </a></p>
                        </div>
                    </div>
                    <div class="clearfix">
                    </div>
                </div>
            </div>
            <div class="img-holder">
                <img src="images/sub-banner_bg.png" alt="image description">
            </div>
        </section>

        <section class="icons">
        <div class="container">

          <div class="col-lg-4 col-lg-offset-2">
<p class="white hidden-xs">Multiples características</p>
          </div>
          <div class="col-lg-4 ">
<p class="white hidden-xs">Variedad de aplicaciones</p>
          </div>

        </div>
          <img src="images/icons_hosting.png" alt="">
        </section>
        <!-- End of Sub-Banner -->
        <!-- Shared Hosting Tabs -->
        <div class="shared-features  section_space" style="padding-bottom: 0 !important">
            <div class=" ">
                <div class=" ">
                    <div id="shared-hosting-tabs">
                        <ul>
                            <li><a href="#feature1"> <i class="fa fa-linux"></i>  Hosting Linux </a></li>
                            <li><a href="#feature2"><i class="fa fa-windows"></i>  Hosting Windows</a></li>
                        </ul>
                        <!-- Tab 1  -->
                        <div id="feature1">
                            <div class="tabfeatures">
                                <div class="row">
                                    <div class="text-center">
                                        <h2 class="title"><i class="fa fa-linux"></i><b>  Hosting Linux</b></h2>
                                        <!-- <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p> -->
                                    </div>
                                    <!--  Tab 1 Pricing Tables -->
                                    <div class="pricingtables servers">
                                        <div class="row">
                                            <div class="col-sm-4 margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">EMPRENDE</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getPrecioProducto(13);?></h4>
                                                            <span class="per">Anual</span>
                                                        </div>
                                                        <ul class="table-items">
                                                            <li class="item-table"> Espacio en disco <span> 100 GB </span></li>
                                                            <hr>
                                                            <li class="item-table"> Tráfico mensual <span> 250 GB </span></li>
                                                            <hr>
                                                            <li class="item-table"> Correos corporativos <span> 250 </span></li>
                                                            <hr>
                                                            <li class="item-table"> Bases de datos <span>Ilimitado  </span></li>
                                                            <hr>
                                                            <li class="item-table"> Cuentas FTP <span>Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Dominios adicionales <span>0 </span></li>
                                                            <hr>
                                                            <li class="item-table"> cPanel, PHP, MySQL <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
 </span></li>
                                                        </ul>
                                                        <div class="panel-footer">

                                                            <form id="form-linux-inicio" style="float:right; display: inline-block;" name="form_dedicado" id="form_dedicado" action="clientes/cart.php" method="post">
                                                                <input name="currency" type="hidden" value="<?php echo getMoneda() ?>"> 
                                                                <input name="a" type="hidden" value="add">
                                                                <input name="pid" type="hidden" value="13">
                                                            </form>
                                                            <!--  Various Pricing Dropdown Toggle -->
                                                            <!--  End Various Pricing Dropdown Toggle -->
                                                            <a data-form="form-linux-inicio" class="btn waves-effect waves-light btn-secondary2 btn-block cart" href="#">COMPRAR AHORA</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 most-popular margin-top-40">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="sticker-wrapper">
                                                            <div class="sticker bg-danger wow fadeIn">Más Popular</div>
                                                        </div>
                                                        <h3 class="text-center">PYME</h3>
                                                    </div>
                                                    <div class="panel-body text-center">
                                                        <span>Desde</span>
                                                        <h4><?php echo getPrecioProducto(15);?></h4>
                                                        <span class="per">Mensuales</span>
                                                    </div>
                                                    <ul class="table-items">
                                                        <li class="item-table"> Espacio en disco <span> 100 GB </span></li>
                                                        <hr>
                                                        <li class="item-table"> Tráfico mensual <span> 250 GB </span></li>
                                                        <hr>
                                                        <li class="item-table"> Correos corporativos <span> 250 </span></li>
                                                        <hr>
                                                        <li class="item-table"> Bases de datos <span>Ilimitado  </span></li>
                                                        <hr>
                                                        <li class="item-table"> Cuentas FTP <span>Ilimitado </span></li>
                                                        <hr>
                                                        <li class="item-table"> Dominios adicionales <span>0 </span></li>
                                                        <hr>
                                                        <li class="item-table"> cPanel, PHP, MySQL <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
 </span></li>
                                                    </ul>
                                                    <div class="panel-footer">
                                                          <form id="form-linux-pyme" style="float:right; display: inline-block;" name="form_dedicado" id="form_dedicado" action="clientes/cart.php" method="post">
                                                                <input name="currency" type="hidden" value="<?php echo getMoneda() ?>"> 
                                                                <input name="a" type="hidden" value="add">
                                                                <input name="pid" type="hidden" value="15">
                                                            </form>
                                                        <!--  Various Pricing Dropdown Toggle -->
                                                        <!--  End Various Pricing Dropdown Toggle -->
                                                        <a data-form="form-linux-pyme" class="btn waves-effect waves-light btn-primary btn-block cart" href="#">COMPRAR AHORA</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4  margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">CORPORATIVO</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getPrecioProducto(15);?></h4>
                                                            <span class="per">Mensuales</span>
                                                        </div>
                                                        <ul class="table-items">
                                                            <li class="item-table"> Espacio en disco <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Tráfico mensual <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Correos corporativos <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Bases de datos <span>Ilimitado  </span></li>
                                                            <hr>
                                                            <li class="item-table"> Cuentas FTP <span>Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Dominios adicionales <span> 3 </span></li>
                                                            <hr>
                                                            <li class="item-table"> cPanel, PHP, MySQL <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
 </span></li>
                                                        </ul>
                                                        <div class="panel-footer">
                                                            <!--  Various Pricing Dropdown Toggle -->
                                                            <!--  End Various Pricing Dropdown Toggle -->
                                                            <a class="btn waves-effect waves-light btn-secondary2 btn-block" href="#">COMPRAR AHORA</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Tab 1 Pricing Tables -->
                                    <!-- Tab 1 End of FAQ  -->
                                </div>
                            </div>
                            <div class="extra-features section_space margin-top-40 bg_gray">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <h2 class="title"> <b>Todo lo que necesitas para estar presente en la Web</b></h2>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b>Sitio web más rápido y ágil</b> <br>¡Nuestro acelerador de aplicaciones web, potencializado por Varnish Cache, garantiza el máximo rendimiento de su sitio web a todo momento!</p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b>Correo electrónico incluído</b>  <br>Características avanzadas de administración de correo electrónico presentes en cPanel te permiten manejar tus correos electrónicos, listas de correo y más sin ningún tipo de problemas. </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data  margin-top-20">
                                            <p> <b> cPanel para Administración </b> <br> ¡cPanel, un panel de control intuitivo y poderoso, está disponible en todos los planes, y hace que la administración de paquetes de alojamiento sea una cosa fácil!
                                            </p>
                                        </div>
                                    </div>

                                  </div>
                                      <div class="row">
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b>Softaculous:</b> Más de 175 scripts pre-instalados (Wordpress, Joomla, Drupal, etc). </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b>AntiSpam con MailScanner: </b> Podrás mantener el nivel de spam controlado. </p>
                                        </div>
                                    </div>

                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b> Copias Respaldo:</b>Backup periódicos de todo tu sitio web en discos duros alternos.
                                            </p>
                                        </div>
                                    </div>

                                  </div>

                                      <div class="row">
                                    <div class="col-sm-4 col-sm-offset-2 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b> Instalación gratuita: </b> Minguno de nuestros servicios tiene setup o recargo de instalación.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data  margin-top-20">
                                            <p> <b> Seguridad:</b>Antivirus ClamAV y KSPLICE para actualizar fallos de seguridad y <b>OS Cloud </b> .
                                            </p>
                                        </div>
                                    </div>

                                  </div>
                                </div>

                            <!-- End of Tab 1 Hosting Features -->
                            <div>
                                <div class="row">
                                    <div class="col-sm-12 text-center margin-top-40 ">
                                        <h2 class="title"> <b> Comparación de Planes  </b></h2>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="container ">
                                        <div class="card_40 margin-top-20 margin-bottom-40">
                                            <table class="table tablecomapration">
                                                <thead>
                                                    <tr class="bold">
                                                        <td>Características</td>
                                                        <td>Plan Inicio</td>
                                                        <td>Plan Deluxe</td>
                                                        <td>Plan Ilimitado</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Espacio en disco</td>
                                                        <td>100 GB</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transferencia mensual</td>
                                                        <td>250 GB</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dominios permitidos para hospedar</td>
                                                        <td>0</td>
                                                        <td>3</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subdominios</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cuentas de correo</td>
                                                        <td>250</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Redirecciones de correo</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acceso vía WebMail</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Autocontestadores</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bloqueo de Spam</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Filtro de correo</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cuenta FTP principal</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subcarpetas FTP</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acceso FTP</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estadísticas del dominio</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Registro de errores</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gestor de logs</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bases de datos MySQL</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PHPMyAdmin y MySQL</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Panel de control </td>
                                                        <td>cPanel / DirectAdmin</td>
                                                        <td>cPanel / DirectAdmin</td>
                                                        <td>cPanel / DirectAdmin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Redireccionamiento Web</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cambio de contraseña</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visor de uso de disco</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Página de error 404</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Protección Hotlink</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Index Manager</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Handlers de Apache</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cron jobs</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipos MIME</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Copias de seguridad</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gestor de archivos</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Scripts preinstalados</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Softaculous / Fantastico</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HTML</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>PHP / Perl / CGI</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>JavaScript</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Flash &amp; ShockWave</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tomcat / JSP</td>
                                                        <td>
                                                        </td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg_gray section_space">
                                <div class="row">
                                    <div class="col-sm-7  margin-top-40 margin-bottom-40 text-left text-align-left">
                                        <h2 class="title text-left"> Instala automáticamente tu aplicación de gestión favorita <b>(con softaculus)</b> <br> <br></h2>
                                        <p class="margin-top-40 margin-bottom-40 text-left"> Instala desde cPanel más de 400 aplicaciones.
                                            <br> ¿Necesitas un gestor de contenidos?; instala Wordpress, Joomla, o Dupral con un clic.
                                            <br>
                                            <br> Además puedes ver demostraciones de cada una de las aplicaciones para descrubrir cual se adapta a tus necesidades.</p>
                                    </div>
                                    <div class="col-sm-5"> <img src="images/softaculous.jpg" alt=""></div>
                                </div>
                            </div>
                            <div class="section_space">
                                <div class="row">
                                    <div class="col-sm-6  margin-top-40">
                                        <h2 class="title"> Todos los planes Linux incluyen cPanel </h2>
                                        <ul class="margin-top-40 margin-bottom-40">
                                            <li>El panel de control para tu hosting más confiable e intuitivo desde 1997.</li>
                                            <li>Instala más de 400 aplicaciones con 1 click.</li>
                                            <li>Software siempre actualizado sin problemas.</li>
                                            <li>Gestor de archivos fácil de manejar.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--  Tab 1 FAQ  -->
                            <div class="faq bg_gray pb-30">
                                <div class="row">
                                    <div class="col-sm-12 text-center margin-top-40">
                                        <h2 class="title"> Respondemos tus preguntas <b>(FAQ's)</b></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 margin-top-40">
                                        <div class="faq-questions">
                                            <div id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_1">¿Qué es un hosting compartido?</a></h4>
                                                    </div>
                                                    <div id="tab1_1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>En el Alojamiento Compartido, varios clientes se alojan en un único servidor es decir, los clientes comparten los recursos del servidor. Esto ayuda a reducir el coste, ya que el costo del servidor y sus recursos se distribuyen por todos los clientes / paquetes alojados en el servidor. El alojamiento compartido es perfecto para los sitios web personales, pequeñas y medianas empresas que no requieren todos los recursos de un servidor. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_2">¿Puedo alojar múltiples sitios web dentro de un plan de Alojamiento compartido?</a></h4>
                                                    </div>
                                                    <div id="tab1_2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>¡Sí! Nuestros planes de alojamiento compartido Pro y Business le permiten alojar más de un sitio web, mediante la adición de dominios secundarios a través de su panel de control de alojamiento cPanel.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_3">¿Hay alguna garantía de devolución de dinero?</a></h4>
                                                    </div>
                                                    <div id="tab1_3" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, ofrecemos una garantía 100% libre de riesgo de 30 días.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_4">¿El alojamiento de correo electrónico está incluido en mi paquete?</a></h4>
                                                    </div>
                                                    <div id="tab1_4" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, todos nuestros paquetes de alojamiento vienen con Alojamiento de correo ilimitado.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_5">¿Puedo actualizar a un plan superior?</a></h4>
                                                    </div>
                                                    <div id="tab1_5" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, se puede actualizar fácilmente a uno de nuestros planes más altos en cualquier momento.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_6">¿Mis datos estarán seguros? ¿Hacen respaldos de información? </a></h4>
                                                    </div>
                                                    <div id="tab1_6" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, sus datos están un 100% seguros y la copia de seguridad se da cada 5 días.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_7">¿Incluyen protección contra virus?</a></h4>
                                                    </div>
                                                    <div id="tab1_7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, todos nuestros servidores están protegidos por Clam AV.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Puedo dividir mi paquete de alojamiento compartido y revenderlo?</a></h4>
                                                    </div>
                                                    <div id="tab1_8" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Ya que un paquete de alojamiento compartido no se puede usar para este propósito, se puede revender fácilmente paquetes personalizados con nuestro revendedor de alojamiento. Para ver nuestros planes de revendedor de alojamiento, <a href="hosting_reseller.php">haga clic aquí</a>.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Ofrecen acceso a SSH?</a></h4>
                                                    </div>
                                                    <div id="tab1_8" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>No, por el momento, no ofrecemos acceso SSH. Sin embargo, la mayoría de las tareas se puede lograr fácilmente utilizando el Panel de Control de Alojamiento - cPanel.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Con quién me contacto si necesito ayuda?</a></h4>
                                                    </div>
                                                    <div id="tab1_8" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Nuestro equipo de soporte está siempre a mano para ayudarle. Puede echar un vistazo a todos nuestros datos de contacto  <a href="#">aquí</a>. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Tab 1  -->
                        <!-- Tab 2  -->
                        <div id="feature2">
                            <div class="tabfeatures">
                                <div class="row">
                                    <div class="text-center">
                                        <h2 class="title"><i class="fa fa-windows"></i><b>  Hosting Windows</b></h2>
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <!--  Tab 1 Pricing Tables -->
                                    <div class="pricingtables servers">
                                        <div class="row">
                                            <div class="col-sm-4 margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">EMPRENDE</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4>$50</h4>
                                                            <span class="per">Mensual</span>
                                                        </div>
                                                        <ul class="table-items">
                                                            <li class="item-table"> Espacio en disco <span> 100 GB </span></li>
                                                            <hr>
                                                            <li class="item-table"> Tráfico Mensual <span> 250 GB </span></li>
                                                            <hr>
                                                            <li class="item-table"> Correos Corporativos <span> 250 </span></li>
                                                            <hr>
                                                            <li class="item-table"> Bases de Datos <span>Ilimitado  </span></li>
                                                            <hr>
                                                            <li class="item-table"> Cuentas FTP <span>Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Dominios adicionales <span>0 </span></li>
                                                            <hr>
                                                            <li class="item-table"> cPanel, PHP, MySQL <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
 </span></li>
                                                        </ul>
                                                        <div class="panel-footer">
                                                            <!--  Various Pricing Dropdown Toggle -->
                                                            <div class="btn-group btn-block">
                                                                <button type="button" class="btn btn-block btn-secondary dropdown-toggle text-right" data-toggle="dropdown">1 Mes <b class="text-blue">@ $300 /mo</b> <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu btn-block" role="menu">
                                                                    <li><a href="#">3 Years @ $7000 <b class="text-green"></b></a></li>
                                                                    <li><a href="#">2 Years @ $5000 <b class="text-green"></b></a></li>
                                                                    <li><a href="#">1 Year @ $3000 <b class="text-green"></b></a></li>
                                                                    <li><a href="#">6 Meses @ $1500 <b class="text-green"></b></a></li>
                                                                    <li><a href="#">3 Meses @ $800 <b class="text-green"></b></a></li>
                                                                    <li><a href="#">1 Mes @ $300 <b class="text-green"></b></a></li>
                                                                </ul>
                                                            </div>
                                                            <!--  End Various Pricing Dropdown Toggle -->
                                                            <a class="btn waves-effect waves-light btn-secondary2 btn-block" href="#">COMPRAR AHORA</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 most-popular margin-top-40">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="sticker-wrapper">
                                                            <div class="sticker bg-danger wow fadeIn">Más Popular</div>
                                                        </div>
                                                        <h3 class="text-center">PYME</h3>
                                                    </div>
                                                    <div class="panel-body text-center">
                                                        <span>Desde</span>
                                                        <h4>$345</h4>
                                                        <span class="per">Mensuales</span>
                                                    </div>
                                                    <ul class="table-items">
                                                        <li class="item-table"> Espacio en disco <span> 100 GB </span></li>
                                                        <hr>
                                                        <li class="item-table"> Tráfico Mensual <span> 250 GB </span></li>
                                                        <hr>
                                                        <li class="item-table"> Correos Corporativos <span> 250 </span></li>
                                                        <hr>
                                                        <li class="item-table"> Bases de Datos <span>Ilimitado  </span></li>
                                                        <hr>
                                                        <li class="item-table"> Cuentas FTP <span>Ilimitado </span></li>
                                                        <hr>
                                                        <li class="item-table"> Dominios adicionales <span>0 </span></li>
                                                        <hr>
                                                        <li class="item-table"> cPanel, PHP, MySQL <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
 </span></li>
                                                    </ul>
                                                    <div class="panel-footer">
                                                        <!--  Various Pricing Dropdown Toggle -->
                                                        <div class="btn-group btn-block">
                                                            <button type="button" class="btn btn-block btn-secondary dropdown-toggle text-right" data-toggle="dropdown">1 Mes <b class="text-blue">@ $345 /mo</b> <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu btn-block" role="menu">
                                                                <li><a href="#">3 Years @ $7000 <b class="text-green"></b></a></li>
                                                                <li><a href="#">2 Years @ $5000 <b class="text-green"></b></a></li>
                                                                <li><a href="#">1 Year @ $3000 <b class="text-green"></b></a></li>
                                                                <li><a href="#">6 Meses @ $1500 <b class="text-green"></b></a></li>
                                                                <li><a href="#">3 Meses @ $800 <b class="text-green"></b></a></li>
                                                                <li><a href="#">1 Mes @ $345 <b class="text-green"></b></a></li>
                                                            </ul>
                                                        </div>
                                                        <!--  End Various Pricing Dropdown Toggle -->
                                                        <a class="btn waves-effect waves-light btn-primary btn-block" href="#">COMPRAR AHORA</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-4  margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">CORPORATIVO</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4>$390</h4>
                                                            <span class="per">Mensuales</span>
                                                        </div>
                                                        <ul class="table-items">
                                                            <li class="item-table"> Espacio en disco <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Tráfico Mensual <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Correos Corporativos <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Bases de Datos <span>Ilimitado  </span></li>
                                                            <hr>
                                                            <li class="item-table"> Cuentas FTP <span>Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Dominios adicionales <span> 3 </span></li>
                                                            <hr>
                                                            <li class="item-table"> cPanel, PHP, MySQL <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
 </span></li>
                                                        </ul>
                                                        <div class="panel-footer">
                                                            <!--  Various Pricing Dropdown Toggle -->
                                                            <div class="btn-group btn-block">
                                                                <button type="button" class="btn btn-block btn-secondary dropdown-toggle" data-toggle="dropdown">1 Mes <b class="text-blue">@ $390 /mo</b> <span class="caret"></span>
                                                                </button>
                                                                <ul class="dropdown-menu btn-block" role="menu">
                                                                    <li><a href="#">3 Years @ $7000 <b class="text-green">/mo</b></a></li>
                                                                    <li><a href="#">2 Years @ $5000 <b class="text-green">/mo</b></a></li>
                                                                    <li><a href="#">1 Year @ $3000 <b class="text-green">/mo</b></a></li>
                                                                    <li><a href="#">6 Meses @ $1500 <b class="text-green">/mo</b></a></li>
                                                                    <li><a href="#">3 Meses @ $800 <b class="text-green">/mo</b></a></li>
                                                                    <li><a href="#">1 Mes @ $390 <b class="text-green">/mo</b></a></li>
                                                                </ul>
                                                            </div>
                                                            <!--  End Various Pricing Dropdown Toggle -->
                                                            <a class="btn waves-effect waves-light btn-secondary2 btn-block" href="#">COMPRAR AHORA</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Tab 1 Pricing Tables -->
                                    <!-- Tab 1 End of FAQ  -->
                                </div>
                            </div>
                            <div class="extra-features section_space bg_gray">
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <h2 class="title"> <b>Todo plan incluye  </b></h2>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b>Softaculous </b> con más de 175 scripts pre-instalados ( wordpress, joomla, drupal, etc). </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b>Antiespam con MailScanner </b> podras configurar el nivel de spam y controlarlo facilmente. </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data  margin-top-20">
                                            <p> <b> (cPanel, DirectAdmin y Plesk)</b> gestiona tu hosting con software de alta calidad.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b> Copias Respaldo</b>, backup periodicos de todo tu sitio web en disco duros alternos.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data margin-top-20">
                                            <p> <b> Instalación gratuita </b> ninguno de nuestros servicios tiene setup o recargo de instalacion.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-sm-4 text-center margin-top-40">
                                        <i class="fa fa-check-circle  fa-3x text-blue "></i>
                                        <div class="data  margin-top-20">
                                            <p> <b> Seguridad</b> , Antivirus ClamAV y KSPLICE para actualizar fallos de seguridad y <b>OS Cloud </b> .
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End of Tab 1 Hosting Features -->
                            <div>
                                <div class="row">
                                    <div class="col-sm-12 text-center margin-top-40">
                                        <h2 class="title"> <b> Comparación de Planes  </b></h2>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="container ">
                                        <div class="card_40 margin-top-20 margin-bottom-40">
                                            <table class="table tablecomapration">
                                                <thead>
                                                    <tr class="bold">
                                                        <td>Caracteristicas</td>
                                                        <td>Plan Inicio</td>
                                                        <td>Plan Deluxe</td>
                                                        <td>Plan Ilimitado</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Espacio en disco</td>
                                                        <td>100 GB</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Transferencia mensual</td>
                                                        <td>250 GB</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dominios permitidos para hospedar</td>
                                                        <td>0</td>
                                                        <td>3</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Subdominios</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cuentas de correo</td>
                                                        <td>250</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Redirecciones de correo</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acceso via WebMail</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Autocontestadores</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bloqueo de Spam</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Filtro de correo</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cuenta FTP principal</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sub carpetas FTP</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Acceso FTP</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Estadísticas del dominio</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Registro de errores</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gestor de logs</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bases de datos MySQL</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                        <td>Ilimitado</td>
                                                    </tr>
                                                    <tr>
                                                        <td>PHPMyAdmin MySQL</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Panel de control</td>
                                                        <td>CPanel / DirectAdmin</td>
                                                        <td>CPanel / DirectAdmin</td>
                                                        <td>CPanel / DirectAdmin</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Redireccionamiento Web</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cambio de contraseña</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Visor de uso de disco</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Página de error 404</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Protección Hotlink</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Index Manager</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Handlers de Apache</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Cron jobs</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tipos MIME</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Copias de seguridad</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Gestor de archivos</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Scripts preinstalados</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Softaculous / Fantastico</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>HTML</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>PHP / Perl / CGI</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>JavaScript</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Flash &amp; ShockWave</td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tomcat / JSP</td>
                                                        <td>
                                                        </td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                        <td><i class="fa check fa-check" aria-hidden="true"></i></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="bg_gray">
                                <div class="row">
                                    <div class="col-sm-7  margin-top-40">
                                        <h2 class="title"> Instala automáticamente tu aplicación de gestión favorita <b>(Con softaculus)</b><br><br></h2>
                                        <p class="margin-top-40 margin-bottom-40"> Instala desde cPanel más de 400 aplicaciones. ¿Necesitas un gestor de contenidos? instala Wordpress, Joomla, o Dupral con un clic.
                                            <br>
                                            <br> Además puedes ver demostraciones de cada una de las aplicaciones para descrubrir cual se adapta a tus necesidades.</p>
                                    </div>
                                    <div class="col-sm-5">
                                        <img src="images/softaculous.jpg" alt=""></div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6  margin-top-40">
                                    <h2 class="title"> Todos los planes Linux incluyen cPanel </h2>
                                    <ul class="margin-top-40 margin-bottom-40">
                                        <li>El panel de control para tu hosting más confiable e intuitivo desde 1997.</li>
                                        <li>Instala más de 400 aplicaciones con 1 click.</li>
                                        <li>Software siempre actualizado sin problemas.</li>
                                        <li>Gestor de archivos fácil de manejar.</li>
                                    </ul>
                                </div>
                            </div>
                            <!--  Tab 1 FAQ  -->
                            <div class="faq bg_gray pb-30">
                                <div class="row">
                                    <div class="col-sm-12 text-center margin-top-40">
                                        <h2 class="title"> Respondemos tus preguntas <b>(FAQ's)</b></h2>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 margin-top-40">
                                        <div class="faq-questions">
                                            <div id="accordion">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_1">¿Qué es un hosting compartido?</a></h4>
                                                    </div>
                                                    <div id="tab1_1" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>En el Alojamiento Compartido, varios clientes se alojan en un único servidor es decir, los clientes comparten los recursos del servidor. Esto ayuda a reducir el coste, ya que el costo del servidor y sus recursos se distribuyen por todos los clientes / paquetes alojados en el servidor. El alojamiento compartido es perfecto para los sitios web personales, pequeñas y medianas empresas que no requieren todos los recursos de un servidor. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_2">¿Puedo alojar múltiples sitios web dentro de un plan de Alojamiento compartido?</a></h4>
                                                    </div>
                                                    <div id="tab1_2" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>¡Sí! Nuestros planes de alojamiento compartido Pro y Business le permiten alojar más de un sitio web, mediante la adición de dominios secundarios a través de su panel de control de alojamiento cPanel.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_3">¿Hay alguna garantía de devolución de dinero?</a></h4>
                                                    </div>
                                                    <div id="tab1_3" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, ofrecemos una garantía 100% libre de riesgo de 30 días.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_4">¿El alojamiento de correo electrónico está incluido en mi paquete?</a></h4>
                                                    </div>
                                                    <div id="tab1_4" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, todos nuestros paquetes de alojamiento vienen con Alojamiento de correo ilimitado.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_5">¿Puedo actualizar a un plan superior?</a></h4>
                                                    </div>
                                                    <div id="tab1_5" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, se puede actualizar fácilmente a uno de nuestros planes más altos en cualquier momento.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_6">¿Mis datos estarán seguros? ¿Hacen respaldos de información? </a></h4>
                                                    </div>
                                                    <div id="tab1_6" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, sus datos están un 100% seguros y la copia de seguridad se da cada 5 días.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_7">¿Incluyen protección contra virus?</a></h4>
                                                    </div>
                                                    <div id="tab1_7" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Sí, todos nuestros servidores están protegidos por Clam AV.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Puedo dividir mi paquete de alojamiento compartido y revenderlo?</a></h4>
                                                    </div>
                                                    <div id="tab1_8" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Ya que un paquete de alojamiento compartido no se puede usar para este propósito, se puede revender fácilmente paquetes personalizados con nuestro revendedor de alojamiento. Para ver nuestros planes de revendedor de alojamiento, <a href="hosting_reseller.php">haga clic aquí</a>.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Ofrecen acceso a SSH?</a></h4>
                                                    </div>
                                                    <div id="tab1_8" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>No, por el momento, no ofrecemos acceso SSH. Sin embargo, la mayoría de las tareas se puede lograr fácilmente utilizando el Panel de Control de Alojamiento - cPanel.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel panel-default">
                                                    <div class="panel-heading">
                                                        <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Con quién me contacto si necesito ayuda?</a></h4>
                                                    </div>
                                                    <div id="tab1_8" class="panel-collapse collapse">
                                                        <div class="panel-body">
                                                            <p>Nuestro equipo de soporte está siempre a mano para ayudarle. Puede echar un vistazo a todos nuestros datos de contacto  <a href="#">aquí</a>. </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- End of Tab 2 Pricing Tables -->
                    </div>
                </div>
            </div>
            <!-- End of Tab 2  -->
            <!-- Tab 3  -->
            <!-- End of Tab 3  -->
        </div>
        </div>
        </div>
        </div>
        <!-- Tab 1 Hosting Features -->
        <!-- End of Shared Hosting Tabs -->
        <!--  Help -->
        <?php
include 'inc/support.php';
?>
            <!--  End Help -->
            <!--  Footer -->
            <?php
include 'inc/footer.php';
?>
                <!--  Go to Top-->
                <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
                <!--  End of Go to Top -->
                <!--<script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/hoverIntent.js"></script>
                <script src="js/superfish.min.js"></script>
                <script src="js/owl.carousel.js"></script>
                <script src="js/wow.min.js"></script>
                <script src="js/tablesaw-init.js"></script>
                <script src="js/jquery.slicknav.min.js"></script>
                <script src="js/jquery.circliful.min.js"></script>
                <script src="js/waypoints.min.js"></script>
                <script src="js/jquery.responsiveTabs.js"></script>
                <script src="js/jquery.slicknav.min.js"></script>
                <script src="js/retina.min.js"></script>
                <script src="js/counterup.min.js"></script>
                <script src="js/waves.js"></script>
                <script src="js/custom.js"></script>
                <script src="js/select2.js"></script>
                <script src="js/functions.js"></script>
                !-->
                <?php include ("inc/scripts.php");?>
                <script>
                $(document).on("ready", function(e) {
                    // ______________ SELECT2
                    //$(".e1").select2();

                    // ______________ DOMAINS
                    $("#domainextensions").owlCarousel({
                        autoPlay: 50,
                        items: 8,
                        itemsDesktop: [1199, 6],
                        itemsDesktopSmall: [979, 6],
                        pagination: false
                    });

                });

                // ______________ DOMAINS VARIOUS PRICING
                $(".id_div_summary").on("click", "img", function(e) {
                    var detailsTable = $(this).closest('tr').next('tr').find('.id_div_details');
                    var displayStyle = detailsTable.css('display');

                    if (displayStyle == 'block') {
                        detailsTable.hide();
                        $(this).attr('src', 'images/plus.png');
                    } else {
                        detailsTable.show();
                        $(this).attr('src', 'images/minus.png');
                    }
                });
                </script>
                <script type="text/javascript">
                // ______________  TOOLTIPS
                $(document).on("ready", function(e) {
                    $('[data-toggle="tooltip"]').tooltip();
                });

                // ______________ TABS
                $('#shared-hosting-tabs').responsiveTabs({
                    startCollapsed: 'accordion'
                });
                </script>
</body>

</html>
