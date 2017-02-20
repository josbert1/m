
 <!-- //Line Slider -->
	 <div class="top_banner">
		<!-- SVG Arrows -->
		<div class="svg-wrap">
			<svg width="64" height="64" viewBox="0 0 64 64">
				<path id="arrow-left" d="M46.077 55.738c0.858 0.867 0.858 2.266 0 3.133s-2.243 0.867-3.101 0l-25.056-25.302c-0.858-0.867-0.858-2.269 0-3.133l25.056-25.306c0.858-0.867 2.243-0.867 3.101 0s0.858 2.266 0 3.133l-22.848 23.738 22.848 23.738z">
			</svg>
			<svg width="64" height="64" viewBox="0 0 64 64">
				<path id="arrow-right" d="M17.919 55.738c-0.858 0.867-0.858 2.266 0 3.133s2.243 0.867 3.101 0l25.056-25.302c0.858-0.867 0.858-2.269 0-3.133l-25.056-25.306c-0.858-0.867-2.243-0.867-3.101 0s-0.858 2.266 0 3.133l22.848 23.738-22.848 23.738z" />
			</svg>
		</div>
		<div class="sleekslider">
	<!-- Slider Pages -->
		<?php
		if ($_GET['vista']=='diplomado') {
		$informacion=mysqli_query($conexion,"SELECT * FROM diplomados WHERE id='{$_GET['id']}'");
		}else{
		$informacion=mysqli_query($conexion,"SELECT * FROM informaciones");
		}
		echo "<style type='text/css'>";
		foreach ($informacion as $value) {
		echo ".sleekslider .bg-".$value['id']." { background-image: url('".$archivos."".$value['imagen']."'); }";
		}
		echo "</style>";

		$weqwasd=mysqli_query($conexion,"SELECT * FROM informaciones");
		while ($data=mysqli_fetch_array($weqwasd)) {
		if ($data['id']=="1") {
		$activo="active";
		}else{
		$activo='';
		}
		if ($data['info']!='') {
		$contenido='<p>'.$data['info'].'</p>';
		$id=$data['id'];
		}else if($_GET['vista']=='diplomado') {
		$contenido='<p>'.$value['nombre'].'</p>';
		$id=$value['id'];
		}else{
		$contenido='';
		$id=$data['id'];
		}
		echo '<div class="slide bg-'.$id.' '.$activo.'">
				<div class="slide-container">
					<div class="slide-content">
					'.$contenido.'
					</div>

				</div>
			</div>';
		}

		?>

		</div>

      <!--welcome-->
 </div>

        <!-- /Line Slider -->
	</div>