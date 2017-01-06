<?php session_start() ?>
<?php if(isset($_SESSION['name']))
{
}else{ header("Location: index.php");}?>
<?php require_once 'includes/functions.php'; ?>

<script>
	function aceptar(){
		window.location="index.php";
	}
</script>

<style type="text/css">
body {  
        background:url('img/fondo.jpg') repeat 0 0;                   
 }
</style>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030"><!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/aclonica:n4:default;adamina:n4:default.js" type="text/javascript"></script>
</head>
<body>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="css/jquery.remodal.css">
<script src="css/jquery.remodal.js"></script>
<title>BIENVENIDO AL SISTEMA | Conquistando mi ciudad</title>
		<meta name="author" content="Erick Suarez" />
		   
        <link rel="stylesheet" type="text/css" href="css/normalize.css" />
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/component2.css" />
        <script src="css/modernizr-2.6.2.min.js"></script>
			

<center>
<img src="img/Logophp.png"/>

			<div class="component">
<h2>SISTEMA SION</h2>
                
                				<!-- inicio del circulo -->
			  <button class="cn-button" id="cn-button">Menu</button>
				<div class="cn-wrapper" id="cn-wrapper">
					<ul>
						<li><a href="https://www.google.com.ve"><span>Google</span></a></li>
						<li><a href="https://www.facebook.com/pages/Ministerio-Integral-Sión/1425828550963100?ref=ts&fref=ts"><span>Facebook</span></a></li>
						<li><a href="https://twitter.com/Mi_sion"><span>Twitter</span></a></li>
						<li><a href="#"><span>Conquistdor</span></a></li>
						<li><a href="#"><span>Conquistado</span></a></li>
						<li><a href="#"><span>Vacio</span></a></li>
						<li><a href="#"><span>Vacio</span></a></li>
				  </ul>
				
				<!-- fin del circulo -->

			
		</div><!-- /container -->
		<script src="css/polyfills.js"></script>
		<script src="css/demo2.js"></script>
		<!-- For the demo ad only -->   
<script src="/css/demoad.js"></script>


<span style="font-family: 'Rage Italic'"></span>
</body>
    
    
    
    
    
</html>
    
<?php

	include('clases.php');
	if(
        isset($_POST['nombres'])!="" and 
        isset($_POST['apellidos'])!="" and 
        isset($_POST['correo'])!="" and 
        isset($_POST['telefono'])!="" and 
        isset($_POST['fecha_nacimiento'])!="" and 
        isset($_POST['fecha_registro'])!=""  and 
        isset($_POST['direccion'])!=""){
        
        
		$id			     = $_POST['id'];
		$nombres		 = $_POST['nombres'];
		$apellidos       = $_POST['apellidos'];
		$correo	         = $_POST['correo'];
		$telefono	     = $_POST['telefono'];
		$fecha_nacimiento= $_POST['fecha_nacimiento'];
		$fecha_registro	 = $_POST['fecha_registro'];		
		$direccion	     = $_POST['direccion'];
        
		#referencio mi objeto
		$conexion= new MisClases();	
		#realizo la conexion
		$conectar= $conexion->conectar();
		#hago el select
		$sql = "UPDATE conquistador SET 
        id='".$id."', 
        nombres='".$nombres."', 
        apellidos='".$apellidos."', 
        correo='".$correo."', 
        telefono='".$telefono."', 
        fecha_nacimiento='".$fecha_nacimiento."', 
        fecha_registro='".$fecha_registro."', 
        direccion='".$direccion."' 
        WHERE id=".$id;
        
		#ejecuto mi sentencia sql
		$result= $conexion->sentencias($sql);


		if($result==1){

			echo '<center><h2>Datos Actualizados Correctamente!</h2></center>';
		}
		
	
	}else{
	if($nombres==""){
                    echo '<center><h3><font color="red">* Nombre Vacio</font></h3></center>';
                }elseif($apellidos==""){
                   echo '<center><h3><font color="red">* Apellidos Vacio</font></h3></center>'; 
                }elseif($correo==""){
                    echo '<center><h3><font color="red">* Correo Vacio</font></h3></center>';
               }elseif($telefono==""){
                    echo '<center><h3><font color="red">* Telefono Vacio</font></h3></center>';
                }elseif($fecha_nacimiento==""){
                    echo '<center><h3><font color="red">* Fecha de nacimiento Vacio</font></h3></center>';
				}elseif($fecha_registro==""){
                    echo '<center><h3><font color="red">* Fecha de registro Vacio</font></h3></center>';
                }elseif($direccion==""){
                    echo '<center><h3><font color="red">* Direccion Vacia</font></h3></center>';
                }
	}
	
?>
<center><input type="submit" class="remodal-confirm"  name="Guardar" onclick="aceptar()" value="Confirmar"/></center>
