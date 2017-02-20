<?php
$datos=mysqli_query($conexion,"SELECT * FROM personas WHERE cedula='{$_SESSION['user_fundacedis']}'");
$data=mysqli_fetch_array($datos);
?>