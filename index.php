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

<style> .card p{float:left !important ; display: block; margin-right: 30px}
        .card p img{margin-right}
        .padding-bottom-20 { padding-bottom: 20px !important; }</style>

  <!-- End of Header-->

  <!-- Slider -->
</div>

<div class="bg_gray2 ">
<div class="row">
<form class="form-inline domainsearch bg-transparent clearfix margin-top-0 " method="post" action="clientes/domainchecker.php">
  <div class="col-sm-10">
      <input type="text" class="form-control" name="sld" placeholder="El dominio que siempre has querido"/>
      <span class="selection">
         <?php $extensiones=getDomainExtensions();?>
         <select name="tld" class="e1">
           <?php foreach ($extensiones as $ext=>$value):?>
            <option><?php echo $value ?></option>
           <?php endforeach ;?>
         </select>
      </span>
   </div>
   <div class="col-sm-2">
      <button type="submit" class="btn waves-effect waves-light btn-info" style="width:100%">Buscar</button>
   </div>
</form>
 <div class="col-sm-12">
<ul class="list-inline margin-bottom-15"> 
 <li><img src="images/dtls/com.png" height="15" alt=""> $ 3500 COP</li>
  <li><img src="images/dtls/co.png" height="15" alt=""> $ 3500 COP</li>
   <li><img src="images/dtls/club.png" height="15" alt=""> $ 3500 COP</li>
    <li><img src="images/dtls/online.png" height="15" alt=""> $ 3500 COP</li>
    <li><img src="images/dtls/info.png" height="15" alt=""> $ 3500 COP</li>
</ul>
</div>
</div>
</div>

<?php
include 'inc/slider.php';
?>
  <!-- End of Slider -->

  <!--  Features -->

  <?php
  include 'inc/features.php';
  ?>

  <!-- End of Features -->

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
