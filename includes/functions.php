<?php
require_once 'conexion.class.php';
// Funciones de Transportista (Imprime los transportistas de la base de datos )

Function __UsuariosRegistrados(){
$conexion = Conexion::singleton_conexion();
$sql = 'SELECT * FROM usuarios where valido =1';
$stmt = $conexion->prepare($sql);
$results = $stmt->execute();
$rows = $stmt->fetchAll();
$error = $stmt->errorInfo();
if(empty($rows)) {
		echo "<option>";
			echo "No hay usuarios registrados.";
		echo "</option>";
	}
	else {
		foreach ($rows as $row) {

				echo "<p class='usuariosregistrados'>".$row['name']."</p>";


	}

   }
}

?>