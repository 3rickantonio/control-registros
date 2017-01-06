<?php session_start() ?>
<?php if(isset($_SESSION['name']))
{
}else{ header("Location: index.php");}?>
<?php require_once 'includes/functions.php'; ?>
<!DOCTYPE html>
<html lang="en">
  <head>

  <link href="conquistado/css/jquery.remodal.css" rel="stylesheet" type="text/css">  
    <link href="css/bootstrap.min.css" rel="stylesheet">

<center>
<img src="img/Logophp.png"/>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema - Bienvenido <?php echo $_SESSION['name'] ?></title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
      .usuariosregistrados{
      	background: #148add;
      	color: #fff;
      	display: block;
      
      	margin: 3px auto;
      	border-radius: 3px;
      	padding: 20px 10px 20px 10px;
      	font-size: 22px;
      }
      img {
	width:100%;
}
    </style>
<style type="text/css">
.alert-danger-alt { border-color: #B63E5A;background: #E26868;color: #fff; }
    </style>



  </head>
  <body>

<div class="container">
	<div class="row">
        <nav clas="navbar navbar-default" role="navigation">  

<a href="conquistado/index.php" class="btn btn-lg btn-success btn-block" >REGISTRO DE CONQUISTADOS:
<?php
$mysql=mysql_connect('127.0.0.1','cristoes','5k7YLp3q9i');
mysql_select_db('cristoes_conquistando',$mysql);
$consulta=mysql_query('SELECT count(*) AS cuenta FROM conquistado',$mysql);
$result=mysql_fetch_assoc($consulta);
echo (string) "".$result['cuenta'];
?> 
</a>  

<a href="conquistadores/index.php" class="btn btn-lg btn-success btn-block" >REGISTRO DE CONQUISTADORES:
<?php
$mysql=mysql_connect('127.0.0.1','cristoes','5k7YLp3q9i');
mysql_select_db('cristoes_conquistando',$mysql);
$consulta=mysql_query('SELECT count(*) AS cuenta FROM conquistador',$mysql);
$result=mysql_fetch_assoc($consulta);
echo (string) "".$result['cuenta'];
?> 
</a>

<a href="conquistado/pdf/reporte.php" class="btn btn-lg btn-info btn-block" >REPORTE CONQUISTADOS:
<?php
$mysql=mysql_connect('localhost','cristoes','5k7YLp3q9i');
mysql_select_db('cristoes_conquistando',$mysql);
$consulta=mysql_query('SELECT count(*) AS cuenta FROM conquistado',$mysql);
$result=mysql_fetch_assoc($consulta);
echo (string) "".$result['cuenta'];
?> 
</a> 


<a href="conquistadores/pdf/reporte.php" class="btn btn-lg btn-info btn-block" >REPORTE CONQUISTADORES:
<?php
$mysql=mysql_connect('localhost','cristoes','5k7YLp3q9i');
mysql_select_db('cristoes_conquistando',$mysql);
$consulta=mysql_query('SELECT count(*) AS cuenta FROM conquistador',$mysql);
$result=mysql_fetch_assoc($consulta);
echo (string) "".$result['cuenta'];
?> 
</a> 
      

<a href="pdf/reporte.php" class="btn btn-lg btn-info btn-block" >REPORTE SOLO CREYENTES:
<?php
$mysql=mysql_connect('localhost','cristoes','5k7YLp3q9i');
mysql_select_db('cristoes_conquistando',$mysql);
$consulta=mysql_query('SELECT count(*) AS cuenta FROM conquistado where estatus="Nuevo Creyente"',$mysql);
$result=mysql_fetch_assoc($consulta);
echo (string) "".$result['cuenta'];
?> </a> 
 

     <a href="planilla.pdf" class="btn btn-lg btn-success btn-block" >DESCARGAR PLANILLA DE REGISTRO</a> 
     
      <a href="correo/adjuntos.html" class="btn btn-lg btn-success btn-block" >SOPORTE DE ERRORES</a> 
      
      
 
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logout.php">Cerrar Sesion [<?php echo $_SESSION['name']; ?>]</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
	</div>
</div>

<div class="container">
 
     
     <h3>Responsables del Sistema</h3>
    <?php __UsuariosRegistrados(); ?>
     </div>
  </div>
 
    <script src="js/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>