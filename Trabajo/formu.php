
<?php


require_once "conexion.php"; 
	
$smt = $conn->prepare("SELECT * FROM jaime WHERE id"); 
$smt -> execute();

$resultado= $smt->fetchall();
$conn=null;

echo"<pre>";
print_r($resultado);
echo "</pre>";
 

      


?>