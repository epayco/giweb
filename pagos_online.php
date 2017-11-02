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
                    <h1>Recibe pagos en línea</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>Estas aquí: </li>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li><a href="#">ePayco</a>
                        </li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumps -->
        <!-- sub-banner -->
        <section id="sub-banner" class="bg_dark" style="background: url('images/slides/slide_9.jpg'); background-size: cover;">
            <div class="row info-text wow fadeIn">
                <div class="col-sm-5">
                    <div class="card" style="background: white; padding: 0 20px ; color: #999;">
                        <h2 style="color: #444"><b> Acepta todos los medios de pago </b> electrónicos</h2>
                        <h3>
                 <p style="color: #444"> No importa si vendes productos o servicios, permite que tus clientes paguen online y aumenta tus ingresos.</p>
              </h3>
                        
                        <img src="https://369969691f476073508a-60bf0867add971908d4f26a64519c2aa.ssl.cf5.rackcdn.com/btns/epayco/epayco_pago_seguro.png" alt="">
                        <p><a class="btn waves-effect waves-light btn-info btn-md margin-top-10" href="#"> Más información </a></p>
                    </div>
                </div>
            </div>
            <div class="img-holder">
                <img src="images/sub-banner_bg.png" alt="image description">
            </div>
        </section>
        <!-- End of Sub-Banner -->
        <!-- Shared Hosting Tabs -->
      
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