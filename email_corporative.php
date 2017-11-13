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
                    <h1>Servicio de E-mail corporativo</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>Estas aquí: </li>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li class="active">E-mail corporativo</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumps -->
        <!-- sub-banner -->
        <section id="sub-banner" class="bg_dark" style="background: url(images/mins_email.png) no-repeat center bottom;">
            <div class="row info-text wow fadeIn" style="padding-top:20px !important;">
                <div class="col-sm-12  text-center  ">
                    
                       
                        <h2 style="color: #444"> <b>Correo profesional para los  usuarios más exigentes

</h2>
    <h3>
    <p style="color:#444"> Servicio avanzado y de clase corporativa </p>
    </h3>

 
 </div>
 <div class="clearfix"></div>
                       

              
            </div>

        </section>

       
            
            <h4 class="blackbar hidden-xs">30 GB de almacenamiento por cuenta   |  Protección antivirus incorporado  |  Funciona en móviles y tabletas</h4>
     
        <!-- End of Sub-Banner -->
        <!-- Shared Hosting Tabs -->


<div class="text-center section_space ">

<p style="color:#444; font-size: 2rem">Por solo <?php echo getSymbol();?><?php echo getPrecioProducto(10,"monthly");?> <?php echo getMoneda()?>/Mes</p>

     <a class="btn waves-effect waves-light btn-secondary btn-lg  " href="http://sitio.colombiaredes.com/web-hosting/enterprise-email-hosting/demo" target="blank"> Ver demo </a> 
    <a class="btn waves-effect waves-light btn-info btn-lg " href="#"> Comprar </a> 
                    
                </div>

        <div class="bg_gray extra-features ">
         <div class="row countemial">

            <h3>Comienza con  el número de cuentas de correo electrónico que necesites</h3>

              <div class="col-sm-10 col-sm-offset-1 ">

               
            <div class="col-sm-3">
                <div class="form-group">
                  <label for="usr">No. de cuentas</label>
                  <input type="number" value="1" class="form-control" id="email-numcuentas">
                </div>
            </div>

            <div class="col-sm-4 ">
                <div class="form-group">
                  <label for="sel1">Duración</label>
                  <select class="form-control" id="email-tiempo">
                    <option value="monthly" data-timevalue="<?php echo getPrecioPlanoProducto(10,"monthly");?>">1 mes - <?php echo getMoneda(); ?> <?php echo getSymbol();?><?php echo getPrecioProducto(10,"monthly");?>/mes</option>
                    <option value="quarterly" data-timevalue="<?php echo getPrecioPlanoProducto(10,"quarterly");?>">3 meses - <?php echo getMoneda(); ?> <?php echo getSymbol();?><?php echo getPrecioProducto(10,"quarterly");?>/mes</option>
                    <option value="semiannually" data-timevalue="<?php echo getPrecioPlanoProducto(10,"semiannually");?>">6 meses - <?php echo getMoneda(); ?> <?php echo getSymbol();?><?php echo getPrecioProducto(10,"semiannually");?>/mes</option>
                    <option value="annually" data-timevalue="<?php echo getPrecioPlanoProducto(10,"annually");?>">12 meses - <?php echo getMoneda(); ?> <?php echo getSymbol();?><?php echo getPrecioProducto(10,"annually");?>/mes</option>
                  </select>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="form-group">
                  <label for="usr">Total</label>
                  <input style="font-weight: bold" disabled value="COP 55.660" type="text" class="form-control" id="email-total">
                </div>
            </div>
             <div>
                <input type="hidden" value="<?php echo getMoneda(); ?>" id="email-moneda">
            </div>

            <div class="col-sm-2">

                <button type="button" class="btn btn-primary btn-block">Comprar</button>
            </div>

            </div>
            </div>
        </div>

                            <div class="extra-features section_space">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="title"> Lo sorprendente  <b> Business Email</b> </h2>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <img src="images/minmail/1b.png" alt="">
                    <div class="data margin-top-20">
                        <p> <b>Diseño intuitivo y sensible</b> <br>  <br> Bellamente diseñado y entregado con el poder de OpenXchange. También puedes acceder a tu correo electrónico en tu teléfono inteligente o tableta. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                  <img src="images/minmail/2b.png" alt="">
                    <div class="data margin-top-20">
                        <p> <b>Protección antivirus incorporada </b> <br>  <br> Nuestra tecnología antivirus avanzada asegura tu bandeja de entrada y la protege de descarga de malware y virus.
 </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <img src="images/minmail/3b.png" alt="">
                    <div class="data  margin-top-20">
                        <p> <b>30GB de almacenamiento dedicado </b> <br>  <br>Con <b>25 GB</b> de almacenamiento de correo electrónico y  <b>5 GB</b> adicionales para  archivos, nunca re quedarás sin espacio.

                        </p>
                    </div>
                </div>
               
             
            
            </div>

            <div class="row">
         
                <div class="col-sm-4 text-center margin-top-40">
                    <img src="images/minmail/4b.png" alt="">
                    <div class="data margin-top-20">
                        <p> <b>100% de tiempo de actividad y Seguridad</b> <br>  <br> Nuestra gama alta de almacenamiento de correo NetApp garantiza cero pérdida de datos y redundancia, junto con 100% de disponibilidad de red. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                  <img src="images/minmail/5b.png" alt="">
                    <div class="data margin-top-20">
                        <p> <b>Calendarios, Contactos y Tareas </b> <br>  <br> Gestión de contactos, crearlistas de tareas pendientes y realiza un seguimiento de todas tus reuniones en un solo lugar con las herramientas de productividad de <b>OpenXchange</b>. </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <img src="images/minmail/6b.png" alt="">
                    <div class="data  margin-top-20">
                        <p> <b>Medios de Comunicación Social en la bandeja de entrada </b> <br>  <br>Ahora Facebook, Twitter, Google+ se alimenta en tu propia bandeja de entrada. <b>OpenXchange</b> trae tus redes sociales a un mismo lugar.

                        </p>
                    </div>
                </div>
               
             
            
            </div>
        </div>





      


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
                              <?php include ("inc/scripts.php");?>

                <script type="text/javascript">

                    Number.prototype.format = function(n, x) {
                        var re = '\\d(?=(\\d{' + (x || 3) + '})+' + (n > 0 ? '\\.' : '$') + ')';
                        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$&,');
                    };
                
                    function calcTotal(){
                        var timevalue=$("#email-tiempo").children('option:selected').data('timevalue').toString();
                        timevalue.replace(".","");
                        console.log(timevalue);
                        var numcuentas=$("#email-numcuentas").val();
                        var total=numcuentas*timevalue;
                        var aprox=total.toFixed(2);
                        var total_final=Math.round(aprox).format(2);
                        var strfinal=total_final+" "+$("#email-moneda").val();
                        $("#email-total").val(strfinal);
                    }    

                    $(document).on("ready", function(e) {
                        $('[data-toggle="tooltip"]').tooltip();
                    });

                    $('#email-tiempo').change(function(){
                        calcTotal();
                    });
                    $('#email-numcuentas').change(function(){
                        calcTotal();
                    });

                    calcTotal();
               
                </script>

                
</body>

</html>
