<?php
$usuario = "root";
$clave= "";
$bd_nombre= "multi";
$host = "localhost";

$conn = new PDO("mysql:host=$host;dbname=$bd_nombre", $usuario, $clave);
    //$conn=null;//cerrar conexion
    
?>