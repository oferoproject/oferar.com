


<div id="product-tabs-slider" class="scroll-taS. outer-top-vs wow fadeInUp">
  <div class="more-info-tab clearfix" style="margin-bottom: -30px; margin-left: 29px;">
    <h3>Ultimas Cargas (modelo mercadolibre)</h3>
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








             <!-- <div class="item item-carousel">
                <div class="products">
                  <div class="product">

                    <div class="product-image">
                      <div class="image"> <a href="detalles?id=1"><img  src="assets/images/products/p1.jpg" alt=""></a></div>
                    </div>

                    <div class="product-info text-left">
                      <div class="product-price" align="right"> <span class="price"> S. 450.90 </span></div>
                    </div>

                    <div class="cart clearfix animate-effect" align="center" style="background-color: rgba(255, 85, 0, 0.62); width: 100%; left: 0px; color: #fff; margin-left: 0px; padding-top: 15px; padding-bottom: 15px; top: 25%;">
                      <div class="action" align="center">
                        <ul class="list-unstyled">
                          <li class="add-cart-button btn-group">
                            <p class="name" style="color #000"><a href="detalles?id=1" style="color: #fff; margin-left: 5px;">Nombre del Producto</a></p>
                            <button class="btn btn-primary cart-btn" type="button">Comprar</button>
                          </li>
                        </ul>
                      </div>
                    </div>

                  </div>

                </div>
                 
              </div> --> 

            </div>
            <!-- /.home-owl-carousel --> 
          </div>
          <!-- /.product-slider --> 
        </div>
        <!-- /.tab-pane -->
      </div>

    </div>
    <!-- /.tab-content --> 



