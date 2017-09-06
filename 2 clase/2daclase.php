<?php
//formulario
//form debe tener nombre apellido rut
//otro form ramo nota
?>
<!DOCTYPE html>
<html>
<head>
	<title>formulario Ayudantia</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 well">
			<form action="procesar.php" method="POST">
			<center>
			<br>Nombre<input type="text" id="nombre" ></br>
			<br>Apellido<input type="text" id="apellido"></br>
			<br>Rut<input type="text" name="rut"></br>
			<button type="submit" class="btn-success">Enviar tu sms amigo!</button>
			</center>
			</form>
		</div>
		<div class="col-md-6 well">
			
			<form action="procesar.php" method="POST">
			<center>
			<br>Ramo<input type="text" id="ramo" ></br>
			<br>Nota<input type="text" id="nota"></br>
			<button type="submit" class="btn-danger">Enviar tu sms amigo!</button>
			</center>
			</form>
		</div>
		
	</div>

</div>






</center>
</form>


<script type="text/javascript" scr="js/javascript"></script>
<script type="text/javascript" scr="js/bootstrap.js"></script>>
</body>
</html>