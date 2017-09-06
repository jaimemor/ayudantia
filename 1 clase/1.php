<?php
$variable="hola";
$alumnos= ['cristobal' => 5.2, 'diego' => 5.5, 'jaime' => 7.0];
$ramo= "jasdja";

$cursos=['bases de datos'=> 'cif-13', 'calculo I' => 'cif-33', 'algebra'=> 'cif333'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>documetn</title>
</head>
<body>
<h1><?php echo $variable;?></h1>

<?php
for ($i = 0;$i < 5;$i++){
	
echo "<h1>".$variable. "</h1>";
}

?>

<table style="border:solid 1px red;">
<tr>
	<td>alumnos</td>
	<td>Ramo</td>
	<td>nota</td>
	
	</tr>
	
	<?php foreach ($alumnos as $key => $value): ?>
	<tr>
		<td><?php echo $key;?></td>
		<td><?php echo $ramo;?></td>
		<td><?php echo $value;?></td>
	
	</tr>
	<?php endforeach?>
	</table>
<center><table style="border:solid 5px purple;">
	<tr>
	<td> ramo</td>
	<td>clave</td>
	</tr>
	<?php foreach ($cursos as $clave => $infram): ?>
	<tr>
	<td><?php echo $clave;?>
	<td><?php echo $infram;?>
	</tr>
	<?php endforeach?>
	</table></center>
	</body>
</html>