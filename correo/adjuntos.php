<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soporte de cristo es vida</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

  


<link href="css/component2.css" rel="stylesheet" type="text/css">


<center>

<img src="img/Logophp.png" />

 
<div class="component">

<h2 style="font-family: 'Constantia'">Cristo es vida.!</h2>
  <div class="container" style="margin-top:20px;">
	  <div class="row">
	    <div class="col-md-4 col-md-offset-4">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Envio de correo electronico </h3>
        </div>
          <div class="panel-body">
          
          
          
          <?php
    // Comprobar si llegaron los datos requeridos:
    if(  !empty($_POST) && 
		 (isset($_POST['txtNombre']) && !empty($_POST['txtNombre'])) 
		 && (isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo'])) 
		 && (isset($_POST['txtMail']) && !empty($_POST['txtMail']))
	  ){

		// Indicar cabecera con el nombre del remitente. Si no indicamos la dirección de correo puede que 
		// no se realice el envío a a otros servicios como Hotmail o Yahoo
		$cabecera = "<Este mensaje fue enviado desde Cristoesvida.com.ve Dios le bendiga <<MISION>>>\r\n";

		$datos   = "";
		$mensaje = "";

		// Si se seleccionó un archivo, se adjunta:
		if( empty($_FILES['txtFile']['name']) == false ){	
			// Creamos una cadena aleatoria como separador entre cuerpo y archivos adjuntos:
			$separador = md5(uniqid(time()));

			// Comprobamos si el archivo fue subido, y leemos su contenido
		    if(is_uploaded_file($_FILES['txtFile']['tmp_name']))
			{
 				 // Leemos el archivo obteniéndolo como una cadena de texto:
				 $archivo = fopen($_FILES['txtFile']['tmp_name'], "rb");
				 $datos = fread( $archivo, filesize($_FILES['txtFile']['tmp_name']) );
				 fclose($archivo);

				 // Dividimos la cadena de texto en varias partes más pequeñas:
				 $datos = chunk_split( base64_encode($datos) );
			 }
	
			// Creamos la cabecera del mensaje:
			$cabecera .= "MIME-Version: 1.0\r\n".
						 "Content-Type: multipart/mixed; boundary=\"".$separador."\"\r\n\r\n";
		
			// Construimos el cuerpo del mensaje (para el texto):
			$mensaje = "--".$separador."\r\n";
			$mensaje .= "Content-Type:text/plain; charset='iso-8859-1'\r\n";
			$mensaje .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
			
			$mensaje .= "Mensaje de: ".$_POST['txtNombre']."\r\n\r\n";
			$mensaje .= "Correo de: ".$_POST['txtCorreo']."\r\n\r\n";			
			$mensaje .= $_POST['txtMensaje']."\r\n\r\n";
			

			// Continuamos construyendo el cuerpo del mensaje, añadiendo el archivo:
			$mensaje .= "--".$separador."\r\n";
			$mensaje .=	"Content-Type: ".$_FILES['txtFile']['type']."; name='".$_FILES['txtFile']['name']."'\r\n";
			$mensaje .= "Content-Transfer-Encoding: base64\r\n";
			$mensaje .= "Content-Disposition: attachment; filename='".$_FILES['txtFile']['name']."'\r\n\r\n";
			$mensaje .= $datos."\r\n\r\n";

            /*
                Si se fuera a insertar otro archivo, tras haber leído el contenido del mismo y haberlo cargado en otra
                variable, repetiríamos aquí las cinco líneas anteriores (cambiando el nombre del componente del formulario
                en $_FILES)
            */
			
            // Separador de final del mensaje
            $mensaje .= "--".$separador."--";

		}
		else
		{

			// No se adjuntó ningún archivo, enviamos sólo el texto del mensaje:

			$mensaje = "Mensaje de: ".$_POST['txtNombre'].PHP_EOL;
			$mensaje .= "Correo: ".$_POST['txtCorreo'].PHP_EOL.PHP_EOL;
			$mensaje .= $_POST['txtMensaje'];
		}

		// IMPORTANTE: debes sustituir la dirección de correo por aquella en que deseas recibir el EMail:
		$ok = mail( trim($_POST['txtMail']), "Soporte de Cristoesvida.com.ve", $mensaje, $cabecera );

		if( $ok == true )
			echo "<p>El E-Mail ha sido enviado</p>";
		else
			echo "<p>ERROR al enviar el E-Mail</p>";

		echo "<p>Haz <a href='adjuntos.html'>click para volver al formulario</a></p>";

	}
	else
	{

		$html  = "<html>";
		$html .= "<head>";

		// Después de cuatro segundos de mostrarse esta página web de error se redirigiría a la URL especificada.
		$html .= "<meta http-equiv='refresh' content='4;url=adjuntos.html'>";

		$html .= "</head>";
		$html .= "<body>";
		$html .= "No han llegado todos los datos. En unos segundos será redirigido a la página principal.";
		$html .= "</body>";
		$html .= "</html>";

		echo $html;

	}

?>

 </div>
      </div>
    </div>
  </div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>