<?php
include 'conexion.php';
if (isset($_POST['sesion'])) {
$cedula=trim(addslashes(mysqli_real_escape_string($conexion,$_POST['cedula'])));
$clave=sha1($_POST['contra']);
$consulta=mysqli_query($conexion,"SELECT cedula,clave,activo FROM personas WHERE cedula='$cedula' AND clave='$clave'");
if (mysqli_affected_rows($conexion)==1) {
$data=mysqli_fetch_array($consulta);
if ($data['activo']=='no') {
echo "2";
}else{
$_SESSION['user_fundacedis']=$cedula;
echo "1";
}
}else{
echo "2";
}
}
?>