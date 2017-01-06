<?php
require_once('class.ezpdf.php');
$pdf =& new Cezpdf('a4');
$pdf->selectFont('../fonts/courier.afm');
$pdf->ezSetCmMargins(1,1,1.5,1.5);
$pdf->ezImage("Logophp.jpg", 0, 420, 'center', 'center');

$conexion = mysql_connect("localhost", "cristoes", "5k7YLp3q9i");
mysql_select_db("cristoes_conquistando", $conexion);
$queEmp = "SELECT nombres, apellidos, telf_movil, direccion,estatus FROM conquistado where estatus='Nuevo Creyente'";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
/*
$conexion = mysql_connect("localhost", "root", "");
mysql_select_db("conquistando", $conexion);
$queEmp = "SELECT nombres, apellidos, telf_movil, direccion,estatus FROM conquistado WHERE estatus='Nuevo Creyente' ORDER BY estatus DESC";
$resEmp = mysql_query($queEmp, $conexion) or die(mysql_error());
$totEmp = mysql_num_rows($resEmp);
*/

$ixx = 0;
while($datatmp = mysql_fetch_assoc($resEmp)) { 
	$ixx = $ixx+1;
	$data[] = array_merge($datatmp, array('id'=>$ixx));
}


$pdf->ezText("Reporte listado conquistados",12);
$pdf->ezText("Encarga@: Diana Rodriguez: 0426 2529576",12);
$pdf->ezText("AREA SITUACIONAL: 0426 3090242",12);

$titles = array(

				'nombres'=>'<b>Nombres</b>',
				'apellidos'=>'<b>Apellidos</b>',
				'telf_movil'=>'<b>Telefono Movil</b>',
				'direccion'=>'<b>Direccion</b>',
				'estatus'=>'<b>Estatus</b>',
			);
$options = array(
				'shadeCol'=>array(0.9,0.9,0.9),
				'xOrientation'=>'center',
				'width'=>550,
				
			);



$pdf->ezText($txttit, 12);
$pdf->ezTable($data, $titles, '', $options);
$pdf->ezText("\n\n\n", 10);
$pdf->ezText("<b>Fecha:</b> ".date("d/m/Y"), 10);
$pdf->ezText("<b>Hora:</b> ".date("H:i:s")."\n\n", 10);
$pdf->ezStream();
?>