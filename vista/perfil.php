<title>Fundacedis : Perfil <?php echo $data['nombre']." ".$data['apellido']; ?></title>
<div class="page-content container-fluid">
      <div class="row">
        <div class="col-md-3">
          <!-- Page Widget -->
          <div class="widget widget-shadow text-center">
            <div class="widget-header">
              <div class="widget-header-content">
                <a class="avatar avatar-lg">
                <?php 
                if ($data['genero']=='masculino') {
                  $img='nurse-1.png';
                }else if ($data['genero']=='femenino') {
                  $img='nurse.png';
                }
                ?>
                  <img src="images/<?php echo $img; ?>" alt="...">
                </a>
                <div class="profile-user"><?php echo $data['nombre']." ".$data['apellido']; ?></div>
                <div class="profile-job"><?php echo $data['perfil']; ?></div>
              </div>
            </div>
          </div>
          <!-- End Page Widget -->
        </div>

        <div class="col-md-9">
          <!-- Panel -->
          <div class="panel">
            <div class="panel-body profile-panel">

              <ul class="nav nav-tabs nav-tabs-line" data-plugin="nav-tabs" role="tablist">
                <li class="active" role="presentation"><a data-toggle="tab" href="#activities" aria-controls="activities" role="tab" aria-expanded="false">Información</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#cuotas" aria-controls="cuotas" role="tab" aria-expanded="false">Cuotas</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#messages" aria-controls="messages" role="tab" aria-expanded="true">Matriculas</a></li>
                <li role="presentation" class=""><a data-toggle="tab" href="#pagar" aria-controls="pagar" role="tab" aria-expanded="true">Pagar Cuota</a></li>
              </ul>
                              

              <div class="tab-content">
                <div class="tab-pane active" id="activities" role="tabpanel">
                <h5>Editar información <a><i class="fa fa-pencil" aria-hidden="true"></i></a></h5>
                <br>
                  <ul class="list-group">
                    <div class="container">

                      <form class="profile" action="https://www.codecourse.com/account/settings/profile" method="post">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12">
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Nombres:</p>
                                    <input type="text" readonly class="form-control" name="nombres" required="" value="<?php echo $data['nombre'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Apellidos:</p>
                                    <input type="text" readonly class="form-control" name="apellidos" required="" value="<?php echo $data['apellido'];?>">
                                    </div>
                                    </div>
                                     <div class="col-md-2 text-center">
                                    <div class="form-group">
                                     <p class="help-block">Nacionalidad:</p>
                                    <input type="radio" name="nacionalidad" value="V" <?php echo ($data['nacionalidad']=='V') ? 'checked' : ''; ?> disabled>V
                                    <input type="radio" name="nacionalidad" value="E" <?php echo ($data['nacionalidad']=='E') ? 'checked' : ''; ?> disabled>E
                                    </div>
                                    </div>
                                    <div class="col-md-2">
                                    <div class="form-group">
                                     <p class="help-block">Cedula:</p>
                                    <input type="text" readonly class="form-control" name="cedula" required="" value="<?php echo $data['cedula'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Fecha de Nacimiento:</p>
                                    <input type="date" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['fecha_nac'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Lugar de Nacimiento:</p>
                                    <input type="text" readonly class="form-control" name="lugar_nacimiento" required="" value="<?php echo $data['lugar_nac'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Dirección:</p>
                                    <input type="text" readonly class="form-control" name="direccion" required="" value="<?php echo $data['direccion'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Nivel Educativo:</p>
                                     <select class="form-control" disabled name="nivel_educativo">
                                      <option <?php echo ($data['nivel_educativo']=='primaria') ? 'selected' : ''; ?>>Primaria</option>
                                      <option <?php echo ($data['nivel_educativo']=='bachiller') ? 'selected' : ''; ?>>Bachiller</option>
                                      <option <?php echo ($data['nivel_educativo']=='tsu') ? 'selected' : ''; ?>>Tecnico Superior</option>
                                      <option <?php echo ($data['nivel_educativo']=='lic') ? 'selected' : ''; ?>>Licenciatura</option>
                                      <option <?php echo ($data['nivel_educativo']=='ing') ? 'selected' : ''; ?>>Ingenieria</option>
                                     </select>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Fecha de Graduación:</p>
                                    <input type="date" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['fecha_gradu'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Profesión:</p>
                                    <input type="text" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['profesion'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Empresa donde Labora:</p>
                                    <input type="text" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['empresa_labora'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Tiempo de Servicio:</p>
                                    <input type="text" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['tiempo_servicio'];?>">
                                    </div>
                                    </div>
                                   <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Cargo:</p>
                                    <input type="text" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['cargo'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Servicio donde Labora</p>
                                    <input type="text" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['servicio_labora'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Telefono Celular</p>
                                    <input type="text" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['tlf_cel'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Telefono Habitación</p>
                                    <input type="text" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['tlf_hab'];?>">
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                    <div class="form-group">
                                     <p class="help-block">Telefono Oficina</p>
                                    <input type="text" readonly class="form-control" name="fecha_nacimiento" required="" value="<?php echo $data['tlf_oficina'];?>">
                                    </div>
                                    </div>
                                </div>
                              </div>
                            </div>
                      </form>
                    </div>

                    
                  </ul>
            
                </div>

                <div class="tab-pane" id="cuotas" role="tabpanel">
                <table class="table">
                  <thead>
                    <tr>
                      <th width="300px"></th>
                      <th class="text-center">Abonado</th>
                      <th class="text-center">Pendiente</th>
                      <th class="text-center">Total</th>
                      <th class="text-center">Nº de Matricula</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                  $cuotas=mysqli_query($conexion,"SELECT * FROM matriculas,diplomados WHERE matriculas.diplomado_id=diplomados.id AND cedula='{$data['cedula']}'");
                  while ($cp=mysqli_fetch_array($cuotas)) {
                  $porc=mysqli_query($conexion,"SELECT * FROM matriculas,pagos,diplomados,comprobantes WHERE pagos.matricula_id=matriculas.id AND pagos.comprobante_id=comprobantes.id AND matriculas.diplomado_id=diplomados.id AND comprobantes.verificado='si' AND matriculas.id='{$cp['id']}'");
                  if (mysqli_affected_rows($conexion)>=1) {
                  $monto=0;
                  while ($final=mysqli_fetch_array($porc)){
                  $monto+=$final['monto'];
                  }
                  $porcentaje=($monto*100)/$cp['costo'];
                  }else{
                  $porcentaje='0';
                  $monto='0';
                  }

                  if ($porcentaje<50) {
                  $color='danger';
                  }elseif ($porcentaje>=50 AND $porcentaje<=70) {
                  $color='warning';
                  }elseif ($porcentaje>=71) {
                  $color='success';
                  }
                  $porpagar=$cp['costo']-$monto;
                  $porpagarp=100-$porcentaje;
                  echo '<tr>
                    <td>
                    <div class="progress">
                    <div class="progress-bar progress-bar-'.$color.' progress-bar-striped active" role="progressbar" aria-valuenow="'.$porcentaje.'" aria-valuemin="0" aria-valuemax="100" style="width: '.$porcentaje.'%;min-width: 2em;">'.$porcentaje.'%</div>
                    </div>
                    </td>
                    <td class="text-center">'.$monto.'<br><span class="label label-primary">'.$porcentaje.'%</span></td>
                    <td class="text-center">'.$porpagar.'<br><span class="label label-primary">'.$porpagarp.'%</span></td>
                    <td class="text-center">'.$cp['costo'].'<br><span class="label label-primary">100%</span>
                    </td>
                    <td class="text-center">'.$cp['id'].'</td>
                    </tr>';
                    }
                  ?>

                  </tbody>
                </table>
                </div>

                <div class="tab-pane " id="messages" role="tabpanel">
             <div class="container">
                <div class="row">
                  <div class="col-md-12">
                   <table class="table table-hover table-striped">
                     <thead><tr>
                      <th class="text-center">Diplomado</th> 
                      <th class="text-center">Fecha de ingreso</th>
                      <th class="text-center">Región</th>
                      <th class="text-center">Cohrte</th> 
                      <th class="text-center">Estado</th>
                      <th class="text-center">Constancias</th> 
                      <th class="text-center">Matricula</th> 
                     </tr></thead>
                     <tbody>
                    <?php 
                    $consulta=mysqli_query($conexion,"SELECT * FROM personas,matriculas,diplomados WHERE personas.cedula=matriculas.cedula AND diplomados.id=matriculas.diplomado_id AND matriculas.cedula='{$data['cedula']}'");
                    if (mysqli_affected_rows($conexion)>=1) {
                      while ($matri=mysqli_fetch_array($consulta)) {
                        if ($matri['estado']=='activa') {
                        $texto='<font color="#4caf50">Activa</font>';
                        }elseif ($matri['estado']=='inactiva') {
                        $texto='<font color="#e51c23">Inactiva</font>';
                        }elseif ($matri['estado']=='culminada') {
                        $texto='<font color="#9c27b0">Culminada</font>';
                        }



                      echo '
                      <tr>
                      <td class="text-center">'.$matri['nombre'].'</td> 
                      <td class="text-center">'.date("d/m/Y",strtotime($matri['fecha'])).'</td>
                      <td class="text-center">'.strtoupper($matri['region']).'</td>
                      <td class="text-center">IQ10</td>  
                      <td class="text-center">'.$texto.'</td> 
                      <td class="text-center" style="display:flex;">
                      <a class="btn btn-info"><i class="fa fa-print"></i> Estudio</a> <a class="btn btn-info"><i class="fa fa-print"></i> Pasantia</a></td> 
                      <td class="text-center">'.$matri['22'].'</td></tr>';
                      }
                    }else{
                    echo "<td colspan='7' class='danger text-center'>Sin matriculación</td>";
                    }
                     ?> 
                     </tbody>
                   </table>
                    </div>
                  </div>
                </div>
                </div>

              <div class="tab-pane" id="pagar" role="tabpanel">
                  <ul class="list-group">
                  
                    

                    
                  </ul>
                </div>


              </div>
            </div>
          </div>
          <!-- End Panel -->
        </div>
      </div>
    </div>
