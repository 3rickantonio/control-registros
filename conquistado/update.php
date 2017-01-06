<?php session_start() ?>
<?php if(isset($_SESSION['name']))
{
}else{ header("Location: index.php");}?>
<?php require_once 'includes/functions.php'; ?>

<html>

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">
<style type="text/css">
body {  
        background:url('img/fondo.jpg') repeat 0 0;                   
 }
</style>
<link href="css/jquery.remodal.css" rel="stylesheet" type="text/css">
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/aclonica:n4:default;adamina:n4:default.js" type="text/javascript"></script>
</head>


<body>


<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.remodal.css">
<script src="css/jquery.remodal.js"></script>
		<meta name="author" content="Erick Suarez" />
		<link rel="stylesheet" type="text/css" href="css/component2.css" />	

<center>
<img src="img/Logophp.png"/>
<div class="component">
				<h2>SISTEMA SION</h2>
				<p>&nbsp;</p>
<?php
	include('clases.php');	
	$id		= $_GET['id'];
	#referencio mi objeto
	$conexion= new MisClases();	
	#realizo la conexion
    $conectar= $conexion->conectar();
	#hago el select
    $sql= "select * from conquistado where id=".$id;
    #ejecuto mi sentencia sql
    $result= $conexion->sentencias($sql);
	$row= $conexion->row($result);
?>
    
<form name="envio" method="post" action="guardaupdate.php">
<input type="hidden" name="id" size="30" value="<?php echo $row['id'] ?>"/>
<table align="center" border=0>
    
<td>NOMBRES:</td>
    <td><input name="nombres" value="<?php echo $row['nombres'] ?>" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Primer/segundo nombre..." type="text"  size="40" maxlength="25"/></td>
</tr><tr>
</tr><tr>
</tr><tr>
    
<td>APODO:</td>
<td><input name="apodo" value="<?php echo $row['apodo'] ?>" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apodo..." type="text"  size="40" maxlength="10"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>APELLIDOS:</td>
    <td><input name="apellidos" value="<?php echo $row['apellidos'] ?>" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Primer/segundo apellido..." type="text" size="40" maxlength="25"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>CEDULA:</td><td>
    <input name="cedula" value="<?php echo $row['cedula'] ?>" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  placeholder="Cedula de identidad.." type="text"  size="28" maxlength="8"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>TELEFONO MOVIL:</td><td>
    <input name="telf_movil" value="<?php echo $row['telf_movil'] ?>" placeholder="0412/0416/0426" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" size="28" maxlength="11"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>TELEFONO LOCAL:</td><td>
    <input name="telf_local" value="<?php echo $row['telf_local'] ?>" placeholder="0251" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" size="28" maxlength="11" /></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>CORREO:</td><td>
    <input name="correo" value="<?php echo $row['correo'] ?>" placeholder="@gmail/@hotmail/@outlook" onKeyUp="this.value=this.value.toUpperCase();" type="email" size="40" maxlength="25" /></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>DIRECCION:</td><td>
<input name="direccion" onKeyUp="this.value=this.value.toUpperCase();" type="text" value="<?php echo $row['direccion'] ?>" size="40" maxlength="120"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>RED SOCIAL:</td>
    <td><input name="red_social" value="<?php echo $row['red_social'] ?>" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Facebook/Twitter/Instagram" type="text" size="40" maxlength="25"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>FECHA NACIMIENTO:</td><td>
    <input name="fecha_nacimiento" value="<?php echo $row['fecha_nacimiento'] ?>" type="date" id="date" size="25"></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>FECHA REGISTRO:</td><td>
    <input name="fecha_registro" value="<?php echo $row['fecha_registro'] ?>" type="date" id="date"  size="25"></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>OCUPACION:</td><td>
    <input name="ocupacion" value="<?php echo $row['ocupacion'] ?>" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Estudiante/Ama de casa" type="text" size="40" maxlength="25"/></td>
</tr><tr>
</tr><tr>
</tr><tr>
    

<td>Con cuantos vive?</td><td>
<input name="vivecon" value="<?php echo $row['vivecon'] ?>" placeholder="Ej: 3" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"  type="text" size="40" maxlength="2"/></td>
</tr><tr>
</tr><tr>
</tr><tr>
    
    
<td>Asiste a una iglesia?</td><td>
               
                   <span></span>
                    <select id="asiste_a_iglesia" name="asiste_a_iglesia"  >
                        <option value="<?php echo $row['asiste_a_iglesia'] ?>">"<?php echo $row['asiste_a_iglesia'] ?>"</option>
                        <option value="SI">SI</option>
                        <option value="NO">NO</option>              
                    </select></td>
</tr><tr>
</tr><tr>
</tr><tr>
  

  <td>Estatus</td><td>
                   <span></span>
                    <select id="estatus" name="estatus"  >
                        <option value="<?php echo $row['estatus'] ?>">"<?php echo $row['estatus'] ?>"</option>
                        <option value="Normal">Normal</option>
                        <option value="Nuevo Creyente">Nuevo Creyente</option>              
                    </select></td>
</tr><tr>
</tr><tr>
</tr><tr>  
  
 
    
    
<tr>
<td colspan=2 align="center"><p>&nbsp;
  </p>
  <p>
  
    <input type="button" class="remodal-cancel" onclick="javascript:window.history.back();" value="ATRAS"/> 
    <input name="Guardar" type="submit" class="remodal-confirm" value="GUARDAR"/>
  </p></td>
</tr>
</table>
</form>

 </center>
 </body>
</html>