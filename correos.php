<?


if($_REQUEST['tipo']=='nuevo_usuario'){

    $correo = $_REQUEST['correo'];
    $clave = $_REQUEST['clave'];

    $asunto = "Registro Usuario";
    $header = "From: registro@ocasion.com.pe\n";
    $header .= "Content-Type: text/html\n";
    $mensaje = '
    <html>
    <head>
    <title>Registro ocasion.com.pe</title>
    </head>

    <body>

    <div style="float:left;width: 10%;">
    <p>&nbsp;</p>
    </div>
    <div style="width: 80%;text-align:justify">
    <div align="center"><img src="http://ocasion.com.pe/assets/images/logo.png" alt="ocasion.com.pe" />
    </div><br><br>


    <h1>Bienvenido a ocasion.com.pe</h1>
    Felicidades, usted se ha registrado con éxito en ocasion.com.pe<br><br>

    Estos datos le permitirá ingresar al panel de control para revisar su cuenta, tambien podra ingresar para poder cargar sus servicios o productos.

    Acceso para ver su cuenta: <a href="http://www.ocasion.com.pe/login"> www.ocasion.com.pe/login</a> <br>
    <strong>Usuario: </strong>&nbsp;&nbsp; '.$correo.' <br>
    <strong>Contraseña: </strong> '.$clave.'




    <br><br>

    Gracias por Confiar y Usar nuestros servicios, recuerda que  tu Seguridad es lo mas  Importante para nosotros  por eso debes resguardar tus Datos Personales. <br><br>
    Cualquier duda o comentarios ponerte en contacto con nostro a travez de nuestro portal Web  www.ocasion.com.pe  <br><br>

    </div>
    <div align="center">
    <br><br>
    <img src="http://ocasion.com.pe/assets/images/logo.png" alt="ocasion.com.pe" height="" width="150" />
    <br>
    </div>
    </div>
    <div style="float:left;width: 10%;">
    <p>&nbsp;</p>
    </div>
    <div style="clear:both">
    </div>
    </body>

    </html>
    ';
    mail($correo,$asunto,$mensaje,$header);

    echo "correo ok";
    echo "<br>".$correo;
    echo "<br>".$clave;
}

?>