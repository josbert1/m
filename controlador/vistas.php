<?php
if (isset($_GET['vista'])) {
if ($_GET['vista']=="login") {
	
	include 'modelo/'.$_GET['vista'].'Modelo.php';
    include 'vista/'.$_GET['vista'].'.php';
}else{
if (file_exists('vista/'.$_GET['vista'].'.php')) {
	include 'vista/head.php';
	if ($_GET['vista']=='inicio' OR $_GET['vista']=='diplomado')  {
		include 'vista/slide.php';
		include 'vista/navbar.php';
		}elseif ($_GET['vista']=='registro' OR $_GET['vista']=='apostillar') {
			
		}	
	include 'modelo/'.$_GET['vista'].'Modelo.php';
    include 'vista/'.$_GET['vista'].'.php';
    include 'vista/footer.php';
}else{

include 'vista/404';
}
}
}else{
header("location: inicio");
}
?>