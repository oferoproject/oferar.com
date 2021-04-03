
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('claves.php');
    if ($usuario == "") {
        header("location: ./");
    }
    ?>

    <script type="text/javascript">
        function buscar_sub(){
            var xmlHttp;
            try{
                xmlHttp=new XMLHttpRequest();
            }
            catch (e){
                try{
                    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); 
                }
                catch (e){
                    try{
                        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    catch (e){
                        alert("Tu explorador no soporta AJAX.");
                        return false;
                    }
                }
            }
            xmlHttp.onreadystatechange=function(){
                if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
                    document.getElementById("div_sub").innerHTML=xmlHttp.responseText;
                }
            }
            xmlHttp.open("GET","ajaxsub?cod_categoria="+document.getElementById("categoria").value,true);
            xmlHttp.send(null);
        }
    </script>
    <script type="text/javascript">
        function buscar_provincia(){


            var xmlHttp;
            try{
                xmlHttp=new XMLHttpRequest();
            }
            catch (e){
                try{
                    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); 
                }
                catch (e){
                    try{
                        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    catch (e){
                        alert("Tu explorador no soporta AJAX.");
                        return false;
                    }
                }
            }
            xmlHttp.onreadystatechange=function(){
                if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
                    document.getElementById("div_provincia").innerHTML=xmlHttp.responseText;
                }
            }
            xmlHttp.open("GET","ajaxprovincia?region="+document.getElementById("region").value+"&Arbitro=aqui",true);
            xmlHttp.send(null);



        }
    </script>
    <script type="text/javascript">
        function buscar_distrito(){

            var xmlHttp;
            try{
                xmlHttp=new XMLHttpRequest();
            }
            catch (e){
                try{
                    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP"); 
                }
                catch (e){
                    try{
                        xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    catch (e){
                        alert("Tu explorador no soporta AJAX.");
                        return false;
                    }
                }
            }
            xmlHttp.onreadystatechange=function(){
                if(xmlHttp.readyState== 4 && xmlHttp.readyState != null){
                    document.getElementById("div_distrito").innerHTML=xmlHttp.responseText;
                }
            }
            xmlHttp.open("GET","ajaxdistrito?region="+document.getElementById("region").value+"&provincia="+document.getElementById("provincia").value+"&cualquiercosa",true);
            xmlHttp.send(null);


        }
    </script>



</head>
<body class="cnt-home">

    <?php include('cabecera.php') ?>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#table').DataTable();
            $('select').addClass('mdb-select');
            $('.mdb-select').material_select();
        });
    </script>

    <div class="body-content outer-top-xs">
        <div class='container'>




            <div class='row single-product'>
                <div class="col-xs-12 col-sm-12 col-md-12 homebanner-holder">
                    <div class='col-xs-12 col-sm-12 col-md-12'>








                        <section class="section wow fadeInUp new-arriavls">
                            <h3 class="section-title">
                                <div class='col-xs-6 col-sm-12 col-md-12' align="left">Cargar Articulos</div>
                                <!-- <div class='col-xs-6 col-sm-12 col-md-12' align="right"><? echo $publicaciones ?> Publicaciones disponibles</div> -->
                                <div style="clear:both"></div>
                            </h3>


                            <div class="formulario">
                                <form action="procesa" method="post" enctype="multipart/form-data" class="register-form outer-top-xs" role="form">

                                    <div class="form-group">
                                        <br>
                                        <input type="hidden" name="Arbitro" value="nuevo_producto">
                                        <input type="hidden" name="cod_usuario" value="<? echo $cod_usuario ?>">
                                    </div>


                                    <div class="form-group">

                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>

                                        <div style="float:left;width: 42%;">
                                            <label class="info-title">Nombre del articulo<span>*</span></label>
                                            <input required id="nombre" name="nombre" type="text" class="form-control unicase-form-control text-input" >
                                        </div>
                                        <div style="float:left;width: 10%;"><p>&nbsp;</p></div>
                                        <div style="float:left;width: 42%;">
                                            <label class="info-title">Categoria<span>*</span></label>

                                            <select name="categoria"  id="categoria"  class="form-control unicase-form-control text-input" onchange="buscar_sub()">
                                                <option value="">Seleccione una categoria</option>
                                                <?
                                                $rs3 = mysql_query("SELECT * FROM categoria ORDER BY nombre_categoria asc", $link);  
                                                $counter3 = 0;
                                                if($rs3!="")
                                                    $counter3 = mysql_num_rows($rs3);
                                                for($i3=0;$i3<$counter3;$i3++){
                                                    echo "<option value='".mysql_result($rs3, $i3, 'cod_categoria')." '>".mysql_result($rs3, $i3, 'nombre_categoria')."</option>";
                                                }
                                                ?>
                                            </select>


                                        </div>
                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>
                                        <div style="clear:both"></div> 
                                        <div align="center"></div>
                                    </div>




                                    <div class="form-group" style="margin-top: -52px;"  id="div_sub">
                                    </div>


                                    <div class="form-group">
                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>
                                        <div style="float:left;width: 42%;">

                                            <div style="float:left;width: 48%;">
                                                <label class="info-title">Precio<span>*</span></label>
                                                <input required id="preciov" name="preciov" type="number" class="form-control unicase-form-control text-input" >
                                            </div>

                                            <div style="float:left;width: 3%;"><p>&nbsp;</p></div>

                                            <div style="float:left;width: 48%;">
                                                <label class="info-title">Tipo de Moneda<span>*</span></label>
                                                <select name="moneda" class="form-control unicase-form-control text-input" required>
                                                    <option value="">Seleccione una moneda</option>
                                                    <option value="S/">Soles</option>
                                                    <option value="$">Dolares</option>
                                                </select>
                                           </div>
                                            <div style="clear:both"></div> 
                                        </div>
                                        <div style="float:left;width: 10%;"><p>&nbsp;</p></div>
                                        <div style="float:left;width: 42%;">

                                            <div style="float:left;width: 48%;">
                                                <label class="info-title">Cantidad<span>*</span></label>
                                                <input required id="disponibilidad" name="disponibilidad" type="number" class="form-control unicase-form-control text-input" >
                                            </div>

                                            <div style="float:left;width: 3%;"><p>&nbsp;</p></div>

                                            <div style="float:left;width: 48%;">
                                                <label class="info-title">Tipo de Producto<span></span></label>
                                                <select name="calidad" class="form-control unicase-form-control text-input">
                                                    <option value="">Seleccione una calidad</option>
                                                    <option value="Nuevo">Nuevo</option>
                                                    <option value="Usado">Usado</option>
                                                </select>
                                            </div>

                                            <div style="clear:both"></div> 

                                        </div>
                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>
                                        <div style="clear:both"></div> 
                                        <div align="center"></div>
                                    </div>

                                    <div class="form-group">
                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>

                                        <div style="float:left;width: 30%;">
                                            <label class="info-title">Region</label>
                                            <select name="region" id="region" class="form-control unicase-form-control text-input" onchange="buscar_provincia()">
                                                <option value="">Seleccione una Region</option>
                                                <? 
                                                $rs = mysql_query("SELECT * FROM distrito  group by region order by region asc", $link);   
                                                for($i=0;$i<mysql_num_rows($rs);$i++){ 
                                                    echo "<option value='".mysql_result($rs, $i, "region")."''>".mysql_result($rs, $i, "region")."</option>";
                                                }
                                                ?>

                                            </select>
                                        </div>



                                        <div style="float:left;width: 2%;"><p>&nbsp;</p></div>

                                        <div style="float:left;width: 30%;">
                                            <label class="info-title">Provincia</label>
                                            <div id="div_provincia"></div>
                                        </div>




                                        <div style="float:left;width: 2%;"><p>&nbsp;</p></div>



                                        <div style="float:left;width: 30%;">
                                            <label class="info-title">Provincia</label>
                                            <div id="div_distrito"></div>

                                        </div>

                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>
                                        <div style="clear:both"></div> 
                                        <div align="center"></div>
                                    </div>

                                    <div class="form-group">

                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>
                                        <div style="float:left;width: 94%;">
                                            <label class="info-title">Características del producto <span></span></label>


                                            <div>

                                                <textarea id="txt-content" name="descripcion" class="form-control unicase-form-control text-input" rows="3" style="height:300px;width:100%;"></textarea>

                                            </div>






                                        </div>
                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>
                                        <div style="clear:both"></div> 
                                        <div align="center"></div>
                                    </div>


                                    <div class="form-group">
                                        <div style="float:left;width: 3%;"><p>&nbsp;</p> </div>
                                        <div style="float:left;width: 22%;" align="center">
                                            <label class="info-title">Foto</label>  <br>
                                            <input  type="file" accept="image/jpeg" id="fotoc1" name="foto1" accept="image" style="display:none;">
                                            <input  class="btn-upper btn btn-primary checkout-page-button" type="button" value="Ver Foto" onclick="document.getElementById('fotoc1').click();">
                                            <br><br>
                                            <div class="product-image" id="fotov1"></div> 
                                            <script>
                                                function archivo(evt) {
                                                    var files = evt.target.files;
                                                    for (var i = 0, f; f = files[i]; i++) {
                                                        if (!f.type.match('image.*')){
                                                            continue;
                                                        }
                                                        var reader = new FileReader();
                                                        reader.onload = (function(theFile) {
                                                          return function(e) {
                                                            document.getElementById("fotov1").innerHTML = "<img src='"+e.target.result+"' width='100%' height='auto' id='fotom1' name='fotom1' >";};
                                                        })(f);
                                                        reader.readAsDataURL(f);
                                                    }
                                                }
                                                document.getElementById('fotoc1').addEventListener('change', archivo, false);
                                            </script>
                                        </div>
                                        <div style="float:left;width: 2%;"><p>&nbsp;</p></div>
                                        <div style="float:left;width: 22%;" align="center">
                                            <label class="info-title">Foto</label><br>
                                            <input  type="file" accept="image/jpeg" id="fotoc2" name="foto2" accept="image" style="display:none;">
                                            <input id="bfoto1"  class="btn-upper btn btn-primary checkout-page-button" type="button" value="Ver Foto" onclick="document.getElementById('fotoc2').click();">
                                            <br><br>
                                            <div class="product-image" id="fotov2"></div> 
                                            <script>
                                                function archivo(evt) {
                                                    var files = evt.target.files;
                                                    for (var i = 0, f; f = files[i]; i++) {
                                                        if (!f.type.match('image.*')){
                                                            continue;
                                                        }
                                                        var reader = new FileReader();
                                                        reader.onload = (function(theFile) {
                                                          return function(e) {
                                                            document.getElementById("fotov2").innerHTML = "<img src='"+e.target.result+"' width='100%' height='auto' id='fotom2' name='fotom2' >";};
                                                        })(f);
                                                        reader.readAsDataURL(f);
                                                    }
                                                }
                                                document.getElementById('fotoc2').addEventListener('change', archivo, false);
                                            </script>
                                        </div>
                                        <div style="float:left;width: 2%;"><p>&nbsp;</p></div>
                                        <div style="float:left;width: 22%;" align="center">
                                            <label class="info-title">Foto</label><br>
                                            <input  type="file" accept="image/jpeg" id="fotoc3" name="foto3" accept="image" style="display:none;">
                                            <input  class="btn-upper btn btn-primary checkout-page-button" type="button" value="Ver Foto" onclick="document.getElementById('fotoc3').click();">
                                            <br><br>
                                            <div class="product-image" id="fotov3"></div> 
                                            <script>
                                                function archivo(evt) {
                                                    var files = evt.target.files;
                                                    for (var i = 0, f; f = files[i]; i++) {
                                                        if (!f.type.match('image.*')){
                                                            continue;
                                                        }
                                                        var reader = new FileReader();
                                                        reader.onload = (function(theFile) {
                                                          return function(e) {
                                                            document.getElementById("fotov3").innerHTML = "<img src='"+e.target.result+"' width='100%' height='auto' id='fotom3' name='fotom3' >";};
                                                        })(f);
                                                        reader.readAsDataURL(f);
                                                    }
                                                }
                                                document.getElementById('fotoc3').addEventListener('change', archivo, false);
                                            </script>
                                        </div>
                                        <div style="float:left;width: 2%;"><p>&nbsp;</p></div>
                                        <div style="float:left;width: 22%;" align="center">
                                            <label class="info-title">Foto</label><br>
                                            <input  type="file" accept="image/jpeg" id="fotoc4" name="foto4" accept="image" style="display:none;">
                                            <input  class="btn-upper btn btn-primary checkout-page-button" type="button" value="Ver Foto" onclick="document.getElementById('fotoc4').click();">
                                            <br><br>
                                            <div class="product-image" id="fotov4"></div> 
                                            <script>
                                                function archivo(evt) {
                                                    var files = evt.target.files;
                                                    for (var i = 0, f; f = files[i]; i++) {
                                                        if (!f.type.match('image.*')) {
                                                            continue;
                                                        }
                                                        var reader = new FileReader();
                                                        reader.onload = (function(theFile){
                                                          return function(e) {
                                                            document.getElementById("fotov4").innerHTML = "<img src='"+e.target.result+"' width='100%' height='auto' id='fotom4' name='fotom4' >";};
                                                        })(f);
                                                        reader.readAsDataURL(f);
                                                    }
                                                }
                                                document.getElementById('fotoc4').addEventListener('change', archivo, false);
                                            </script>
                                        </div>
                                        <div style="float:left;width: 3%;"><p>&nbsp;</p></div>
                                        <div style="clear:both"></div> 
                                        <div align="center"></div>
                                    </div>

                                    <div class="form-group" align="center">
                                        <button type="submit" id="guardando"  class="btn-upper btn btn-primary checkout-page-button" onclick="guardando_cab()">
                                            Guardar
                                        </button>

                                        <script type="text/javascript">
                                            function guardando_cab(){
                                                var nombre  = document.getElementById("nombre").value;
                                                var preciov = document.getElementById("preciov").value;
                                                var disponibilidad  = document.getElementById("disponibilidad").value;

                                                if (nombre == "" || preciov == "" || disponibilidad == ""){
                                                    document.getElementById("guardando").innerHTML = 'Guardar';
                                                }else{
                                                    document.getElementById("guardando").innerHTML = 'Espere un Momento';
                                                }
                                            }

                                        </script>
                                    </div>

                                </form>
                            </div>
                        </section>


                        <br> 


                        <section class="section wow fadeInUp new-arriavls">
                            <h3 class="section-title">Mis Publicaciones</h3>
                            <div class="formulario">

                                <br>
                                <table width="100%" id="table" class="table table-striped table-responsive w-auto" >
                                    <thead style="background-color: #111; color: #fff;">
                                        <tr align="center" border="1px">
                                            <td style="padding: 20px;" width="15%" >Nombre</td>
                                            <td style="padding: 20px;" width="19%">Precio  / Cantidad</td>
                                            <td style="padding: 20px;" width="18%">Categoria</td>
                                            <td style="padding: 20px;" width="18%">Subcategoria</td>
                                            <td style="padding: 20px;" width="20%" style="width: 20% padding: 8px;">Foto</td>
                                            <td style="padding: 20px;" width="10%"></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?$rs2 = mysql_query("SELECT * FROM publicacion WHERE cod_usuario='$cod_usuario' ORDER BY cod_publicacion DESC", $link);  
                                        $counter2 = 0;
                                        if($rs2!="")
                                            $counter2 = mysql_num_rows($rs2);
                                        for($i2=0;$i2<$counter2;$i2++)
                                        { 

                                            if (mysql_result($rs2, $i2, 'categoria') == ""){
                                                $categoria = "";
                                            }else{
                                                $rs4 = mysql_query("SELECT * FROM categoria WHERE cod_categoria = ".mysql_result($rs2, $i2, 'categoria')."", $link);  
                                                for($i4=0;$i4<mysql_num_rows($rs4);$i4++)
                                                    {$categoria = mysql_result($rs4, $i4, 'nombre_categoria');}
                                            }


                                            if (mysql_result($rs2, $i2, 'sub_categoria') == ""){
                                                $sub_categoria = "";
                                            }else{
                                                $rs5 = mysql_query("SELECT * FROM categoria_hijo WHERE cod_categoria_hijo = ".mysql_result($rs2, $i2, 'sub_categoria')."", $link);  
                                                for($i5=0;$i5<mysql_num_rows($rs5);$i5++)
                                                    {$sub_categoria = mysql_result($rs5, $i5, 'nombre_categoria_hijo');}
                                            }

                                            echo "<tr style='padding: 20px;'>";
                                            echo "<td style='padding: 20px;'>".mysql_result($rs2, $i2, 'nombre')."</td>";
                                            echo "<td style='padding: 20px;' align='right'>".mysql_result($rs2, $i2, 'moneda')." ".mysql_result($rs2, $i2, 'preciov')."<br>".mysql_result($rs2, $i2, 'disponibilidad')."</td>";
                                            echo "<td style='padding: 20px;' align='right'>".$categoria."</td>";
                                            echo "<td style='padding: 20px;' align='justify'>".$sub_categoria."</td>";
                                            echo "<td style='padding: 20px;'><img src=".mysql_result($rs2, $i2, 'foto1')."  width='100%'></td>";
                                            echo '<td style="padding: 20px;">

                                            <a class="btn btn-block btn-danger" href="procesa?Arbitro=eliminar_publicacion&cod_publicacion='. mysql_result($rs2, $i2, "cod_publicacion") .'" style="height: 30px;width: 30px;border-radius: 25px; padding: 1px 1px; font-size: 18px;" title="Eliminar">X</a>

                                            </td>';
                                            echo "</tr>";
                                        }?>
                                    </tbody>
                                </table>


                            </div>
                        </section>

                        <br> 

                    </div>
                </div>

            </div>
        </div>
    </div>  

    <?php include('footer.php') ?>
    <script>
        $(function (){
            $("#table").DataTable();
            $('#example2').DataTable({"paging": true, "lengthChange": false, "searching": false, "ordering": true, "info": true, "autoWidth": false});
        });
    </script>
</body>
</html>