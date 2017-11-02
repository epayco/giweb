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

  <!-- Slider -->

  <?php
  include 'inc/slider.php';
  ?>
  <!-- End of Slider -->

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

  <!--  Features -->


  <?php
  include 'inc/features.php';
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
  <!-- End of Hosting Services -->

  <!-- Help -->



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
