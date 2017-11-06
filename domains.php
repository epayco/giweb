<!DOCTYPE html>
<html lang="en">

<head>
    <link href="css/tablesaw.stackonly.css" rel="stylesheet" />
     <?php
include 'inc/head.php';
?>
<!--     <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IconHost - Easy and Power Web Hosting HTML Template</title>
    <link rel="shortcut icon" href="images/icons/favicon.png" /> -->

    <!-- Bootstrap & Styles -->
   <!--  <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/block_grid_bootstrap.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet" />
    <link href="css/jquery.circliful.css" rel="stylesheet" />
    <link href="css/select2.css" rel="stylesheet"/>
    <link href="css/tablesaw.stackonly.css" rel="stylesheet" />
    <link href="css/slicknav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet"> -->
</head>

<body>
<!-- Global Fullpage Loader-->


	<!-- Top MiniBar-->


    <!-- Header-->

    <?php
include 'inc/header.php';
?>
    <!-- End of Header-->

    <!-- Breadcrumps -->
    <section class="breadcrumbs">
        <div class="row">
            <div class="col-sm-6">
                <h1>Registro de dominios</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb">
                    <li>Tu estas aquí: </li>
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Registro de dominios</li>
                </ol>
            </div>
        </div>
    </section>
    <!-- End of Breadcrumps -->
    <!-- sub-banner -->
    <section id="sub-banner" class="bg_dark" style="background: url('images/slides/slide_2.jpg'); background-size: cover;">
        <div class="row info-text wow fadeIn">

            <div class="col-sm-5 col-sm-offset-7">
                <div class="card" style=" padding: 0 20px ; color: #999;">
                <div>
                    <h2 style="color:#444; font-size: 34px; line-height: 40px; padding-top:20px "><b>Tu negocio online</b> empieza con un dominio</h2>
                    <h3 style="color:#444">
             <p style="color:#444"> Elige el nombre adecuado con el que te encontrarán  tus clientes.</p>
          </h3>
                    <p style="color:#999"><span>Dominios desde</span>
                        <br> <b class="price"><?php echo getSymbol();?><?php echo getPrecioDominio(1)?><?php getMoneda() ?></b></p>
                    <p><a class="btn waves-effect waves-light btn-info btn-lg margin-top-10" href="#"> Buscar dominio </a></p>
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
    <!-- End of Sub-Banner -->
    <!--  Domain Search -->
    <div class="domains bg_dark">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title">Encuentra el nombre de dominio que necesitas  </h2>
                <p> Un buen negocio online empieza con un perfecto nombre de dominio  </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 com-md-8 center-block">
                <form class="form-inline domainsearch clearfix"  method="post" action="clientes/domainchecker.php">
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="sld" placeholder=" El dominio que siempre has querido"/>
                            <span class="selection">
                               <?php $extensiones=getDomainExtensions();?>
                               <select name="tld" class="e2">
                                   <?php foreach ($extensiones as $ext=>$value):?>
                                    <option><?php echo $value ?></option>
                                   <?php endforeach ;?>
                                 </select>
                            </span>
                        </div>
                        <div class="col-sm-2">
                            <button type="submit" class="btn waves-effect waves-light btn-blue" style="width:100%">Buscar</button>
                        </div>
                </form>
                <div class="domainextensions clearfix">
                    <ul class="hotdomains list-inline clearfix">

                        <p></p>


                        <li class="hot"><div class="item"><div class="extension">.com <span class="price">$ <?php echo getPrecioDominio(".com");?> /año</span> <span class="oldprice">$ 20</span></div></div></li>
                        <li class="newoffer"><div class="item"><div class="extension">.net <span class="price">$ 15 /año</span><span class="oldprice">$ 22</span></div></div></li>
                        <li><div class="item"><div class="extension">.co <span class="price">$ 18 /año</span><span class="oldprice">$ 22</span></div></div></li>
                        <li class="new"><div class="item"><div class="extension">.org <span class="price">$ 18 /año</span><span class="oldprice">$ 25</span></div></div></li>
                        <li><div class="item"><div class="extension">.me <span class="price">$ 22 /año</span><span class="oldprice">$ 28</span></div></div></li>
                        <li><div class="item"><div class="extension">.global <span class="price">$ 23 /año</span><span class="oldprice">$ 30</span></div></div></li>
                        <li><div class="item"><div class="extension">.host <span class="price">$ 28 /año</span><span class="oldprice">$ 32</span></div></div></li>
                        <li class="new"><div class="item"><div class="extension">.name <span class="price">$ 20 /año</span><span class="oldprice">$ 26</span></div></div></li>
                        <li><div class="item"><div class="extension">.website <span class="price">$ 22 /año</span><span class="oldprice">$ 25</span></div></div></li>
                        <li><div class="item"><div class="extension">.site <span class="price">$ 24 /año</span><span class="oldprice">$ 28</span></div></div></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End of Domain Search -->

	<!-- Domains -->
    <div class="domainfeatures section_space">
        <div class="row">
            <div class="col-sm-12">
                <h2 class="title"> Elige tu dominio ideal a precios increíbles</h2>

            </div>
        </div>

        <div class="domains-table margin-top-40">
            <div class="row">
                <div class="col-sm-12">
                    <table id="tld-table" class="tablesorter responsive tablesaw-stack" data-tablesaw-mode="stack">
                        <thead>
                            <tr>
                                <th>Domain</th>
                                <th>Precio de registro</th>
                                <th>Precio de renovación</th>
                                <th>Precio de transferencia</th>
                                <th>Tiempo mínimo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>.com <span class="hot label label-danger">Hot</span></td>
                                <td>$<?php echo getPrecioDominio(".com") ?> <span class="old-price">$20</span></td>
                                <td>$<?php echo getPrecioDominio(".com","domainrenew") ?></td>
                                <td>$<?php echo getPrecioDominio(".com","domaintransfer") ?></td>
                                <td>2 años</td>
                            </tr>
                            <tr>
                                <td>.co</td>
                                <td>$11</td>
                                <td>$11</td>
                                <td>$9</td>
                                <td>2 años</td>
                            </tr>
                            <tr>
                                <td>.net</td>
                                <td>$12 <span class="old-price">$20</span></td>
                                <td>$12</td>
                                <td>$10</td>
                                <td>2 años</td>
                            </tr>
                            <tr>
                                <td>.in</td>
                                <td>$10</td>
                                <td>$10</td>
                                <td>$8</td>
                                <td>1 año</td>
                            </tr>
                            <tr>
                                <td>.asia <span class="newoffer label label-success">New</span></td>
                                <td>$18</td>
                                <td>$18</td>
                                <td>$16</td>
                                <td>2 años</td>
                            </tr>
                            <tr>
                                <td>.org <span class="newoffer label label-success">New</span></td>
                                <td>$12</td>
                                <td>$12</td>
                                <td>$10</td>
                                <td>1 año</td>
                            </tr>
                            <tr>
                                <td>.shop <span class="premium label label-warning">Premium</span></td>
                                <td>$22</td>
                                <td>$22</td>
                                <td>$20</td>
                                <td>2 años</td>
                            </tr>
                            <tr>
                                <td>.info</td>
                                <td>$22 <span class="old-price">$30</span></td>
                                <td>$22</td>
                                <td>$20</td>
                                <td>2 años</td>
                            </tr>
                            <tr>
                                <td>.club </td>
                                <td>$20</td>
                                <td>$20</td>
                                <td>$16</td>
                                <td>2 años</td>
                            </tr>
                            <tr>
                                <td>.biz</td>
                                <td>$22</td>
                                <td>$22</td>
                                <td>$20</td>
                                <td>2 años</td>
                            </tr>
                            <tr>
                                <td>.us</td>
                                <td>$13</td>
                                <td>$13</td>
                                <td>$11</td>
                                <td>1 año</td>
                            </tr>
                            <tr>
                                <td>.edu</td>
                                <td>$10</td>
                                <td>$10</td>
                                <td>$8</td>
                                <td>1 año</td>
                            </tr>
                            <tr>
                                <td>.guru</td>
                                <td>$24</td>
                                <td>$24</td>
                                <td>$20</td>
                                <td>1 año</td>
                            </tr>
                        </tbody>
                    </table>

            </div>
        </div>
    </div>
    <!-- End of Domains -->

	<!-- Features -->
    <div class=" bg_gray section_space">
    	<div class="domainfeatures">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="title"> Elige un dominio local o global acorde con tu negocio</h2>
    </div>
            </div>

            <div class="row">
                <div class="col-sm-4 margin-top-40">
                    <div class="domainchoose">
                    <h3 class="title choosedomain">Popular</h3>
                        <h6>.com</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                    <div class="domainchoose">
                        <h6>.com</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                    <div class="domainchoose">
                        <h6>.com</h6>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                        <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                </div>

                <div class="col-sm-4 margin-top-40">
                    <div class="domainchoose">
                    <h3 class="title choosedomain">En oferta</h3>
                    <h6>.xyz</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                    <div class="domainchoose">
                    <h6>.xyz</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                    <div class="domainchoose">
                    <h6>.xyz</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                </div>

                <div class="col-sm-4 margin-top-40">
                    <div class="domainchoose">
                    <h3 class="title choosedomain">Individuales</h3>
                    <h6>.mobi</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                     <div class="domainchoose">
                    <h6>.mobi</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                     <div class="domainchoose">
                    <h6>.mobi</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                    <a href="#" class="btn waves-effect waves-light btn-success">Verificar el dominio</a>
                    </div>
                </div>
                </div>
        </div>
    </div>
    <!-- End of Features -->


    <!-- FAQ -->

	<!-- Contact -->
	 </div>
        <!-- End of Contact -->

        <?php
include 'inc/support.php';
?>
            <!--  End Help -->
            <!--  Footer -->
            <?php
include 'inc/footer.php';
?>
        <!--  End of Footer -->

        <!--  Go to Top-->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>
        <!--  End of Go to Top -->

        <!--<script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/hoverIntent.js"></script>
        <script src="js/superfish.min.js"></script>
        <script src="js/owl.carousel.js"></script>
        <script src="js/wow.min.js"></script>
        <script src="js/jquery.circliful.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/tablesaw.stackonly.js"></script>
    	<script src="js/tablesaw-init.js"></script>
        <script src="js/jquery.tablesorter.min.js"></script>
        <script src="js/jquery.slicknav.min.js"></script>
        <script src="js/retina.min.js"></script>
        <script src="js/select2.js"></script>
        <script src="js/counterup.min.js"></script>
        <script src="js/waves.js"></script>
        <script src="js/custom.js"></script>
        !-->
        <?php include ("inc/scripts.php");?>
	<script>
		$(document).on("ready", function(e) {
			// ______________ DOMAINS
			$("#domainextensions").owlCarousel({
				autoPlay: 4000,
				items: 8,
				itemsDesktop: [1199, 6],
				itemsDesktopSmall: [979, 6],
				pagination: false
			});

			// ______________ SELECT2
			$(".e2").select2();

			// ______________ TABLE SORTER
			$("#tld-table").tablesorter();;

		});
    </script>
</body>

</html>
