<!DOCTYPE html>
<html lang="en">


<head>

  <?php include('claves.php') ?>

</head>
<body class="cnt-home">

  <?php include('cabecera.php') ?>


  <div class="breadcrumb">
    <div class="container">

    </div>
  </div>
  <div class="body-content outer-top-xs">
    <div class='container'>

      <? $rsctg = mysql_query("SELECT * FROM categoria_hijo WHERE cod_categoria_hijo = ".$_REQUEST['cod_categoria_hijo']." ", $link);  
      for($ictg=0;$ictg<mysql_num_rows($rsctg);$ictg++){
        echo "<h3 style='margin-bottom: 30px;'>".mysql_result($rsctg, $ictg, 'nombre_categoria_hijo')."</h3>";
      } ?>





      <div class='row'>
        <div class="search-result-container ">
          <div id="myTabContent" class="tab-content category-list" style="background-color: #f3f3f3 !important;">
            <div class='tab-pane active ' id='grid-container'>
              <div class='category-product' >
                <div class='row'>

                  <? if ($contador = mysql_num_rows(mysql_query("SELECT * FROM publicacion WHERE sub_categoria = ".$_REQUEST['cod_categoria_hijo']." ", $link)) != 0){ 
                    $rs2 = mysql_query("SELECT * FROM publicacion WHERE sub_categoria = ".$_REQUEST['cod_categoria_hijo']." ", $link); 
                    for($i2=0;$i2<mysql_num_rows($rs2);$i2++){
                      ?>
                      <div class='col-sm-6 col-md-3 wow fadeInUp '>
                        <div class='item item-carousel' style='background-color: #ffffff !important; padding-left: 20px; padding-top: 19px; margin: 8px;'>
                          <div class='product'>
                            <div class='product-image'>
                              <div class='image'> 
                                <a href='detalles?id=<? echo mysql_result($rs2, $i2, 'cod_publicacion') ?>'>
                                  <img  src='<? echo mysql_result($rs2, $i2, 'foto1') ?>' style='width: 100%; height: 193px;'>
                                </a>
                              </div>
                            </div>
                            <div class='product-info text-left'>
                              <div class='product-price' align='left'>  <h3 ><? echo mysql_result($rs2, $i2, 'moneda') ?>  <? echo mysql_result($rs2, $i2, 'preciov') ?></h3></div>
                            </div>
                            <div class='' id='' align='justify' ><h5><? echo  substr(mysql_result($rs2, $i2, 'nombre'), 0, 35)    ?></h5><br></div>
                          </div>
                        </div>
                      </div>

                      <?
                    }
                  }else{
                    echo "<h3 style='margin-bottom: 30px; text-align:center'>No hay articulos en esta subcategoria</h3>";
                  }?>
                </div>
              </div>
            </div>
          </div> 
        </div> 
      </div>
    </div>
  </div>


  <div><br></div>
  <? include('footer.php') ?>
</body>

</html>