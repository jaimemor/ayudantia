<?php
$variable="hola";
$alumnos= ['cristobal' => 5.2, 'diego' => 5.5, 'jaime' => 7.0];
$ramo= "jasdja";
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

<table style="border:solid 1px #000;">
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
</body>
</html>