<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('claves.php') ?>
</head>
<body class="cnt-home" onload="contar()">

    <?php include('cabecera.php'); ?>

    
    <?
    $rsart = mysql_query("SELECT * FROM publicacion WHERE cod_publicacion='".$_REQUEST['id']."'", $link);  
    $counterart = 0;
    if($rsart!="")
        $counterart = mysql_num_rows($rsart);
    for($iart=0;$iart<$counterart;$iart++)
    { 
        $cod_usuario         = mysql_result($rsart, $iart, 'cod_usuario'); 
        $nombre_p = mysql_result($rsart, $iart, 'nombre'); 
        $categoria   = mysql_result($rsart, $iart, 'categoria'); 
        $descripcion = mysql_result($rsart, $iart, 'descripcion'); 
        $disponibilidad = mysql_result($rsart, $iart, 'disponibilidad'); 
        $preciov = mysql_result($rsart, $iart, 'preciov'); 
        $foto1 = mysql_result($rsart, $iart, 'foto1'); 
        $foto2 = mysql_result($rsart, $iart, 'foto2'); 
        $foto3 = mysql_result($rsart, $iart, 'foto3'); 
        $foto4 = mysql_result($rsart, $iart, 'foto4'); 
        $status = mysql_result($rsart, $iart, 'status'); 
        $fecha_p = mysql_result($rsart, $iart, 'fecha_p'); 
        $fecha_v = mysql_result($rsart, $iart, 'fecha_v'); 
        $vistas = mysql_result($rsart, $iart, 'vistas');
        $moneda = mysql_result($rsart, $iart, 'moneda');
        $calidad = mysql_result($rsart, $iart, 'calidad');
        $region = mysql_result($rsart, $iart, 'region');
        $provincia = mysql_result($rsart, $iart, 'provincia');
        $distrito = mysql_result($rsart, $iart, 'distrito');
    }

    $rsuser = mysql_query("SELECT * FROM usuario WHERE cod_usuario='$cod_usuario '", $link);  
    $counteruser = 0;
    if($rsuser!="")
        $counteruser = mysql_num_rows($rsuser);
    for($iuser=0;$iuser<$counteruser;$iuser++)
    { 
        $correo_plublica   = mysql_result($rsuser, $iuser, 'correo'); 
        $nombre_plublica = mysql_result($rsuser, $iuser, 'nombre'); 
        $apellido_plublica   = mysql_result($rsuser, $iuser, 'apellido'); 
        $telefono_plublica = mysql_result($rsuser, $iuser, 'telefono'); 
    }
    ?>

    <script>
        var juan = 16;
        function contar()
        {
            if (juan <= 0){

                <? $cargar = mysql_query("UPDATE publicacion SET vistas= '$vistas' + '1' WHERE cod_publicacion = '".$_REQUEST['id']."'", $link) or die("La consulta fallo;: ".mysql_error()); ?>


                clearInterval(time);
                return;
            }else{
                juan = juan -1;
            }
        }
        time= setInterval("contar()", 1000);
    </script>



    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>


                <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder" style="margin-bottom: : 16pc;">
                    <div class='col-xs-12 col-sm-12 col-md-12'>
                        <div class="detail-block">

                            <div class="detail-block">
                                <div class="row  wow fadeInUp">

                                    <div class="col-sm-6 col-md-8 gallery-holder">
                                        <div class="product-item-holder size-big single-product-gallery small-gallery">

                                            <div id="owl-single-product">

                                                <div class="single-product-gallery-item" id="slide1">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="<? echo $foto1 ?>">
                                                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="<? echo $foto1 ?>" />
                                                    </a>
                                                </div>


                                                <? if ($foto2 != ""){?>
                                                <div class="single-product-gallery-item" id="slide2">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="<? echo $foto2 ?>">
                                                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="<? echo $foto2 ?>" />
                                                    </a>
                                                </div>
                                                <?}?>

                                                <? if ($foto3 != ""){?>
                                                <div class="single-product-gallery-item" id="slide3">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="<? echo $foto3 ?>">
                                                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="<? echo $foto3 ?>" />
                                                    </a>
                                                </div>
                                                <?}?>


                                                <? if ($foto4 != ""){?>
                                                <div class="single-product-gallery-item" id="slide4">
                                                    <a data-lightbox="image-1" data-title="Gallery" href="<? echo $foto4 ?>">
                                                        <img class="img-responsive" alt="" src="assets/images/blank.gif" data-echo="<? echo $foto4 ?>" />
                                                    </a>
                                                </div>
                                                <?}?>
                                            </div>

                                            <div class="single-product-gallery-thumS. gallery-thumbs">
                                                <div id="owl-single-product-thumbnails">
                                                    <div class="item">
                                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="1" href="#slide1">
                                                            <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="<? echo $foto1 ?>" />
                                                        </a>
                                                    </div>

                                                    <? if ($foto2 != ""){?>
                                                    <div class="item">
                                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="2" href="#slide2">
                                                            <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="<? echo $foto2 ?>"/>
                                                        </a>
                                                    </div>
                                                    <?}?>

                                                    <? if ($foto3 != ""){?>
                                                    <div class="item">
                                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="3" href="#slide3">
                                                            <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="<? echo $foto3 ?>" />
                                                        </a>
                                                    </div>
                                                    <?}?>


                                                    <? if ($foto4 != ""){?>
                                                    <div class="item">
                                                        <a class="horizontal-thumb" data-target="#owl-single-product" data-slide="4" href="#slide4">
                                                            <img class="img-responsive" width="85" alt="" src="assets/images/blank.gif" data-echo="<? echo $foto4 ?>" />
                                                        </a>
                                                    </div>
                                                    <?}?>  


                                                </div>
                                            </div>

                                            <br><hr>

                                            <div id="product-tabs-slider" class="scroll-taS. outer-top-vs wow fadeInUp" style="margin-top: 16px;">
                                                <div class="more-info-tab clearfix" style="margin-bottom: -30px; margin-left: 29px;">
                                                    <h3>Otras Publicaciones del Vendedor</h3>
                                                </div>
                                                <div class="tab-content outer-top-xs scroll-taS. outer-top-vs wow fadeInUp" style="    margin-left: 8px;padding-left: 0px;padding-right: 5px;">
                                                    <div class="tab-pane in active" id="all">
                                                        <div class="product-slider">
                                                            <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="4">


                                                                <? $rs2 = mysql_query("SELECT * FROM publicacion WHERE cod_usuario = '$cod_usuario' ORDER BY cod_publicacion DESC Limit 10", $link);  
                                                                for($i2=0;$i2<mysql_num_rows($rs2);$i2++){

                                                                  echo "<div class='item item-carousel' style='background-color: #ffffff !important; padding-left: 20px; padding-top: 19px; margin: 8px;' >";
                                                                  echo "<div class='products'>";
                                                                  echo "<div class='product'>";
                                                                  echo "<div class='product-image'>";
                                                                  echo "<div class='image'> ";
                                                                  echo "<a href='detalles?id=".mysql_result($rs2, $i2, 'cod_publicacion')."'><img  src='".mysql_result($rs2, $i2, 'foto1')."' style='width: 120px; height: 120px;'></a>";
                                                                  echo "</div></div><div class='product-info text-left'>";
                                                                  echo "<div class='product-price' align='left'>  <h3 >".mysql_result($rs2, $i2, 'moneda')."  ".mysql_result($rs2, $i2, 'preciov')."  </h3></div>";
                                                                  echo "</div>";
                                                                  echo "<div class='nombre-producto' id='nombre-producto' align='justify' ><hr><h5>".mysql_result($rs2, $i2, 'nombre')."</h5></div>";
                                                                  echo "</div>";
                                                                  echo "</div>";
                                                                  echo "</div>";

                                                              }?>

                                                          </div>
                                                      </div> 
                                                  </div>
                                              </div>
                                          </div>

                                          <br><hr>
                                          <h3>Características del producto</h3><br>
                                          <div align="justify" style="font-size: 15px;" > <? echo $descripcion ?></div>




                                          <script>
                                            var div = document.getElementById('example');
                                            sceditor.create(div, {
                                                format: 'bbcode',
                                                icons: 'monocons',
                                                style: 'minified/themes/content/default.min.css'
                                            });


                                            var themeInput = document.getElementById('theme');
                                            themeInput.onchange = function() {
                                                var theme = '../minified/themes/' + themeInput.value + '.min.css';

                                                document.getElementById('theme-style').href = theme;
                                            };
                                        </script>







                                    </div>
                                </div>  

                                <div class='col-sm-6 col-md-4 product-info-block'>
                                    <strong style="color: #939191; margin-bottom: 10px;"><? echo $calidad ?></strong><br>


                                    <? if  ($region != ""){?> <img src="img/gps.png"><strong style="color: #939191; margin-bottom: 10px;"> <? echo $region ?>  <? if ($provincia != ""){echo " - ".$provincia;} ?>  <? if ($distrito != ""){echo " - ".$distrito;} ?> </strong><br><? } ?>


                                    <div class="product-info">
                                        <h4 class="name"><? echo $nombre_p ?></h4>

                                            <!-- <div class="rating-reviews m-t-20">
                                                <div class="row">
                                                    <div class="col-sm-3">
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <div class="reviews">
                                                            <a href="#" class="lnk">(<? echo $vistas ?> Reviews)</a>
                                                        </div>
                                                    </div>
                                                </div>      
                                            </div> -->

                                            <!-- <div class="stock-container info-container m-t-10">
                                                <div class="row">
                                                    <div class="col-sm-2">
                                                        <div class="stock-box">
                                                            <span class="label">Availability :</span>
                                                        </div>  
                                                    </div>
                                                    <div class="col-sm-9">
                                                        <div class="stock-box">
                                                            <span class="value">In Stock</span>
                                                        </div>  
                                                    </div>
                                                </div>  
                                            </div> -->

                                            <div class="description-container m-t-20"> 



                                            </div>

                                            <div class="price-container info-container m-t-20">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="price-box">
                                                            <span class="price"><? echo $moneda ?><? echo $preciov ?></span>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="favorite-button m-t-10">
                                                           &#160;<!--  <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="#"><i class="fa fa-heart"></i></a>
                                                            <a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Add to Compare" href="#"><i class="fa fa-signal"></i></a>
                                                            <a  class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="E-mail" href="#"><i class="fa fa-envelope"></i></a>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="quantity-container info-container">
                                                <div class="row">
                                                    <div class="col-sm-12">

                                                        <h4> Datos del Vendedor</h4>

                                                        <?
                                                        if ($usuario == ""){?>
                                                        <br>
                                                        <strong>Debe estar registrado para ver los datos del vendedor</strong>
                                                        <br>

                                                        <?}else{?>
                                                        <br>
                                                        <span class="label"> Nombre: &nbsp;&nbsp;&nbsp;&nbsp;</span> <? echo $nombre_plublica ?> <? echo $apellido_plublica ?><br>
                                                        <span class="label"> Correo: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> <? echo $correo_plublica ?> <br>
                                                        <span class="label"> Teléfono: &nbsp;</span> <? echo $telefono_plublica ?>
                                                        <?}
                                                        ?>

                                                    </div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                </div>          
                            </div>
                        </div>
                    </div>

                    <div class="clearfix">
                    </div>
                </div>
            </div>
        </div>	
        <br>
    </div>
    <?php include('footer.php') ?>
</body>
</html>