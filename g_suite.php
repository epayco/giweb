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
                    <h1>Servicio de E-mail de Google</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                        <li>Estas aquí: </li>
                        <li><a href="index.php">Home</a>
                        </li>
                        <li class="active">G Suite</li>
                    </ol>
                </div>
            </div>
        </section>
        <!-- End of Breadcrumps -->
        <!-- sub-banner -->
        <section id="sub-banner" class="bg_dark" style="background: url('images/slides/slide_16.jpg'); background-size: cover; ">
            <div class="row info-text wow fadeIn" style="padding-top:30px !important;">
                <div class="col-sm-12  text-center  ">

<img src="images/g_suite.png" style="margin-bottom: -20px !important" alt="">

                        <h2 style="color: #444"> <b>Consigue Gmail y las herramientas de colaboración <br> inteligente de Google para tu empresa.
</h2>
    <h3>
      <p style="color:#444; font-size: 2rem; margin-bottom: -10px; margin-top: 20px">Por solo <?php echo getSymbol();?><?php echo getPrecioProducto(266,"monthly");?> <?php echo getMoneda(); ?> /Cuenta/ Mes</p>


    </h3>


 </div>
 <div class="clearfix"></div>





                </div>

            </div>

        </section>




        <!-- End of Sub-Banner -->
        <!-- Shared Hosting Tabs -->


                            <div class="extra-features padding-top-10" style="background:rgb(245, 245, 245); ">

                              <div>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2 col- text-center">
                                      <img src="images/apps.jpg" alt="">
                                    </div>

                                  </div>
                              </div>

                          </div>


<div>

        <div class="extra-features margin-top-20">
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
                    <option value="monthly" data-timevalue="<?php echo getPrecioPlanoProducto(266,"monthly");?>">1 mes - <?php echo getMoneda(); ?> <?php echo getSymbol();?><?php echo getPrecioProducto(266,"monthly");?>/mes</option>
                    <!--<option value="quarterly" data-timevalue="<?php echo getPrecioPlanoProducto(266,"quarterly");?>">3 meses - <?php echo getMoneda(); ?> <?php echo getSymbol();?><?php echo getPrecioProducto(266,"quarterly");?>/mes</option>
                    <option value="semiannually" data-timevalue="<?php echo getPrecioPlanoProducto(266,"semiannually");?>">6 meses - <?php echo getMoneda(); ?> <?php echo getSymbol();?><?php echo getPrecioProducto(266,"semiannually");?>/mes</option>
                    <option value="annually" data-timevalue="<?php echo getPrecioPlanoProducto(266,"annually");?>">12 meses - <?php echo getMoneda(); ?> <?php echo getSymbol();?><?php echo getPrecioProducto(266,"annually");?>/mes</option>
                    !-->
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

            <div class="row margin-top-40">
                <div class="col-sm-12 text-center">
                    <h2 class="title"> Aprovecha el poder de Google para crear un equipo inteligente
</h2>
                </div>

              </div>



                    <div class="row">
                <div class="col-sm-4 text-center margin-top-40">
                    <h3 class="margin-bottom-20"> <b>Obten Gmail @yourcompany.com</b>  </h3>
                    <img src="images/apps_1.jpg" alt="">
                    <div class="data margin-top-20">
                        <p> Configure Gmail para tu nombre de dominio: 30 GB de espacio, bandejas de entrada sin anuncios, herramientas de migración fáciles y grupos ilimitados. <br> <br> <i>Incluye protección contra spam y copias de seguridad
</i> </p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                      <h3 class="margin-bottom-20"> <b>Programa reuniones en un instante</b>  </h3>
                  <img src="images/apps_2.jpg" alt="">
                    <div class="data margin-top-20">
                        <p> Google Calendar auto-sugiere los mejores momentos y salas de reuniones para tu equipo. También se sincroniza con Gmail, Drive y Hangouts.</p>
                    </div>
                </div>
                <div class="col-sm-4 text-center margin-top-40">
                    <h3 class="margin-bottom-20"> <b>Únete a videollamadas donde estes</b>  </h3>
                    <img src="images/apps_3.jpg" alt="">
                    <div class="data  margin-top-20">
                        <p> Con Hangouts de Google, no hay necesidad de descargar ni añadir complementos, invitar a nadie, unir desde cualquier lugar, compartir pantallas incluso sin tener una cuenta  </p>
                    </div>
                </div>



            </div>


            <div class="row margin-bottom-40">
        <div class="col-sm-4 text-center margin-top-40">
            <h3 class="margin-bottom-20"> <b>Almacena y comparte archivos fuera de la nube</b>  </h3>
            <img src="images/screen_1.jpg" alt="">
            <div class="data margin-top-20">
                <p> Con Google Drive, guarda todos sus archivos en un lugar seguro y accede a ellos desde cualquier lugar. Compartelos fácilmente con tu equipo y controla quién puede ver su contenido. </p>
            </div>
        </div>
        <div class="col-sm-4 text-center margin-top-40">
              <h3 class="margin-bottom-20"> <b>Datos inteligentes al alcance de tu mano</b>  </h3>
          <img src="images/screen_2.jpg" alt="">
            <div class="data margin-top-20">
                <p>Con el nuevo Google Sheets, consigue respuestas de tus formularios sin formulas complicadas. Solo pregunta y google te respondera.

</p>
            </div>
        </div>
        <div class="col-sm-4 text-center margin-top-40">
            <h3 class="margin-bottom-20"> <b>Edite y administre documentos en cualquier lugar</b>  </h3>
            <img src="images/screen_3.jpg" alt="">
            <div class="data  margin-top-20">
                <p> Google Docs te permite editar documentos en múltiples dispositivos. También puedes
comentar, chatear y aprovechar la edición en tiempo real. </p>
            </div>
        </div>



    </div>

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
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_1">¿Puedo usar mi dominio existente con G Suite?</a></h4>
                            </div>
                            <div id="tab1_1" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Sí, puede utilizar un dominio existente con su pedido de G Suite. </p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_2">¿Qué sucede con mi correo, contactos y datos de calendario existentes cuando me cambie a G Suite?</a></h4>
                            </div>
                            <div id="tab1_2" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Al cambiar a G Suite desde otro programa o servicio web, usted y sus usuarios pueden llevar consigo sus datos de correo, contactos y calendario existentes. Tiene varias opciones para migrar datos en G Suite, dependiendo del tamaño de su organización y del sistema del que está migrando. Existen herramientas disponibles para la migración desde Microsoft Exchange, Lotus Notes, servidores IMAP y otras cuentas de Google.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_3">¿Cuál es el espacio proporcionado por cuenta de correo electrónico?</a></h4>
                            </div>
                            <div id="tab1_3" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Cada cuenta de correo electrónico viene con 30 GB de espacio.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_4">¿Es compatible G Suite con el cliente de correo electrónico que utilizo hoy?</a></h4>
                            </div>
                            <div id="tab1_4" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Además de acceder al correo de G Suite desde la interfaz web de Gmail, puede enviar y recibir correo desde su cliente de escritorio favorito. Dependiendo del cliente, puede utilizar el protocolo de correo IMAP o POP. Si está cambiando a G Suite desde Microsoft Exchange u otro servicio de Outlook, puede utilizar G Suite Sync. Este es un complemento para Outlook 2003, 2007, 2010 o 2013 que le permite utilizar Outlook para administrar el correo, el calendario y los contactos de G Suite, junto con sus notas, tareas y entradas de diario de Outlook.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_5">¿Qué clientes de correo electrónico y protocolos son compatibles?</a></h4>
                            </div>
                            <div id="tab1_5" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Puede enviar y recibir mensajes de correo electrónico utilizando cualquier cliente de correo electrónico basado en escritorio, como Microsoft Outlook, Outlook Express, Mozilla Thunderbird, Eudora, Entourage 2004, Windows Mail, etc. También tenemos una guía sobre cómo configurar diferentes clientes de correo electrónico para enviar / Recibir correos electrónicos. El producto de correo electrónico corporativo admite los protocolos POP, IMAP y MAPI.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_6">¿Desde qué teléfonos móviles puedo acceder a mi correo?</a></h4>
                            </div>
                            <div id="tab1_6" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>P. ¿Desde qué teléfonos móviles puedo acceder a mi correo?</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_7">¿Puedo administrar varios dominios con G Suite?</a></h4>
                            </div>
                            <div id="tab1_7" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Si su organización adquiere un nuevo nombre de dominio o hace negocios en varios dominios, puede agregar todos sus dominios a su cuenta sin costo adicional. Los usuarios pueden tener identidades en uno o más de sus dominios mientras comparten servicios como parte de una organización. Administre sus dominios desde el mismo Panel de administración. Añada un dominio como dominio independiente o como alias de dominio, según cómo vaya a utilizarlo.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">Si sólo quiero uno de los productos, ¿tengo que comprar toda la suite?</a></h4>
                            </div>
                            <div id="tab1_8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Sí. G Suite está diseñado como una solución todo en uno con herramientas integradas que funcionan perfectamente juntas. Por ejemplo, puede recibir un mensaje en Gmail y convertirlo instantáneamente en un evento de Calendario. Cuando haga un comentario en Docs, Sheet o Slides, los colaboradores recibirán automáticamente alertas por correo electrónico. Con un solo clic, puede iniciar una reunión de video de Hangouts desde su bandeja de entrada o calendario. El uso de estas herramientas como un paquete completo mejora la productividad al mismo tiempo que le da a su negocio una mayor utilidad. Sin embargo, le invitamos a comprar la suite y utilizar sólo los servicios de su elección.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Puedo crear listas de correo?</a></h4>
                            </div>
                            <div id="tab1_8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Sí, puede crear listas de correo y agregar / eliminar usuarios, seleccionar un moderador, restringir a las personas de unirse a una lista o incluso prohibir a los usuarios de una lista.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Cuál es su política de SPAM?</a></h4>
                            </div>
                            <div id="tab1_8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Cuando se registra en una cuenta de G Suite, acepta no usar la cuenta para enviar spam, distribuir virus o abusar del servicio. Todos los usuarios de su dominio están sujetos a estos acuerdos, que forman parte de la Política de uso aceptable de G Suite. Si Google identifica a un usuario de G Suite que está violando estos acuerdos, nos reservamos el derecho de suspender inmediatamente al usuario. Si el problema es de ámbito general, nos reservamos el derecho de suspender toda la cuenta y denegar el acceso de administrador a todos los servicios de G Suite. En estos casos, enviamos una notificación a la dirección de correo electrónico secundaria registrada del administrador del dominio. </p>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Puedo transferir mi G Suite existente?</a></h4>
                            </div>
                            <div id="tab1_8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Sí. Durante la transferencia, trasladamos todas las cuentas de correo electrónico del antiguo proveedor, manteniendo los datos intactos. Sin embargo, su tenencia actual con el otro proveedor, si tiene alguna, no se mueve a nosotros. Haga clic aquí para iniciar el proceso de transferencia. </p>
                                </div>
                            </div>
                        </div>


                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title"><a data-toggle="collapse" data-parent="#accordion" href="#tab1_8">¿Puedo usar Auto Respuestas?</a></h4>
                            </div>
                            <div id="tab1_8" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <p>Sí, usted puede hacerlo. Utilice el servicio de respuesta de vacaciones de Gmail para que la gente sepa que no podrá responder de inmediato. Mientras su contestador de vacaciones esté activado, Gmail enviará su respuesta a las personas que le envíen un correo electrónico. </p>
                                </div>
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
