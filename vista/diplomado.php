  <title><?php echo $value['nombre'];?></title>
  <div class="v2-workflow">
    <div class="container">
        <div class="mwidth">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-push-6">
                    <center><img src="<?php echo $archivos; ?>images/contract.png" alt="Marketers, Meet Your New Best Friend"></center>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6">
                    <h1>Breve Descripción</h1>
                    
                    <br>
                    <p class="text-justify more"><?php echo $diplomados['descripcion']; ?></p>
                </div>
            </div>  
        </div>
    </div>
</div>

<div class="white">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
                <div class="cushion">
                  <center><img src="<?php echo $archivos; ?>images/target.png" alt="Automate Campaign Management"></center>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cushion pad-left">
                    <h1>Objetivo general</h1>

                    <p class="text-justify more"><?php echo $diplomados['obj_general'];; ?></p>
                </div><!-- /.cushion-lg -->
            </div>
            
        </div>
    </div>
</div>
 <div class="v2-workflow">
    <div class="container">
        <div class="mwidth">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-push-6">
                    <center><img src="<?php echo $archivos; ?>images/objetivos.png" alt="Automate Campaign Management" ></center>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6">
                    <h1>Objetivo especifico</h1>
                    <br>
                    <p class="text-justify more"><?php echo "".$diplomados['obj_especifico']."";?></p>
                </div>
            </div>  
        </div>
    </div>
</div>
<div class="white">
    <div class="container">
        <div class="row">
        <div class="col-md-6">
                <div class="cushion">
                  <center><img src="<?php echo $archivos; ?>images/miss.png" alt="Automate Campaign Management"></center>
                </div>
            </div>
            <div class="col-md-6">
                <div class="cushion pad-left">
                    <h1>Mision</h1>

                    <p class="text-justify more"><?php echo $diplomados['mision']; ?></p>
                </div><!-- /.cushion-lg -->
            </div>
            
        </div>
    </div>
</div>
<div class="v2-workflow">
    <div class="container">
        <div class="mwidth">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-push-6">
                    <center><img src="<?php echo $archivos; ?>images/search.png" alt="Automate Campaign Management" ></center>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-pull-6">
                    <h1>Visión</h1>
                    <br>
                    <p class="text-justify more"><?php echo $diplomados['vision']; ?></p>
                </div>
            </div>  
        </div>
    </div>
</div>



<div class="v2-features">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3">
                <h5>MODULOS DE ESTUDIO</h5>
            </div>
            <!--icon lists-->
            <div class="col-xs-12 col-sm-12 col-md-9">
                <?php 
                $consul=mysqli_query($conexion,"SELECT * FROM modulos,diplomados WHERE diplomados.id=modulos.diplomado_id AND diplomados.id='{$_GET['id']}'");
                $contador=1;
                while ($modulos=mysqli_fetch_array($consul)){
                if ($contador==1) {
                echo '<div class="row">';
                }
                if (+$contador==4 OR $contador==7) {
                echo '<div class="row next">';
                }
                echo '<div class="col-xs-12 col-sm-12 col-md-4">
                        <img src="'.$archivos.'images/Md.png" alt="">
                        <h6><a>'.strtoupper($modulos['modulo']).'</a></h6>
                        <p>'.$modulos['contenido'].'</p>
                    </div>';
                if ($contador==6 OR $contador==9) {
                echo '</div>';
                }
                  if ($contador==3) {
                echo '</div>';
                }
                $contador+=1;
                }
                ?>

            </div>
        </div>
    </div>
</div>
</div>


<section class="dark features">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1 text-xs-center">
        <img class="section-icon" src="<?php echo $archivos; ?>images/assistant.png" alt="Testimonial icon">
      
        <h3 class="section-header">Perfil del Estudiante</h3>
      </div>
    </div>
    <div class="row same_height">
    <?php
    $perfil=mysqli_query($conexion,"SELECT * FROM perfil_estudiante WHERE diplomado_id='{$_GET['id']}'");
    while ($datos=mysqli_fetch_array($perfil)) {
     echo '<div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="'.$archivos.$datos['icono'].'" alt="Dan willoughby">
          <div>
            <p class="muted-caps-header text-justify">'.$datos['contenido'].'</p>
          </div>
        </div>
      </div>';
    }
    ?>


    </div>
  </div>
</section>

<section class="dark ">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-10 col-md-offset-1 text-xs-center">
        <img class="section-icon" src="<?php echo $archivos; ?>images/bookmark-1.png" alt="Testimonial icon">
      
        <h3 class="section-header">Requisitos de ingreso</h3>
      </div>
    </div>
    <div class="row same_height">
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/list.png" alt="Dan willoughby">
          <div>
            <p class="muted-caps-header">Resumen Curricular.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/document.png" alt="Adam toren">
          <div>
            <p class="muted-caps-header">Copia en Fondo Negro del título de licenciatura en enfermería o Técnico Superior</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/id-card-4.png" alt="Justin brooke">
          <div>
            <p class="muted-caps-header">Copia de Cedula.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/team.png" alt="Dan willoughby">
          <div>
            <p class="muted-caps-header">2 fotografías tamaño carnet.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/notepad-2.png" alt="Dan willoughby">
          <div>
            <p class="muted-caps-header">Llenar solicitud de inscripción.</p>
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-4">
        <div class="flex center m-t-2">
          <img class="testimonial-avatar" src="<?php echo $archivos; ?>images/get-money.png" alt="Dan willoughby">
          <div>
            <p class="muted-caps-header">Realizar el pago de aranceles</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
   <section id="clients" style="padding: 1.8rem 0;">
      <div class="container-fluid">
          <div class="row animate-this">

        <div class="col-sm-12 col-md-10 col-md-offset-1 text-xs-center">
          <img class="section-icon" src="<?php echo $archivos; ?>/images/cloud-computing.png" alt="Testimonial icon">
      
         <h3 class="section-header">Solicitar Información Adicional</h3>
         <br>
      </div>

     
            <form id="main-contact-form" name="contact-form" method="post" action="#" style="    margin: 0 auto;">
                <div class="row  wow fadeInUp animated" data-wow-duration="1000ms" data-wow-delay="300ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 300ms; animation-name: fadeInUp;">

                  <div class="input-group input-signup-footer-container" style="margin-right:10px">
                      <input type="email" id="input-email-signup-footer"  placeholder="Correo Electronico" name="correo" required>
                      
                    </div>

                        <button class="btn" id="submit-btn-signup-footer" type="button"><i class="fa fa-paper-plane-o"></i> Enviar</button>

                     

              </form>   
        

    </div> <!-- end row -->
</div>
   </section> <!-- end clients -->