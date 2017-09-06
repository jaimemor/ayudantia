<?php
require_once "conexion.php"; //llama todo lo de conexion .php

$smt = $conn->prepare("SELECT * FROM alumnos"); //consulta a la bd
$smt -> execute(); //ejecuta

$resultado= $smt->fetchall();
$conn=null;// se cierra bd
echo"<pre>";
//print_r($resultado);//muestra arreglo
echo "</pre>"
 ?>
 
 <html>
 <body>
  <table style=>
	<tr>
		<td>ID</td>
		<td>Alumnos</td>
		<td>Nota</td>
	</tr> 
	<?php foreach ($resultado as $key => $value): ?> 
	<tr> 
		<td><?php echo $value['id'];?></td>
		<td><?php echo $value['nombre']?></td>
		<td><?php echo $value['nota']?></td>
	</tr>
	<?php endforeach ?>
	</table>
 </body>
 
 
 </html>