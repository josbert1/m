<title>Fundacedis : Inicio</title>
<!--/script-->
<section id="fundacedis">
<div class="white">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="cushion pad-left">
                    <h1>Historia</h1>

                    <p class="text-justify">CEDIS fue creada en 2011 por un grupo de profesionales con la finalidad de difundir la enseñanza profesional de estudios universitarios a nivel de pregrado o postgrado y programas de formación, capacitación, así como desarrollar proyectos de investigación.
                    </p>
                </div><!-- /.cushion-lg -->
            </div>
            <div class="col-md-6">
                <div class="cushion">
                	<img alt="" class="img-responsive" src="<?php echo $archivos; ?>images/clinic-history.png" style="margin: 0 auto;">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="v2-workflow">
    <div class="container">
        <div class="mwidth">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-push-6">
                    <img src="<?php echo $archivos; ?>images/eye.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6">
                    <h1><?php echo $tipo[0];?></h1>
                    <br>
                    <p class="text-justify"><?php echo $contenido[0];  ?></p>
                </div>
            </div>

            <div class="row next">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <img src="<?php echo $archivos; ?>images/notepad.png" class="img-responsive">
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h1><?php echo $tipo[1]; ?></h1>
                    <br>
                    <p class="text-justify"><?php echo $contenido[1]; ?></p>
                </div>
            </div>

            
        </div>
    </div>
</div>	
</section>

<section class="testimonials" id="equipo">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1 text-xs-center">
        <img class="section-icon" src="<?php echo $archivos; ?>images/folder.png" alt="Testimonial icon">
      
        <h3 class="section-header">Equipo Fundacedis</h3>
      </div>
    </div>
    <div class="row same_height">
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/team.png" alt="Dan willoughby">
          <div>
            <p class="testimonial-name">Luis Tesorero</p>
            <p class="muted-caps-header">Desarrollador Back-end</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/nurse.png" alt="Adam toren">
          <div>
            <p class="testimonial-name">Maria Vargas</p>
            <p class="muted-caps-header">Presidenta Fundacedis Centro</p>
          </div>
        </div>
      </div>
            <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/nurse-1.png" alt="Adam toren">
          <div>
            <p class="testimonial-name">Ysrael Vire</p>
            <p class="muted-caps-header">Presidente Fundacedis Oriente</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/team.png" alt="Dan willoughby">
          <div>
            <p class="testimonial-name">Josbert Hernandez</p>
            <p class="muted-caps-header">Desarrollador Front-end</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="diplo" id="diplo">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-md-10 col-md-offset-1 text-xs-center">
	        <img class="section-icon" src="<?php echo $archivos; ?>images/diploma.png" alt="Testimonial icon">
	      
	        <h3 class="section-header">Diplomados disponibles </h3>
	        <br>
	      </div>
			<div class="col-md-10 col-md-offset-1">
				<div class="diplomados-list owl-carousel owl-theme">
				    <!--Loop-->
				    <?php
				    while ($diplomados=mysqli_fetch_array($consulta2)) {
				    echo ' <div class="item">
						<figure class="effect-ruby">
							<img src="'.$diplomados['baner'].'" alt="img13">
							<figcaption>
								<h2>'.$diplomados['nombre'].'</h2>
								<a href="diplomado/'.strtolower(UrlAmigable($diplomados['nombre'])).'-'.$diplomados['id'].'">View more</a>
							</figcaption>			
						</figure>
					</div>';
				    }
					?>
				</div>
			</div>
		</div>
	</div>
</section>

   <section id="clients">
      <div class="container-fluid">
          <div class="row animate-this">
          <div class="col-sm-12 col-md-10 col-md-offset-1 text-xs-center">
          <img class="section-icon" src="images/monitor.png" alt="Testimonial icon">
        
          <h3 class="section-header">Aliados comerciales </h3>
          <br>
        </div>
      <div class="col-twelve col-md-10 col-md-offset-1">

        <div class="client-lists owl-carousel owl-theme">
            <div><a title="Fundación Universidad de Carabobo"><img src="images/fundauc.png"></a></div>
        </div>
        
      </div> <!-- end col-twelve -->
    </div> <!-- end row -->
</div>
   </section> <!-- end clients -->

<script type="text/javascript">
	jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			/* Configuracion */
  				$('.diplomados-list').owlCarousel({
				    loop:false,
            nav: true,
				    margin:10,
				    autoplay:true,
    				autoplayTimeout:4000,
            responsiveClass:true,
				    responsive:{
				        0:{
				            items:1
				        },
				        600:{
				            items:3
				        },
				        1000:{
				            items:3
				        }
				    }
				})

        $('.client-lists').owlCarousel({
            loop:false,
            nav: false,
            margin:10,
            autoplay:true,
            autoplayTimeout:4000,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:6
                }
            }
        })

			});
</script>
<!--Carousel-->