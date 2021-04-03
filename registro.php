<!DOCTYPE html>
<html lang="en">


<head>

	<?php include('claves.php') ?>

</head>
<body class="cnt-home">

	<?php include('cabecera.php') ?> 
	<div ><br></div>


	<?php if(@$_GET['mensaje']=='ok'){ ?> 
	<div class="alerta">
		<div  class="col-lg-1 col-xs-1"><p>&nbsp;</p></div>
		<div class="col-lg-10 col-xs-10">
			<div> 
				<div class="alert alert-success alert-dismissible alerta" align="center">
					Se enviaron los datos de forma correcta.
					<br>
					Registro Efectivo
					<br>
					<h3> En los próximos minutos le enviaremos un correo electrónico a la cuenta <? echo $_GET['correo']; ?> con la contraseña temporal de acceso. </h3>
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-xs-1"><p>&nbsp;</p></div>
		<div style="clear:both"><!-- cierre del div --></div> 
		<div align="center"></div>
	</div>
	<?php } ?>

	<?php if(@$_GET['mensaje']=='no'){ ?> 
	<div class="alerta">
		<div  class="col-lg-1 col-xs-1"><p>&nbsp;</p></div>
		<div class="col-lg-10 col-xs-10">
			<div> 
				<div class="alert alert-warning alert-dismissible alerta" align="center">

					Usuario invalido o no registrado
				</div>
			</div>
		</div>
		<div class="col-lg-2 col-xs-1"><p>&nbsp;</p></div>
		<div style="clear:both"><!-- cierre del div --></div> 
		<div align="center"></div>
	</div>
	<?php } ?>

	<div class="container">

		<div class="col-md-3 col-sm-3"><p>&nbsp;</p></div>

		<div class="col-md-6 col-sm-6 sign-in-page">
			<div class="row">
				<!-- Sign-in -->			


				<div class="create-new-account">
					<h4 class="checkout-subtitle">Crear Nueva Cuenta</h4>
					<p class="text title-tag-line">Si eres cliente nuevo y aún no te haz registrado puedes  hacerlo ahora.</p>
					
					<form action="proreg" method="post" class="register-form outer-top-xs" role="form">
						<div class="form-group">
							<label class="info-title">Nombre <span>*</span></label>
							<input required name="nombre" type="text" class="form-control unicase-form-control text-input" >
							<input type="hidden" name="Arbitro" value="nuevo_usuario">
						</div>
						<div class="form-group">
							<label class="info-title">Apellido <span>*</span></label>
							<input required name="apellido" type="text" class="form-control unicase-form-control text-input" >
						</div>
						<div class="form-group">
							<label class="info-title">Teléfono <span>*</span></label>
							<input required name="telefono" type="number" class="form-control unicase-form-control text-input" >
						</div>
						<div class="form-group">
							<label class="info-title">Email <span>*</span></label>
							<input required name="correo" type="email" class="form-control unicase-form-control text-input" >
						</div>
						

						<button type="submit" class="btn-upper btn btn-primary checkout-page-button">Guardar</button>
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