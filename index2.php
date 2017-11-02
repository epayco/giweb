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

<style> .card p{float:left !important ; display: block; margin-right: 30px};
        .card p img{margin-right: 0px} </style>

  <!-- End of Header-->

      <!--  Domain Search -->
      <section class="calltoaction bg_dark" style="background: url(images/slides/slide_5.jpg) ">
        <div style="background:rgba(0,0,0,0.4);">
         <div class="row section_space">
            <div class="col-sm-10 com-md-8 center-block">

               <div class="section-domian clearfix">
                 <h2>Registra tu dominio ahora</h2>
                 <p>¿Como deseas aparecer en la web?</p>
                  <form class="form-inline domainsearch clearfix"  method="post" action="#">

                         <div class="col-sm-10">
                        <input type="text" class="form-control" name="sld" placeholder="El dominio que siempre has querido"/>
                        <span class="selection">
                           <select name="tld" class="e1">
                              <option>.com</option>
                              <option>.net</option>
                              <option>.org</option>
                              <option>.eu</option>
                           </select>
                        </span>
                     </div>
                     <div class="col-sm-2">
                        <button type="submit" class="btn waves-effect waves-light btn-info" style="width:100%">Buscar</button>
                     </div>
                  </form>

               </div>
            </div>
         </div>
       </div>
      </section>
      <!-- End of Domain Search -->

  <!--  Features -->

  <?php
  include 'inc/features.php';
  ?>
  <!-- End of Features -->


  <!-- Slider -->

  <?php
  include 'inc/slider.php';
  ?>


  <!--  Pricing Tables -->

  <?php
  include 'inc/pricing.php';
  ?>

  <!-- End of Pricing Tables -->

  <!--  Counters -->

  <?php
  include 'inc/counters.php';
  ?>

  <!-- End of Counters -->

  <!-- Testimonials -->

  <?php
  include 'inc/testimonials.php';
  ?>
  <!-- End of Testimonials -->

  <!--  Newsletter -->
  <?php
  include 'inc/newsletter.php';
  ?>

  <!--  End of Newsletter -->


  <!-- Hosted Clients -->

  <?php
  include 'inc/clients.php';
  ?>


  <!-- End of Hosted Clients -->

  <!-- Hosting Services -->

  <?php
  include 'inc/services.php';
  ?>
  <!-- End of Help -->


    <!--  Footer -->
<?php
include 'inc/footer.php';
?>
    <!--  End of Footer -->

    <!--  Go to Top-->
    <?php
include 'inc/scripts.php';
?>

</body>

</html>
