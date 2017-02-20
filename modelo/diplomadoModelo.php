<?php
$consulta=mysqli_query($conexion,"SELECT * FROM diplomados WHERE id='{$_GET['id']}'");
$diplomados=mysqli_fetch_array($consulta);

?>