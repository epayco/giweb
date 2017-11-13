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
                    <h1>Creador de sitios</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>Estas aquí: </li>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="#">Site builder</a>
                        </li>

                    </ol>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumps -->
        <!-- sub-banner -->
        <section id="sub-banner" class="bg_dark" style="background: url('images/slides/slide_7.jpg'); background-size: cover;" >
            <div class="row info-text wow fadeIn">
                <div class="col-sm-5">
                    <div>
                        <h2 style="color: #444"><b>¿Necesitas un sitio web?</b> Créalo tu mismo</h2>
                        <h3>
                 <p style="color: #444">Tu negocio en línea funcionando en minutos. </p>
              </h3>
                        <p style="color: #999"><span>Desde</span>
                            <br> <b class="price"><?php echo getSymbol();?><?php echo getPrecioProducto(240,"annually",12);?> <?php echo getMoneda(); ?></b></p>
                        <p><a class="btn waves-effect waves-light btn-info btn-lg margin-top-10" href="#"> Construye tu web ahora </a></p>
                    </div>
                </div>

            </div>
            <div class="img-holder">
                <img src="images/sub-banner_bg.png" alt="image description">
            </div>
        </section>
        <!-- End of Sub-Banner -->
        <!-- Shared Hosting Tabs -->
        <div class="shared-features  bg_gray" style="padding-bottom: 0 !important">
            <div >
                <div >
                    <div >

                        <!-- Tab 1  -->
                        <div id="feature1">
                            <div class="bg_gray" style="padding-top: 40px; padding-bottom: 40px">
                            <div class="tabfeatures">

                                <div class="row">
                                    <div class="text-center">
                                        <h2 class="title"><b>Crea tu sitio web fácil y rapido </b></h2>
                                        <p> No esperes más, nuestros planes agrupan todos los servicios que necesitas para crear un sitio web tu mismo. </p>
                                    </div>
                                    <!--  Tab 1 Pricing Tables -->


                                    <div class="pricingtables servers">
                                        <div class="row">
                                            <div class="col-sm-4 margin-top-40 col-sm-offset-2">
                                                <div class="margin-top-10">
                                                    <div class="panel panel-info">
                                                        <div class="panel-heading">
                                                            <h3 class="text-center">PRESENCIA</h3>
                                                        </div>
                                                        <div class="panel-body text-center">
                                                            <span>Desde</span>
                                                            <h4><?php echo getSymbol();?><?php echo getPrecioProducto(240);?> <?php echo getMoneda(); ?></h4>
                                                            <span class="per">Anual</span>
                                                        </div>
                                                        <ul class="table-items">
                                                            <li class="item-table"> Espacio en disco <span> 10 GB </span></li>
                                                            <hr>
                                                            <li class="item-table"> Cuentas a alojar   <span> 1 </span></li>
                                                            <hr>
                                                            <li class="item-table"> Hosting incluido <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                                            <hr>
                                                            <li class="item-table"> Dominio incluido .com .net .org .biz <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i>  </span></li>
                                                            <hr>
                                                            <li class="item-table"> Diseño responsive <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                                            <hr>
                                                            <li class="item-table"> Galería de imágenes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                                            <hr>
                                                            <li class="item-table"> Integración youtube <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
     </span></li>
     <hr>
                                                            <li class="item-table"> Integración google maps <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
                                                            </span></li>
                                                            <hr>
                                                            <li class="item-table"> Formularios de contácto <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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
                                                        <h3 class="text-center">PREMIUM</h3>
                                                    </div>
                                                    <div class="panel-body text-center">
                                                        <span>Desde</span>
                                                        <h4><?php echo getSymbol();?><?php echo getPrecioProducto(241);?> <?php echo getMoneda(); ?></h4>
                                                        <span class="per">Anual</span>
                                                    </div>
                                                    <ul class="table-items">
                                                        <li class="item-table"> Espacio en disco <span> 20 GB </span></li>
                                                        <hr>
                                                        <li class="item-table"> Cuentas a alojar   <span> 3 </span></li>
                                                        <hr>
                                                        <li class="item-table"> Hosting incluido <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                                        <hr>
                                                        <li class="item-table"> Dominio incluido .com .net .org .biz <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i>  </span></li>
                                                        <hr>
                                                        <li class="item-table"> Diseño responsive <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                                        <hr>
                                                        <li class="item-table"> Galería de imágenes <span><i class="fa check fa-check fa-lg" aria-hidden="true"></i> </span></li>
                                                        <hr>
                                                        <li class="item-table"> Integración youtube <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
 </span></li>
 <hr>
                                                        <li class="item-table"> Integración google maps <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
                                                        </span></li>
                                                        <hr>
                                                        <li class="item-table"> Formularios de contácto <span> <i class="fa check fa-check fa-lg" aria-hidden="true"></i>
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

                                        </div>
                                    </div>

                                  </div>
                                    <!-- End of Tab 1 Pricing Tables -->
                                    <!-- Tab 1 End of FAQ  -->

                            </div>

  </div>  </div> </div> </div>
                            </div>
                              </div>

                            <div class="extra-features section_space">
            <div class="row">

              <h2 class="title text-center"> <b>Además nuestros planes también incluyen  </b></h2>

                <div class="col-sm-4 text-center margin-top-40">
                    <i class="fa fa-check-circle  fa-3x text-blue "></i>
                    <div class="data margin-top-20">
                        <p> Integración <b> redes sociales </b>. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <i class="fa fa-check-circle  fa-3x text-blue "></i>
                    <div class="data margin-top-20">
                        <p> Integración  <b>plugins </b> . </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <i class="fa fa-check-circle  fa-3x text-blue "></i>
                    <div class="data  margin-top-20">
                        <p> Integración <b>  botón de pagos </b>.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <i class="fa fa-check-circle  fa-3x text-blue "></i>
                    <div class="data margin-top-20">
                        <p>Optimización <b> SEO</b>.
                        </p>
                    </div>
                </div>
                <div class=" col-sm-4 text-center margin-top-40">
                    <i class="fa fa-check-circle  fa-3x text-blue "></i>
                    <div class="data margin-top-20">
                        <p> Múltiples  <b> paginas </b>.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <i class="fa fa-check-circle  fa-3x text-blue "></i>
                    <div class="data  margin-top-20">
                        <p> Integración  <b> idiomas</b> .
                        </p>
                    </div>
                </div>
  </div>


                 <div class="col-lg-4 center-block">

                      <a href="http://creador.giweb.io/es/brand/5329/" class="center-block btn waves-effect waves-light btn-primary btn-lg text-center margin-top-40"> Ver demo del constructor </a>
                   </div>



        </div>
        <section class="website-templates section_space bg_gray">
          <div class="row text-center">
             <div class="col-sm-12 margin-bottom-40">
                <h2 class="title"><b>Gratis dominio</b> con nuestro constructor de sitios</h2>

             </div>
             <div id="templates-slider">
                <div class="item">
                   <div class="title">Artistas</div>
                   <img src="images/templates/art.jpg" alt="">
                </div>
                <div class="item">
                   <div class="title">Negocios</div>
                   <img src="images/templates/business.jpg" alt="">
                </div>
                <div class="item">
                   <div class="title">Eventos</div>
                   <img src="images/templates/events.jpg" alt="">
                </div>
                <div class="item">
                   <div class="title">Noticias</div>
                   <img src="images/templates/news.jpg" alt="">
                </div>

             </div>
             <div class="col-lg-4 center-block">
                <a href="template-gallery.html" class="btn waves-effect waves-light btn-primary btn-lg text-center margin-top-40"> Ver todos los templates </a>
             </div>
          </div>
       </section>



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
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_1">¿Tengo que comprar un paquete de alojamiento web para adquirir un paquete de Constructor de Sitios Web ?</a></h4>
                                </div>
                                <div id="tab1_1" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>No, usted no tiene que preocuparse por eso. Nuestros paquetes de Constructor de Sitios Web vienen con alojamiento web y de correo gratuito.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_2">¿Hay una versión demo del Constructor de Sitios Web?</a></h4>
                                </div>
                                <div id="tab1_2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Si, nosotros tenemos una versión  <a href="https://www.giweb.io/sitebuilder/creador_sitios.php">demo</a> con la que usted puede intentar antes de adquirir el servicio.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_3">¿hay alguna garantía de devolución de dinero en el servicio de Constructor de Sitios Web?</a></h4>
                                </div>
                                <div id="tab1_3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Sí, ofrecemos 30 días de Garantía de devolución de dinero con todos nuestros paquetes de Constructor de Sitios Web</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_4">¿Que componentes se incluyen en el servicio de Constructor de Sitios Web?</a></h4>
                                </div>
                                <div id="tab1_4" class="panel-collapse collapse">
                                    <div class="panel-body">vNuestro servicio incluye los siguientes componentes mas populares: Blog, Image Gallery, PayPal, eBay and Google Maps.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_5">¿Puedo diseñar o subir mi propio tema?  </a></h4>
                                </div>
                                <div id="tab1_5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Si bien no se puede diseñar o subir su propio tema, puede elegir entre más de 180 temas diseñados por expertos. Nuestros temas se pueden utilizar para los sitios web personales, profesionales, así como para comercio electrónico.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_6">¿Puedo cambiar a un plan superior?</a></h4>
                                </div>
                                <div id="tab1_6" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Sí, usted puede cambiar a un plan superior en cualquier momento.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_7">¿Habrá anuncios en mi sitio?</a></h4>
                                </div>
                                <div id="tab1_7" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>De ninguna manera! Todos nuestros paquetes de Constructor de Sitios Web son completamente libres de anuncios.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿El Constructor de Sitios Web incluye funciones de optimizador de motores de búsqueda - SEO?</a></h4>
                                </div>
                                <div id="tab1_8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>Nuestros paquetes de Constructor de Sitios Web viene integrados con una función de optimización de motores de búsqueda, que permite mejorar la visibilidad de un sitio web en los diferentes buscadores.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">Tengo un sitio web con otro proveedor, ¿puedo mover mi sitio web a el Constructor de Sitios Web?</a></h4>
                                </div>
                                <div id="tab1_8" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <p>No, usted no puede migrar su sitio web directamente al paquete de Constructor de Sitios Web. Sin embargo, puede mover los archivos del su sitio web descargándolos y luego subiéndolos a su cuenta de Constructor de Sitios Web.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
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
    <?php
include 'inc/scripts.php';
?>
</body>

</html>
