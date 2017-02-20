<div class="main-header" id="house">
		<!--header-top-->
			<div class="header-top cd-auto-hide-header">
			  <div class="container">
					 <nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<img src="<?php echo $archivos; ?>images/cd-logo.svg" alt=" " />
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						  <div class="top-menu">
							<nav class="menu menu--francisco">
									<ul class="nav navbar-nav menu__list">
										<li class="menu__item menu__item<?php 
										if (@$_GET['vista']!='inicio'){
											echo "";
											}else{
											echo '--current';
											}

										?>

										">
											<a <?php 
											echo "href='".$archivos."inicio'";
											?> class="menu__link">
												<span class="menu__helper">Inicio</span>
											</a>
										</li>

										<?php 
										if ($_GET['vista']=='perfil') {
										}else{
										echo '<li class="menu__item dropdown">
						          	<a class="dropdown-toggle menu__link" href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						          <span class="menu__helper">Información<span class="caret"></span></span>
						          </a>
						          <ul class="dropdown-menu idioma" aria-labelledby="dropdownMenu2">
						            <li><a href="#fundacedis" class="scroll">Sobre Nosotros</a></li>
						            <li><a href="#equipo" class="scroll">Equipo Fundacedis</a></li>
						            <li><a href="#diplo" class="scroll">Diplomados</a></li>
						            <li><a href="#clients" class="scroll">Aliados Comerciales</a></li>
						          </ul>
						          </li>';
										}

										?>
											<?php
											if (isset($_SESSION['user_fundacedis'])) {
											echo '
											<li class="menu__item dropdown">
						          	<a class="dropdown-toggle menu__link" href="#" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
						          <span class="menu__helper">Perfil<span class="caret"></span></span>
						          </a>
						          <ul class="dropdown-menu idioma" aria-labelledby="dropdownMenu2">
						            <li><a href="perfil">Ir a Perfil</a></li>
						            <li><a href="cerrar-sesion">Cerrar Sesión</a></li>
						          </ul>
						          </li>	';
											}else{
											echo '
						          <li class="menu__item">
											<a href="'.$archivos.'iniciar-sesion";
												class="menu__link">
												<span class="menu__helper">Iniciar Sesión</span>
											</a>
										</li>';
											}
												?>
									</ul>
								</nav>
							</div>
					</div>
					<!-- /.navbar-collapse -->
				</nav>

			   <div class="clearfix"></div>
			</div>
	</div>
<!--//header-top-->