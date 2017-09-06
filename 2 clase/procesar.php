<?php


if(isset($_REQUEST['alumno_form'])){
$nombre=$_REQUEST['nombre'];
$apellido=$_REQUEST['apellido'];
$rut=$_REQUEST['rut'];

}else{
	echo "gg";
}

if(isset($_REQUEST['ramo_form'])){
$ramo=$_REQUEST['ramo'];
$nota=$_REQUEST['nota'];

}else{
	echo "gg2";
}
?>