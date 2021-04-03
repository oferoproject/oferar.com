
<div class="main-header" style="background-color: #ebebeb; width: 100%; margin-left: 0px; position: relative;">
  <div class="container" style="margin-top: -5px; padding-top: 20px; z-index: 100; position: fixed; background-color: #ebebeb; width: 100%;position: relative;">
    <div class="row">

      <div class="col-xs-12 col-sm-12 col-md-2 logo-holder" align="center"> 

        <div class="logo" align="center"> 
          <a href="./" > <img src="<? echo mysql_result(mysql_query("SELECT * FROM imagen", $link), 1, 'foto'); ?>" width="80%"> </a> 
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder" align="center"> 
        <div class="search-area">
          <form>


            <input id="buscador" class="search-field" placeholder="Buscar"  style="width: 75%" />
            <a class="search-button"  href="#" onclick="redireccionar(); return false;" style="width: 10%"></a>


            <script>
              function redireccionar(){
                var busca = document.getElementById("buscador").value;
                if (busca != ""){
                  location.href= "buscando?busqueda="+busca;
                }
              }
            </script>



          </form>
        </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-3 menu-superior" align="center" style="margin-top: 13px;">
        <!-- <div class="collapse navbar-collapse" id="navbarSupportedContent"> -->
          <?php if($usuario==''){?>
          <a href="login" style="color: #000; " style="left: 5px;"><i class="fa fa-user" style="color: #000; "></i> <span>Ingresar</span></a>&nbsp;&nbsp;
          <?php }else{ ?>
          <a href="micuenta" style="color: #000; " style="left: 5px;"><i class="fa fa-user" style="color: #000; "></i> <span><?php echo $nombre ?></span></a>&nbsp;&nbsp;
          <?php }?>
          <?php if($usuario==''){?>
          <a href="registro" style="color: #000; "><i class="fa fa-file-text" style="color: #000; "></i> <span>¿Quieres Vender?</span></a>
          <?php }else{ ?>
          <a href="cerrar?usuario=<? echo $usuario ?>" style="color: #000; "><i class="fa fa-close" style="color: #000; "></i> <span>Salir</span></a>
          <?php }?>
          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true" style="margin-left: 4px;margin-top: 15px;">
            <li class="icon-user" style="margin-right: 25px;">

            </li>
            <li class="icon-form">

            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
