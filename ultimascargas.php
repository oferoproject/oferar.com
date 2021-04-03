<div id="product-tabs-slider" class="scroll-taS. outer-top-vs wow fadeInUp">
  <div class="more-info-tab clearfix" style="margin-bottom: -30px; margin-left: 29px;">
    <h3>Ultimas Cargas</h3>
  </div>
  <div class="tab-content outer-top-xs scroll-taS. outer-top-vs wow fadeInUp" style="    margin-left: 8px;padding-left: 0px;padding-right: 5px;"> 
   <div class="tab-pane in active" id="all">
    <div class="product-slider">
      <div class="owl-carousel home-owl-carousel custom-carousel owl-theme" data-item="5">





        <?$rs2 = mysql_query("SELECT * FROM publicacion ORDER BY cod_publicacion DESC Limit 10", $link);  
        $counter2 = 0;
        if($rs2!="")
          $counter2 = mysql_num_rows($rs2);
        for($i2=0;$i2<$counter2;$i2++)
        {
          echo "<div class='item item-carousel' style='background-color: #ffffff !important; padding-left: 20px; padding-top: 19px; margin: 8px;' >";
          echo "<div class='products'>";
          echo "<div class='product'>";
          echo "<div class='product-image'>";
          echo "<div class='image'> ";
          echo "<a href='detalles?id=".mysql_result($rs2, $i2, 'cod_publicacion')."'><img  src='".mysql_result($rs2, $i2, 'foto1')."' style='width: 100%; height: 193px;'></a>";
          echo "</div></div><div class='product-info text-left'>";
          echo "<div class='product-price' align='left'>  <h3 >".mysql_result($rs2, $i2, 'moneda')."  ".mysql_result($rs2, $i2, 'preciov')."</h3></div>";
          echo "</div>";
          echo "<div class='nombre-producto' id='nombre-producto' align='justify' ><h5>".mysql_result($rs2, $i2, 'nombre')."</h5></div>";
          echo "</div>";
          echo "</div>";
          echo "</div>";


        }?>

      </div>

    </div>     
  </div>
</div>

</div>



