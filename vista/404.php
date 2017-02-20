<div class="page-container page-container-responsive">
    <div class="row space-top-8 space-8 row-table">
        <div class="col-5 col-middle">
          <h1 class="text-jumbo text-ginormous">Oops! 404</h1>
          <h2 class="_404-h1">
No podemos encontrar la página que estás buscando.</h2>
<br>
          <h6 class="_404-h6">"<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"</h6>
          <br>
          <ul class="list-unstyled">
            <li>La siguiente dirección no existe!</li>
            <li><a href="/">Inicio</a></li>
            <li><a href="/registro">Registro</a></li>
            <li><a href="/diplomado">Diplomado</a></li>
          </ul>
        </div>
        <div class="col-5 col-middle text-center">
          <img src="<?php echo $archivos;?>/images/404.svg"; " width="313" height="428" alt="Girl has dropped her ice cream.">
        </div>
      </div>
    </div>ss