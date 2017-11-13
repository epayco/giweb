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
                    <h1>Copias de seguridad para tu web</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>Estas aquí: </li>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="#">Seguridad</a>
                        </li>
                        <li class="active">CodeGuard</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumps -->
        <!-- sub-banner -->
        <section id="sub-banner" class="bg_dark" style="background: url('images/slides/slide_codeguard.png'); background-size: cover;">
            <div class="row info-text wow fadeIn">
                <div class="col-sm-10 col-sm-offset-1 text-center  ">
                    <div>
                        <img src="images/logo_codeguard.png" alt="">
                        <h2><b>Copia de seguridad en la nube para tu sitio web</b> </h2>
                        <h3>


                 <p>Todos los sitios web corren riesgo de accidentes y pérdida de datos; <br> la  <b>copia de seguridad en la nube de CodeGuard</b> te permitirá recuperar los datos con sólo unos clics.</p>
              </h3>
                        <p class="price"><span>Protege tu sitio web desde</span>
                            <br> <b class="price"><?php echo getSymbol();?><?php echo getPrecioProducto(4,"annually",12);?> <?php echo getMoneda(); ?>/Mes</b></p>
                        <p><a class="btn waves-effect waves-light btn-secondary btn-lg margin-top-10" data-toggle="modal" data-target="#videocodeguard" href="#plans"> Aprender más </a> <a id="buttonplans" class="btn waves-effect waves-light btn-info btn-lg margin-top-10" href="#"> Ver planes </a> </p>
                    </div>
                </div>
              
            </div>

        </section>
        <!-- End of Sub-Banner -->
        <!-- Shared Hosting Tabs -->


                            <div class="extra-features bg_gray section_space margin-top-20">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="title"> <b>Copia de seguridad de sitios web que sí funciona</b></h2>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <img src="images/codemins/1code.png" alt="">
                    <div class="data margin-top-20">
                        <p> <b>Copias de seguridad automáticas </b> <br>  <br> <b>CodeGuard</b> trabaja en segundo plano, lo que significa que puedes encenderlo y sentarte mientras <b>CodeGuard</b> toma regularmente copias de seguridad de tus datos. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                  <img src="images/codemins/2code.png" alt="">
                    <div class="data margin-top-20">
                        <p> <b>Configuración sin complicaciones </b> <br>  <br> Dado que <b>CodeGuard</b> se basa en la nube, su puesta en marcha es muy fácil - sólo tienes que añadir a tu sitio web los detalles de conexión para iniciar el proceso de copia de seguridad. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <img src="images/codemins/3code.png" alt="">
                    <div class="data  margin-top-20">
                        <p> <b>Garantía de devolución de dinero por 30 días  </b> <br>  <br> Prueba <b>CodeGuard</b> y descubre lo fácil que es asegurar tu sitio web. Con nuestro periodo de devolución de 30 días, no tienes nada que perder.

                        </p>
                    </div>
                </div>
               
             
            
            </div>
        </div>



         <div class="extra-features section_space ">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="title"> <b>¿Cómo funciona?</b></h2>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                     <span class="number green">1</span>
                    <div class="data margin-top-20">
                        <p> <b>Conecta su sitio web </b> <br>  <br> Conecta tu sitio web a <b>CodeGuard</b> usando SFTP / información MySQL. Una vez conectado, una copia de seguridad inicial se iniciará automáticamente.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                   <span class="number green">2</span>
                    <div class="data margin-top-20">
                        <p> <b>Recibe actualizaciones de seguridad periódicas</b> <br>  <br> <b>CodeGuard</b> monitorea  automáticamente los cambios en archivos y bases de datos de tu web, realiza copias de seguridad y notificaciones por correo electrónico. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                      <span class="number green">3</span>
                    <div class="data  margin-top-20">
                        <p> <b>Restaurar desde cualquier punto </b> <br>  <br> Restaura archivos y base de datos de tu sitio web a cualquier versión de copia de seguridad anterior mediante la descarga de un archivo zip, realizando una restauración automática o  de archivos individuales.

                        </p>
                    </div>
                </div>
               
             
            
            </div>
        </div>


        <div class="shared-features  section_space  bg_gray" id="plans">
            <div class=" ">
                <div class=" ">
                    <div>

                        <!-- Tab 1  -->
                        <div id="feature1">
                            <div class="tabfeatures">
                                <div class="row">
                                    <div class="text-center">
                                        <h2 class="title"><b>  Planes que se adaptan a  tu proyecto </b></h2>
                                    </div>
                                    <!--  Tab 1 Pricing Tables -->
                                    <div class="pricingtables servers">
                                        <div class="row">
                                            <div class="col-sm-3 margin-top-40">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">BÁSICO</h3>
                                                            <p>Bloggers y Novatos</p>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                           
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(4);?></h4>
                                                            <span class="per">Anual</span>
                                                        </div>
                                <ul class="table-items">
                                    <li class="item-table"> Capacidad <span> 1 GB </span></li>
                                    <hr>
                                    <li class="item-table"> Sitios web  <span>  5 </span></li>
                                    <hr>
                                    <li class="item-table"> Base de datos <span> Ilimitado </span></li>
                                    <hr>
                                    <li class="item-table"> Copía automática <span> Cada 5 días </span></li>
                                    <hr>
                                     <li class="item-table"> Copías  en demanda <span> <i class="fa  fa-close fa-lg" aria-hidden="true"></i> </span></li>
                                    <hr>
                                    <li class="item-table"> Colas de prioridad <span><i class="fa  fa-close fa-lg" aria-hidden="true"></i> </span></li></span></li>
                                    <hr>
                                    <li class="item-table"> Descarga archivos zip <span> 5 meses </span></li>
                                    <hr>
                                    <li class="item-table"> Restaurar web completa <span> 3 meses </span></li>
                                    <hr>
                                    <li class="item-table"> Restaurar  archivos <span> 5 meses</span></li>
                                </ul>
                                                        <div class="panel-footer">
                                                        
                                                            <a class="btn waves-effect waves-light btn-secondary2 btn-block" href="#">COMPRAR AHORA</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3  margin-top-40">
                                                <div class="margin-top-10">
                                                <div class="panel panel-info">
                                                    <div class="panel-heading">
                                                       
                                                        <h3 class="text-center">PROFESIONAL</h3>
                                                        <p>Pymes y emprendedores</p>
                                                    </div>
                                                    <div class="panel-body text-center">
                                                        <h4><?php echo getSymbol();?><?php echo getPrecioProducto(5);?></h4>
                                                        <span class="per">Anual</span>
                                                    </div>
                                                 
                                                       <ul class="table-items">
                                    <li class="item-table"> Capacidad <span> 5 GB </span></li>
                                    <hr>
                                    <li class="item-table"> Sitios web  <span>  10 </span></li>
                                    <hr>
                                    <li class="item-table"> Base de datos <span> Ilimitado </span></li>
                                    <hr>
                                    <li class="item-table"> Copía automática <span> Diaria </span></li>
                                    <hr>
                                    <li class="item-table"> Copías  en demanda <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i></span></li>
                                    <hr>
                                    <li class="item-table"> Colas de prioridad <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i></span></li>
                                    <hr>
                                    <li class="item-table"> Descarga archivos zip <span> Ilimitado </span></li>
                                    <hr>
                                    <li class="item-table"> Restaurar web completa <span> Ilimitado </span></li>
                                    <hr>
                                    <li class="item-table"> Restaurar  archivos <span> Ilimitado</span></li>
                                </ul>
                                                        <div class="panel-footer">
                                                        
                                                            <a class="btn waves-effect waves-light btn-secondary2 btn-block" href="#">COMPRAR AHORA</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3  margin-top-40 most-popular">
                                               
                                                    <div class="panel panel-info ">
                                                        <div class="panel-heading">
                                                             <div class="sticker-wrapper">
                                                            <div class="sticker bg-danger wow fadeIn">Más Popular</div>
                                                        </div>
                                                            <h3 class="text-center">PREMIUM</h3>
                                                            <p>Diseñadores y desarrolladores</p>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            
                                                            <h4><h4><?php echo getSymbol();?><?php echo getPrecioProducto(6);?></h4></h4>
                                                            <span class="per">Anual</span>
                                                        </div>
                                                         <ul class="table-items">
                                    <li class="item-table"> Capacidad <span> 5 GB </span></li>
                                    <hr>
                                    <li class="item-table"> Sitios web  <span>  10 </span></li>
                                    <hr>
                                    <li class="item-table"> Base de datos <span> Ilimitado </span></li>
                                    <hr>
                                    <li class="item-table"> Copía automática <span> Diaria </span></li>
                                    <hr>
                                    <li class="item-table"> Copías  en demanda <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i></span></li>
                                    <hr>
                                    <li class="item-table"> Colas de prioridad <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i></span></li>
                                    <hr>
                                    <li class="item-table"> Descarga archivos zip <span> Ilimitado </span></li>
                                    <hr>
                                    <li class="item-table"> Restaurar web completa <span> Ilimitado </span></li>
                                    <hr>
                                    <li class="item-table"> Restaurar  archivos <span> Ilimitado</span></li>
                                </ul>
                                                    
                                                        <div class="panel-footer">
                                                            <!--  Various Pricing Dropdown Toggle -->
                                                            
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
                                                            <p>Agencias de diseño y negocios</p>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                         
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(7);?></h4>
                                                            <span class="per">Anual</span>
                                                        </div>
                                                    
                                                         <ul class="table-items">
                                                            <li class="item-table"> Capacidad <span> 5 GB </span></li>
                                                            <hr>
                                                            <li class="item-table"> Sitios web  <span>  10 </span></li>
                                                            <hr>
                                                            <li class="item-table"> Base de datos <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Copía automática <span> Diaria </span></li>
                                                            <hr>
                                                            <li class="item-table"> Copías  en demanda <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i></span></li>
                                                            <hr>
                                                            <li class="item-table"> Colas de prioridad <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i></span></li>
                                                            <hr>
                                                            <li class="item-table"> Descarga archivos zip <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Restaurar web completa <span> Ilimitado </span></li>
                                                            <hr>
                                                            <li class="item-table"> Restaurar  archivos <span> Ilimitado</span></li>
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

        <!-- End of Tab 1 Hosting Features -->
        <div >

        </div>


        <!--  Tab 1 FAQ  -->


                        </div>
                        <!-- End of Tab 1  -->
                        <!-- Tab 2  -->

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

                 $('#buttonplans').click(function(){
                    $('html, body').animate({
                       scrollTop: $("#plans").offset().top
                 }, 1000);
                });

                // ______________ TABS
                $('#shared-hosting-tabs').responsiveTabs({
                    startCollapsed: 'accordion'
                });
                </script>

    <div class="modal fade" id="videocodeguard" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Aprende más de Sitelock</h4>
      </div>
      <div class="modal-body">
     <iframe width="560" height="315" src="https://www.youtube.com/embed/OLrERaRblsQ" frameborder="0" allowfullscreen></iframe>
      </div>
    
    </div>
  </div>
</div>
</body>

</html>
