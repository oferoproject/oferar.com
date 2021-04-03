<!DOCTYPE html>
<html lang="en">


<head>

  <?php include('claves.php') ?>

</head>
<body class="cnt-home">

  <?php include('cabecera.php') ?> 
  <div ><br></div>



  <div class="container">
    <div class="col-md-3 col-sm-3"><p>&nbsp;</p></div>

    <div class="col-md-6 col-sm-6 sign-in-page">
      <div class="row">     
        <div class="sign-in">
          <h4 class="">¿Olvidaste tu contraseña?</h4>
          <p class="">Hola ingresa tu correo y te enviaremos tu contraseña.</p>


          <form action="proceso_olvido_resp" method="post" >
            <input type="email" class="form-control unicase-form-control text-input" name="nombre" id="nombre" maxlength="255" autocomplete="off" placeholder="Correo con el que se registró"  required="">
            <br><br>
            <div class="form-group has-feedback">
              <button  type="submit" class="btn-upper btn btn-primary checkout-page-button" name="registro" >&nbsp;&nbsp;&nbsp;&nbsp;Enviar al correo &nbsp;&nbsp;</button>


            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  

  <p>&nbsp; </p>
  <div ><br></div>
  <? include('footer.php') ?>





</body>
</html>
<!-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>olvido</title>

  <link rel="shortcut icon" href="images/icono.ico"/>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  
  <link href="assets/css/jquery-ui.css" rel="stylesheet">
  

  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  
  <link href="assets/css/owl.theme.css" rel="stylesheet">

  <link href="citycab.css" rel="stylesheet">
  <link rel="shortcut icon" href="images/icono.ico"/>
  <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/jquery-ui.css" rel="stylesheet">
  <link href="assets/css/owl.theme.css" rel="stylesheet">
  <link href="citycab.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Montserrat+Alternates' rel='stylesheet' type='text/css'>
</head>

<body style="background-color: #070677;">
  <div class="page-wrapper" id="page-top" style="background-color: #070677;">
    <section id="book-taxi" style="background-color: #070677;">
      <div class="container">
        <div class="row">
          <div class="col-md-6" style="width:100%">
            <div>
              <div align="center">
                <h3 class="header book-now" style="color: #fff;"><br>

                                   Recuperacion de password
                </h3>
              </div>
              <div style="text-align:center">
               <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                  <td align="center">
                    <div class="form-group"><br> 

                      <div class="form-group has-feedback">

                       <form action="proceso_olvido_resp" method="post" >              
                        <input type="email" class="form-control" name="nombre" id="nombre" maxlength="255" autocomplete="off" placeholder="Correo con el que se registró" style=" border-radius: 10px; background:#09084c; font-size:14px; padding:18px; color: #fff; width: 100%;" required="">
                        <br><br>
                        <div class="form-group has-feedback">
                          <button  type="submit" class="btn btn-primary" name="registro" style="border-radius: 10px; background:#09084c; font-size:14px; padding:18px; color: #fff; border-color: #fff;">
                            &nbsp;&nbsp;&nbsp;&nbsp;Enviar al correo &nbsp;&nbsp;
                            <span class="glyphicon glyphicon-share-alt"></span>
                          </button>
                        </form>
                        <br><br>
                        <a href="login" class="btn btn-primary" style="border-radius: 10px; background:#09084c; font-size:14px; padding:18px; color: #fff; border-color: #fff;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regresar&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
                      </div>

                    </div> 
                    <br> <br>
                  </td>
                </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                </tr>
                <tr>
                  <td align="center">&nbsp;</td>
                </tr>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>    
</div>
</body>
</html> -->

