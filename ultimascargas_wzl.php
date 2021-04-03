
<!-- ============================================== FEATURED PRODUCTS ============================================== -->
<section class="section featured-product wow fadeInUp">
  <h3 class="section-title">Ultimas Cargas (Propuesta webnezolanos)</h3>
  <div class="owl-carousel home-owl-carousel custom-carousel owl-theme outer-top-xs" data-item="5">

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
      echo "<div class='product-price' align='left'> Precio S/ <span class='price'> ".mysql_result($rs2, $i2, 'preciov')."  </span></div>";
      echo "<div class='product-price' align='left'>".mysql_result($rs2, $i2, 'nombre')."</div>";
      echo "</div>";
      echo "<div class='cart clearfix animate-effect' style='background-color: rgba(255, 85, 0, 0.62); width: 100%; left: 0px; color: #fff; margin-left: 0px; padding-top: 15px;  padding-bottom: 15px;  top: 25%;' align='center'>";
      echo "<div class='action' align='center'>";
      echo "<ul class='list-unstyled'>";
      echo "<li class='add-cart-button btn-group'>";
      echo "<p class='name' style='color #000'>";
      echo "<a href='detalles?id=".mysql_result($rs2, $i2, 'cod_publicacion')."' style='color: #fff; margin-left: 5px; text-transform: uppercase;'>".mysql_result($rs2, $i2, 'nombre')."</a>";
      echo "</p>";
      echo "<button class='btn btn-primary cart-btn' type='button'>Comprar</button>";
      echo "</li>";
      echo "</ul>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
      echo "</div>";
    }?>
  </div> 
</section>