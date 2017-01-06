<?php session_start() ?>
<?php if(isset($_SESSION['name']))
{
}else{ header("Location: index.php");}?>
<?php require_once 'includes/functions.php'; ?>

<html>
<style type="text/css">
body {  
        background:url('img/fondo.jpg') repeat 0 0;                   
 }
</style>

<head>
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
	
		
		
<meta charset="utf-8">
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
    $sql= "select * from conquistador where id=".$id;
    #ejecuto mi sentencia sql
    $result= $conexion->sentencias($sql);
	$row= $conexion->row($result);
	


?>
<form name="envio" method="post" action="guardaupdate.php">
<input type="hidden" name="id" size="30" value="<?php echo $row['id'] ?>"/>
<table align="center" border=0>

<tr>
<td>NOMBRES:</td>
<td><input name="nombres" onKeyUp="this.value=this.value.toUpperCase();" type="text" value="<?php echo $row['nombres'] ?>" size="30" maxlength="25"/></td>
</tr>

<tr>
<td>APELLIDOS:</td>
<td><input name="apellidos" onKeyUp="this.value=this.value.toUpperCase();" type="text" value="<?php echo $row['apellidos'] ?>" size="30" maxlength="25"/></td>
</tr>

<tr>
<td>CORREO:</td>
<td><input name="correo" onKeyUp="this.value=this.value.toUpperCase();" type="text" value="<?php echo $row['correo'] ?>" size="30" maxlength="25"/></td>
</tr>

<tr>
<td>TELEFONO:</td>
<td><input name="telefono" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" type="text" value="<?php echo $row['telefono'] ?>" size="30" maxlength="11"/></td>
</tr>

<tr>
<td>FECHA NACIMIENTO:</td>
<td> <input name="fecha_nacimiento" type="date" value="<?php echo $row['fecha_nacimiento'] ?>" value="2012-01-01"  size="25"></td>
</tr>

<tr>
<td>FECHA REGISTRO:</td>
<td> <input name="fecha_registro" type="date" value="<?php echo $row['fecha_registro'] ?>" value="2012-01-01"  size="25"></td>
</tr>

<tr>
<td>DIRECCION:</td>
<td><input name="direccion" onKeyUp="this.value=this.value.toUpperCase();" type="text" value="<?php echo $row['direccion'] ?>" size="30" maxlength="35"/></td>
</tr>
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