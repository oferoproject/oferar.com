
<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<section>

  <div class="col-xs-12 col-sm-12 col-md-12">
    <h4>&#160;</h4>
  </div>



  
<div id="product-tabs-slider" class="scroll-taS. outer-top-vs wow fadeInUp">

  <div class="col-xs-12 col-sm-12 col-md-12"  style="margin-bottom: 0px; margin-left: 29px;">
    <h3>Categorias Populares</h3>
  </div>
  
  <div class="tab-content outer-top-xs scroll-taS. outer-top-vs wow fadeInUp" style="margin-left: 8px;padding-left: 0px;padding-right: 5px;"> 
   <div class="tab-pane in active" id="all">
    <div class="product-slider">
      <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="1">


        <div class="item item-carousel" >
          <?
          $rsctg = mysql_query("SELECT * FROM categoria ORDER BY cod_categoria asc", $link);  
          $counterctg = 0;
          if($rsctg!="")
            $counterctg = mysql_num_rows($rsctg);
          for($ictg=0;$ictg<$counterctg;$ictg++)
          {
            if ($ictg >= "0" and  $ictg <= "11"){
              ?>

              <a href='categoria?cod_categoria=<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>' onmouseover='naranjacambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>()' onmouseout="blancocambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>()">

                <div id='cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>' class='col-xs-6 col-sm-2 col-md-2 homebanner-holder'  id='moopio' align='center' style='height: 180px; margin-bottom: 1px; background-color: #fff; box-shadow: 0 2px 4px 0 rgba(0,0,0,.08);''> 

                  <br>
                  <img src='<? echo mysql_result($rsctg, $ictg, 'foto_categoria') ?>' width='35%' style='margin-bottom: 27px; margin-top: 27px;'>

                  <br>
                  <div style='margin-bottom: 27px;'>
                    <strong>
                      <? echo mysql_result($rsctg, $ictg, 'nombre_categoria') ?>
                    </strong>
                  </div>

                </div>
              </a>


              <script type='text/javascript'>
                function naranjacambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>(){
                  document.getElementById("cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>").style.backgroundColor = "#f50";
                }
                function blancocambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>(){
                  document.getElementById("cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>").style.backgroundColor = "#fff";
                }
              </script>



              <?
            }
          }?>
        </div>


        <div class="item item-carousel" >
          <?
          $rsctg = mysql_query("SELECT * FROM categoria ORDER BY cod_categoria asc", $link);  
          $counterctg = 0;
          if($rsctg!="")
            $counterctg = mysql_num_rows($rsctg);
          for($ictg=0;$ictg<$counterctg;$ictg++)
          {
            if ($ictg >= "12" and  $ictg <= "23"){
              ?>

              <a href='categoria?cod_categoria=<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>' onmouseover='naranjacambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>()' onmouseout="blancocambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>()">

                <div id='cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>' class='col-xs-6 col-sm-2 col-md-2 homebanner-holder'  id='moopio' align='center' style='height: 180px; margin-bottom: 1px; background-color: #fff; box-shadow: 0 2px 4px 0 rgba(0,0,0,.08);''> 

                  <br>
                  <img src='<? echo mysql_result($rsctg, $ictg, 'foto_categoria') ?>' width='35%' style='margin-bottom: 27px; margin-top: 27px;'>

                  <br>
                  <div style='margin-bottom: 27px;'>
                    <strong>
                      <? echo mysql_result($rsctg, $ictg, 'nombre_categoria') ?>
                    </strong>
                  </div>

                </div>
              </a>


              <script type='text/javascript'>
                function naranjacambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>(){
                  document.getElementById("cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>").style.backgroundColor = "#f50";
                }
                function blancocambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>(){
                  document.getElementById("cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>").style.backgroundColor = "#fff";
                }
              </script>



              <?
            }
          }?>
        </div>
                <div class="item item-carousel" >
          <?
          $rsctg = mysql_query("SELECT * FROM categoria ORDER BY cod_categoria asc", $link);  
          $counterctg = 0;
          if($rsctg!="")
            $counterctg = mysql_num_rows($rsctg);
          for($ictg=0;$ictg<$counterctg;$ictg++)
          {
            if ($ictg >= "24" and  $ictg <= "35"){
              ?>

              <a href='categoria?cod_categoria=<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>' onmouseover='naranjacambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>()' onmouseout="blancocambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>()">

                <div id='cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>' class='col-xs-6 col-sm-2 col-md-2 homebanner-holder'  id='moopio' align='center' style='height: 180px; margin-bottom: 1px; background-color: #fff; box-shadow: 0 2px 4px 0 rgba(0,0,0,.08);''> 

                  <br>
                  <img src='<? echo mysql_result($rsctg, $ictg, 'foto_categoria') ?>' width='35%' style='margin-bottom: 27px; margin-top: 27px;'>

                  <br>
                  <div style='margin-bottom: 27px;'>
                    <strong>
                      <? echo mysql_result($rsctg, $ictg, 'nombre_categoria') ?>
                    </strong>
                  </div>

                </div>
              </a>


              <script type='text/javascript'>
                function naranjacambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>(){
                  document.getElementById("cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>").style.backgroundColor = "#f50";
                }
                function blancocambio<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>(){
                  document.getElementById("cat<? echo mysql_result($rsctg, $ictg, 'cod_categoria') ?>").style.backgroundColor = "#fff";
                }
              </script>



              <?
            }
          }?>
        </div>




      </div>

    </div>     
  </div>
</div>

</div>




</section> 







