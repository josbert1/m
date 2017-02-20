<?php
include '../controlador/conexion.php';
// Incluyendo la libreria de TCPDF
require_once('tcpdf.php');

class ConPies extends TCPDF { 
    public function Header() { 
    global $conexion;
$diplo=mysqli_query($conexion,"SELECT * FROM diplomados WHERE id='{$_REQUEST['diplomado']}'");
$name=mysqli_fetch_array($diplo);
        /*ponemos color al texto y a las lineas */ 
        $this->SetTextColor(0,0,0); 
        $this->SetDrawColor(255,0,0); 
 $this->Image('../images/cedis.png',55,7,32,32,'','','N','','','R');
        /* definimos variables con titulo y subtitulo */ 
 $titulo='<table border="0" cellspacing="3">
<tr>
<td></td>
<td><br><br><br></td>
</tr>
<tr>
<td align="center" colspan="3"><font size="15"><b>PLANILLA  DE  INSCRIPCIÓN</b></font></td>
</tr>
<tr>
<td align="center" colspan="3"><font size="15"><b>'.strtoupper($name['nombre']).'</b></font></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td></td>
</tr>
</table>'; 
        /* posicionamos el puto de insercion 2mm. debajo 
           del borde del papel */ 
        $this->SetY(2); 
        /* escribimos el titulo con la fuente que se establezca 
        por el método opcion SetHeaderFont */
        $this->writeHTML($titulo, true, false, true, false, ''); 
        /* insertamos una imagen de fondo con 15% de opacidad */ 
        $this->SetAlpha(0.15,'Normal'); 
        $this->Image('../images/cedis.png',55,90,200,150,'','','N','','','C');
        /* recuperamos la opacidad por defecto */ 
        $this->SetAlpha(1,'Normal'); 
    } 
} 



// creando nuevo documento
$pdf = new ConPies(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// estableciendo datos del documento
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Fundacedis');
$pdf->SetTitle('Planilla Inscipción Diplomados');
$pdf->setPrintFooter(false);

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

$pdf->SetMargins(PDF_MARGIN_LEFT, 40, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(20);
$pdf->setHeaderFont(Array('dejavusans', '', 14)); 
$pdf->setFooterFont(Array('dejavusans', '', 10));

// se establece auto saltado fin de pagina
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// Establecemos la fuente
$pdf->SetFont('dejavusans', '', 12);
$data=mysqli_query($conexion,"SELECT * FROM personas WHERE cedula='{$_REQUEST['cedula']}'");
$dato=mysqli_fetch_array($data);

if ($dato['nivel_educativo']=='tsu') {
$univer='Técnico Superior Universitario';
}elseif ($dato['nivel_educativo']=='lic') {
$univer='Licenciado';
}elseif ($dato['nivel_educativo']=='ing') {
$univer='Ingenierio';
}


// Agregamos una nueva pagina
$pdf->AddPage();
$edad=date("Y")-date("Y",strtotime($dato['fecha_nac']));
$html = '
<table border="1" cellspacing="0" cellpadding="6">
<tr><td colspan="3">Nombres:<br><b>'.$dato['nombre'].'</b></td><td rowspan="3" align="center"><br><br><br><br>Pegue su <br>foto Aquí</td></tr>
<tr><td colspan="3">Apellidos:<br><b>'.$dato['apellido'].'</b></td></tr>
<tr><td>Cedula de Identidad:<br><b>'.$dato['nacionalidad'].'-'.$dato['cedula'].'</b></td><td>Sexo:<br><b>'.$dato['genero'].'</b></td><td>Edad:<br><b>'.$edad.'</b></td></tr>
<tr><td colspan="2">Lugar de Nacimiento:<br><b>'.$dato['lugar_nac'].'</b></td><td colspan="2">Fecha de Nacimiento:<br><b>'.date("d/m/Y",strtotime($dato['fecha_nac'])).'</b></td></tr>
<tr><td colspan="4">Teléfono de habitación:<br><b>'.$dato['tlf_hab'].'</b></td></tr>
<tr><td colspan="4">teléfono celular:<br><b>'.$dato['tlf_cel'].'</b></td></tr>
<tr><td colspan="4">Correo electrónico:<br><b>'.$dato['correo'].'</b></td></tr>
<tr><td colspan="4">Dirección:<br><b>'.$dato['direccion'].'</b></td></tr>
<tr><td colspan="4">Nivel Educativo:<br><b>'.$univer.'</b></td></tr>
<tr><td colspan="4">Año de graduación:<br><b>'.date("d/m/Y",strtotime($dato['fecha_gradu'])).'</b></td></tr>
<tr><td colspan="4">Profesión:<br><b>'.$dato['profesion'].'</b></td></tr>
<tr><td colspan="4">Empresa / organismo donde trabaja:<br><b>'.$dato['empresa_labora'].'</b></td></tr>
<tr><td colspan="4">Tiempo de servicio:<br><b>'.$dato['tiempo_servicio'].'</b></td></tr>
<tr><td colspan="4">Cargo:<br><b>'.$dato['cargo'].'</b></td></tr>
<tr><td colspan="4">Servicio donde labora:<br><b>'.$dato['servicio_labora'].'</b></td></tr>
<tr><td colspan="4">Teléfono de oficina:<br><b>'.$dato['tlf_oficina'].'</b></td></tr>
</table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->lastPage();


//Close and output PDF document
$pdf->Output('Planilla_Inscipcion_Diplomados.pdf', 'D');

?>
