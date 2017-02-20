<?php
$consulta=mysqli_query($conexion,"SELECT * FROM fundacion");
while ($fundacion=mysqli_fetch_array($consulta)) {
	$tipo[]=$fundacion['tipo'];
	$contenido[]=$fundacion['contenido'];
}
$consulta2=mysqli_query($conexion,"SELECT * FROM diplomados");
?>