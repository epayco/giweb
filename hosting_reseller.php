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
                        <li class="active">Hosting reseller</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumps -->
        <!-- sub-banner -->
        <section id="sub-banner" class="bg_dark" style="background: url('images/slides/slide_17.jpg'); background-size: cover; ">
            <div class="row info-text wow fadeIn" style="padding-top: 40px;">
                <div class="col-sm-6">
                    <div>
                        <h2><b>Genera ganancias</b> vendiendo hosting</h2>

              <h3>
                <p> <i class="fa fa-check-circle" aria-hidden="true"></i> Crea tus propios paquetes y fideliza a tus clientes.</p>
                <p> <i class="fa fa-check-circle" aria-hidden="true"></i> 30 días de garantía de devolución de dinero.</p>
                <p> <i class="fa fa-check-circle" aria-hidden="true"></i> Garantía de funcionamiento en tiempo al aire del 99,9% </p>
              </h3>
                        <p><span>Desde</span>
                            <br> <b class="price"><?php echo getSymbol();?><?php echo getPrecioProducto(106,"annually",12);?> <?php echo getMoneda(); ?>/Mes</b></p>
                        <p><a class="btn waves-effect waves-light btn-info btn-lg margin-top-10" href="#"> Ver planes </a></p>
                    </div>
                </div>

            </div>
            <div class="img-holder">
                <img src="images/sub-banner_bg.png" alt="image description">
            </div>
        </section>
        <!-- End of Sub-Banner -->
        <!-- Shared Hosting Tabs -->
        <div class="shared-features  section_space" style="padding-bottom: 0 !important">
            <div class=" ">
                <div class=" ">
                    <div id="shared-hosting-tabs">
                        <ul>
                            <li><a href="#feature1"> <i class="fa fa-linux"></i>  Reseller Linux </a></li>
                            <li><a href="#feature2"><i class="fa fa-windows"></i>  Reseller Windows</a></li>
                        </ul>
                        <!-- Tab 1  -->
                        <div id="feature1">
                            <div class="tabfeatures">
                                <div class="row">
                                    <div class="text-center">
                                        <h2 class="title"><i class="fa fa-linux"></i><b> Reseller Hosting Linux</b></h2>
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <!--  Tab 1 Pricing Tables -->
                                    <div class="pricingtables servers">
                                        <div class="row">
                                            <div class="col-sm-3 margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">INICIO</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(106,"annually",12);?> <?php echo getMoneda(); ?></h4>
                                                            <span class="per">Anual</span>
                                                        </div>
                                                       <ul class="table-items">

                                        <li class="item-table"> 1 Dominio .com .net .org <span> Gratis </span></li>
                                        <hr>
                                        <li class="item-table"> Espacio en Disco <span> 20 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Tráfico Mensual <span> 200 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Cuentas a hospedar <span> Ilimitado </span></li>
                                        <hr>
                                        <li class="item-table"> WHM/CPanel <span>Ilimitado  </span></li>
                                        <hr>
                                        <li class="item-table"> CPanel para sus Clientes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table"> DNS Privados <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table">80% Descuento SiteLock <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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


                                             <div class="col-sm-3 margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">DELUXE</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(107);?> <?php echo getMoneda(); ?></h4>
                                                            <span class="per">Mensual</span>
                                                        </div>
                            <ul class="table-items">
                                        <hr>
                                        <li class="item-table"> 1 Dominio .com .net .org <span> Gratis </span></li>
                                        <hr>
                                        <li class="item-table"> Espacio en Disco <span> 50 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Tráfico Mensual <span> 1000 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Cuentas a hospedar <span> Ilimitado </span></li>
                                        <hr>
                                        <li class="item-table"> WHM/CPanel <span>Ilimitado  </span></li>
                                        <hr>
                                        <li class="item-table"> CPanel para sus Clientes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table"> DNS Privados <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table">80% Descuento SiteLock <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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

                                            <div class="col-sm-3 most-popular margin-top-40">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="sticker-wrapper">
                                                            <div class="sticker bg-danger wow fadeIn">Más Popular</div>
                                                        </div>
                                                        <h3 class="text-center">EXTREMO</h3>
                                                    </div>
                                                    <div class="panel-body text-center">
                                                        <span>Desde</span>
                                                        <h4><?php echo getSymbol();?><?php echo getPrecioProducto(108);?> <?php echo getMoneda(); ?></h4>
                                                        <span class="per">Mensuales</span>
                                                    </div>
                                                    <ul class="table-items">

                                        <li class="item-table"> 1 Dominio .com .net .org <span> Gratis </span></li>
                                        <hr>
                                        <li class="item-table"> Espacio en Disco <span> 100 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Tráfico Mensual <span> 2 TB </span></li>
                                        <hr>
                                        <li class="item-table"> Cuentas a hospedar <span> Ilimitado </span></li>
                                        <hr>
                                        <li class="item-table"> WHM/CPanel <span>Ilimitado  </span></li>
                                        <hr>
                                        <li class="item-table"> CPanel para sus Clientes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table"> DNS Privados <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table">80% Descuento SiteLock <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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
                                            <div class="col-sm-3  margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">CORPORATIVO</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(109);?> <?php echo getMoneda(); ?></h4>
                                                            <span class="per">Mensuales</span>
                                                        </div>
                                                        <ul class="table-items">

                                        <li class="item-table"> 1 Dominio .com .net .org <span> Gratis </span></li>
                                        <hr>
                                        <li class="item-table"> Espacio en Disco <span> 200 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Tráfico Mensual <span> 3.9 TB </span></li>
                                        <hr>
                                        <li class="item-table"> Cuentas a hospedar <span> Ilimitado </span></li>
                                        <hr>
                                        <li class="item-table"> WHM/CPanel <span>Ilimitado  </span></li>
                                        <hr>
                                        <li class="item-table"> CPanel para sus Clientes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table"> DNS Privados <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table">80% Descuento SiteLock <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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

                            <div class="extra-features section_space bg_gray  margin-top-40">

                <div class="col-sm-12 ">
                    <h2 class="title"> <b> Características </b></h2>
                </div>

  <div class="row">
                <div class="col-sm-4 text-center margin-top-40">

                    <div class="data margin-top-20 ">

                      <h3 ><img  height="40px" src="https://www.euronaming.com/templates/euronamingv2/images/euronaming-whm-logo.png" alt=""> <br> <br><span>   Poderoso Panel de Control de Alojamiento Web </span> </h3>
                        <p><br> Completo control administrativo. <br><br>
 Supervisión el estado del servidor durante todo el día. <br><br>
 <b>Creador de paquetes de Alojamiento:</b> <br> Espacio de disco limitado, transferencia, correo electrónico, bases de datos, etc.
</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <div class="data margin-top-20 text-center">
                        <h3><img  height="40px" src="https://www.whmcs.com/images/logoblue.png" alt=""> <br>  <br> <span> Administración de clientes y facturación en uno solo </span> </h3>
                        <p> <br> Facturación, administración de cliente y soporte de funciones fácil de manejar. <br>
 <br>Gestión integrada de Dominios <br>  <br>
Personalizable, sencillo and seguro <br>  <br>
* No incluido en plan - Reseller Linux Inicio <br>
 </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center  margin-top-40">

                    <div class="data  margin-top-20">
                      <h3><img  height="40px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c2/CPanel_logo.svg/1280px-CPanel_logo.svg.png" alt="">  <br> <br> <span>  Panel de control personalizado fácil de usar </span></h3>
                        <p> Panel de Control de clientes líder en el mundo <br> <br>
Administración de páginas web, visualizar las estadísticas de sitio web, crear cuentas de correo electrónico, etc <br> <br>
Viene con el Script de instalación de Softaculous - Instalar blogs, carritos de compra etc.
                        </p>
                    </div>
                </div>

              </div>


        </div>
        <!-- End of Tab 1 Hosting Features -->


        <div class="row section_space">

          <div class="col-sm-4 text-center margin-top-40">

              <div class="data margin-top-20 ">

                <h3 > <i class="fa fa-check-circle  fa-3x text-blue "></i> <br> <br> Infraestructura sólida  </h3>
                  <p><br> Centros de Datos de Vanguardia. <br><br>
Servidor Xeon Dual Quad-Core. <br><br>
<b>Servidores escalables redundantes.
</p>
              </div>
          </div>
          <div class="col-sm-4 text-center margin-top-40">
              <div class="data margin-top-20 text-center">
                  <h3> <i class="fa fa-check-circle  fa-3x text-blue "></i> <br> <br>  Alojamiento de correo avanzado incluido <br> </h3>
                  <p> <br> Cuentas de correo electrónico POP3 ilimitadas con SMTP.<br>
                      <br>Soporte IMAP<br>
                      <br>Interfaz de correo web fácil de usar Gestión integrada de Dominios <br>  <br>
</p>
              </div>
          </div>
          <div class="col-sm-4 text-center  margin-top-40">

              <div class="data  margin-top-20">
                <h3><i class="fa fa-check-circle  fa-3x text-blue "></i> <br> <br> Características de Alojamiento Web</h3>
                  <p> <br> Dominios Adicionales Ilimitados <br> <br>
Subdominios Ilimitados <br> <br>
Bases de Datos Ilimitadas <br> <br>
Dominios Parqueados <br> <br>
Cuentas FTP Ilimitadas <br> <br>
SSL privado disponible <br> <br>
IP Adicionales Ilimitadas
                  </p>
              </div>
          </div>
    </div>

        <div class="section_space bg_gray">
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


        <!--  Tab 1 FAQ  -->
        <div class="faq pb-30">
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
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_1">Differences between various options? Which one should I subscribe to?</a></h4>
                                </div>
                                <div id="tab1_1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_2">Can I switch between plans? If so, how often? Are there any charges involved?</a></h4>
                                </div>
                                <div id="tab1_2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_3">How to add more administrators to my account?</a></h4>
                                </div>
                                <div id="tab1_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_4">Can I transfer my accounts outside of IconSite to IconSite?</a></h4>
                                </div>
                                <div id="tab1_4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_5">What are the backup options available? How to enable them?</a></h4>
                                </div>
                                <div id="tab1_5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_6">What are the SLA's? </a></h4>
                                </div>
                                <div id="tab1_6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_7">Is there a dedicated Account Manager for my account?</a></h4>
                                </div>
                                <div id="tab1_7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">Can I change my credit card information on file?</a></h4>
                                </div>
                                <div id="tab1_8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
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
                                        <h2 class="title"><i class="fa fa-windows"></i><b> Reseller Hosting Windows</b></h2>
                                        <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                    </div>
                                    <!--  Tab 1 Pricing Tables -->
                                    <div class="pricingtables servers">
                                        <div class="row">
                                            <div class="col-sm-3 margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">INICIO</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(111);?> <?php echo getMoneda(); ?></h4>
                                                            <span class="per">Anual</span>
                                                        </div>
                                                       <ul class="table-items">

                                        <li class="item-table"> 1 Dominio .com .net .org <span> Gratis </span></li>
                                        <hr>
                                        <li class="item-table"> Espacio en Disco <span> 20 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Tráfico Mensual <span> 200 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Cuentas a hospedar <span> Ilimitado </span></li>
                                        <hr>
                                        <li class="item-table"> WHM/CPanel <span>Ilimitado  </span></li>
                                        <hr>
                                        <li class="item-table"> CPanel para sus Clientes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table"> DNS Privados <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table">80% Descuento SiteLock <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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


                                             <div class="col-sm-3 margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">DELUXE</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(112);?> <?php echo getMoneda(); ?></h4>
                                                            <span class="per">Anual</span>
                                                        </div>
                            <ul class="table-items">
                                        <hr>
                                        <li class="item-table"> 1 Dominio .com .net .org <span> Gratis </span></li>
                                        <hr>
                                        <li class="item-table"> Espacio en Disco <span> 50 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Tráfico Mensual <span> 1000 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Cuentas a hospedar <span> Ilimitado </span></li>
                                        <hr>
                                        <li class="item-table"> WHM/CPanel <span>Ilimitado  </span></li>
                                        <hr>
                                        <li class="item-table"> CPanel para sus Clientes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table"> DNS Privados <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table">80% Descuento SiteLock <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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

                                            <div class="col-sm-3 most-popular margin-top-40">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                        <div class="sticker-wrapper">
                                                            <div class="sticker bg-danger wow fadeIn">Más Popular</div>
                                                        </div>
                                                        <h3 class="text-center">EXTREMO</h3>
                                                    </div>
                                                    <div class="panel-body text-center">
                                                        <span>Desde</span>
                                                        <h4><?php echo getSymbol();?><?php echo getPrecioProducto(108);?> <?php echo getMoneda(); ?></h4>
                                                        <span class="per">Mensuales</span>
                                                    </div>
                                                    <ul class="table-items">

                                        <li class="item-table"> 1 Dominio .com .net .org <span> Gratis </span></li>
                                        <hr>
                                        <li class="item-table"> Espacio en Disco <span> 100 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Tráfico Mensual <span> 2 TB </span></li>
                                        <hr>
                                        <li class="item-table"> Cuentas a hospedar <span> Ilimitado </span></li>
                                        <hr>
                                        <li class="item-table"> WHM/CPanel <span>Ilimitado  </span></li>
                                        <hr>
                                        <li class="item-table"> CPanel para sus Clientes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table"> DNS Privados <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table">80% Descuento SiteLock <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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
                                            <div class="col-sm-3  margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">CORPORATIVO</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(113);?> <?php echo getMoneda(); ?></h4>
                                                            <span class="per">Anuales</span>
                                                        </div>
                                                        <ul class="table-items">

                                        <li class="item-table"> 1 Dominio .com .net .org <span> Gratis </span></li>
                                        <hr>
                                        <li class="item-table"> Espacio en Disco <span> 200 GB </span></li>
                                        <hr>
                                        <li class="item-table"> Tráfico Mensual <span> 3.9 TB </span></li>
                                        <hr>
                                        <li class="item-table"> Cuentas a hospedar <span> Ilimitado </span></li>
                                        <hr>
                                        <li class="item-table"> WHM/CPanel <span>Ilimitado  </span></li>
                                        <hr>
                                        <li class="item-table"> CPanel para sus Clientes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table"> DNS Privados <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                        <hr>
                                        <li class="item-table">80% Descuento SiteLock <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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

                                  <div class="extra-features section_space">
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

        <div class="row">
            <div class="col-sm-6  margin-top-40">
                <h2 class="title"> Instala automáticamente tu aplicación de gestión favorita <b>(Con softaculus)</b></h2>
                <p class="margin-top-40 margin-bottom-40"> Instala desde cPanel más de 400 aplicaciones. ¿Necesitas un gestor de contenidos? instala Wordpress, Joomla, o Dupral con un clic.
                    <br>
                    <br> Además puedes ver demostraciones de cada una de las aplicaciones para descrubrir cual se adapta a tus necesidades.</p>
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
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_1">Differences between various options? Which one should I subscribe to?</a></h4>
                                </div>
                                <div id="tab1_1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_2">Can I switch between plans? If so, how often? Are there any charges involved?</a></h4>
                                </div>
                                <div id="tab1_2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_3">How to add more administrators to my account?</a></h4>
                                </div>
                                <div id="tab1_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_4">Can I transfer my accounts outside of IconSite to IconSite?</a></h4>
                                </div>
                                <div id="tab1_4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_5">What are the backup options available? How to enable them?</a></h4>
                                </div>
                                <div id="tab1_5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_6">What are the SLA's? </a></h4>
                                </div>
                                <div id="tab1_6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_7">Is there a dedicated Account Manager for my account?</a></h4>
                                </div>
                                <div id="tab1_7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">Can I change my credit card information on file?</a></h4>
                                </div>
                                <div id="tab1_8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                    </div>
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
                <script src="js/jquery.min.js"></script>
                <script src="js/bootstrap.min.js"></script>
                <script src="js/hoverIntent.js"></script>
                <script src="js/superfish.min.js"></script>
                <script src="js/owl.carousel.js"></script>
                <script src="js/wow.min.js"></script>
                <script src="js/jquery.circliful.min.js"></script>
                <script src="js/waypoints.min.js"></script>
                <script src="js/jquery.responsiveTabs.js"></script>
                <script src="js/jquery.slicknav.min.js"></script>
                <script src="js/retina.min.js"></script>
                <script src="js/counterup.min.js"></script>
                <script src="js/waves.js"></script>
                <script src="js/custom.js"></script>
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
