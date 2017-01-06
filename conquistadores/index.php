<?php session_start() ?>
<?php if(isset($_SESSION['name']))
{
}else{ header("Location: index.php");}?>
<?php require_once 'includes/functions.php'; ?>


<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/bilbo-swash-caps:n4:default;alex-brush:n4:default;aclonica:n4:default;adamina:n4:default.js" type="text/javascript"></script>

<link href="css/component2.css" rel="stylesheet" type="text/css">
<link href="css/demo2.js.css" rel="stylesheet" type="text/css">
<link href="css/jquery.remodal.css" rel="stylesheet" type="text/css">
<link href="css/jquery.remodal.js.css" rel="stylesheet" type="text/css">
<link href="css/modernizr-2.6.2.min.js.css" rel="stylesheet" type="text/css">
<link href="css/polyfills.js.css" rel="stylesheet" type="text/css">
<style type="text/css">
.active2 {
	font-family: "arial";
}
[required]{
	border-color: green;
	/*
	box-shadow: 0px 0px px green;*/
}
:invalid{
    /*COLOR DEL MARCO
	box-shadow: 0px 0px 5px orange;
	*/
	border-color: red;
    
}



</style>
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

<script>
function EnvioForm(){
        envio.submit();
}
function edit(url){
	window.location=url;
}

/*ESTA FUNCION ES LA DE REMOVER O ELIMINAR PERO ESTARA DESACTIVADA
function delet(url){
	
        var mensaje = "ESTAS SEGURO QUE QUIERES ELIMINAR";
	if(confirm(mensaje)){
		window.location=url;
	}else{
	
	}
}*/

$(document).on('open', '.remodal', function () {
        console.log('open');
    });

    $(document).on('opened', '.remodal', function () {
        console.log('opened');
    });

    $(document).on('close', '.remodal', function () {
        console.log('close');
    });

    $(document).on('closed', '.remodal', function () {
        console.log('closed');
    });

    $(document).on('confirm', '.remodal', function () {
        console.log('confirm');
    });

    $(document).on('cancel', '.remodal', function () {
        console.log('cancel');
    });
//    FUNCION CERRADA
// You can open or close it like this:
//    $(function () {
//        // var inst = $.remodal.lookup[$('[data-remodal-id=modal]').data('remodal')];
//        // inst.open();
//        // inst.close();
//    });

//  Or init in this way:
    var inst = $('[data-remodal-id=modal2]').remodal();
</script>
<style>
.tabla1{
    border-radius: 1px;
    border: solid 1px #f1f1f1;
    box-shadow: 0 0 10px #333;
    margin: 12px;
}
.tabla1 th{
 background-color: #314456;          
    color: #fff;
    font-weight: bold;
    font-size: 12px;
 }
 
.tabla1 tr:nth-child(odd){
      background-color: #fff;
}
.tabla1 tr:nth-child(even){
    background-color: #fafafa;
}
.tabla1 tr:hover{
    background: #7290ae;
     color: #fff;
}
}


</style>




<div class="remodal-bg">
    <a href="#modal"><input type="button" class="remodal-confirm" name="Nuevo" value="Nuevo" /></a>
    <div class="remodal" data-remodal-id="modal">
        <h1 style="font-family: adamina; font-style: normal; font-weight: 400; color: #F49F00;">DATOS DEL  CONQUISTADOR</h1>
        <p>&nbsp;</p>
        <p>
      <form name="envio" id="envio" method="post" action="index.php">
<table align="center" border=0>
<tr>
<td>NOMBRES:</td><td>
  <input name="nombres" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Ingrese los dos nombres" type="text"  size="40" maxlength="25"/>
</td>
</tr><tr>
<td>APELLIDOS:</td><td><input name="apellidos" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Ingrese los dos apellidos" type="" size="40" maxlength="25"/></td>
</tr><tr>
<td>CORREO:</td><td><input name="correo" placeholder="Ingrese correo @gmail/@hotmail/@outlook" onKeyUp="this.value=this.value.toUpperCase();" type="email" size="40" maxlength="25" /></td>
</tr><tr>
<td>TELEFONO:</td><td><input name="telefono" placeholder="Ingrese N telef 0412/0416/0426/0251" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" size="28" min="11" max="11"/></td>
</tr><tr>
<td>FECHA NACIMIENTO:</td>
<td> 
  <input name="fecha_nacimiento" type="date" id="date" title="DIA/MES/Aﾃ前" value="0000-00-00"  size="25"></td>
</tr>
<td>FECHA REGISTRO:</td>
<td> 
  <input name="fecha_registro" type="date" id="date"  size="25"></td>
</tr>
</tr><tr>
<td>DIRECCION:</td><td><input name="direccion" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Ingrese Calle, Carrera y N de casa" type="text" size="40" maxlength="25"/></td>
</tr><tr>

</table>
</form>
        </p>
       
        <br>
        <a class="remodal-cancel" href="#">CANCELAR</a>
        <a class="remodal-confirm" href="#" onclick="EnvioForm()">GUARDAR</a>
    </div>

   
</div>
<?php
    include('clases.php');
    #referencio mi objeto
    $conexion= new MisClases();	
    #realizo la conexion
    $conectar= $conexion->conectar();
    if(
        isset($_POST['nombres']) or 
        isset($_POST['apellidos']) or 
        isset($_POST['correo']) or 
        isset($_POST['telefono']) or 
        isset($_POST['fecha_nacimiento']) or 
        isset($_POST['fecha_registro'])or 
        isset($_POST['direccion'])){
	
		$nombres		= $_POST['nombres'];
		$apellidos	= $_POST['apellidos'];
		$correo	= $_POST['correo'];
		$telefono	= $_POST['telefono'];
        $fecha_nacimiento   = $_POST['fecha_nacimiento'];
		$fecha_registro   = $_POST['fecha_registro'];
        $direccion   = $_POST['direccion'];
		



		if($nombres==""){
                    echo '<center><h3><font ="red">* Nombre Vacio</font></h3></center>';
                }elseif($apellidos==""){
                   echo '<center><h3><font ="red">* Apellidos Vacio</font></h3></center>'; 
                }elseif($correo==""){
                    echo '<center><h3><font color="red">* Correo Vacio</font></h3></center>';
               }elseif($telefono==""){
                    echo '<center><h3><font color="red">* Telefono Vacio</font></h3></center>';
                }elseif($fecha_nacimiento==""){
                    echo '<center><h3><font color="red">* Fecha de nacimiento Vacio</font></h3></center>';
                }elseif($fecha_registro==""){
                    echo '<center><h3><font color="red">* Fecha de registro Vacia</font></h3></center>';
				}elseif($direccion==""){
                    echo '<center><h3><font color="red">* Direccion Vacia</font></h3></center>';
                }else{
                #hago el select
		$sql = "insert into conquistador (nombres, apellidos, correo, telefono, fecha_nacimiento,fecha_registro, direccion) values ";
		$sql = $sql."('".$nombres."','".$apellidos."','".$correo."','".$telefono."','".$fecha_nacimiento."','".$fecha_registro."','".$direccion."')";
		#ejecuto mi sentencia sql
		$result= $conexion->sentencias($sql);
		if($result==1){
				echo '<center><h3>Datos Almacenados Correctamente!</h3></center>';
		}        
                }	
	}
  ?>
<table align="center" border=0 width="95%" class="tabla1">
<tr>
<th>CODIGO</th>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>CORREO</th>
<th>TELEFONO</th>
<th>FECHA REGISTRO</th>

<th>ACCIONES</th>
</tr>
<?php	
    #hago el select
    $sql= "select * from conquistador";
    #ejecuto mi sentencia sql
    $result= $conexion->sentencias($sql);
    #recorro los resultados con el while
    while ($row= $conexion->row($result)){
		$edit  = "update.php?id=".$row['id'];
		$delet = "delete.php?Id=".$row['id'];
		echo '<tr>';
		echo '<td>'.$row['id'].'</td>';
		echo '<td>'.$row['nombres'].'</td>';
		echo '<td>'.$row['apellidos'].'</td>';
		echo '<td>'.$row['correo'].'</td>';
		echo '<td>'.$row['telefono'].'</td>';
        echo '<td>'.$row['fecha_registro'].'</td>';
		echo '<td>';
?>
		<img src='img/delete.png' style="cursor:pointer;" onclick="delet('<?php echo $delet; ?>')" title='ELIMINAR <?php echo $row['id']; ?>'/> 
		<img onclick="edit('<?php echo $edit; ?>')" style="cursor:pointer;" src='img/edit.png' title='ACTUALIZAR <?php echo $row['id'];?>'/>
<?php
		echo '</td>';
		echo '</tr>';
       
    }
    #cierro la conexion
    $conexion->desconectar($conectar);

 ?>

 </table>
 

 </center>
 
			<!-- Top Navigation -->

				<!-- inicio del circulo -->
			  <button class="cn-button" id="cn-button">Menu</button>
				<div class="cn-wrapper" id="cn-wrapper">
					<ul>
						<li><a href="https://www.google.com.ve"><span>Google</span></a></li>
						<li><a href="https://www.facebook.com/pages/Ministerio-Integral-Sión/1425828550963100?ref=ts&fref=ts"><span>Facebook</span></a></li>
						<li><a href="https://twitter.com/Mi_sion"><span>Twitter</span></a></li>
						<li><a href="http://cristoesvida.com.ve/app/conquistadores/index.php"><span>Conquistador</span></a></li>
						<li><a href="http://cristoesvida.com.ve/app/conquistado/index.php"><span>Conquistado</span></a></li>
						<li><a href="http://cristoesvida.com.ve/app/conquistadores/pdf/reporte.php"><span>PDF 1</span></a></li>
						<li><a href="http://cristoesvida.com.ve/app/conquistado/pdf/reporte.php"><span>PDF 2</span></a></li>
				  </ul>
				
				<!-- fin del circulo -->

			
		</div><!-- /container -->
		<script src="css/polyfills.js"></script>
		<script src="css/demo2.js"></script>
		<!-- For the demo ad only -->   
<script src="/css/demoad.js"></script>
	<ul>
    </ul>
	</body>
    
    
</html>