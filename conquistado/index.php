<?php session_start() ?>
<?php if(isset($_SESSION['name']))
{
}else{ header("Location: index.php");}?>
<?php require_once 'includes/functions.php'; ?>


<html>
  

<head><meta http-equiv="Content-Type" content="text/html; charset=euc-jp">

  
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/bilbo-swash-caps:n4:default;alex-brush:n4:default;aclonica:n4:default;adamina:n4:default.js" type="text/javascript"></script>

<link href="css/component2.css" rel="stylesheet" type="text/css">
<link href="css/demo2.js.css" rel="stylesheet" type="text/css">
<link href="css/jquery.remodal.css" rel="stylesheet" type="text/css">
<link href="css/jquery.remodal.js.css" rel="stylesheet" type="text/css">
<link href="css/modernizr-2.6.2.min.js.css" rel="stylesheet" type="text/css">
<link href="css/polyfills.js.css" rel="stylesheet" type="text/css">



<style type="text/css">
.active2{
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

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
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
	border-bottom: dashed 1px #4F4E4E;
}
.tabla1 tr:hover{
     background: #7290ae;
     color: #fff;
	 border-bottom: dashed 1px #4F4E4E;
}


</style>





<div class="remodal-bg">
    <a href="#modal"><input type="button" class="remodal-confirm" name="Nuevo" value="Nuevo" /></a>  
<p>&nbsp;</p>

    <?php
$mysql=mysql_connect('127.0.0.1','cristoes','5k7YLp3q9i');
mysql_select_db('cristoes_conquistando',$mysql);
$consulta=mysql_query('SELECT count(*) AS cuenta FROM conquistado',$mysql);
$result=mysql_fetch_assoc($consulta);
echo (string) "TOTAL DE REGISTROS: ".$result['cuenta'];
?>

    <div class="remodal" data-remodal-id="modal">
        <h1 style="font-family: adamina; font-style: normal; font-weight: 400; color: #F49F00;">DATOS DEL  CONQUISTADO</h1>
        
        <p>
      <form name="envio" id="envio" method="post" action="index.php">
<table align="center" border=0>
<p>&nbsp;</p>
        <p> 








<tr>
<td>NOMBRES:</td><td><input name="nombres" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Primer/segundo nombre..." type="text"  size="25" maxlength="25"/>
                    <input name="apodo" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Apodo" type="text" size="10" maxlength="10"/> </td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>APELLIDOS:</td>
    <td><input name="apellidos" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Primer/segundo apellido..." type="text" size="40" maxlength="25"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>CEDULA:</td><td>
    <input name="cedula" placeholder="Cedula de identidad.."  onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;"type="text"  size="28" min="7" max="8"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>TELEFONO MOVIL:</td><td>
    <input name="telf_movil" placeholder="0412/0416/0426" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" size="28" maxlength="11"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>TELEFONO LOCAL:</td><td>
    <input name="telf_local" placeholder="0251" type="text" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" size="28" maxlength="11" /></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>CORREO:</td><td>
    <input name="correo" placeholder="@gmail/@hotmail/@outlook" onKeyUp="this.value=this.value.toUpperCase();" type="email" size="40" maxlength="25" /></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>DIRECCION:</td><td>
    <TEXTAREA name="direccion" onKeyUp="this.value=this.value.toUpperCase();"  COLS="40" ROWS="3"   placeholder="Carrera/Calle/Casa"  type="text" ></TEXTAREA></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>RED SOCIAL:</td>
    <td><input name="red_social" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Facebook/Twitter/Instagram" type="text" size="40" maxlength="25"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>FECHA NACIMIENTO:</td><td>
    <input name="fecha_nacimiento" type="date" id="date" size="25"></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>FECHA REGISTRO:</td><td>
    <input name="fecha_registro" type="date" id="date"  value="<?php echo date('Y-m-d'); ?>"  size="25"></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>OCUPACION:</td><td>
    <input name="ocupacion" onKeyUp="this.value=this.value.toUpperCase();" placeholder="Estudiante/Ama de casa" type="text" size="40" maxlength="25"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>Con cuantas personas vive?</td><td>
    <input name="vivecon" placeholder="Ej: 3" onkeypress="if (event.keyCode < 45 || event.keyCode > 57) event.returnValue = false;" type="text" size="40" maxlength="2"/></td>
</tr><tr>
</tr><tr>
</tr><tr>

<td>Asiste a una iglesia?</td><td>
    <input type="radio" name="asiste_a_iglesia" value="SI" CHECKED >SI  
    <input type="radio" name="asiste_a_iglesia" value="NO">NO  </td>
</tr><tr>
</tr><tr>
</tr><tr>

<td><p>Estatus</p></td><td>
					<span></span>
					<select id="status" name="estatus" class="{required:true} span3">
						<option value="Normal">Normal</option>
						<option value="Nuevo Creyente">Nuevo Creyente</option>	        	
					</select>
</tr><tr>
</tr><tr>
</tr><tr>
    
  <td>ID REGISTRADOR :</td><td><input name="idname" value="<?php echo $_SESSION['name']?>" ><tr>

</tr><tr>
</tr><tr>
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
       isset($_POST['apodo']) or 
       isset($_POST['apellidos']) or 
       isset($_POST['cedula']) or 
       isset($_POST['telf_movil']) or 
       isset($_POST['telf_local']) or 
       isset($_POST['correo']) or 
       isset($_POST['direccion']) or
       isset($_POST['red_social']) or
       isset($_POST['fecha_nacimiento']) or
       isset($_POST['fecha_registro']) or
       isset($_POST['ocupacion']) or
       isset($_POST['vivecon']) or
       isset($_POST['asiste_a_iglesia'])or
       isset($_POST['estatus']) or
       isset($_POST['idname'])){
	
		$nombres		 = $_POST['nombres'];
        $apodo		     = $_POST['apodo'];
		$apellidos	     = $_POST['apellidos'];
        $cedula	         = $_POST['cedula'];
		$telf_movil      = $_POST['telf_movil'];
		$telf_local	     = $_POST['telf_local'];
        $correo          = $_POST['correo'];
		$direccion       = $_POST['direccion'];
        $red_social      = $_POST['red_social'];
        $fecha_nacimiento= $_POST['fecha_nacimiento'];
        $fecha_registro  = $_POST['fecha_registro'];
        $ocupacion		 = $_POST['ocupacion'];
        $vivecon		 = $_POST['vivecon'];
        $asiste_a_iglesia= $_POST['asiste_a_iglesia'];
        $estatus         = $_POST['estatus'];
        $idname= $_POST['idname'];
 

	           if($nombres==""){
                    echo '<center><h3><font color="red">* Nombres Vacios</font></h3></center>';  
                }else{
              
        
        #hago el select
		$sql = "insert into conquistado (nombres, apodo, apellidos, cedula, telf_movil, telf_local, correo, direccion, red_social, fecha_nacimiento, fecha_registro, ocupacion, vivecon, asiste_a_iglesia,estatus,idname) values ";
		$sql = $sql."('".$nombres."','".$apodo."','".$apellidos."','".$cedula."','".$telf_movil."','".$telf_local."','".$correo."','".$direccion."','".$red_social."','".$fecha_nacimiento."','".$fecha_registro."','".$ocupacion."','".$vivecon."','".$asiste_a_iglesia."','".$estatus."','".$idname."')";
		#ejecuto mi sentencia sql
		$result= $conexion->sentencias($sql);
		if($result==1){
			echo '<center><h3>Datos Almacenados Correctamente</h3></center>';
		}        
                }	
	}
  ?>
<table align="center" border=0 width="95%" class="tabla1">
<tr>
<th>NOMBRES</th>
<th>APELLIDOS</th>
<th>TELEFONO 1</th>
<th>TELEFONO 2</th>
<th>DIRECCION</th>
<th>FECHA REGISTRO</th>
<th>ESTATUS</th>
<th>ACCIONES</th>
</tr>
<?php	
    #hago el select
    $sql= "select * from conquistado";
    #ejecuto mi sentencia sql
    $result= $conexion->sentencias($sql);
    #recorro los resultados con el while
    while ($row= $conexion->row($result)){
		$edit  = "update.php?id=".$row['id'];
		$delet = "delete.php?Id=".$row['id'];
		echo '<tr>';
		echo '<td>'.$row['nombres'].'</td>';
		echo '<td>'.$row['apellidos'].'</td>';
		echo '<td>'.$row['telf_movil'].'</td>';
        echo '<td>'.$row['telf_local'].'</td>';
        echo '<td>'.$row['direccion'].'</td>';
        echo '<td>'.$row['fecha_registro'].'</td>'; 
        echo '<td>'.$row['estatus'].'</td>';     
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
		</div><!-- /container -->
		<script src="css/polyfills.js"></script>
		<script src="css/demo2.js"></script>
		<!-- For the demo ad only -->   
<script src="/css/demoad.js"></script>
	<ul>
    </ul>
	</body>    
</html>