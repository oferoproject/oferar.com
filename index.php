<!DOCTYPE html>
<html lang="en">


<head>

  <?php include('claves.php') ?>
  <script src="../admin/js/js.js"></script>




</head>
<body class="cnt-home" onLoad="getCategoria();">

  <?php include('cabecera.php') ?>

  <?php include ('sliderhome.php') ?>


  <div class="body-content outer-top-xs" id="top-banner-and-menu">
    <div class="container">
      <div class="row"> 



        <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
         <?php include ('ultimascargas.php') ?> 
       </div>



       <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
         <?php include ('categorias_central.php') ?><br>
       </div>



       <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
          <br><?php include ('publicidadcentraldoble.php') ?>
       </div>



       <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder"  style="margin-bottom: 20px;">
         <?php include ('productosdestacadoscentral.php') ?>       </div>



       <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
        <?php include ('publicidadcentralunica.php') ?> 

       </div>    

       <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
         <?php include ('masvistos.php') ?> <br>
       </div> 
     </div>

   </div>
   <div >
     <!--<div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder" style="background-color: #ff5500; background: linear-gradient(#ff5500, #efefef);">
       <?php // include ('nuevosproductoscentral.php') ?>
     </div>-->
   </div>
 </div>




 <?php include('footer.php') ?>


</body>

</html>

<!-- == BARRA LATERAL IZQUIERDA == 
        <div class="col-xs-12 col-sm-12 col-md-3 sidebar"> 
          <div><br></div>
          <?php /*include ('categorias.php') ?>
          <?php include ('mejoresofertas.php') ?>   
          <?php include ('ofertasespeciales.php') ?>   
          <?php include ('minitienda.php')*/ ?>
        </div>-->

        <!-- == CONTENIDO CENTRAL == -->